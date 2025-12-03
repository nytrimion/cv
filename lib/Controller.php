<?php

declare(strict_types=1);

namespace lib;

final class Controller
{
    private array $languages = [
        'en' => 'English',
        'fr' => 'French',
    ];

    public function handle(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            require 'templates/form.php';

            return;
        }

        $lang = $this->sanitizeInput('lang', 'fr');
        $title = $this->sanitizeInput('title');
        $customTitle = $this->sanitizeInput('custom-title');

        if (!in_array($lang, array_keys($this->languages))) {
            $lang = 'fr';
        }

        if (!empty($customTitle)) {
            $title = $customTitle;
        }

        $contact = new Contact($lang);

        require "templates/cv-$lang.php";
    }

    private function sanitizeInput(string $name, string $default = ''): string
    {
        $input = filter_input(INPUT_POST, $name) ?: $default;

        return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
    }
}
