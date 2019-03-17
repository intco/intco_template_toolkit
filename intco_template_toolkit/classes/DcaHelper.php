<?php

/*
 * This file is part of intco Template Toolkit for Contao CMS.
 *
 * (c) Angelo Galleja (http://www.intco.it)
 *
 * @license MIT
 */

namespace intco\TT;

class DcaHelper extends \Contao\Backend {

    public function __construct() {
        parent::__construct();
        $this->import('BackendUser', 'User');
    }
    

    public function loadDataContainerHook($strDca) {

        if (!$this->User->isAdmin || TL_MODE == 'FE' || \Contao\Config::get('enable_itt') != '1') {
            return;
        }

        if ($strDca != 'tl_content' && $strDca != 'tl_module') {
            return;
        }

        $GLOBALS['TL_DCA'][$strDca]['list']['operations']['intco.tt.build'] = [
            #
            'label' => ['[B]', 'Export as php code'], //string
            # ::. Button label. Typically a reference to the global language array.
            'href' => 'key=intco.tt.build', //string
            'icon' => 'cssimport.gif'
            //'button_callback' => array(static::class, 'itt_button_callback')
        ];
                
    }

    /**
     * button_callback for operation
     *
     * this callback is normally called when generating "command icon" (like edit) next
     * to each row and is usually used for creating custom icons
     *
     * @param array $row an associative array containing the current record
     * @param string $href the option of the relative 'operations' entry
     * @param string $label the option of the relative 'operations' entry
     * @param string $title the option of the relative 'operations' entry
     * @param string $icon  the option of the relative 'operations' entry
     * @param string $attributes the option of the relative 'operations' entry
     *
     * @see http://www.typolight.org/reference.html#operations
     *
     */

    public function itt_button_callback($row, $href, $label, $title, $icon, $attributes) {
        
        $href .= '&id='.$row['id'];
        return '<a href="'.$this->addToUrl($href).'"'
              .' title="'.specialchars($title).'"'.$attributes.'>'.$label.'</a> ';
    }
}