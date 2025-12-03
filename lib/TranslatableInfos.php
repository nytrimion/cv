<?php

declare(strict_types=1);

namespace lib;

final readonly class TranslatableInfos
{
    public function __construct(
        private string $lang,
        private array $infos = [],
    ) {
    }

    public function __get(string $name): mixed
    {
        if (!array_key_exists($name, $this->infos)) {
            return '';
        }

        return $this->infos[$name][$this->lang]
            ?? $this->infos[$name];
    }
}
