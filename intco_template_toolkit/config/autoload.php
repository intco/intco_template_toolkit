<?php

/*
 * This file is part of intco Template Toolkit for Contao CMS.
 *
 * (c) Angelo Galleja (http://www.intco.it)
 *
 * @license MIT
 */


// namespace
ClassLoader::addNamespace('intco\TT');

// classes
ClassLoader::addClass('intco\TT\ContentTemplate', 'system/modules/intco_template_toolkit/modules/ContentTemplate.php');
ClassLoader::addClass('intco\TT\DataBuilder', 'system/modules/intco_template_toolkit/classes/DataBuilder.php');
ClassLoader::addClass('intco\TT\ArrayData', 'system/modules/intco_template_toolkit/classes/ArrayData.php');
ClassLoader::addClass('intco\TT\DcaHelper', 'system/modules/intco_template_toolkit/classes/DcaHelper.php');

// files
TemplateLoader::addFile('itt_cetemplate', 'system/modules/intco_template_toolkit/templates');
TemplateLoader::addFile('itt_databuilder_code', 'system/modules/intco_template_toolkit/templates');
TemplateLoader::addFile('itt_databuilder_window', 'system/modules/intco_template_toolkit/templates');

