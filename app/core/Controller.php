<?php

class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . 'Model.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}