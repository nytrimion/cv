<?php

declare(strict_types=1);

namespace lib;

final readonly class Contact
{
    public const array INFOS = [
        'email' => 'oury.david@gmail.com',
        'phone' => '+33689461559',
        'phone_display' => [
            'fr' => '06 89 46 15 59',
            'en' => '+33 6 89 46 15 59',
        ],
        'location' => [
            'fr' => 'Marseille 13006',
            'en' => 'France, Marseille 13006',
        ],
        'language' => [
            'fr' => 'Anglais bilingue',
            'en' => 'Fluent English',
        ],
        'github' => [
            'url' => 'https://github.com/nytrimion?tab=repositories',
            'display' => 'github.com/nytrimion',
        ]
    ];

    private TranslatableInfos $infos;

    public function __construct(string $lang) {
        $this->infos = new TranslatableInfos($lang, self::INFOS);
    }

    public function __get(string $name): mixed
    {
        return $this->infos->$name;
    }
}
