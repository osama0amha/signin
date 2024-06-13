<?php

namespace src;

class Form
{
    public function Start($action ,$method)
    {
//        $formStart = '<form action=' . $action . '  method=' . $method . '>';
        $formStart = sprintf("<form action= '%s' method= '%s'>",$action,$method);
        echo $formStart;
    }

    public function type($attrition)
    {
        $input = sprintf("<input type='%s'>",$attrition);
        echo $input;

    }

    public  function submit($name)
    {
        $input = sprintf("<input type='submit' value = '%s'>",$name);
        echo $input;
    }
    public function end()
    {
        echo '</form>';
    }
}