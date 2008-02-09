<?php
/**
* $Id: admin.php 68 2008-02-09 17:10:51Z xoops-magazine $
* Module: social-bookmarks
* Author: Rene Sato <www.impresscms.de>
* Licence: GNU
*/

// --- define language begin ---
if( !defined('SOCIAL_BOOKMARKS_LANG_AM_LOADED') ) 
{
define('SOCIAL_BOOKMARKS_LANG_AM_LOADED', 1);

define('_AM_SOCIAL_BOOKMARKS_NAME','Social-Bookmarks');
define('_AM_SOCIAL_BOOKMARKS_DESC','Zeigt viele Social-Bookmarks im Block');

define("_SOCIAL_BOOKMARKS_MODIFSAVE","Datenbank erfolgreich aktualisiert!");
define("_SOCIAL_BOOKMARKS_MODULE_NAME","social_bookmarks");
define("_SOCIAL_BOOKMARKS_EDIT","Einstellungen");
define("_SOCIAL_BOOKMARKS_HELPTEXT1","<br /><br />Danke f&uuml;r die Installation. 
<br />Hier noch ein Hinweis, wie das Modul genutzt werden kann.<br /><br />");
define("_SOCIAL_BOOKMARKS_HELPTEXT2","Das Modul besitzt eine kleine Administation, in der die Bookmarks eingerichtet werden k&ouml;nnen. Damit das Modul genutzt werden kann, muss jetzt nur noch der Block sichbar gemacht werden. Hierzu muss man nur &uuml;ber das 'System-Admin &gt; Bl&ouml;cke' gehen und nach dem Block mit dem Namen 'Social-Bookmarks' suchen. Dieser Block kann nun an die gew&uuml;nschten Stelle positioniert und aktiviert werden. Anschlie&szlig;end sieht das in der Startseite so aus:
<br /><img src='".XOOPS_URL."/modules/social_bookmarks/images/hilfe/sb-block_de.png' height='193' width='373' title='social bookmarks im Block'>");
define("_SOCIAL_BOOKMARKS_HELPTEXT3","Informationen und Download einer neuen Version auf: <a href='http://www.xoops-magazine.com/index.php?campaign=social_bookmarks/de/administartion' target='_blank' title='neues Fenster: XOOPS-magazine.com'>XOOPS-magazine.com</a>
<br /><br /><br /><small>Vielen Dank an <a href='http://www.laanix.de/showpost.php?p=196097&postcount=1' target='_blank' title='neues Fenster: laanix.de'>Schaum2</a>, <a href='http://www.lupusc.org' target='_blank' title='neues Fenster: lupusc.org'>LupusC</a>, <a href='http://www.myxoops.org/userinfo.php?uid=10094' target='_blank' title='neues Fenster: Muki'>Muki</a> und <a href='http://www.simple-xoops.de/' target='_blank' title='neues Fenster: Alfred'>Alfred</a></small>");
define("_SOCIAL_BOOKMARKS_SET_HELPINFO","Was ist das?");
}
// --- define language end ---
?>
