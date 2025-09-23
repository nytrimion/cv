<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    require 'templates/form.php';
    exit();
}

$languages = [
    'en' => 'English',
    'fr' => 'French',
];

function sanitizeInput(string $name, string $default = ''): string
{
    $input = filter_input(INPUT_POST, $name) ?: $default;

    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

$lang = sanitizeInput('lang', 'fr');
$title = sanitizeInput('title');
$customTitle = sanitizeInput('custom-title');

if (!in_array($lang, array_keys($languages))) {
    $lang = 'fr';
}

if (!empty($customTitle)) {
    $title = $customTitle;
}

require "templates/cv-$lang.php";
