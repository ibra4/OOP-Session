<?php

namespace Core\Files;

class JsonManager
{
    private $file;
    
    public function __construct($fileName)
    {
        if (file_exists(ROOT . '/' . $fileName)) {
            $file = file_get_contents(ROOT . '/' . $fileName);
            $this->file = \json_decode($file, true);
        } else {
            throw new \Exception('File Not Found : ' . ROOT . $fileName);
        }
    }

    public function exists($index, $val) {
        if (in_array($val, $this->file[$index])) {
            return true;
        }
        return false;
    }
}
