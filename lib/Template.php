<?php

declare(strict_types=1);

namespace lib;

final readonly class Template
{
    private string $basePath;

    public function __construct(
        private string $position,
        private array $vars = [],
    ) {
        $this->basePath = dirname(__DIR__).'/templates';
    }

    public function render(string $path): void
    {
        $vars = $this->vars;
        extract($vars, EXTR_SKIP);

        require $this->resolvePath($path);
    }

    private function resolvePath(string $path): string
    {
        $positioned = "{$this->basePath}/positions/{$this->position}/$path.php";
        $fallback = "{$this->basePath}/$path.php";

        return is_file($positioned) ? $positioned : $fallback;
    }
}
