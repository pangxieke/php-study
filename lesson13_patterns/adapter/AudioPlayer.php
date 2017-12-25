<?php
class AudioPlayer{

    public function play($file, $type)
    {
        $obj = new Adapter($type);
        $obj->play($file);
    }
}