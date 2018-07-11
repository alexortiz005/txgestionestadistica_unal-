<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "gestionestadistica_unal"
 *
 * Auto generated by Extension Builder 2018-07-10
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Gestión Estadística UN',
    'description' => 'Extension que permite la adminsitración y publicación de temas de gestión estadística para la universidad nacional de colombia',
    'category' => 'plugin',
    'author' => 'Alex Ortiz',
    'author_email' => 'eaortiz@unal.edu.co',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '1',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.6.0-8.7.99',            
            'rte_ckeditor_image' => '8.7.0-8.7.99',            
            'rte_ckeditor' => '8.7.0-8.7.99',            
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
