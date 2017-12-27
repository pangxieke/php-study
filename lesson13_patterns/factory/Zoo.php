<?php
class Zoo
{
    public static function produce($type)
    {
        switch($type)
        {
            case 'pig':
                return new Pig();
                break;
            case 'chicken':
                return new Chicken();
                break;
            default:
                break;
        }
    }

}