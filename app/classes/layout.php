<?php

namespace app\classes;

class layout
{
    private $view;


    public function add($view) {
        $this->view = $view;
    }

    public function load()
    {
        require "../app/view/{$this->view}.php";
    }
}