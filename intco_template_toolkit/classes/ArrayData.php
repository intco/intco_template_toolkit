<?php

/*
 * This file is part of intco Template Toolkit for Contao CMS.
 *
 * (c) Angelo Galleja (http://www.intco.it)
 *
 * @license MIT
 */

namespace intco\TT;

class ArrayData extends \Contao\Model {
    
    protected static $strTable;
    protected $arrData;
    
    public function __construct($arrData, $strTable='tl_module') {
        $this->arrData = $arrData;
		self::$strTable = $strTable;
		parent::__construct();
    }
    
    public function row() {
        return $this->arrData;
    }
    
    public function __get($name) {
        
        if (empty($this->arrData[$name])) {
            return null;
        }
        
        return $this->arrData[$name];
    }
}
