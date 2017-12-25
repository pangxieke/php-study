<?php

/**
 * 适配器
 * Class Adapter
 */
class Adapter{

    private $type;

    public function __construct($type)
    {
        switch ($type){
            case 'mp3':
                break;
            case 'mp4':
                break;
        }
        $this->type = $type;
    }

    public function play($file)
    {
        switch ($this->type){
            case 'mp3':
                (new AudioMp3Player())->play($file);
                break;
            case 'mp4':
                (new AudioMp4Player())->play($file);
                break;
        }
    }
}