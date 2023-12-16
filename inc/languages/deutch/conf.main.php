<?php
/*
Deutsch - v1.0
*/

// Allgemeines
$_LANG['Lang']['YES'] = 'Ja';
$_LANG['Lang']['NO'] = 'no';
$_LANG['Lang']['CHARSET'] = "charset = ISO-8859-1 ";

// Fehler
$_LANG['Lang']['DEFAULT'] = "Fehler nicht angegeben.";
$_LANG['Lang']['ACCESS'] = "Sie haben nicht die erforderlichen Benutzer-Ebene f�r den Zugriff auf diesen Teil der Website.";
$_LANG['Lang']['CONST'] = "Diese Seite befindet sich noch im Aufbau.";
$_LANG['Lang']['DISABLED'] = "Diese Seite wurde von einem Administrator deaktiviert.";
$_LANG['Lang']['DENY_INSTALL'] =" Die Installation Datei kann nicht zugegriffen werden von diesem Computer (".$_SERVER['REMOTE_ADDR'].").";
$_LANG['Lang']['CANT_INSTALL'] =" L�schen Sie die Datei <i>inc/conf/conf.database.php</i>, um fortzufahren.";
$_LANG['Lang']['NEED_LOGIN'] =" Du musst eingeloggt sein, um den Zugang zu dieser Seite. <META HTTP-EQUIV=REFRESH CONTENT='2; URL=?n=account.login'>";
$_LANG['Lang']['BAD_LOGIN'] =" Falscher Account-Name und / oder Passwort! ";
$_LANG['Lang']['REALM_OFFLINE'] =" Der ausgew�hlte Bereich wird derzeit Off-Line! ";
$_LANG['Lang']['REALM_NO_ON_CHARS'] =" Der Bereich NICHT enth�lt alle On-Line-Zeichen! ";
$_LANG['Lang']['REALM_NOT_EXIST'] =" Die Welt kann nicht existiert. ";
$_LANG['Lang']['ACCOUNT_BANNED'] =" Du bist BANNED von diesem Server! <br> F�r weitere Informationen wenden Sie sich an einen Administrator.";

//Erfolg
$_LANG [ 'SUCCESS'] [ 'DEFAULT'] = "Die �nderungen wurden erfolgreich angewendet.";
$_LANG [ 'SUCCESS'] [ 'ACCOUNT_CREATED '] =" Das Konto wurde erfolgreich erstellt. <META HTTP-EQUIV=REFRESH CONTENT='3; URL=index.php'> ";
$_LANG [ 'SUCCESS'] [ 'ACCOUNT_CREATED_MAIL '] =" Das Konto wurde erfolgreich erstellt. <br> Eine E-Mail wird an Sie (kann bis zu 10 Minuten), so k�nnen Sie Ihr Konto aktivieren. <META HTTP-EQUIV=REFRESH CONTENT='5; URL=index.php'>";;
$_LANG [ 'SUCCESS'] [ 'INSTALLED'] = "Website erfolgreich installiert! <META HTTP-EQUIV=REFRESH CONTENT='2; URL=index.php'>";
$_LANG [ 'SUCCESS'] [ 'ACCOUNT_UPDATED '] =" Das Konto Informationen wurden erfolgreich aktualisiert. <META HTTP-EQUIV=REFRESH CONTENT='2; URL=index.php?n=account.manage'>";
$_LANG [ 'SUCCESS'] [ 'ADMIN_SET '] =" Die �nderungen wurden erfolgreich angewendet. <META HTTP-EQUIV=REFRESH CONTENT='2; URL=index.php?n=admin'>";

?>