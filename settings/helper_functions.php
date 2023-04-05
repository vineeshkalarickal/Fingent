<?php

function getFromStorage($key)
{
    if (file_exists($key)) {
        return file_get_contents($key);
    }
    return null;
}

function saveToStorage($key, $value)
{
    return file_put_contents($key, $value) !== false;
}

function serveResource()
{
    $resource = getFromStorage('resource.txt');
    if ($resource !== null) {
        echo $resource;
    } else {
        echo 'Resource not found';
    }
}
