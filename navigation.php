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
        'url' => 'docs/extrafield-and-extrafieldgroup',
        'children' => [
            'Come Creare Dati' => 'docs/create',
            'Come Verificare un dato' => 'docs/data/how-verify-data',
            'Gestire cardinality, can_verified, mandatory, verified_by' => 'docs/data/attribute-management',
        ],
    ],
    'I Traits' => [
        'children' => [
            'HasExtraFieldGroups' => 'docs/traits/has-extra-field-groups',
        ],
    ],
    'Componenti Livewire' => [
        'children' => [
            'ExtraFieldGroups\By\Category.php' => 'docs/livewire/extrafieldgroups-by-category',
        ],
    ],
];
