<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package    _ModuleTemplate
 * @copyright  DevPoint | Wilfried Reiter 2013
 * @author     DevPoint | Wilfried Reiter <wilfried.reiter@devpoint.at>
 * @link       http://contao.org
 * @license    MIT
 */


/**
 * Hooks
 */

 
/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD']['miscellaneous'], 0, array
(
    'image_spis' => 'ModuleImageSPIS',
    'bgimage_spis' => 'ModuleBGImageSPIS'
));

