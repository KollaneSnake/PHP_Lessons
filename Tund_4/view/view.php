<?php

$page=$_GET['page'];
if ($page==1) 
{
	$page="content/ajalugu.php";
}
elseif ($page==2) 
{
	$page="content/haridus.php";
}
elseif ($page==3) 
{
	$page="content/uudised.php";
}
elseif ($page==4) 
{
	$page="content/kontakt.php";
}
else
{
	$page="content/esileht.php";
}

include $page;
