<?php

declare(strict_types=1);

namespace lib;

final class Controller
{
    private array $languages = [
        'en' => 'English',
        'fr' => 'French',
    ];

    private array $positions;

    public function __construct()
    {
        $this->positions = require dirname(__DIR__).'/config/positions.php';
    }

    public function handle(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $positions = $this->positions;
            require 'templates/form.php';

            return;
        }

        $lang = $this->sanitizeInput('lang', 'fr');
        $position = $this->sanitizeInput('position');
        $title = $this->sanitizeInput('title');
        $customTitle = $this->sanitizeInput('custom-title');

        if (!in_array($lang, array_keys($this->languages))) {
            $lang = 'fr';
        }

        if (!array_key_exists($position, $this->positions)) {
            $position = array_key_first($this->positions);
        }

        if (!empty($customTitle)) {
            $title = $customTitle;
        }

        $template = new Template($position, [
            'lang' => $lang,
            'title' => $title,
            'contact' => new Contact($lang),
        ]);
        $template->render("cv-$lang");
    }

    private function sanitizeInput(string $name, string $default = ''): string
    {
        $input = filter_input(INPUT_POST, $name) ?: $default;

        return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
    }
}
