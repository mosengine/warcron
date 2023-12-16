<?php

if (INCLUDED!==true) { include('index.htm'); exit; }

$MySQL_Set = array(
'HOST' => 'localhost',
'PORT' => '3306',
'USERNAME' => 'root',
'PASSWORD' => '',
'DBREALM' => 'auth',
);

$MySQL_CON = @mysql_connect($MySQL_Set['HOST'].':'.$MySQL_Set['PORT'], $MySQL_Set['USERNAME'], $MySQL_Set['PASSWORD']);
if (!$MySQL_CON) { $haserrors.=mysql_error().'<br>'; }
$MySQL_DB = @mysql_select_db($MySQL_Set['DBREALM'], $MySQL_CON);
if (!$MySQL_DB) { $haserrors.=mysql_error().'<br>'; }
?>