<?php

//#######################################################################
// Extension Manager/Repository config file for ext "geocoding".
//
// Auto generated 27-09-2012 15:06
//
// Manual updates:
// Only the data in the array - everything else is removed by next
// writing. "version" and "dependencies" must not be touched!
//#######################################################################

/** @noinspection PhpUndefinedVariableInspection */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Service: Geocoding via Google Maps',
    'description' => 'Provides services for google maps GeoCoding API and radius search on the database.',
    'category' => 'sv',
    'author' => 'Benjamin Mack',
    'author_email' => 'benjamin.mack@b13.de',
    'author_company' => 'b:dreizehn GmbH',
    'shy' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.9.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
