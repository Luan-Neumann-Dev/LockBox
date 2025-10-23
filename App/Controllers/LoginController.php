<?php

namespace App\Controllers;

class LoginController {

    public function index() {
        view('login');
    }

    public function login() {
        echo 'Login Controller Login';
    }

}