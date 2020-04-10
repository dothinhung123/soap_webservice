<?php
require('../nusoap-master/src/nusoap.php');
$server= new nusoap_server();
$server->configureWSDL("demo"."urn:demo");
$server->register(
	"price",
	array("name"=>'xsd:string'),
	array("return"=>"xsd:inter")
);


$HTTP_RAM_POST_DATA = isset($HTTP_RAM_POST_DATA)?$HTTP_RAM_POST_DATA:'';
$server->service($HTTP_RAM_POST_DATA);
?>