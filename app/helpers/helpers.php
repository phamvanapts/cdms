<?php
// This file contains utility functions used throughout the application.

function redirect($url) {
    header("Location: $url");
    exit();
}

function flash($message) {
    $_SESSION['flash_message'] = $message;
}

function old($key, $default = '') {
    return isset($_SESSION['old'][$key]) ? $_SESSION['old'][$key] : $default;
}

function csrf_token() {
    return $_SESSION['csrf_token'] ?? '';
}

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function sanitize($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}
?>