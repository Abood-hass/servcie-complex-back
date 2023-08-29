<?php

namespace App\Traits;

trait Trans
{
    function getNameAttribute($name)
    {
        if($name){
            return json_decode($name,true)[app()->currentLocale()];
        }

        return $name;
    }

    function getIconAttribute($icon)
    {
        if ($icon) {
            return str_replace("fa-solid", 'fas', $icon);
        }

        return $icon;
    }
}
