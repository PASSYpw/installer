<?php

$mysqlConfig = array(

	"host" => "localhost",
	"user" => "root",
	"password" => "%%%PASSWORD%%%",
	"db" => "passy"

);

$customizationConfig = array(
	"title" => "PASSY"
);

$generalConfig = array(

	"redirect_ssl" => false,

	"registration" => array(

		"enabled" => true

	),
	"login_history" => array(

		"enabled" => true

	),
	"recaptcha" => array(
		"enabled" => false,
		"website_key" => "",
		"private_key" => ""
	)

);

$passyMetadata = array(
	"version" => "2.0.2",
	"build" => 202,
	"github" => "https://github.com/Scrumplex/PASSY",
	"issues" => "https://github.com/Scrumplex/PASSY/issues"
);
