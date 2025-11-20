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
        $file = "C:/Windows/Temp/{$this->cache_file}";
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

// Création d'un objet de type info
$info_object = new info();
$info_object->age = 25;
$info_object->name = 'Ali';

// Sérialisation de l'objet
$serialized_string = serialize($info_object);

echo $serialized_string;
?>