<?php
/**
 * check_role plugin
 *
 * @copyright   Copyright &copy; 2006-2008, Katsumi Saito <katsumi@jo1upk.ymt.prug.or.jp>
 * @version     $Id: check_role.inc.php,v 0.5 2008/01/05 20:56:00 upk Exp $
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License (GPL2)
 *
 */
require("func.php");
function plugin_check_role_convert()
{
   $args     = func_get_args();
   $page     = $args[0];   
   check_editable($page);
}
