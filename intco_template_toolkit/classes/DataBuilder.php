<?php

/*
 * This file is part of intco Template Toolkit for Contao CMS.
 *
 * (c) Angelo Galleja (http://www.intco.it)
 *
 * @license MIT
 */

namespace intco\TT;

class DataBuilder extends \BackendModule {
    
    protected $strTemplate = 'itt_databuilder_window';

    public function compile() {
        
        $table = \Contao\Input::get('table');
        $id    = \Contao\Input::get('id');
        
        if ($table != 'tl_content' && $table != 'tl_module') {
            $this->log('Invalid table specified for data builder',  __CLASS__." :: ".__FUNCTION__, TL_ERROR);
            $this->redirect('contao/main.php?act=error');
        }

        \Contao\Controller::loadLanguageFile('itt_databuilder');

        \Contao\Controller::loadLanguageFile($table);
        \Contao\Controller::loadDataContainer($table);
        $GLOBALS['TL_DCA'][$table]['config']['onload_callback'] = [];
        
        $strModel = \Contao\Model::getClassFromTable($table);
        $model    = $strModel::findOneById($id);

        $findFnc = ($table == 'tl_content') ? 'findContentElement' : 'findFrontendModule';
        
        $tpl = new \Contao\BackendTemplate('itt_databuilder_code');
        
        $tpl->model = $model;
        
        $objDc = new \Contao\DC_Table($table);
        
        $tpl->palette = $objDc->getPalette();
        $tpl->table   = $table;
        
        $className = $this->$findFnc($model->type);
        
        if (empty($className)) {
            $this->log('No class name found for '.$table.' '.$tpl->arrData['type'],  __CLASS__." :: ".__FUNCTION__, TL_ERROR);
            $this->redirect('contao/main.php?act=error');
        }
        
        $tpl->className = $className;
        $code = $tpl->parse();
        $this->Template->code = $code;
    }
    
}