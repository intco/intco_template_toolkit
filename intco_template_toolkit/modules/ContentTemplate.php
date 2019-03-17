<?php

/*
 * This file is part of intco Template Toolkit for Contao CMS.
 *
 * (c) Angelo Galleja (http://www.intco.it)
 *
 * @license MIT
 */

namespace intco\TT;

class ContentTemplate extends \ModuleHtml {
    
	
	public function generate() {
		if (TL_MODE == 'BE') {
			$template_name = $this->itt_cetemplate_tmpl;
			$strOutput = parent::generate();
			
			return "<h1>Content template: ".$template_name."</h1>".$strOutput;
		}
		
		return parent::generate();
	}
	
	
    protected function compile() {

        $tmpl = $this->itt_cetemplate_tmpl;

        if (empty($tmpl)) {
            return '<!-- invalid template specified --> ';
        }
        
        if ($tmpl != basename($tmpl)) {
            return '<!-- invalid template specified - basename check failed --> ';
        }

        ob_start();
        include TL_ROOT.'/templates/'.$tmpl;
        $strOutput = ob_get_clean();
		$this->html = $strOutput;
		return parent::compile();
		//
		//if (TL_MODE == 'BE') {
		//	$this->Template->html = '<strong>Content Template: '.$tmpl.'</strong><br />'.htmlspecialchars($strOutput);
		//}
    }
}