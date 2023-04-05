<?php
// Configuration
$throttleLimit = $throttleLimit ?: 2; // Maximum number of requests per second
$throttleTime = $throttleTime ?: 1; // Throttling period in seconds
$referrers = $referrers ?: array( // List of referrers to throttle
'https://google.com',
'https://github.com'
);

?>
