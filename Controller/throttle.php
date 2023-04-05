<?php
require_once("../settings/config.php");
// Get form data
// Get form data
$throttleLimit = filter_input(INPUT_POST, 'throttleLimit', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1,
'max_range' => 10]]) ?? 2;
$throttleTime = filter_input(INPUT_POST, 'throttleTime', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1,
'max_range' => 60]]) ?? 1;
$referrers = array_map('trim', explode(',', htmlspecialchars($_POST['referrers']))) ?? [];


// Get the referrer from the request headers
$referrer = $_SERVER['HTTP_REFERER'];

// Check if the referrer is in the list of referrers to throttle
if (in_array($referrer, $referrers)) {
    $now = round(microtime(true) * 1000);
    $requestCount = getFromStorage($referrer);

    // If there is no previous count, set it to 0
    if (!$requestCount) {
        $requestCount = 0;
    }

    // Calculate the time since the last request
    $timeSinceLastRequest = $now - $requestCount['time'];

    if ($timeSinceLastRequest >= ($throttleTime * 1000)) {
        $requestCount['count'] = 1;
    }
    else {
        $requestCount['count']++;
    }

    // If the count exceeds the throttle limit, return an error message
    if ($requestCount['count'] > $throttleLimit) {
        http_response_code(429); // Too Many Requests
        exit('API throttled for this referrer');
    }

    // Save the new request count to storage
    $requestCount['time'] = $now;
    saveToStorage($referrer, $requestCount);

}

// Serve the requested resource
serveResource();

require_once("../settings/helper_functions.php");

?>
