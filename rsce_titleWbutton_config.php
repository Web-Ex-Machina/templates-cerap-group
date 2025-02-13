<?php

declare(strict_types=1);

/**
 * SMARTGEAR for Contao Open Source CMS
 * Copyright (c) 2015-2022 Web ex Machina
 *
 * @category ContaoBundle
 * @package  Web-Ex-Machina/contao-smartgear
 * @author   Web ex Machina <contact@webexmachina.fr>
 * @link     https://github.com/Web-Ex-Machina/contao-smartgear/
 */

return [
    'label' => ['Titre avec bouton'], 
    'contentCategory' => 'miscellaneous', 
    'standardFields' => ['cssID'], 'fields' => [
        'headline' => [
            'inputType' => 'standardField',
        ],
        // Link
        'link_legend' => [
            'label' => [&$GLOBALS['TL_LANG']['tl_content']['link_legend']],
            'inputType' => 'group',
        ],
        'link_href' => [
            'label' => &$GLOBALS['TL_LANG']['MSC']['url'], 'inputType' => 'text', 'eval' => ['rgxp' => 'url', 'tl_class' => 'w50 wizard'], 'wizard' => [['tl_content', 'pagePicker']],
        ],
        'link_text' => [
            'label' => &$GLOBALS['TL_LANG']['tl_content']['linkTitle'], 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'],
        ],
        'link_title' => [
            'label' => &$GLOBALS['TL_LANG']['tl_content']['titleText'], 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'],
        ],
        'link_classes' => [
            'label' => &$GLOBALS['TL_LANG']['tl_content']['link_css'], 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'],
        ],
        'link_target' => [
            'label' => &$GLOBALS['TL_LANG']['MSC']['target'], 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'],
        ],
    ],
];
