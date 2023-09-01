<?php

namespace App\Utils;

class FlashMessageHelper
{
    public static function swal($message)
    {
        session()->flash('alert', "swal");
        session()->flash('alert-icon', isset($message['icon']) ? $message['icon'] : '');
        session()->flash('alert-title',  isset($message['title']) ? $message['title'] : '');
        session()->flash('alert-text',  isset($message['text']) ? $message['text'] : '');
    }
}
