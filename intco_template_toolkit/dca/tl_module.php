<?php

/*
 * This file is part of intco Template Toolkit for Contao CMS.
 *
 * (c) Angelo Galleja (http://www.intco.it)
 *
 * @license MIT
 */

$GLOBALS['TL_DCA']['tl_module']['palettes']['itt_cetemplate'] = '{title_legend},name,type;itt_cetemplate_tmpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['fields']['itt_cetemplate_tmpl'] = [
            'label'                   => &$GLOBALS['TL_LANG']['tl_module']['itt_cetemplate_tmpl'],
            'exclude'                 => true,
            'inputType'               => 'select',
            'options_callback' => ['tl_module_itt_cetemplate_tmpl', 'getTemplates'], //  Callback function
			'eval'                    => ['chosen'=>true],
            'sql'                     => "varchar(255) NOT NULL default ''",
        ];
/*=intco.contaodev.femodule.stop~eyJjbGFzc25hbWUiOiAiQ29udGVudFRlbXBsYXRlIiwgIm1vZHVsZWdyb3VwIjogImludGNvX3RlbXBsYXRlX3Rvb2xraXQiLCAibW9kdWxlbmFtZSI6ICJpdHRfY2V0ZW1wbGF0ZSIsICJuYW1lc3BhY2UiOiAiaW50Y29fdGVtcGxhdGVfdG9vbGtpdCJ9~stop=*/


class tl_module_itt_cetemplate_tmpl extends \Backend {

    public function __construct() {
        parent::__construct();
    }
    
    public function getTemplates() {
        
        $dir = TL_ROOT.'/templates';
        
        $arrTemplates = scandir($dir);
        
        $arrOptions = [];
        
        $arrValidTypes = ['html5'];
        
        foreach ($arrTemplates as $template) {
            $type = pathinfo($template, PATHINFO_EXTENSION);
            //echo $type, "\n";
            if (in_array($type, $arrValidTypes)) {
                $arrOptions[$template] = $template;
            }
        }

        return $arrOptions;
    }
}




