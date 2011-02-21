<?php
/**
 * @version		$Id: default.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Administrator
 * @subpackage	mod_quickicon
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$buttons = QuickIconHelper::getButtons();
?>
<div id="cpanel">
<?php
foreach ($buttons as $button):
	echo QuickIconHelper::button($button);
endforeach;
?>
</div>