<?php
$organization = "khulna university";
echo "$organization <br>";
// determine the length of a string 
echo strlen($organization) ."<br>";
// it is used to replace words or sentence or letter of a string 
echo str_replace("khulna","kasba",$organization)."<br>";
// it is used to capital all words first letter
echo ucwords($organization)."<br>";
// it is used to capital first words first letter
echo ucfirst($organization)."<br>";
// it is used to capital all words all letter
echo strtoupper($organization)."<br>";
?>