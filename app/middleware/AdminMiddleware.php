<?php

class AdminMiddleware {
    public function handle($request, $next) {
        // Check if the user is authenticated and has admin privileges
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            // Redirect to login or error page
            header('Location: /auth/login.php');
            exit();
        }

        return $next($request);
    }
}