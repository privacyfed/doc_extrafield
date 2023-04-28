<?php

declare(strict_types=1);

return [
    // 'Getting Started' => [
    //     'url' => 'docs/getting-started',
    //     'children' => [
    //         'Customizing Your Site' => 'docs/customizing-your-site',
    //         'Navigation' => 'docs/navigation',
    //         'Algolia DocSearch' => 'docs/algolia-docsearch',
    //         'Custom 404 Page' => 'docs/custom-404-page',
    //     ],
    // ],
    // 'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
    'Dati Composti e Semplici' => [
        'url' => 'docs/extra-field',
    ],
    'I Traits' => [
        'children' => [
            'HasExtraFieldGroups' => 'docs/traits/has-extra-field-groups',
        ],
    ],
    'Componenti Livewire' => [
        'children' => [
            'ExtraFieldGroups\By\Category' => 'docs/livewire/has-extra-field-groups',
        ],
    ],
];
