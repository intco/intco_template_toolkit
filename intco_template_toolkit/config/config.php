<?php

/*
 * This file is part of intco Template Toolkit for Contao CMS.
 *
 * (c) Angelo Galleja (http://www.intco.it)
 *
 * @license MIT
 */

// frontend module
$GLOBALS['FE_MOD']['intco_template_toolkit']['itt_cetemplate'] = 'intco\TT\ContentTemplate';

// backend endpoints
$GLOBALS['BE_MOD']['content']['article']['intco.tt.build'] = ['\intco\TT\DataBuilder', 'generate'];
$GLOBALS['BE_MOD']['design']['themes']['intco.tt.build']   = ['\intco\TT\DataBuilder', 'generate'];

// hook
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = ['\intco\TT\DcaHelper', 'loadDataContainerHook'];