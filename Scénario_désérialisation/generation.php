<?php
class File
{
    public $cache_file;
}

$file_object = new File();
$file_object->cache_file = 'index1.html';

echo serialize($file_object);
?>