<?php
session_start();

class P49_SetLanguagePreference {
    private array $allowedLanguages = ['en', 'es', 'fr', 'de'];

    public function main(): void {
        // Write your code here
    if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $allowedLanguages = ['en', 'es', 'fr', 'de', 'it'];

        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];

            if (in_array($lang, $allowedLanguages)) {
                $_SESSION['lang'] = $lang;
            } else {
                $_SESSION['lang'] = 'en';
            }
        } elseif (!isset($_SESSION['lang'])) {
            $_SESSION['lang'] = 'en';
        }
        echo "Language set to " . $_SESSION['lang'];    
    }
}
