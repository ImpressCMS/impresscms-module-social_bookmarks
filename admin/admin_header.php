<?php
/**
* $Id: admin_header.php 68 2008-02-09 17:10:51Z xoops-magazine $
* Module: social-bookmarks
* Author: Rene Sato <www.impresscms.de>
* Licence: GNU
*/
include("../../../mainfile.php");
require_once XOOPS_ROOT_PATH.'/kernel/module.php';
include(XOOPS_ROOT_PATH."/include/cp_functions.php");
if ( $xoopsUser ) {
	$xoopsModule = XoopsModule::getByDirname("social_bookmarks");
	if ( !$xoopsUser->isAdmin($xoopsModule->mid()) ) { 
		redirect_header(XOOPS_URL."/",3,_NOPERM);
		exit();
	}
} else {
	redirect_header(XOOPS_URL."/",3,_NOPERM);
	exit();
}
if ( is_readable("../language/".$xoopsConfig['language']."/admin.php") ) {
	include("../language/".$xoopsConfig['language']."/admin.php");
} else {
	include("../language/english/admin.php");
}
if ( is_readable("../language/".$xoopsConfig['language']."/modinfo.php") ) {
	include("../language/".$xoopsConfig['language']."/modinfo.php");
} else {
	include("../language/english/modinfo.php");
}
?>