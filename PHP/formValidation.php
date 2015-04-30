<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$triage01Err = $triage02Err = "";
	$triage01 = $triage02 = "";

   if (empty($_POST["Triage01"])) {
     $triage01Err = "*Required 01";
   } else {
     $triage01 = test_input($_POST["Triage01"]);
   }
   
   if (empty($_POST["Triage02"])) {
     $triage02Err = "*Required02";
   } else {
     $triage02 = test_input($_POST["Triage02"]);
   }
   
   if ($triage01Err == $triage02Err == "")
   {
	 require_once('masterAction.php');
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>