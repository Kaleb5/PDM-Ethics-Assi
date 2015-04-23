<?php
	
	define('DB_NAME', 'PDM_Assignment');
	define('DB_USER', 'pdmAssignment');
	define('DB_PASSWORD', 'pdm123');
	define('DB_HOST', 'localhost');

	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	
	if (!$link)
	{
		die('Could not connect: ' . mysql_error());
	}
	
	$db_selected = mysql_select_db(DB_NAME, $link);
	
	if (!$db_selected)
	{
		die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
	}
	
//Validation for form fields

	function test_input($data) 
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	$SubValCheck = false;
	$TriageJustCheck = false;
	
	if (empty($_POST['Triage01']))
	{
		$Triage1 = null;
		$SubValCheck = true;
	}
	else
	{
		$Triage1 = test_input($_POST['Triage01']);
		if ($Triage1 == 'Yes')
		{
			$TriageJustCheck = true;
		}
	}
	
	if (empty($_POST['Triage02']))
	{
		$Triage2 = null;
		$SubValCheck = true;
	}
	else
	{
		$Triage2 = test_input($_POST['Triage02']);
		if ($Triage2 == 'Yes')
		{
			$TriageJustCheck = true;
		}
	}
	
	if (empty($_POST['Triage03']))
	{
		$Triage3 = null;
		$SubValCheck = true;
	}
	else
	{
		$Triage3 = test_input($_POST['Triage03']);
		if ($Triage3 == 'Yes')
		{
			$TriageJustCheck = true;
		}
	}
	
	if (empty($_POST['Triage04']))
	{
		$Triage4 = null;
		$SubValCheck = true;
	}
	else
	{
		$Triage4 = test_input($_POST['Triage04']);
		if ($Triage4 == 'Yes')
		{
			$TriageJustCheck = true;
		}
	}
	
	if (empty($_POST['Triage05']))
	{
		$Triage5 = null;
		$SubValCheck = true;
	}
	else
	{
		$Triage5 = test_input($_POST['Triage05']);
		if ($Triage5 == 'Yes')
		{
			$TriageJustCheck = true;
		}
	}
	
	if (empty($_POST['Triage06']))
	{
		$Triage6 = null;
		$SubValCheck = true;
	}
	else
	{
		$Triage6 = test_input($_POST['Triage06']);
		if ($Triage6 == 'Yes')
		{
			$TriageJustCheck = true;
		}
	}
	
	if (empty($_POST['Triage07']))
	{
		$Triage7 = null;
		$SubValCheck = true;
	}
	else
	{
		$Triage7 = test_input($_POST['Triage07']);
		if ($Triage7 == 'Yes')
		{
			$TriageJustCheck = true;
		}
	}

	if (empty($_POST['TriageJustify']))
	{
		$TriageJust = "";
		if($TriageJustCheck)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$TriageJust = test_input($_POST['TriageJustify']);
	}

	if (test_input($_POST['savesub']) == 'save')
	{
		$table = 'pdm_saves';
	}
	else if (!$SubValCheck)
	{
		$table = 'pdm_subs';
	}
	else if ((test_input($_POST['savesub']) == 'submit') && $SubValCheck)
	{
		
	}
	else
	{
		die('Error in determining table');
	}
	
	$sql = "INSERT INTO $table (Triage01, Triage02, Triage03, Triage04, Triage05, Triage06, Triage07, TriageJustify) 
				VALUES ('$Triage1', '$Triage2', '$Triage3', '$Triage4', '$Triage5', '$Triage6', '$Triage7', '$TriageJust')";

	if (!mysql_query($sql)) {
		die('Error: ' . mysql_error());
	}
	
	if ($table == 'pdm_saves')
	{
		print 'Application saved';
	}
	else if ($table == 'pdm_subs')
	{
		print 'Application submitted';
	}

	mysql_close();
?>