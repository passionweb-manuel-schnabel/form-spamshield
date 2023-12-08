<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form Spamshield',
    'description' => 'Based on wsm/form-spamshield. Protects forms of EXT:form from spam by using an alternative solution to captchas.',
    'category' => 'be',
    'author' => 'Manuel Schnabel',
    'author_email' => 'service@passionweb.de',
    'author_company' => 'PassionWeb Manuel Schnabel',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
            'wsm_form_spamshield' => '1.0.0-1.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
