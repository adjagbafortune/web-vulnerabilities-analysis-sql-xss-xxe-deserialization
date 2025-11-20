<?php
class File
{
    public $cache_file;
    public function toString()
    {
        return 'Welcome ';
    }
    function __destruct()
    {
        $file = "{$this->cache_file}";
        if (file_exists($file))
        {
            @unlink($file); // Ecraser le fichier
        }
    }
}
class info
{
    public $age=0;
    public $name='';
    public function toString()
    {
        return 'Welcome '.$this->name.' your age is '.$this->age.' years old. <BR>';
    }
}
$o=unserialize($_GET['u']);
?>