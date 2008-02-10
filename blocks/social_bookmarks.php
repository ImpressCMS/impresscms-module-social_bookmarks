<?php
/**
* $Id: social_bookmarks.php 68 2008-02-09 17:10:51Z xoops-magazine $
* Module: social-bookmarks
* Author: Rene Sato <www.impresscms.de>
* Licence: GNU
*/

function show_bookmarks(){

$module_handler =& xoops_gethandler('module');
$dirname = basename(dirname(dirname(__FILE__)));
$modsb =& $module_handler->getByDirname($dirname);
$config_handler =& xoops_gethandler('config');
$sbconfig =& $config_handler->getConfigsByCat(0,$modsb->getVar('mid'));
unset($module_handler);
unset($modsb);

$content ="
<div style=\"border-top-style:solid; padding-top:3px; border-top-width: 1px; border-top-color: #2A4956; float: left;\">
<script language=\"JavaScript\" type=\"text/JavaScript\">

function Bookmark_Load() {
var d=document; if(d.images){ if(!d.Social) d.Social=new Array();
var i,j=d.Social.length,a=Bookmark_Load.arguments; for(i=0; i<a.length; i++)
if (a[i].indexOf(\"#\")!=0){ d.Social[j]=new Image; d.Social[j++].src=a[i];}}
}
Bookmark_Load('".XOOPS_URL."/modules/social_bookmarks/images/icons/wong_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/webnews_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/icio_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/oneview_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/folkd_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/yigg_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/linkarena_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/digg_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/del_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/reddit_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/simpy_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/stumbleupon_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/slashdot_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/netscape_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/furl_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/yahoo_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/spurl_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/google_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/blinklist_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/blogmarks_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/diigo_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/technorati_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/newsvine_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/blinkbits_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/ma.gnolia_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/smarking_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/netvouz_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/what_be.gif','".XOOPS_URL."/modules/social_bookmarks/images/icons/facebook_be.gif')
function genau() {
var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function mach(n, d) {
  var p,i,x; if(!d) d=document; if((p=n.indexOf(\"?\"))>0&&parent.frames.length) {
  d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=mach(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
  }
function bitte() {
  var i,j=0,x,a=bitte.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
  if ((x=mach(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
  }

</script></div>";

$content .="
<div style=\" border-top-color: #2A4956; float: left;\">";
if (!empty($sbconfig['book_wong'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.mister-wong.de/\" onClick=\"window.open('http://www.mister-wong.de/index.php?action=addurl&amp;bm_url='+encodeURIComponent(location.href)+'&amp;bm_notice=&amp;bm_description='+encodeURIComponent(document.title)+'&amp;bm_tags=');return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Mr. Wong\" onMouseOver=\"bitte('wong','','".XOOPS_URL."/modules/social_bookmarks/images/icons/wong_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/wong.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Mr. Wong\" name=\"wong\" border=\"0\" id=\"wong\"> </a>";
}
if (!empty($sbconfig['book_webnews'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.webnews.de/\" onClick=\"window.open('http://www.webnews.de/einstellen?url='+encodeURIComponent(document.location)+'&amp;title='+encodeURIComponent(document.title));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Webnews\" onMouseOver=\"bitte('Webnews','','".XOOPS_URL."/modules/social_bookmarks/images/icons/webnews_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/webnews.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Webnews\" name=\"Webnews\" border=\"0\" id=\"Webnews\"> </a>";
}
if (!empty($sbconfig['book_icio_de'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.icio.de/\" onClick=\"window.open('http://www.icio.de/add.php?url='+encodeURIComponent(location.href));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Icio\" onMouseOver=\"bitte('Icio','','".XOOPS_URL."/modules/social_bookmarks/images/icons/icio_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/icio.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Icio\" name=\"Icio\" border=\"0\" id=\"Icio\"> </a>";
}
if (!empty($sbconfig['book_oneview'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://beta.oneview.de/\" onClick=\"window.open('http://beta.oneview.de:80/quickadd/neu/addBookmark.jsf?URL='+encodeURIComponent(location.href)+'&amp;title='+encodeURIComponent(document.title));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Oneview\" onMouseOver=\"bitte('Oneview','','".XOOPS_URL."/modules/social_bookmarks/images/icons/oneview_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/oneview.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Oneview\" name=\"Oneview\" border=\"0\" id=\"Oneview\"> </a>";
}
if (!empty($sbconfig['book_folkd'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.folkd.com/\" onClick=\"window.open('http://www.folkd.com/submit/'+location.href);return false;');return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Folkd\" onMouseOver=\"bitte('Folkd','','".XOOPS_URL."/modules/social_bookmarks/images/icons/folkd_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/folkd.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Folkd\" name=\"Folkd\" border=\"0\" id=\"Folkd\"> </a>";
}
if (!empty($sbconfig['book_yigg'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://yigg.de/\" onClick=\"window.open('http://yigg.de/neu?exturl='+encodeURIComponent(location.href));return false\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Yigg\" onMouseOver=\"bitte('Yigg','','".XOOPS_URL."/modules/social_bookmarks/images/icons/yigg_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/yigg.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Yigg\" name=\"Yigg\" border=\"0\" id=\"Yigg\"> </a>";
}
if (!empty($sbconfig['book_linkarena'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.linkarena.com/\" onClick=\"window.open('http://linkarena.com/bookmarks/addlink/?url='+encodeURIComponent(location.href)+'&amp;title='+encodeURIComponent(document.title)+'&amp;desc=&amp;tags=');return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Linkarena\" onMouseOver=\"bitte('Linkarena','','".XOOPS_URL."/modules/social_bookmarks/images/icons/linkarena_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/linkarena.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Linkarena\" name=\"Linkarena\" border=\"0\" id=\"Linkarena\"> </a>";
}
if (!empty($sbconfig['book_digg'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://digg.com/\" onClick=\"window.open('http://digg.com/submit?phase=2&amp;url='+encodeURIComponent(location.href)+'&amp;bodytext=&amp;tags=&amp;title='+encodeURIComponent(document.title));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Digg\" onMouseOver=\"bitte('Digg','','".XOOPS_URL."/modules/social_bookmarks/images/icons/digg_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/digg.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Digg\" name=\"Digg\" border=\"0\" id=\"Digg\"> </a>";
}
if (!empty($sbconfig['book_icio_us'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://del.icio.us/\" onClick=\"window.open('http://del.icio.us/post?v=2&amp;url='+encodeURIComponent(location.href)+'&amp;notes=&amp;tags=&amp;title='+encodeURIComponent(document.title));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Del.icio.us\" onMouseOver=\"bitte('Delicious','','".XOOPS_URL."/modules/social_bookmarks/images/icons/del_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/del.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Del.icio.us\" name=\"Delicious\" border=\"0\" id=\"Delicious\"> </a>";
}
if (!empty($sbconfig['book_reddit'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://reddit.com/\" onClick=\"window.open('http://reddit.com/submit?url='+encodeURIComponent(location.href)+'&amp;title='+encodeURIComponent(document.title));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Reddit\" onMouseOver=\"bitte('Reddit','','".XOOPS_URL."/modules/social_bookmarks/images/icons/reddit_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/reddit.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Reddit\" name=\"Reddit\" border=\"0\" id=\"Reddit\"> </a>";
}
if (!empty($sbconfig['book_simpy'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.simpy.com/\" onClick=\"window.open('http://www.simpy.com/simpy/LinkAdd.do?title='+encodeURIComponent(document.title)+'&amp;tags=&amp;note=&amp;href='+encodeURIComponent(location.href));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Simpy\" onMouseOver=\"bitte('Simpy','','".XOOPS_URL."/modules/social_bookmarks/images/icons/simpy_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/simpy.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Simpy\" name=\"Simpy\" border=\"0\" id=\"Simpy\"> </a>";
}
if (!empty($sbconfig['book_stumbleupon'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.stumbleupon.com/\" onClick=\"window.open('http://www.stumbleupon.com/submit?url='+encodeURIComponent(location.href)+'&amp;title='+encodeURIComponent(document.title));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": StumbleUpon\" onMouseOver=\"bitte('StumbleUpon','','".XOOPS_URL."/modules/social_bookmarks/images/icons/stumbleupon_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/stumbleupon.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": StumbleUpon\" name=\"StumbleUpon\" border=\"0\" id=\"StumbleUpon\"> </a>";
}
if (!empty($sbconfig['book_slashdot'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://slashdot.org/\" onClick=\"window.open('http://slashdot.org/bookmark.pl?url='+encodeURIComponent(location.href)+'&amp;title='+encodeURIComponent(document.title));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Slashdot\" onMouseOver=\"bitte('Slashdot','','".XOOPS_URL."/modules/social_bookmarks/images/icons/slashdot_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/slashdot.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Slashdot\" name=\"Slashdot\" border=\"0\" id=\"Slashdot\"> </a>";
}
if (!empty($sbconfig['book_netscape'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.netscape.com/\" onClick=\"window.open('http://www.netscape.com/submit/?U='+encodeURIComponent(location.href)+'&amp;T='+encodeURIComponent(document.title));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Netscape\" onMouseOver=\"bitte('Netscape','','".XOOPS_URL."/modules/social_bookmarks/images/icons/netscape_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/netscape.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Netscape\" name=\"Netscape\" border=\"0\" id=\"Netscape\"> </a>";
}
if (!empty($sbconfig['book_furl'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.furl.net/\" onClick=\"window.open('http://www.furl.net/storeIt.jsp?u='+encodeURIComponent(location.href)+'&amp;keywords=&amp;t='+encodeURIComponent(document.title));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Furl\" onMouseOver=\"bitte('Furl','','".XOOPS_URL."/modules/social_bookmarks/images/icons/furl_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/furl.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Furl\" name=\"Furl\" border=\"0\" id=\"Furl\"> </a>";
}
if (!empty($sbconfig['book_yahoo'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.yahoo.com/\" onClick=\"window.open('http://myweb2.search.yahoo.com/myresults/bookmarklet?t='+encodeURIComponent(document.title)+'&amp;d=&amp;tag=&amp;u='+encodeURIComponent(location.href));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Yahoo\" onMouseOver=\"bitte('Yahoo','','".XOOPS_URL."/modules/social_bookmarks/images/icons/yahoo_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/yahoo.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Yahoo\" name=\"Yahoo\" border=\"0\" id=\"Yahoo\"> </a>";
}
if (!empty($sbconfig['book_spurl'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.spurl.net/\" onClick=\"window.open('http://www.spurl.net/spurl.php?v=3&amp;tags=&amp;title='+encodeURIComponent(document.title)+'&amp;url='+encodeURIComponent(document.location.href));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Spurl\" onMouseOver=\"bitte('Spurl','','".XOOPS_URL."/modules/social_bookmarks/images/icons/spurl_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/spurl.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Spurl\" name=\"Spurl\" border=\"0\" id=\"Spurl\"> </a>";
}
if (!empty($sbconfig['book_google'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.google.com/\" onClick=\"window.open('http://www.google.com/bookmarks/mark?op=add&amp;hl=de&amp;bkmk='+encodeURIComponent(location.href)+'&amp;annotation=&amp;labels=&amp;title='+encodeURIComponent(document.title));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Google\" onMouseOver=\"bitte('Google','','".XOOPS_URL."/modules/social_bookmarks/images/icons/google_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/google.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Google\" name=\"Google\" border=\"0\" id=\"Google\"> </a>";
}
if (!empty($sbconfig['book_blinklist'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.blinklist.com/\" onClick=\"window.open('http://www.blinklist.com/index.php?Action=Blink/addblink.php&amp;Description=&amp;Tag=&amp;Url='+encodeURIComponent(location.href)+'&amp;Title='+encodeURIComponent(document.title));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Blinklist\" onMouseOver=\"bitte('Blinklist','','".XOOPS_URL."/modules/social_bookmarks/images/icons/blinklist_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/blinklist.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Blinklist\" name=\"Blinklist\" border=\"0\" id=\"Blinklist\"> </a>";
}
if (!empty($sbconfig['book_blogmarks_net'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://blogmarks.net/\" onClick=\"window.open('http://blogmarks.net/my/new.php?mini=1&amp;simple=1&amp;url='+encodeURIComponent(location.href)+'&amp;content=&amp;public-tags=&amp;title='+encodeURIComponent(document.title));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Blogmarks\" onMouseOver=\"bitte('Blogmarks','','".XOOPS_URL."/modules/social_bookmarks/images/icons/blogmarks_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/blogmarks.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Blogmarks\" name=\"Blogmarks\" border=\"0\" id=\"Blogmarks\"> </a>";
}
if (!empty($sbconfig['book_diigo_us'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.diigo.com/\" onClick=\"window.open('http://www.diigo.com/post?url='+encodeURIComponent(location.href)+'&amp;title='+encodeURIComponent(document.title)+'&amp;tag=&amp;comments='); return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Diigo\" onMouseOver=\"bitte('Diigo','','".XOOPS_URL."/modules/social_bookmarks/images/icons/diigo_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/diigo.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Diigo\" name=\"Diigo\" border=\"0\" id=\"Diigo\"> </a>";
}
if (!empty($sbconfig['book_technorati'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.technorati.com/\" onClick=\"window.open('http://technorati.com/faves?add='+encodeURIComponent(location.href)+'&amp;tag=');return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Technorati\" onMouseOver=\"bitte('Technorati','','".XOOPS_URL."/modules/social_bookmarks/images/icons/technorati_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/technorati.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Technorati\" name=\"Technorati\" border=\"0\" id=\"Technorati\"> </a>";
}
if (!empty($sbconfig['book_newsvine'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.newsvine.com/\" onClick=\"window.open('http://www.newsvine.com/_wine/save?popoff=1&amp;u='+encodeURIComponent(location.href)+'&amp;tags=&amp;blurb='+encodeURIComponent(document.title));return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Newsvine\" onMouseOver=\"bitte('Newsvine','','".XOOPS_URL."/modules/social_bookmarks/images/icons/newsvine_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/newsvine.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Newsvine\" name=\"Newsvine\" border=\"0\" id=\"Newsvine\"> </a>";
}
if (!empty($sbconfig['book_blinkbits'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.blinkbits.com/\" onClick=\"window.open('http://www.blinkbits.com/bookmarklets/save.php?v=1&amp;title='+encodeURIComponent(document.title)+'&amp;source_url='+encodeURIComponent(location.href)+'&amp;source_image_url=&amp;rss_feed_url=&amp;rss_feed_url=&amp;rss2member=&amp;body=');return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Blinkbits\" onMouseOver=\"bitte('Blinkbits','','".XOOPS_URL."/modules/social_bookmarks/images/icons/blinkbits_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/blinkbits.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Blinkbits\" name=\"Blinkbits\" border=\"0\" id=\"Blinkbits\"> </a>";
}
if (!empty($sbconfig['book_gnolia'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://ma.gnolia.com/\" onClick=\"window.open('http://ma.gnolia.com/bookmarklet/add?url='+encodeURIComponent(location.href)+'&amp;title='+encodeURIComponent(document.title)+'&amp;description=&amp;tags=');return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Ma.Gnolia\" onMouseOver=\"bitte('MaGnolia','','".XOOPS_URL."/modules/social_bookmarks/images/icons/ma.gnolia_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/ma.gnolia.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Ma.Gnolia\" name=\"MaGnolia\" border=\"0\" id=\"MaGnolia\"> </a>";
}
if (!empty($sbconfig['book_smarking'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://smarking.com/\" onClick=\"window.open('http://smarking.com/editbookmark/?url='+ location.href +'&amp;description=&amp;tags=');return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Smarking\" onMouseOver=\"bitte('Smarking','','".XOOPS_URL."/modules/social_bookmarks/images/icons/smarking_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/smarking.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Smarking\" name=\"Smarking\" border=\"0\" id=\"Smarking\"> </a>";
}
if (!empty($sbconfig['book_netvouz'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.netvouz.com/\" onClick=\"window.open('http://www.netvouz.com/action/submitBookmark?url='+encodeURIComponent(location.href)+'&amp;description=&amp;tags=&amp;title='+encodeURIComponent(document.title)+'&amp;popup=yes');return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Netvouz\" onMouseOver=\"bitte('Netvouz','','".XOOPS_URL."/modules/social_bookmarks/images/icons/netvouz_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/netvouz.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Netvouz\" name=\"Netvouz\" border=\"0\" id=\"Netvouz\"> </a>";
}
if (!empty($sbconfig['book_facebook'])) {
  $content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"http://www.facebook.com/\" onClick=\"window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href)+'&amp;description=&amp;tags=&amp;title='+encodeURIComponent(document.title)+'&amp;popup=yes');return false;\" title=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Facebook\" onMouseOver=\"bitte('Facebook','','".XOOPS_URL."/modules/social_bookmarks/images/icons/facebook_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/facebook.gif\" alt=\""._SOCIAL_BOOKMARKS_SET_BOOKMARK.": Facebook\" name=\"Facebook\" border=\"0\" id=\"Facebook\"> </a>";
}
$content .= "<a rel=\"nofollow\" style=\"text-decoration:none;\" href=\"".XOOPS_URL."/modules/social_bookmarks/information.php\" target=\"_self\" title=\""._SOCIAL_BOOKMARKS_SET_HELPINFO."\" onMouseOver=\"bitte('Information','','".XOOPS_URL."/modules/social_bookmarks/images/icons/what_be.gif',1)\" onMouseOut=\"genau()\" > <img style=\"padding-bottom:1px;\" src=\"".XOOPS_URL."/modules/social_bookmarks/images/icons/what.gif\" alt=\"Information\" name=\"Information\" border=\"0\" id=\"Information\"> </a>";
$content .= "</div>";

$block['content']=$content;
return $block;
}
?>