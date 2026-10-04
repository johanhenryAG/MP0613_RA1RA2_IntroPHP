<?php
session_start();

class P48_UserLogin {
    public function main(): void {
        // Write your code here
    if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username === 'admin' && $password === 'secret') {
            $_SESSION['loggedin'] = true;
            echo "Welcome, admin";
        } else {
            $_SESSION['loggedin'] = false;
            echo "Invalid credentials";
        }   
    }
}
