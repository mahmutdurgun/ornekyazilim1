<?php
session_start();

function getLanguage() {
    $lang = 'tr'; // Default language

    if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];
        $_SESSION['lang'] = $lang;
    } elseif (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    }

    // Validate language
    if (!in_array($lang, ['tr', 'en'])) {
        $lang = 'tr';
    }

    return $lang;
}

$current_lang = getLanguage();
$trans = require __DIR__ . "/../lang/{$current_lang}.php";

function t($key) {
    global $trans;
    return isset($trans[$key]) ? $trans[$key] : $key;
}
