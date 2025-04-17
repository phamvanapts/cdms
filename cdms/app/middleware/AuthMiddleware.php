<?php

class AuthMiddleware {
    public function handle($request, $next) {
        // Check if the user is authenticated
        if (!isset($_SESSION['user_id'])) {
            // Redirect to login page if not authenticated
            header('Location: /auth/login');
            exit();
        }

        // Proceed to the next middleware or controller
        return $next($request);
    }
}