<?php
function Exist($url) {
if (preg_match('#<title>(.+)<\/title>#',file_get_contents($url),$title)){
	if($title[1] == "Twitter / Account Suspended" OR $title[1] == "Twitter / Compte Suspendu"){
		return 'This account is suspended';
}
 elseif (substr($title[1], -9) == "| Twitter"){
		return 'This account is not suspended';
}}
$file = @fopen($url, 'r');  
if ($file)  
{
  return "Nonexistent account";
}}
[CALL FUNCTION EXIST('url')]
echo Exist('https://twitter.com/654545kjjkjgjf');
?>
