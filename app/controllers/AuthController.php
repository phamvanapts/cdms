<?php

class AuthController extends BaseController
{
    public function login()
    {
        // Logic for handling user login
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validate input and authenticate user
        }
        // Load the login view
        require_once '../app/views/auth/login.php';
    }

    public function logout()
    {
        // Logic for handling user logout
        // Clear session and redirect to login
        session_start();
        session_destroy();
        header('Location: /login');
    }

    public function register()
    {
        // Logic for handling user registration
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validate input and create a new user
        }
        // Load the registration view
        require_once '../app/views/auth/register.php';
    }
}