<?php

//ja tukšs
function isEmpty($empty)
{
	if (empty($empty)) 
	{
		array_push($error, "Lūdzu aizpildiet lauku!");
	}
}

//lietotajvardam vai parolei
function isTextAndNum($textAndNum)
{
	if (!preg_match("/^[a-zA-Z0-9]*$/",$textAndNum)) 
	{
		array_push($error, "Ievadiet tikai burtus vai ciparus");
	}
}

//vardam vai uzvardam
function isText($text)
{
	if (!preg_match("/^[a-zēūīāšķļņA-ZĒŪĪĀŠĶĻŅ]*$/",$text)) 
	{
		array_push($error, "Ievadiet tikai burtus");
	}
}

//e-pasts
function isEmail($email)
{
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		array_push($error, "Ievadiet e-pastu pareizi");
	}
}

//tikai cipariem
function isNumber($number)
{
	if (!preg_match("/^[0-9]*$/",$number)) 
	{
		array_push($error, "Ievadiet tikai ciparus");
	}
}
?>