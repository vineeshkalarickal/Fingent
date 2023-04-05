<?php
class HelperFunctions
{

    public function getFromStorage($key)
    {
        if (file_exists($key)) {
            $fileCont = file_get_contents($key);
            return $fileCont;
        } else {
            echo "file path error";
            return;
        }

        return null;
    }

    public function saveToStorage($key, $value)
    {
        return file_put_contents($key, $value) !== false;
    }

    public function serveResource()
    {
        $resource = $this->getFromStorage('resources.json');
        if ($resource !== null) {
            echo $resource;
        } else {
            echo 'Resource not found';
        }
    }
}
