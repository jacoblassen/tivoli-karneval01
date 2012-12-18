<?php
    $link = new mysqli("mydb4.surf-town.net", "jabber_karneval", "karneval1", "jabber_karneval");
	if($link->connect_error)	{
		die('Connect Error('.$link->connect_errno.') '.$link->connect_error);
	}
	$link->set_charset("utf8")
?>