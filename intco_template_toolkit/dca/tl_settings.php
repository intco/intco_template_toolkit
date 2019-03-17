<?php

/*
 * This file is part of intco Template Toolkit for Contao CMS.
 *
 * (c) Angelo Galleja (http://www.intco.it)
 *
 * @license MIT
 */
    
$GLOBALS['TL_DCA']['tl_settings']['fields']['enable_itt'] = [
      'label'                   => $GLOBALS['TL_LANG']['tl_settings']['enable_itt'],
      'exclude'                 => true,
      'inputType'               => 'checkbox',
      'eval' => ['tl_class' => 'm12']
];


# palettes section

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = $GLOBALS['TL_DCA']['tl_settings']['palettes']['default'].';{itt_settings},enable_itt';



