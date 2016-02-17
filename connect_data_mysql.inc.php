<?php 
$m_server='milind';
$m_user='goosweet_milind';
$m_pass='Mrock&*()';
$m_db='goosweet_milind';
$connection_error='could not connect try again';
if(!@mysql_connect($m_server,$m_user,$m_pass) )
{
	//die($connection_error);
	echo $connection_error;
}
if( !@mysql_select_db($m_db))
{
	echo "problem here";
}

?>