<?php

class Login extends Controller
{
    public function index()
    {
       $this->model('Login');

       $this->view('login/index');
    }
}