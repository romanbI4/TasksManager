<?php

namespace App\core;

class View
{

    static function generate($template_view, $data = null)
    {
        if(!empty($data) && is_array($data)) {
            extract($data);
        }
        include 'application/views/' . $template_view;
    }
}
