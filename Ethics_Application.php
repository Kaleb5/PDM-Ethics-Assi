<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ethics Application</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="JS/setRequired.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="CSS/cssEthics_Application.css" rel="stylesheet" type="text/css" />
<link href="CSS/cssRequired.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	
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
	
/*Triage*/
	$TriageJustCheck = false;
	
	if (empty($_POST['Triage01']))
	{
		$Triage1 = "";
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
		$Triage2 = "";
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
		$Triage3 = "";
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
		$Triage4 = "";
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
		$Triage5 = "";
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
		$Triage6 = "";
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
		$Triage7 = "";
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
/*End Triage*/
/*Section 1*/
	if (empty($_POST['Q1input01']))
	{
		$PQ1input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ1input01 = test_input($_POST['$PQinput01']);
	}
	
	if ((empty($_POST['$Q2select01'])) || ($_POST['Q2select01'] == "choose"))
	{
		$PQ2select01 = "choose";
		$SubValCheck = true;
	}
	else
	{
		$PQ2select01 = test_input($_POST['Q2select01']);
	}
	
	if (empty($_POST['Q2input01']))
	{
		$PQ2input01 = "";
		if($PQ2select01 == "other")
		{
			$SubValCheck = true;
		}
	}
	else
	{
		if($PQ2select01 != "other")
		{
			$PQ2input01 = test_input($_POST['Q2input01']);
		}
		else
		{
			$PQ2input01 = NULL;
		}
	}
	
	if (empty($_POST['Q3textarea01']))
	{
		$PQ3textarea01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ3textarea01 = test_input($_POST['Q3textarea01']);
	}
	
	if (empty($_POST['Q3textarea02']))
	{
		$PQ3textarea02 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ3textarea02 = test_input($_POST['Q3textarea02']);
	}
	
	if (empty($_POST['Q3textarea03']))
	{
		$PQ3textarea03 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ3textarea03 = test_input($_POST['Q3textarea03']);
	}
	
	if (empty($_POST['Q4input01']))
	{
		$PQ4input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ4input01 = test_input($_POST['Q4input01']);
	}
	
	if (empty($_POST['Q4input02']))
	{
		$PQ4input02 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ4input02 = test_input($_POST['Q4input02']);
	}
	
	if (empty($_POST['Q4input03']))
	{
		$PQ4input03 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ4input03 = test_input($_POST['Q4input03']);
	}
	
	if (empty($_POST['Q4input04']))
	{
		$PQ4input04 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ4input04 = test_input($_POST['Q4input04']);
	}
	
	if (empty($_POST['Q4input05']))
	{
		$PQ4input05 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ4input05 = test_input($_POST['Q4input05']);
	}
	
	if (empty($_POST['Q4input06']))
	{
		$PQ4input06 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQQ4input06 = test_input($_POST['Q4input06']);
	}
	
	if (empty($_POST['Q5input01']))
	{
		$PQ5input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ5input01 = test_input($_POST['Q5input01']);
	}
	
	if (empty($_POST['Q5input02']))
	{
		$PQ5input02 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ5input02 = test_input($_POST['Q5input02']);
	}
	
	if (empty($_POST['Q5input03']))
	{
		$PQ5input03 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ5input03 = test_input($_POST['Q5input03']);
	}
	
	if ((empty($_POST['Q5select01'])) || ($_POST['Q5select01'] == "choose"))
	{
		$PQ5select01 = "choose";
	}
	else
	{
		$PQ5select01 = test_input($_POST['Q5select01']);
	}
	
	if (empty($_POST['Q5input04']))
	{
		$PQ5input04 = "";
	}
	else
	{
		$PQ5input04 = test_input($_POST['Q5input04']);
	}
	
	if (empty($_POST['Q5input05']))
	{
		$PQ5input05 = "";
	}
	else
	{
		$PQ5input05 = test_input($_POST['Q5input05']);
	}
	
	if (empty($_POST['Q5input06']))
	{
		$PQ5input06 = "";
	}
	else
	{
		$PQ5input06 = test_input($_POST['Q5input06']);
	}
	
	if (empty($_POST['Q5input07']))
	{
		$PQ5input07 = "";
	}
	else
	{
		$PQ5input07 = test_input($_POST['Q5input07']);
	}
	
	if (empty($_POST['Q5input08']))
	{
		$PQ5input08 = "";
	}
	else
	{
		$PQ5input08 = test_input($_POST['Q5input08']);
	}
	
	if ((empty($_POST['Q5select02'])) || ($_POST['Q5select02'] == "choose"))
	{
		$PQ5select02 = "choose";
	}
	else
	{
		$PQ5select02 = test_input($_POST['Q5select02']);
	}
	
	if (empty($_POST['Q5input09']))
	{
		$PQ5input09 = "";
	}
	else
	{
		$PQ5input09 = test_input($_POST['Q5input09']);
	}
	
	if (empty($_POST['Q5input10']))
	{
		$PQ5input10 = "";
	}
	else
	{
		$PQ5input10 = test_input($_POST['Q5input10']);
	}
	
	if (empty($_POST['Q5input11']))
	{
		$PQ5input11 = "";
	}
	else
	{
		$PQ5input11 = test_input($_POST['Q5input11']);
	}
	
	if (empty($_POST['Q5input12']))
	{
		$PQ5input12 = "";
	}
	else
	{
		$PQ5input12 = test_input($_POST['Q5input12']);
	}
	
	if (empty($_POST['Q5input13']))
	{
		$PQ5input13 = "";
	}
	else
	{
		$PQ5input13 = test_input($_POST['Q5input13']);
	}
	
	if ((empty($_POST['Q5select03'])) || ($_POST['Q5select03'] == "choose"))
	{
		$PQ5select03 = "choose";
	}
	else
	{
		$PQ5select03 = test_input($_POST['Q5select03']);
	}
	
	if (empty($_POST['Q5input14']))
	{
		$PQ5input14 = "";
	}
	else
	{
		$PQ5input14 = test_input($_POST['Q5input14']);
	}
	
	if (empty($_POST['Q5input15']))
	{
		$PQ5input15 = "";
	}
	else
	{
		$PQ5input15 = test_input($_POST['Q5input15']);
	}
	
	if (empty($_POST['Q5input16']))
	{
		$PQ5input16 = "";
	}
	else
	{
		$PQ5input16 = test_input($_POST['Q5input16']);
	}
	
	if (empty($_POST['Q5input17']))
	{
		$PQ5input17 = "";
	}
	else
	{
		$PQ5input17 = test_input($_POST['Q5input17']);
	}
	
	if (empty($_POST['Q5input18']))
	{
		$PQ5input18 = "";
	}
	else
	{
		$PQ5input18 = test_input($_POST['Q5input18']);
	}
	
	if ((empty($_POST['Q5select04'])) || ($_POST['Q5select04'] == "choose"))
	{
		$PQ5select04 = "choose";
	}
	else
	{
		$PQ5select04 = test_input($_POST['Q5select04']);
	}
	
	if (empty($_POST['Q5input19']))
	{
		$PQ5input19 = "";
	}
	else
	{
		$PQ5input19 = test_input($_POST['Q5input19']);
	}
	
	if (empty($_POST['Q5input20']))
	{
		$PQ5input20 = "";
	}
	else
	{
		$PQ5input20 = test_input($_POST['Q5input20']);
	}
	
	if (empty($_POST['Q5input21']))
	{
		$PQ5input21 = "";
	}
	else
	{
		$PQ5input21 = test_input($_POST['Q5input21']);
	}
	
	if (empty($_POST['Q5input22']))
	{
		$PQ5input22 = "";
	}
	else
	{
		$PQ5input22 = test_input($_POST['Q5input22']);
	}
	
	if (empty($_POST['Q5input23']))
	{
		$PQ5input23 = "";
	}
	else
	{
		$PQ5input23 = test_input($_POST['Q5input23']);
	}
	
	if ((empty($_POST['Q5select05'])) || ($_POST['Q5select05'] == "choose"))
	{
		$PQ5select05 = "choose";
	}
	else
	{
		$PQ5select05 = test_input($_POST['Q5select05']);
	}
	
	if (empty($_POST['Q5input24']))
	{
		$PQ5input24 = "";
	}
	else
	{
		$PQ5input24 = test_input($_POST['Q5input24']);
	}
	
	if (empty($_POST['Q5input25']))
	{
		$PQ5input25 = "";
	}
	else
	{
		$PQ5input25 = test_input($_POST['Q5input25']);
	}
	
	if (empty($_POST['Q5input26']))
	{
		$PQ5input26 = "";
	}
	else
	{
		$PQ5input26 = test_input($_POST['Q5input26']);
	}
	
	if (empty($_POST['Q5input27']))
	{
		$PQ5input27 = "";
	}
	else
	{
		$PQ5input27 = test_input($_POST['Q5input27']);
	}
	
	if (empty($_POST['Q5input28']))
	{
		$PQ5input28 = "";
	}
	else
	{
		$PQ5input28 = test_input($_POST['Q5input28']);
	}
	
	if ((empty($_POST['Q5select06'])) || ($_POST['Q5select06'] == "choose"))
	{
		$PQ5select06 = "choose";
	}
	else
	{
		$PQ5select06 = test_input($_POST['Q5select06']);
	}
	
	if (empty($_POST['Q5input29']))
	{
		$PQ5input29 = "";
	}
	else
	{
		$PQ5input29 = test_input($_POST['Q5input29']);
	}
	
	if (empty($_POST['Q5input30']))
	{
		$PQ5input30 = "";
	}
	else
	{
		$PQ5input30 = test_input($_POST['Q5input30']);
	}
	
	if (empty($_POST['Q6input01']))
	{
		$PQ6input01 = "";
	}
	else
	{
		$PQ6input01 = test_input($_POST['Q6input01']);
	}
	
	if (empty($_POST['Q6input02']))
	{
		$PQ6input02 = "";
		if ($PQ6input01 == "")
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ6input02 = test_input($_POST['Q6input02']);	
	}
	
	if (empty($_POST['Q6input03']))
	{
		$PQ6input03 = "";
		if ($PQ6input01 == "")
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ6input03 = test_input($_POST['Q6input03']);	
	}
	
	if (empty($_POST['Q6input04']))
	{
		$PQ6input04 = "";
		if ($PQ6input01 == "")
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ6input04 = test_input($_POST['Q6input04']);	
	}
	
	if (empty($_POST['Q6input05']))
	{
		$PQ6input05 = "";
		if ($PQ6input01 == "")
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ6input05 = test_input($_POST['Q6input05']);	
	}
	
	if (empty($_POST['Q6input06']))
	{
		$PQ6input06 = "";
		if ($PQ6input01 == "")
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ6input06 = test_input($_POST['Q6input06']);	
	}
	
/*End Section 1*/

/*Section 2*/

	if (empty($_POST['Q7input01']))
	{
		$PQ7input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ7input01 = test_input($_POST['Q7input01']);
	}
	
	if (empty($_POST['Q8input01']))
	{
		$PQ8input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ8input01 = test_input($_POST['Q8input01']);
	}
	
	if (empty($_POST['Q9input01']))
	{
		$PQ9input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ9input01 = test_input($_POST['Q9input01']);
		if ($PQ9input01 == "Yes")
		{
			$PQ9check = true;
		}
	}
	
	if (empty($_POST['Q9input02']))
	{
		$PQ9input02 = "";
		if ($PQ9check)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ9input02 = test_input($_POST['Q9input02']);
	}
	
	if (empty($_POST['Q10input01']))
	{
		$PQ10input01 = "";
	}
	else
	{
		$PQ10input01 = test_input($_POST['Q10input01']);
		if ($PQ10input01 == "Yes")
		{
			$PQ10check01 = true;
		}
	}
	
	if (empty($_POST['Q10input02']))
	{
		$PQ10input02 = "";
		if ($PQ10check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ10input02 = test_input($_POST['Q10input02']);
	}
	
	if (empty($_POST['Q10input03']))
	{
		$PQ10input03 = "";
	}
	else
	{
		$PQ10input03 = test_input($_POST['Q10input03']);
		if ($PQ10input03 == "Yes")
		{
			$PQ10check02 = true;
		}
	}
	
	if (empty($_POST['Q10input04']))
	{
		$PQ10input04 = "";
		if ($PQ10check02)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ10input04 = test_input($_POST['Q10input04']);
	}
	
	if (empty($_POST['Q10input05']))
	{
		$PQ10input05 = "";
	}
	else
	{
		$PQ10input05 = test_input($_POST['Q10input05']);
		if ($PQ10input05 == "Yes")
		{
			$PQ10check03 = true;
		}
	}
	
	if (empty($_POST['Q10input06']))
	{
		$PQ10input06 = "";
		if ($PQ10check03)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ10input06 = test_input($_POST['Q10input06']);
	}
	
	if (empty($_POST['Q10input07']))
	{
		$PQ10input07 = "";
	}
	else
	{
		$PQ10input07 = test_input($_POST['Q10input07']);
		if ($PQ10input07 == "Yes")
		{
			$PQ10check04 = true;	
		}
	}
	
	if (empty($_POST['Q10input08']))
	{
		$PQ10input08 = "";
		if ($PQ10check04)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ10input08 = test_input($_POST['Q10input08']);
	}
	
	if (empty($_POST['Q10input09']))
	{
		$PQ10input09 = "";
	}
	else
	{
		$PQ10input09 = test_input($_POST['Q10input09']);
		if ($PQ10input09 == "Yes")
		{
			$PQ10check05 = true;
		}
	}
	
	if (empty($_POST['Q101input10']))
	{
		$PQ10input10 = "";
		if ($PQ10check05)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ10input10 = test_input($_POST['Q10input10']);
	}
	
	if (empty($_POST['Q10input11']))
	{
		$PQ10input11 = "";
	}
	else
	{
		$PQ10input11 = test_input($_POST['Q10input11']);
		if ($PQ10input11 == "Yes")
		{
			$PQ10check06 = true;
		}
	}
	
	if (empty($_POST['Q10input12']))
	{
		$PQ10input12 = "";
		if ($PQ10check06)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ10input12 = test_input($_POST['Q10input12']);
	}
	
	if (empty($_POST['Q10input13']))
	{
		$PQ10input13 = "";
	}
	else
	{
		$PQ10input13 = test_input($_POST['Q10input13']);
		if ($PQ10input13 == "Yes")
		{
			$PQ10check07 = true;
		}
	}
	
	if (empty($_POST['Q10input14']))
	{
		$PQ10input14 = "";
		if ($PQ10check07)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ10input14 = test_input($_POST['Q10input14']);
	}
	
	if (empty($_POST['Q10input15']))
	{
		$PQ10input15 = "";
		if ($PQ10check07)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ10input15 = test_input($_POST['Q10input15']);
	}
	
	if (empty($_POST['Q11input01']))
	{
		$PQ11input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ11input01 = test_input($_POST['Q11input01']);
	}
	
	if (empty($_POST['Q11input02']))
	{
		$PQ11input02 = "";
		$SubValCheck = true;
	}
	else
	{
		 $PQ11input02 = test_input($_POST['Q11input02']);
	}
	
	if (empty($_POST['Q12input01']))
	{
		$PQ12input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ12input01 = test_input($_POST['Q12input01']);
		if ($PQ12input01 == "Yes")
		{
			$PQ12check01 = true;
		}
	}
	
	if (empty($_POST['Q12input02']))
	{
		$PQ12input02 = "";
		if ($PQ12check01)
		{
			$SubValCheck = true;	
		}
	}
	else
	{
		$PQ12input02 = test_input($_POST['Q12input02']);
	}

/*End Section 2*/

/*Section 3*/

	if (empty($_POST['Q13input01']))
	{
		$PQ13input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ13input01 = test_input($_POST['Q13input01']);
		if ($PQ13input01 == "Yes")
		{
			$PQ13check01 = true;
		}
	}
	
	if (empty($_POST['Q13ainput01']))
	{
		$PQ13ainput01 = "";
		if ($PQ13check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ13ainput01 = test_input($_POST['Q13ainput01']);
	}
	
	if (empty($_POST['Q13ainput02']))
	{
		$PQ13ainput02 = "";
		if ($PQ13check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ13ainput02 = test_input($_POST['Q13ainput02']);
	}
	
	if (empty($_POST['Q13binput01']))
	{
		$PQ13binput01 = "";
		if ($PQ13check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ13binput01 = test_input($_POST['Q13binput01']);
		if ($PQ13binput01 == "Yes")
		{
			$PQ13check02 = true;
		}
	}
	
	if (empty($_POST['Q13binput02']))
	{
		$PQ13binput02 = "";
		if ($PQ13check02)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ13binput02 = test_input($_POST['Q13binput02']);
	}
	
	if (empty($_POST['Q13cinput01']))
	{
		$PQ13cinput01 = "";
		if ($PQ13check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ13cinput01 = test_input($_POST['Q13cinput01']);
		if ($PQ13cinput01 == "No")
		{
			$PQ13check03 = true;
		}
	}
	
	if (empty($_POST['Q13cinput02']))
	{
		$PQ13cinput02 = "";
		if ($PQ13check01)
		{
			if ($PQ13check03)
			{
				$SubValCheck = true;	
			}
		}
	}
	else
	{
		$PQ13cinput02 = test_input($_POST['Q13cinput02']);
	}
	
	if (empty($_POST['Q13dinput01']))
	{
		$PQ13dinput01 = "";
		if ($PQ13check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ13dinput01 = test_input($_POST['Q13dinput01']);
	}
	
	if (empty($_POST['Q14input01']))
	{
		$PQ14input01 = "";
		if ($PQ13check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ14input01 = test_input($_POST['Q14input01']);
		if ($PQ14input01 == "Yes")
		{
			$PQ14check01 = true;
		}
	}
	
	if (empty($_POST['Q14input02']))
	{
		$PQ14input02 = "";
		if ($PQ14check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ14input02 = test_input($_POST['Q14input02']);
	}
	
	if (empty($_POST['Q15input01']))
	{
		$PQ15input01 = "";
		if ($PQ13check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ15input01 = test_input($_POST['Q15input01']);
		if ($PQ15input01 == "Yes")
		{
			$PQ15check01 = true;
		}
	}
	
	if (empty($_POST['Q15input02']))
	{
		$PQ15input02 = "";
		if ($PQ13check01)
		{
			if ($PQ15check01)
			{
				$SubValCheck = true;
			}
		}
	}
	else
	{
		$PQ15input02 = test_input($_POST['Q15input02']);
	}

/*End Section 3*/

/*Section 4*/

	if (empty($_POST['Q16input01']))
	{
		$PQ16input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ16input01 = test_input($_POST['Q16input01']);
		if ($PQ16input01 == "Yes")
		{
			$PQ16check01 = true;
		}
	}
	
	if (empty($_POST['Q16input02']))
	{
		$PQ16input02 = "";
		if ($PQ16check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ16input02 = test_input($_POST['Q16input02']);
		$PQ16check02 = true;
	}
	
	if (empty($_POST['Q16textarea01']))
	{
		$PQ16textarea01 = "";
		if ($PQ16check02)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ16textarea01 = test_input($_POST['Q16textarea01']);
	}
	
	if (empty($_POST['Q16input03']))
	{
		$PQ16input03 = "";
		if ($PQ16check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ16input03 = test_input($_POST['Q16input03']);
		if ($PQ16input03 == "No")
		{
			$PQ16check03 = true;
		}
	}
	
	if (empty($_POST['Q16textarea02']))
	{
		$PQ16textarea02 = "";
		if ($PQ16check03)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ16textarea02 = test_input($_POST['Q16textarea02']);
	}
	
	if (empty($_POST['Q17input01']))
	{
		$PQ17input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ17input01 = test_input($_POST['Q17input01']);
		if ($PQ17input01 == "Yes")
		{
			$PQ17check01 = true;
		}
	}
	
	if (empty($_POST['Q17textara01']))
	{
		$PQ17textarea01 = "";
		if ($PQ17check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ17textarea01 = test_input($_POST['Q17textarea01']);
	}
	
	if (empty($_POST['Q17input02']))
	{
		$PQ17input02 = "";
		if ($PQ17check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ17input02 = test_input($_POST['Q17input02']);
	}
	
	if (empty($_POST['Q18input01']))
	{
		$PQ18input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ18input01 = test_input($_POST['Q18input01']);
		if ($PQ18input01 == "Yes")
		{
			$PQ18check01 = true;
		}
	}
	
	if (empty($_POST['Q18textarea01']))
	{
		$PQ18textarea01 = "";
		if ($PQ18check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ18textarea01 = test_input($_POST['Q18textarea01']);
	}
	
	if (empty($_POST['Q19input01']))
	{
		$PQ19input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ19input01 = test_input($_POST['Q19input01']);
		if ($PQ19input01 == "Yes")
		{
			$PQ19check01 = true;	
		}
	}
	
	if (empty($_POST['Q19textarea01']))
	{
		$PQ19textarea01 = "";
		if ($PQ19check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ19textarea01 = test_input($_POST['Q19textarea01']);
	}
	
	if (empty($_POST['Q20input01']))
	{
		$PQ20input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ20input01 = test_input($_POST['Q20input01']);
		if ($PQ20input01 == "Yes")
		{
			$PQ20check01 = true;
		}
	}
	
	if (empty($_POST['Q20textarea01']))
	{
		$PQ20textarea01 = "";
		if ($PQ20check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ20textarea01 = test_input($_POST['Q20textarea01']);
	}
	
	if (empty($_POST['Q21input01']))
	{
		$PQ21input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ21input01 = test_input($_POST['Q21input01']);
		if ($PQ21input01 == "Yes")
		{
			$PQ21check01 = true;
		}
	}
	
	if (empty($_POST['Q21textarea01']))
	{
		$PQ21textarea01 = "";
		if ($PQ21check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ21textarea01 = test_input($_POST['Q21textarea01']);
	}
	
	if (empty($_POST['Q22input01']))
	{
		$PQ22input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ22input01 = test_input($_POST['Q22input01']);
		if ($PQ22input01 == "Yes")
		{
			$PQ22check01 = true;
		}
	}
	
	if (empty($_POST['Q22textarea01']))
	{
		$PQ22textarea01 = "";
		if ($PQ22check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ22textarea01 = test_input($_POST['Q22textarea01']);
	}
	
	if (empty($_POST['Q22input02']))
	{
		$PQ22input02 = "";
		if ($PQ22check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ22input02 = test_input($_POST['Q22input02']);
	}
	
	if (empty($_POST['Q22textarea02']))
	{
		$PQ22textarea02 = "";
		if ($PQ22check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ22textarea02 = test_input($_POST['Q22textarea02']);
	}
	
 /*End Section 4*/
 
 /*Section 5*/
 
	if (empty($_POST['Q23input01']))
	{
		$PQ23input01 = "";
		$SubValCheck = true;
	}
	else
	{
		$PQ23input01 = test_input($_POST['Q23input01']);
		if ($PQ23input01 == "Yes")
		{
			$PQ23check01 = true;
		}
	}
	
	if (empty($_POST['Q23input02']))
	{
		$PQ23input02 = "";
		if ($PQ23check01)
		{
			$SubValCheck = true;
		}
	}
	else
	{
		$PQ23input02 = test_input($_POST['Q23input02']);
	}
 
 /*End Section 5*/

	if (test_input($_POST['savesub']) == 'save')
	{
		$table = 'pdm_saves';
		$continueSubmit = true;
	}
	else if (!$SubValCheck)
	{
		$table = 'pdm_subs';
		$continueSubmit = true;
	}
	else if ((test_input($_POST['savesub']) == 'submit') && $SubValCheck)
	{
		$continueSubmit = false;
	}
	else
	{
		die('Error in determining table');
	}
	
	if($continueSubmit)
	{
		$sql = "INSERT INTO $table (Triage01, Triage02, Triage03, Triage04, Triage05, Triage06, Triage07, TriageJustify, Q1input01, Q2select01, Q2input02, Q3textarea01, Q3textarea02, Q3textarea03, Q4input01, Q4input02, Q4input03, Q4input04, Q4input05, Q4input06, Q5input01, Q5input02, Q5input03, Q5select01, Q5input04, Q5input05, Q5input06, Q5input07, Q5input08, Q5select02, Q5input09, Q5input10, Q5input11, Q5input12, Q5input13, Q5select03, Q5input14, Q5input15, Q5input16, Q5input17, Q5input18, Q5select04, Q5input19, Q5input20, Q5input21, Q5input22, Q5input23, Q5select05, Q5input24, Q5input25, Q5input26, Q5input27, Q5input28, Q5select06, Q5input29, Q5input30, Q6input01, Q6input02, Q6input03, Q6input04, Q6input05, Q6input06, Q7input01, Q8input01, Q9input01, Q9input02, Q10input01, Q10input02, Q10input03, Q10input04, Q10input05, Q10input06, Q10input07, Q10input08, Q10input09, Q10input10, Q10input11, Q10input12, Q10input13, Q10input14, Q10input15, Q11input01, Q11input02, Q12input01, Q12input02, Q13input01, Q13ainput01, Q13ainput02, Q13binput01, Q13binput02, Q13cinput01, Q13cinput02, Q13dinput01, Q14input01, Q14input02, Q15input01, Q15input02, Q16input01, Q16input02, Q16textarea01, Q16input03, Q16textarea02, Q17input01, Q17textarea01, Q17input02, Q18input01, Q18textarea01, Q19input01, Q19textarea01, Q20input01, Q20textarea01, Q21input01, Q21textarea01, Q22input01, Q22textarea01, Q22input02, Q22textarea02, Q23input01, Q23input02) 
				VALUES ('$Triage1', '$Triage2', '$Triage3', '$Triage4', '$Triage5', '$Triage6', '$Triage7', '$TriageJust', '$PQ1input01', '$PQ2select01', '$PQ2input02', '$PQ3textarea01', '$PQ3textarea02', '$PQ3textarea03', '$PQ4input01', '$PQ4input02', '$PQ4input03', '$PQ4input04', '$PQ4input05', '$PQ4input06', '$PQ5input01', '$PQ5input02', '$PQ5input03', '$PQ5select01', '$PQ5input04', '$PQ5input05', '$PQ5input06', '$PQ5input07', '$PQ5input08', '$PQ5select02', '$PQ5input09', '$PQ5input10', '$PQ5input11', '$PQ5input12', '$PQ5input13', '$PQ5select03', '$PQ5input14', '$PQ5input15', '$PQ5input16', '$PQ5input17', '$PQ5input18', '$PQ5select04', '$PQ5input19', '$PQ5input20', '$PQ5input21', '$PQ5input22', '$PQ5input23', '$PQ5select05', '$PQ5input24', '$PQ5input25', '$PQ5input26', '$PQ5input27', '$PQ5input28', '$PQ5select06', '$PQ5input29', '$PQ5input30', '$PQ6input01', '$PQ6input02', '$PQ6input03', '$PQ6input04', '$PQ6input05', '$PQ6input06', '$PQ7input01', '$PQ8input01', '$PQ9input01', '$PQ9input02', '$PQ10input01', '$PQ10input02', '$PQ10input03', '$PQ10input04', '$PQ10input05', '$PQ10input06', '$PQ10input07', '$PQ10input08', '$PQ10input09', '$PQ10input10', '$PQ10input11', '$PQ10input12', '$PQ10input13', '$PQ10input14', '$PQ10input15', '$PQ11input01', '$PQ11input02', '$PQ12input01', '$PQ12input02', '$PQ13input01', '$PQ13ainput01', '$PQ13ainput02', '$PQ13binput01', '$PQ13binput02', '$PQ13cinput01', '$PQ13cinput02', '$PQ13dinput01', '$PQ14input01', '$PQ14input02', '$PQ15input01', '$PQ15input02', '$PQ16input01', '$PQ16input02', '$PQ16textarea01', '$PQ16input03', '$PQ16textarea02', '$PQ17input01', '$PQ17textarea01', '$PQ17input02', '$PQ18input01', '$PQ18textarea01', '$PQ19input01', '$PQ19textarea01', '$PQ20input01', '$PQ20textarea01', '$PQ21input01', '$PQ21textarea01', '$PQ22input01', '$PQ22textarea01', '$PQ22input02', '$PQ22textarea02', '$PQ23input01', '$PQ23input02')";
	

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
	}
	else
	{
		print 'Application not submitted. Please ensure all required fields have been completed.';
	}

	mysql_close();
	}
?>

<div id="wrapper">
	<div id="header">
    
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="AppForm" id="AppForm" target="_self" dir="ltr" lang="en">
    <?php if(!isset($SubValCheck)) $SubValCheck = false; ?>
    <div id="form">
	  <br />
   	  <div id="QuestionTabs" class="TabbedPanels">
    	  <ul class="TabbedPanelsTabGroup">
            <li class="TabbedPanelsTab" tabindex="0"><h3>Intro</h3></li>
            <li class="TabbedPanelsTab" tabindex="0"><h3>Triage</h3></li>
			<li class="TabbedPanelsTab" tabindex="0"><h3>Section 1</h3></li>
			<li class="TabbedPanelsTab" tabindex="0"><h3>Section 2</h3></li>
			<li class="TabbedPanelsTab" tabindex="0"><h3>Section 3</h3></li>
			<li class="TabbedPanelsTab" tabindex="0"><h3>Section 4</h3></li>
			<li class="TabbedPanelsTab" tabindex="0"><h3>Section 5</h3></li>
			<li class="TabbedPanelsTab" tabindex="0"><h3>Section 6</h3></li>
  	    </ul>
    	  <div class="TabbedPanelsContentGroup">
          	<div class="TabbedPanelsContent"> <!-- Intro -->
					<p>Use this form to apply for ethical review of human research projects by Curtin University staff or student.
					Ethical review of research is a necessary pre-requisite for researching involving humans.This includes research
					that studies people, their data and tissues, and observation of people.
					Throughout this form you will find hyper-links to the relevant sections of the
					<a href="https://www.nhmrc.gov.au/book/national-statement-ethical-conduct-human-research-2007-updated-december-2013/chapter-2-3-qualif" target="_blank">National Statement on Ethical Conduct in Human Research and other relevant documents.</a></p>
						<br />
						<br />
						<p style="text-align:center"><b>INSTRUCTIONS FOR THE PRINCIPAL INVESTIGATOR</b></p>
						<br />
						<p style="text-decoration: underline; font-weight: bold;">Completing the Form</p>
						<p>Answer all questions. Please keep your answers concise, but informative and written in lay language.
						Based on the questions answered in the "Assessment of applications for ethics triage" your project will be categorised as either "Low Risk" or "Non-low Risk".
						"Low Risk" projects are assessed at the faculty level, "Non-low Risk" projects are assessed by the Human Research Ethics Committee at the next monthly meeting.
						You will be informed of the triage decision.</p>
						<br />
						<p style="text-decoration: underline; font-weight: bold;">Submitting the Application</p>
						<p>Submit the completed and signed application, and any attachments, to the Ethnics Support Officer for your faculty:</p>
						<ul>
							<li>Business: <u>ethicscbs@gmail.com</u></li>
							<li>Health Sciences: <u>ethicscbs@gmail.com</u></li>
							<li>Humanities: <u>ethicssae@gmail.com</u></li>
							<li>Science and Engineering: <u>ethicssae@gmail.com</u></li>
						</ul>
						<br />
						<p style="text-decoration: underline; font-weight: bold;">To submit the application</p>
						<br />
						<br />
						<p><u>Option 1:</u> Attach the application, all the emails from the Co-investigators which serve as their signature
						(see Section 7 - upload these as a pdf) and all other necessary documents to an email. The Principal Investigator
						forwards the email with all attachments and the application form onto the Head of School/Area. The HOS/A then
						approves by forwarding the email trail (which shows it was sent by the PI), with attachments to the appropriate
						Ethics Support Officer.
						<br />
						<br />
						<u>Option 2:</u> Obtain original signatures from the PI and HOS/A. You can either obtain original signatures from
						the CI, or you can attach an email from the CI which serves as their signature(see Section 7). Submit <b>one
						single-sided copy of all documents with no staples</b>, to the Ethics Office, Room 108, Building 100.</p>
					<br />
					<p style="font-weight: bold;">Need help completing this form?</p>
					<br />
					<p>Contact your Ethics Support Officer or the Ethics Office via email at cuhumanethics@gmail.com .</p>
					<div id="headerColours">
						Do not commence research until written approval has been received from the Human Ethics Office
					</div>
					<br />
				</div>
    	    <div class="TabbedPanelsContent"> <!-- Triage -->
<p>According to section 5.1.6 (b) of the National Statement if your study involves any of the following groups the project MUST be reviewed by the HREC.<br /><br /></p>
    <table width="800" border="1">
      <tr>
        <td>
            <h4>Does the study include any of the ten following types of research and/or participants?</h4>
        </td>
        <td>
            <div id="formCheckBox">
                <h4>No</h4>
            </div>
        </td>
        <td>
            <div id="formCheckBox">
                <h4>Yes</h4>
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <p><label class="normal" id="Triage01L"><span class="red">*</span></label>Interventions and therapies, including clinical and non-clinical trials</p>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage01" <?php if (isset($Triage1) && $Triage1=="No") echo "checked";?> onClick="triage1UD();" value="No" id="Triage01_no" />
            </div>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage01" <?php if (isset($Triage1) && $Triage1=="Yes") echo "checked";?> onClick="triage1UD();" value="Yes" id="Triage01_yes" />
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <p><label class="normal" id="Triage02L"><span class="red">*</span></label>Human genetics</p>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage02" <?php if (isset($Triage2) && $Triage2=="No") echo "checked";?> onClick="triage2UD();" value="No" id="Triage02_no" />
            </div>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage02" <?php if (isset($Triage2) && $Triage2=="Yes") echo "checked";?> onClick="triage2UD();" value="Yes" id="Triage02_yes" />
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <p><label class="normal" id="Triage03L"><span class="red">*</span></label>Women who are pregnant and/or the human fetus</p>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage03" <?php if (isset($Triage3) && $Triage3=="No") echo "checked";?> onClick="triage3UD();" value="No" id="Triage03_no" />
            </div>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage03" <?php if (isset($Triage3) && $Triage3=="Yes") echo "checked";?> onClick="triage3UD();" value="Yes" id="Triage03_yes" />
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <p><label class="normal" id="Triage04L"><span class="red">*</span></label>People who are highly dependent on medical care who may be unable to give consent</p>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage04" <?php if (isset($Triage4) && $Triage4=="No") echo "checked";?> onClick="triage4UD();" value="No" id="Triage04_no" />
            </div>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage04" <?php if (isset($Triage4) && $Triage4=="Yes") echo "checked";?> onClick="triage4UD();" value="Yes" id="Triage04_yes" />
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <p><label class="normal" id="Triage05L"><span class="red">*</span></label>People with a cognitive impairment, intellectual disability or a mental illness</p>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage05" <?php if (isset($Triage5) && $Triage5=="No") echo "checked";?> onClick="triage5UD();" value="No" id="Triage05_no" />
            </div>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage05" <?php if (isset($Triage5) && $Triage5=="Yes") echo "checked";?> onClick="triage5UD();" value="Yes" id="Triage05_yes" />
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <p><label class="normal" id="Triage06L"><span class="red">*</span></label>Research specifically targeting Aboriginal or Torres Strait Islanders</p>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage06" <?php if (isset($Triage6) && $Triage6=="No") echo "checked";?> onClick="triage6UD();" value="No" id="Triage06_no" />
            </div>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage06" <?php if (isset($Triage6) && $Triage6=="Yes") echo "checked";?> onClick="triage6UD();" value="Yes" id="Triage06_yes" />
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <p><label class="normal" id="Triage07L"><span class="red">*</span></label>People who may be involved in illegal activities</p>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage07" <?php if (isset($Triage7) && $Triage7=="No") echo "checked";?> onClick="triage7UD();" value="No" id="Triage07_no" />
            </div>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage07" <?php if (isset($Triage7) && $Triage7=="Yes") echo "checked";?> onClick="triage7UD();" value="Yes" id="Triage07_yes" />
            </div>
        </td>
      </tr>
    </table>
    <p><br /><label class="normal" id="TriageJustL"><span class="red">*</span></label>A "yes" response to any of the above questions would normally indicate your project is not eligible for a Low or Negligible Risk review. However, a "Yes" answer does not necessarily, automatically, preclude the research from being reviewed through a low risk review process. If you answered "yes" to any of the above questions and you think your study should be reviewed through the low risk process please justify why in the space below.</p>
    <textarea name="TriageJustify" cols="205" rows="7" id="TriageJustify" onchange="triageJustUD();" disabled="disabled"><?php if (isset($TriageJust)) echo $TriageJust; else echo "";?></textarea>
    </div>
            <div class="TabbedPanelsContent"> <!-- Section 1 -->
				<table id="section">
				  <tr>
  				 	 <td>SECTION 1 - General Information</td>
				  </tr>
				</table>
				<br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol"><label class="normal" id="Q1input01L"><span class="red">*</span></label>1</th>
						<th id="rightcol">Project Title</th>
					</tr>
				</table>
				<input name="Q1input01" onBlur="Q1input01UD();" maxlength="30" style="border: 1px solid black" type="text" size="118" id ="Q1input01" value="<?php echo ""; if (isset($PQ1input01)) echo $PQ1input01; ?>" />
                <br />
				<br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol"><label class="normal" id="Q2select01L"><span class="red">*</span></label>2</th>
						<th id="rightcol">Please indicate the type of project</th>
					</tr>
				</table>
				<br />
				<table id="projecttypetable">
					<tr>
						<td id="projecttype1">
						<select name="Q2select01" id="Q2select01" onChange="Q2select01UD();">
						  <option value="choose" <?php if(isset($PQ2select01) && $PQ2select01 == "choose") {echo "selected=\"selected\"";} ?>>Please Choose</option>
						  <option value="stfPrj" <?php if(isset($PQ2select01) && $PQ2select01 == "stfPrj") {echo "selected=\"selected\"";} ?>>Staff Project</option>
						  <option value="ugrad" <?php if(isset($PQ2select01) && $PQ2select01 == "ugrad") {echo "selected=\"selected\"";} ?>>Undergraduate other than honours (no candidacy required)</option>
						  <option value="hnrs" <?php if(isset($PQ2select01) && $PQ2select01 == "hnrs") {echo "selected=\"selected\"";} ?>>Honours (no candidacy required)</option>
						  <option value="mstsCrs" <?php if(isset($PQ2select01) && $PQ2select01 == "mstsCrs") {echo "selected=\"selected\"";} ?>>Masters by coursework (no candidacy required)</option>
						  <option value="mstsRsch" <?php if(isset($PQ2select01) && $PQ2select01 == "mstsRsch") {echo "selected=\"selected\"";} ?>>Masters by research (candidacy required)</option>
						  <option value="phd" <?php if(isset($PQ2select01) && $PQ2select01 == "phd") {echo "selected=\"selected\"";} ?>>PhD (candidacy required)</option>
						  <option value="other" <?php if(isset($PQ2select01) && $PQ2select01 == "other") {echo "selected=\"selected\"";} ?>>Other (specify)</option>
                        </select>
						</td>
						<td id="projecttype3" ><label class="normal" id="Q2input01L"><span class="red">*</span></label><input name="Q2input01" type="text" id="Q2input01" onBlur="Q2input01UD();" value="<?php if(isset($PQ2input01)) {echo $PQ2input01;} else {echo "Other";} ?>" size="40" maxlength="40" disabled="disabled" /></td>
					</tr>
				</table>
                <br />
				<br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol">3</th>
						<th id="rightcol">Project Summary
						<br />
						<p style="margin-left:-8px"><i>Give a concise and simple description, in plain language, of the study in each of the sections below</i></p>
						</th>
					</tr>
				</table>
				<br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol"><label class="normal" id="Q3textarea01L"><span class="red">*</span></label>3a</th>
						<th id="rightcol">Background
						<br />
						<p style="margin-left:-8px"><i>(No more than 200 words).</i></p>
						</th>
					</tr>
				</table>
				<textarea name="Q3textarea01" maxlength="900" rows="10" cols="116" onBlur="Q3textarea01UD();" id="Q3textarea01"><?php if (isset($PQ3textarea01))echo $PQ3textarea01; ?></textarea>
				<br /><br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol"><label class="normal" id="Q3textarea02L"><span class="red">*</span></label>3b</th>
						<th id="rightcol">Aims and hypothesis</th>
					</tr>
				</table>
				<textarea name="Q3textarea02" maxlength="900" rows="4" cols="116" onBlur="Q3textarea02UD();" id="Q3textarea02"><?php if (isset($PQ3textarea02))echo $PQ3textarea02; ?></textarea>
				<br /><br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol"><label class="normal" id="Q3textarea03L"><span class="red">*</span></label>3c</th>
						<th id="rightcol">Methods
						<br />
						<p style="margin-left:-8px"><i>(No more than 200 words).</i></p>
						</th>
					</tr>
				</table>
				<textarea name="Q3textarea03" maxlength="900" rows="16" cols="116" onBlur="Q3textarea03UD();" id="Q3textarea03"><?php if (isset($PQ3textarea03))echo $PQ3textarea03; ?></textarea>
                <br />
				<br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol">4</th>
						<th id="rightcol">Principle Investigator
						<br />
						<p style="margin-left:-8px"><i>The principle investigator must be a Curtin staff member. If this application is for a student project the principal investigator must be one of the student's supervisors.</i></p>
						</th>
					</tr>
				</table>
				<table style="width: 75%;border-collapse:collapse">
					<tr>
						<td style="border: 1px solid black;border-top: none"><label class="normal" id="Q4input01L"><span class="red">*</span></label>Name (include title)</td>
						<td style="border: 1px solid black;width: 35%;border-top: none"> <input name="Q4input01" type="text" id="Q4input01" onBlur="Q4input01UD();" value="<?php if (isset($PQ4input01))echo $PQ4input01; ?>" size="30" maxlength="30" /> </td>
						<td style="border: 1px solid black;width: 25%;border-top: none"><label class="normal" id="Q4input02L"><span class="red">*</span></label>Staff ID</td>
						<td style="border: 1px solid black;width: 15%;border-top: none"> <input name="Q4input02" type="text" id="Q4input02" onBlur="Q4input02UD();" value="<?php if (isset($PQ4input02))echo $PQ4input02; ?>" maxlength="10" /> </td>
					</tr>
				</table>
				<table style="width:75%;border-collapse:collapse">
					<tr>
						<td style="border: 1px solid black;width:19.5%;border-top: none"><label class="normal" id="Q4input03L"><span class="red">*</span></label>School, Centre or Area</td>
						<td style="border: 1px solid black;width:70%;border-top: none"> <input name="Q4input03" type="text" id="Q4input03" onBlur="Q4input03UD();" value="<?php if (isset($PQ4input03))echo $PQ4input03; ?>" size="75" maxlength="50" /> </td>
					</tr>
				</table>
				<table style="width:75%;border-collapse:collapse">
					<tr>
						<td style="border: 1px solid black;width:22.5%;border-top: none"><label class="normal" id="Q4input04L"><span class="red">*</span></label>Telephone <small>Include area code (no brackets or spaces)</small></td>
						<td style="border: 1px solid black;width:25%;border-top: none"> <input name="Q4input04" type="text" id="Q4input04" onBlur="Q4input04UD();" value="<?php if (isset($PQ4input04))echo $PQ4input04; ?>" size="30" maxlength="10"/> </td>
						<td style="border: 1px solid black;width:12.5%;border-top: none"><label class="normal" id="Q4input05L"><span class="red">*</span></label>Email</td>
						<td style="border: 1px solid black;width:40%;border-top: none"> <input name="Q4input05" type="text" id="Q4input05" onBlur="Q4input05UD();" value="<?php if (isset($PQ4input05))echo $PQ4input05; ?>" size="30" maxlength="60"/> </td>
					</tr>
				</table>
				<table style="width:75%;border-collapse:collapse">
					<tr>
						<td style="border: 1px solid black;width:70%;border-top: none">SOL Research Integrity Professional Development Program training complete (Note: this is a requirement of approval. See section 6.)</td>
						<td style="border: 1px solid black;width:30%;border-top: none"><label class="normal" id="Q4input06L"><span class="red">*</span></label> <input name="Q4input06" id="Q4input06" type="checkbox" onClick="Q4input06UD();" size="30" <?php if (isset($PQ4input06) && $PQ4input06=="Yes") echo "checked";?> value="Yes"> Yes-certificate attatched</input> </td>
					</tr>
				</table>
                <br />
				<br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol">5</th>
						<th id="rightcol">Co Investigators
						<br />
						<p style="margin-left:-8px"><i>Please use additional pages for more co-investigators. If candidacy is approved please attatch a copy. Note: candidacy should be approved before an ethics application is submitted. Note: All Curtin staff and students MUST complete the SOL Research Integrity Professional Development Program training-this is a requirement of approval-attatch your certificate</i></p>
						</th>
					</tr>
				</table>
				<table style="width:75%;border-collapse:collapse">
					<tr>
						<td style="border: 1px solid black;width:25%;border-top: none"><small>Name (include title)</small></td>
						<td style="border: 1px solid black;width:25%;border-top: none"><small>School, Centre, Area, University or Institution</small></td>
						<td style="border: 1px solid black;width:15%;border-top: none"><small>Staff ID or Student ID</small></td>
						<td style="border: 1px solid black;width:15%;border-top: none"><small>Role (CI, supervisor, student)</small></td>
						<td style="border: 1px solid black;width:10%;border-top: none"><small>Candidacy approved</small></td>
						<td style="border: 1px solid black;width:20%;border-top: none"><small>Research Integrity training complete</small></td>
					</tr>
					<tr>
                        <td style="border:1px solid black"> <input name="Q5input01" type="text" value="<?php if (isset($PQ5input01))echo $PQ5input01; ?>" maxlength="30" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input02" type="text" value="<?php if (isset($PQ5input02))echo $PQ5input02; ?>" maxlength="50" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input03" type="text" value="<?php if (isset($PQ5input03))echo $PQ5input03; ?>" maxlength="10" /> </td>
                        <td style="border:1px solid black">
                            <select name="Q5select01">
                              <option value="choose" <?php if (isset($PQ5select01) && $PQ5select01 == "choose"){echo "selected=\"selected\"";} ?>>Please Choose</option>
                              <option value="CI" <?php if (isset($PQ5select01) && $PQ5select01 == "CI"){echo "selected=\"selected\"";} ?>>Co-Investigator</option>
                              <option value="sup" <?php if (isset($PQ5select01) && $PQ5select01 == "sup"){echo "selected=\"selected\"";} ?>>Supervisor</option>
                              <option value="stud" <?php if (isset($PQ5select01) && $PQ5select01 == "stud"){echo "selected=\"selected\"";} ?>>Student</option>
                            </select>
                        </td>
						<td style="border:1px solid black"> <input name="Q5input04" type="checkbox" <?php if (isset($PQ5input04) && $PQ5input04=="Yes") echo "checked";?> value="Yes" /> </td>
						<td style="border:1px solid black"> <input name="Q5input05" type="checkbox" <?php if (isset($PQ5input05) && $PQ5input05=="Yes") echo "checked";?> value="Yes" /> </td>
					</tr>
					<tr>
                        <td style="border:1px solid black"> <input name="Q5input06" type="text" value="<?php if (isset($PQinput06)) echo $PQ5input06; ?>" maxlength="30" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input07" type="text" value="<?php if (isset($PQinput07))echo $PQ5input07; ?>" maxlength="50" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input08" type="text" value="<?php if (isset($PQinput08))echo $PQ5input08; ?>" maxlength="10" /> </td>
                        <td style="border:1px solid black">
                            <select name="Q5select02">
                              <option value="choose" <?php if(isset($PQ5select02) && $PQ5select02 == "choose"){echo "selected=\"selected\"";} ?>>Please Choose</option>
                              <option value="CI" <?php if(isset($PQ5select02) && $PQ5select02 == "CI"){echo "selected=\"selected\"";} ?>>Co-Investigator</option>
                              <option value="sup" <?php if(isset($PQ5select02) && $PQ5select02 == "sup"){echo "selected=\"selected\"";} ?>>Supervisor</option>
                              <option value="stud" <?php if(isset($PQ5select02) && $PQ5select02 == "stud"){echo "selected=\"selected\"";} ?>>Student</option>
                            </select>
                        </td>
						<td style="border:1px solid black"> <input name="Q5input09" type="checkbox" <?php if (isset($PQ5input09) && $PQ5input09=="Yes") echo "checked";?> value="Yes" /> </td>
						<td style="border:1px solid black"> <input name="Q5input10" type="checkbox" <?php if (isset($PQ5input10) && $PQ5input10=="Yes") echo "checked";?> value="Yes" /> </td>
					</tr>
					<tr>
                        <td style="border:1px solid black"> <input name="Q5input11" type="text" value="<?php if (isset($PQ5input11)) echo $PQ5input11; ?>" maxlength="30" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input12" type="text" value="<?php if (isset($PQ5input12))echo $PQ5input12; ?>" maxlength="50" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input13" type="text" value="<?php if (isset($PQ5input13))echo $PQ5input13; ?>" maxlength="10" /> </td>
                        <td style="border:1px solid black">
                            <select name="Q5select03">
                              <option value="choose" <?php if(isset($PQ5select03) && $PQ5select03 == "choose"){echo "selected=\"selected\"";} ?>>Please Choose</option>
                              <option value="CI" <?php if(isset($PQ5select03) && $PQ5select03 == "CI"){echo "selected=\"selected\"";} ?>>Co-Investigator</option>
                              <option value="sup" <?php if(isset($PQ5select03) && $PQ5select03 == "sup"){echo "selected=\"selected\"";} ?>>Supervisor</option>
                              <option value="stud" <?php if(isset($PQ5select03) && $PQ5select03 == "stud"){echo "selected=\"selected\"";} ?>>Student</option>
                            </select>
                        </td>
                        <td style="border:1px solid black"> <input name="Q5input14" type="checkbox" <?php if (isset($PQ5input14) && $PQ5input14=="Yes") echo "checked";?> value="Yes" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input15" type="checkbox" <?php if (isset($PQ5input15) && $PQ5input15=="Yes") echo "checked";?> value="Yes" /> </td>
					</tr>
					<tr>
                        <td style="border:1px solid black"> <input name="Q5input16" type="text" value="<?php if (isset($PQ5input16))echo $PQ5input16; ?>" maxlength="30" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input17" type="text" value="<?php if (isset($PQ5input17))echo $PQ5input17; ?>" maxlength="50" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input18" type="text" value="<?php if (isset($PQ5input18))echo $PQ5input18; ?>" maxlength="10" /> </td>
                        <td style="border:1px solid black">
                            <select name="Q5select04">
                              <option value="choose" <?php if(isset($PQ5select04) && $PQ5select04 == "choose"){echo "selected=\"selected\"";} ?>>Please Choose</option>
                              <option value="CI" <?php if(isset($PQ5select04) && $PQ5select04 == "CI"){echo "selected=\"selected\"";} ?>>Co-Investigator</option>
                              <option value="sup" <?php if(isset($PQ5select04) && $PQ5select04 == "sup"){echo "selected=\"selected\"";} ?>>Supervisor</option>
                              <option value="stud" <?php if(isset($PQ5select04) && $PQ5select04 == "stud"){echo "selected=\"selected\"";} ?>>Student</option>
                            </select>
                        </td>
                        <td style="border:1px solid black"> <input name="Q5input19" type="checkbox" <?php if (isset($PQ5input19) && $PQ5input19=="Yes") echo "checked";?> value="Yes" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input20" type="checkbox" <?php if (isset($PQ5input20) && $PQ5input20=="Yes") echo "checked";?> value="Yes" /> </td>
					</tr>
					<tr>
                        <td style="border:1px solid black"> <input name="Q5input21" type="text" value="<?php if (isset($PQ5input21)) echo $PQ5input21; ?>" maxlength="30" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input22" type="text" value="<?php if (isset($PQ5input22))echo $PQ5input22; ?>" maxlength="50" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input23" type="text" value="<?php if (isset($PQ5input23))echo $PQ5input23; ?>" maxlength="10" /> </td>
                        <td style="border:1px solid black">
                            <select name="Q5select05">
                              <option value="choose" <?php if(isset($PQ5select05) && $PQ5select05 == "choose"){echo "selected=\"selected\"";} ?>>Please Choose</option>
                              <option value="CI" <?php if(isset($PQ5select05) && $PQ5select05 == "CI"){echo "selected=\"selected\"";} ?>>Co-Investigator</option>
                              <option value="sup" <?php if(isset($PQ5select05) && $PQ5select05 == "sup"){echo "selected=\"selected\"";} ?>>Supervisor</option>
                              <option value="stud" <?php if(isset($PQ5select05) && $PQ5select05 == "stud"){echo "selected=\"selected\"";} ?>>Student</option>
                            </select>
                        </td>
                        <td style="border:1px solid black"> <input name="Q5input24" type="checkbox" <?php if (isset($PQ5input24) && $PQ5input24=="Yes") echo "checked";?> value="Yes" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input25" type="checkbox" <?php if (isset($PQ5input25) && $PQ5input25=="Yes") echo "checked";?> value="Yes" /> </td>
					</tr>
					<tr>
                        <td style="border:1px solid black"> <input name="Q5input26" type="text" value="<?php if (isset($PQ5input26)) echo $PQ5input26; ?>" maxlength="30" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input27" type="text" value="<?php if (isset($PQ5input27))echo $PQ5input27; ?>" maxlength="50" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input28" type="text" value="<?php if (isset($PQ5input28))echo $PQ5input28; ?>" maxlength="10" /> </td>
                        <td style="border:1px solid black">
                            <select name="Q5select06">
                              <option value="choose" <?php if(isset($PQ5select06) && $PQ5select06 == "choose"){echo "selected=\"selected\"";} ?>>Please Choose</option>
                              <option value="CI" <?php if(isset($PQ5select06) && $PQ5select06 == "CI"){echo "selected=\"selected\"";} ?>>Co-Investigator</option>
                              <option value="sup" <?php if(isset($PQ5select06) && $PQ5select06 == "sup"){echo "selected=\"selected\"";} ?>>Supervisor</option>
                              <option value="stud" <?php if(isset($PQ5select06) && $PQ5select06 == "stud"){echo "selected=\"selected\"";} ?>>Student</option>
                            </select>
                        </td>
                        <td style="border:1px solid black"> <input name="Q5input29" type="checkbox" <?php if (isset($PQ5input29) && $PQ5input29=="Yes") echo "checked";?> value="Yes" /> </td>
                        <td style="border:1px solid black"> <input name="Q5input30" type="checkbox" <?php if (isset($PQ5input30) && $PQ5input30=="Yes") echo "checked";?> value="Yes" /> </td>
					</tr>
				</table>
                <br />
				<br />
                <table id="sectionsub">
					<tr>
						<th id="leftcol">6</th>
						<th id="rightcol">Contact Person</th>
					</tr>
				</table>
				<table style="width: 75%;border-collapse:collapse">
					<tr>
						<td style="border: 1px solid black;border-top:none;width:5.9%"> <input name="Q6input01" type="checkbox" onClick="Q6input01UD();" <?php if (isset($PQ6input01) && $PQ6input01=="Yes") echo "checked";?> value="Yes" /> </td>
						<td style="border: 1px solid black;border-top:none;width:93.9%">Use Principle Investigators details.</td>
					</tr>
				</table>
				<table style="width: 75%;border-collapse:collapse">
					<tr>
						<td style="border: 1px solid black;border-top:none;width:20%"><label class="normal" id="Q6input02L"><span class="red">*</span></label>Name (include title)</td>
						<td style="border: 1px solid black;border-top:none;width:30%"> <input name="Q6input02" type="text" id="Q6input02" onBlur="Q6input02UD();" value="<?php if (isset($PQ6input02))echo $PQ6input02; ?>" maxlength="30" /></td>
						<td style="border: 1px solid black;border-top:none;width:20%"><label class="normal" id="Q6input03L"><span class="red">*</span></label>Staff ID</td>
						<td style="border: 1px solid black;border-top:none;width:30%"> <input name="Q6input03" type="text" id="Q6input03" onBlur="Q6input03UD();" value="<?php if (isset($PQ6input03))echo $PQ6input03; ?>" maxlength="10" /></td>
					</tr>
				</table>
				<table style="width: 75%;border-collapse:collapse">
					<tr>
						<td style="border: 1px solid black;border-top:none;width:20%"><label class="normal" id="Q6input04L"><span class="red">*</span></label>School, Centre or Area</td>
						<td style="border: 1px solid black;border-top:none;width:80%"> <input name="Q6input04" type="text" id="Q6input04" onBlur="Q6input04UD();" value="<?php if (isset($PQ6input04))echo $PQ6input04; ?>" size="80" maxlength="50" /></td>
					</tr>
				</table>
				<table style="width: 75%;border-collapse:collapse">
					<tr>
						<td style="border: 1px solid black;border-top:none;width:20%"><label class="normal" id="Q6input05L"><span class="red">*</span></label>Telephone <small>Include area code (no brackets or spaces)</small></td>
						<td style="border: 1px solid black;border-top:none;width:20%"> <input name="Q6input05" type="text" id="Q6input05" onBlur="Q6input05UD();" value="<?php if (isset($PQ6input05))echo $PQ6input05; ?>" maxlength="10" /></td>
						<td style="border: 1px solid black;border-top:none;width:8%"><label class="normal" id="Q6input06L"><span class="red">*</span></label>Email</td>
						<td style="border: 1px solid black;border-top:none;width:51%"> <input name="Q6input06" type="text" id="Q6input06" onBlur="Q6input06UD();" value="<?php if (isset($PQ6input06))echo $PQ6input06; ?>" size="50" maxlength="60" /></td>
					</tr>
				</table>
				<br />
				<table id="section">
				  <tr>
  				 	 <td>End of Section 1</td>
				  </tr>
				</table>
			</div>
            <div class="TabbedPanelsContent"> <!-- Section 2 -->
            <table id="section">
                <tr>
                	<td>SECTION 2 – Themes in research ethics: Risk and benefit, consent</td>
                </tr>
            </table>
            <br />
            <table id="sectionsub">
                <tr>
                    <th id="leftcol"><label class="normal" id="Q7input01L"><span class="red">*</span></label>7</th>
                    <th id="rightcol">Potential harm or risk to participants</th>
                </tr>
            </table>
            <p><i>Outline the potential risks to participants. If potential risks are identified please explain how this research justifies the burden and risk to participants (<a href="https://www.nhmrc.gov.au/book/chapter-2-1-risk-and-benefit" target="_blank">NS 2.1</a>).
            <br />
			Consider illness or injury, potential side effects, but also include potential embarrassment, economic loss, exposure to prosecution, anything stressful, noxious or unpleasant, and complaints. Ensure you address these in your Participant Information Statement.
            <br />
			Some examples of risks/expected adverse events (See Adverse Event Guidelines for more information) may include:</i></p>
            <i>  
            <ul>
                <li>For a drug-intervention clinical trial there will be side effects of the drug.</li>
                <li>For psychological based studies risks may be psychological stress due to the assessment;  there may be a potential for increased risk of suicidality or self-harm; there may be a potential for worsening of psychological disorder etc.</li>
            </ul>
            </i>
            <textarea name="Q7input01" id="Q7input01" onBlur="Q7input01UD();" cols="205" rows="7"><?php if (isset($PQ7input01))echo $PQ7input01; ?></textarea>
            <br />
            <br />
			<table id="sectionsub">
                <tr>
                    <th id="leftcol"><label class="normal" id="Q8input01L"><span class="red">*</span></label>8</th>
                    <th id="rightcol">Risk management strategy</th>
                </tr>
            </table>
            <p><i>Please outline how you will mitigate the risks identified above and your plan of action for expected adverse events and other identified risks. 
            Please also outline your plan of action for unexpected adverse events. The Human Research Ethics Office will use this information and follow this procedure 
            should an event or complaint occur. Please refer to Adverse Event Guidelines for more information.</i></p>
            <br />
            <textarea name="Q8input01" id="Q8input01" onBlur="Q8input01UD();" cols="205" rows="7"><?php if (isset($PQ8input01))echo $PQ8input01; ?></textarea>
            <br />
			<br />
			<table id = "sectionsub">
                <tr>
                    <th id="leftcol"><label class="normal" id="Q9input01L"><span class="red">*</span></label>9</th>
                    <th id ="rightcol">Will participants be given financial or non-financial incentives?</th>
                </tr>
            </table>
            <table width = 800>
            	<tr>
            		<td>
            			<div id="formCheckBox">
            				<input type="radio" name="Q9input01" onClick="Q9input01UD();" <?php if (isset($PQ9input01) && $PQ9input01=="No") echo "checked";?> value="No" id="Q9input01_no" />No
            			</div>
            		</td>
            	</tr>
            	<tr>
            		<td>
                        <div id="formCheckBox">
                            <input type="radio" name="Q9input01" onClick="Q9input01UD();" <?php if (isset($PQ9input01) && $PQ9input01=="Yes") echo "checked";?> value="Yes" id="Q9input01_yes" />Yes
                        </div>
                    </td>
                </tr>
            </table>
            <p><i><label class="normal" id="Q9input02L"><span class="red">*</span></label>If yes, please provide details below. If a prize is used please indicate the prize and the chances of winning this prize in the space below 
            and in the Participant Information Statement. Please refer to the <a href="http://legal.curtin.edu.au/comps/" target="_blank">Competitions Toolkit</a> for further guidance on prizes. Details of the 
            incentives should not be detailed on the recruitment material; however this information may be included in the Participants Information 
            Statement.</i></p>
            <textarea name="Q9input02" id="Q9input02" onBlur="Q9input02UD();" disabled="disabled" cols="205" rows="7"><?php if (isset($PQ9input02))echo $PQ9input02; ?></textarea>
            <br />
			<br />
			<table id = "sectionsub">
                <tr>
                    <th id="leftcol">10</th>
                    <th id ="rightcol">Please select how you are going to recruit participants (select all that apply) and in the space below describe your recruitment process.</th>
                </tr>
            </table>
            <p><i>When you are describing your recruitment processes please indicate who is going to talk to the potential participants, how they contact the researcher or the researcher contacts them etc. 
            If you are using telephone calls, flyers, social media, radio announcements etc., please provide a copy of the information and/or a transcript. 
            If you are using any form of print media (e.g. flyers, newsletters, social media etc.) you need to put the ethics approval number and the Curtin logo on the 
            document. Please refer to the <a href="http://brand.curtin.edu.au/" target="_blank">Curtin Brand website</a> for information on advertising.</i></p>
            <br />
			<table width="1220" border="1">
            <tr>
                <td width="40">
                	<div id="formCheckBox">
                    	<input name="Q10input01" type="checkbox" <?php if (isset($PQ10input01) && $PQ10input01=="Yes") echo "checked";?> value="Yes" />
                    </div>
                </td>
                <td width="220"><p>Database/medical records <i>(please describe the source):</i></p></td>
                <td width="350">
                	<textarea name="Q10input02" cols="45" rows="4"><?php if (isset($PQ10input02))echo $PQ10input02; ?></textarea>
                </td>
                <td width="40">
                	<div id="formCheckBox">
                    	<input name="Q10input03" type="checkbox" <?php if (isset($PQ10input03) && $PQ10input03=="Yes") echo "checked";?> value="Yes" />
                    </div>
                </td>
                <td width="220"><p>Snowball recruitment or word of mouth etc. <i>(please list):</i></p></td>
                <td width="350">
                	<textarea name="Q10input04" cols="45" rows="4"><?php if (isset($PQ10input04))echo $PQ10input04; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                	<div id="formCheckBox">
                    	<input name="Q10input05" type="checkbox" <?php if (isset($PQ10input05) && $PQ10input05=="Yes") echo "checked";?> value="Yes" />
                    </div>
                </td>
                <td><p>Social media including Facebook, Yammer, LinkedIn, Twitter etc. <i>(please list):</i></p></td>
                <td>
                	<textarea name="Q10input06" cols="45" rows="4"><?php if (isset($PQ10input06))echo $PQ10input06; ?></textarea>
                </td>
                <td>
                	<div id="formCheckBox">
                    	<input name="Q10input07" type="checkbox" <?php if (isset($PQ10input07) && $PQ10input07=="Yes") echo "checked";?> value="Yes" />
                    </div>
                </td>
                <td><p>Print media including flyers, newspapers, newsletters etc. <i>(please list sources):</i></p></td>
                <td>
                	<textarea name="Q10input08" cols="45" rows="4"><?php if (isset($PQ10input08))echo $PQ10input08; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                	<div id="formCheckBox">
                    	<input name="Q10input09" type="checkbox" <?php if (isset($PQ10input09) && $PQ10input09=="Yes") echo "checked";?> value="Yes" />
                    </div>
                </td>
                <td><p>Classroom or hospital or clinic or community groups etc. <i>(please list sources):</i></p></td>
                <td>
                	<textarea name="Q10input10" cols="45" rows="4"><?php if (isset($PQ10input10))echo $PQ10input10; ?></textarea>
                </td>
                <td>
                	<div id="formCheckBox">
                    	<input name="Q10input11" type="checkbox" <?php if (isset($PQ10input11) && $PQ10input11=="Yes") echo "checked";?> value="Yes" />
                    </div>
                </td>
                <td><p>Radio/television <i>(please list sources):</i></p></td>
                <td>
                	<textarea name="Q10input12" cols="45" rows="4"><?php if (isset($PQ10input12))echo $PQ10input12; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                	<div id="formCheckBox">
                    	<input name="Q10input13" type="checkbox" <?php if (isset($PQ10input13) && $PQ10input13=="Yes") echo "checked";?> value="Yes" />
                    </div>
                </td>
                <td><p>Other <i>(please describe):</i></p></td>
                <td colspan="4">
                	<input name="Q10input14" type="text" size="145" maxlength="145" value="<?php if (isset($PQ10input14))echo $PQ10input14; ?>"/>
                </td>
              </tr>
            <tr>
                <td colspan="6">
                	<textarea name="Q10input15" cols="45" rows="4"><?php if (isset($PQ10input15))echo $PQ10input15; ?></textarea>
                </td>
              </tr>
            </table>
            <br />
			<br />
			<table id = "sectionsub">
                <tr>
                    <th id="leftcol">11</th>
                    <th id ="rightcol">Will participants provide consent? (<a href="https://www.nhmrc.gov.au/book/chapter-2-2-general-requirements-consent" target="_blank">NS 2.2</a>, <a href="https://www.nhmrc.gov.au/book/national-statement-ethical-conduct-human-research-2007-updated-december-2013/chapter-2-3-qualif" target="_blank">NS 2.3</a>)</th>
                </tr>
            </table>
            <p><i>Please provide a copy of the Participant Information Statement and Consent Forms. If you are recruiting children provide a Parent Information Statement 
            and Consent Form, and a Child Information Statement and Assent Form if appropriate (See section 6). If you are using secondary data and therefore consent is not required, select "no" and provide an explanation in the space below.</i></p>
            <table width = 800>
                <tr>
                    <td>
                    	<div id="formCheckBox">
                    		<input type="radio" name="Q11input01" <?php if (isset($PQ11input01) && $PQ11input01=="No") echo "checked";?> value="No" id="Q11input01_no" />No - <i>please address section 2.3 of the National Statement below</i>
                    	</div>
                    </td>
                    <td>
                    	<div id="formCheckBox">
                    		<input type="radio" name="Q11input01" <?php if (isset($PQ11input01) && $PQ11input01=="Yes") echo "checked";?> value="Yes" id="Q11input01_yes" />Yes - <i>please describe below how you will obtain consent.</i>
                    	</div>
                    </td>
                </tr>
            </table>
			<textarea name="Q11input02" cols="205" rows="7"required><?php if (isset($PQ11input02))echo $PQ11input02; ?></textarea>
            <br />
			<br />
			<table id = "sectionsub">
                <tr>
                    <th id="leftcol"><label class="normal" id="Q12input01L"><span class="red">*</span></label>12</th>
                    <th id ="rightcol">Does the research use deception, concealment, incomplete disclosure, limited disclosure, an opt-out approach, or use of information, samples, health information etc., without the specified consent from those persons? (<a href="https://www.nhmrc.gov.au/book/national-statement-ethical-conduct-human-research-2007-updated-december-2013/chapter-2-3-qualif" target="_blank">NS 2.3</a>)</th>
                </tr>
                <table width = 800>
                    <tr>
                        <td>
                            <div id="formCheckBox">
                            	<input type="radio" name="Q12input01" <?php if (isset($PQ12input01) && $PQ12input01=="No") echo "checked";?> value="No" onClick="Q12input01UD();" id="Q12input01_no" />No
                            </div>
                        </td>
                        <td>
                        	<div id="formCheckBox">
                        		<input type="radio" name="Q12input01" <?php if (isset($PQ12input01) && $PQ12input01=="Yes") echo "checked";?> value="Yes" onClick="Q12input01UD();" id="Q12input01_yes" />Yes
                        	</div>
                        </td>
                    </tr>
                </table>
                <p><i>If yes, please detail the methods below. Please describe how this method is essential to the research aims and how participants will be 
                de-briefed after the study.</i></p>
                <textarea name="Q12input02" cols="205" rows="7"><?php if (isset($PQ12input02))echo $PQ12input02; ?></textarea>
            </table>
            </div>
            <div class="TabbedPanelsContent"> <!-- Section 3 -->
            <table id="section">
                <tr>
                	<td>
                    	SECTION 3 – Ethical considerations specific to research methods or fields
                    </td>
                </tr>
            </table>
			<!--.............. Section 3: Q13 ..............-->
            <table id = "sectionsub">
                <tr>
                    <th id="leftcol"><label class="normal" id="Q13input01L"><span class="red">*</span></label>13</th>
                    <th id ="rightcol">Is your study a clinical trial? (<a href="https://www.nhmrc.gov.au/book/chapter-3-3-interventions-and-therapies-including-clinical-and-non-clinical-trials-and" target="_blank">NS 3.3</a>)</th>
                </tr>
            </table>

		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%">
            <small>A clinical trial is defined as any research project that prospectively assigns human subjects to intervention and comparison groups to 
            study the cause-and-effect relationship between a medical intervention and a health outcome. Medical intervention means any intervention used 
            to modify a health outcome. This definition includes, drugs, surgical procedures, devices, behavioral treatments, process-of-care change etc.</small>
				</td>
			</tr>
		</table>

		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q13input01" onClick="Q13input01UD();" type="radio" <?php if (isset($PQ13input01) && $PQ13input01=="No") echo "checked";?> value="No" id="Q13input01_no"/> </td>
				<td style="border:1px solid black;border-top:none;width:95%">No - <small>please skip to question 14.</small> </td>
			</tr>
		</table>



		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q13input01" onClick="Q13input01UD();" type="radio" <?php if (isset($PQ13input01) && $PQ13input01=="Yes") echo "checked";?> value="Yes" id="Q13input01_yes"/> </td>
				<td style="border:1px solid black;border-top:none;width:95%">Yes - <small>please answer Question 13 subsections below.</small> </td>
			</tr>
        </table>
		<br>

		<!--.............. Section 3: Q13a ..............-->
            <table id = "sectionsub">	
                <tr>
                	<th id="leftcol"><label class="normal" id="Q13ainput01L"><span class="red">*</span></label>13a</th>
                	<th id ="rightcol">Will a placebo/non-treatment group be used? (<a href="https://www.nhmrc.gov.au/book/chapter-3-3-interventions-and-therapies-including-clinical-and-non-clinical-trials-and" target="_blank">NS 3.3.10</a>)</th>
                </tr>
            </table>

		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q13ainput01" onClick="Q13ainput01UD();" type="radio" <?php if (isset($PQ13ainput01) && $PQ13ainput01=="No") echo "checked";?> value="No" id="Q13ainput01_no"/> </td>
				<td style="border:1px solid black;border-top:none;width:95%"><small>No - please outline why a placebo or non-treatment group will not be used.</small> </td>
			</tr>
        </table>


		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q13ainput01" onClick="Q13ainput01UD();" type="radio" <?php if (isset($PQ13ainput01) && $PQ13ainput01=="Yes") echo "checked";?> value="Yes" id="Q13ainput01_yes"/> </td>
				<td style="border:1px solid black;border-top:none;width:95%"><small>Yes - please describe why a placebo or non-treatment group is the best comparator.</small> </td>
			</tr>
        </table>

        <p><label class="normal" id="Q13ainput02L"><span class="red">*</span></label></p>
	    <textarea name="Q13ainput02" id="Q13ainput02" onBlur="Q13ainput02UD();" cols="93" rows="7"><?php if (isset($PQ13aintput02))echo $PQ13ainput02; ?></textarea> 
		<br><br>
            
			<!--.............. Section 3: Q13b ..............-->
            <table id = "sectionsub">
                <tr>
                    <th id="leftcol"><label class="normal" id="Q13binput01L"><span class="red">*</span></label>13b</th>
                    <th id ="rightcol">Has this trial been registered? (<a href="https://www.nhmrc.gov.au/book/chapter-3-3-interventions-and-therapies-including-clinical-and-non-clinical-trials-and" target="_blank">NS 3.3.12</a>)</th>
                </tr>
            </table>

		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q13binput01" onClick="Q13binput01UD();" type="radio" <?php if (isset($PQ13binput01) && $PQ13binput01=="No") echo "checked";?> value="No" id="Q13binput01_no"/> </td>
				<td style="border:1px solid black;border-top:none;width:95%"><small>No</small> </td>
			</tr>
        </table>

		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q13binput01" onClick="Q13binput01UD();" type="radio" <?php if (isset($PQ13binput01) && $PQ13binput01=="Yes") echo "checked";?> value="Yes" id="Q13binput01_yes"/> </td>
				<td style="border:1px solid black;border-top:none;width:95%"><small>Yes - please provide the registration number and the name of the trial registry in the space below.</small> </td>
			</tr>
        </table>

        <p><label class="normal" id="Q13binput02L"><span class="red">*</span></label></p>
        <textarea name="Q13binput02" id="Q13binput02" cols="93" rows="1" disabled="disabled" onBlur="Q13binput02UD();"><?php if (isset($PQ13binput02))echo $PQ13binput02; ?></textarea> 
        <br><br>

			<!--.............. Section 3: Q13c ..............-->
            <table id = "sectionsub">
                <tr>
                	<th id="leftcol"><label class="normal" id="Q13cinput01L"><span class="red">*</span></label>13c</th>
                	<th id ="rightcol">Are the facilities, expertise and experience available sufficient for the trial to be conducted safely? (<a href="https://www.nhmrc.gov.au/book/chapter-3-3-interventions-and-therapies-including-clinical-and-non-clinical-trials-and" target="_blank">NS 3.3.5</a>)</th>
                </tr>
            </table>


		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q13cinput01" onClick="Q13cinput01UD();" type="radio" <?php if (isset($PQ13cinput01) && $PQ13cinput01=="No") echo "checked";?> value="No" id="Q13cinput01_no"/> </td>
				<td style="border:1px solid black;border-top:none;width:95%"><small>No - please indicate how you will address this in the space below.</small> </td>
			</tr>
        </table>

		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q13cinput01" onClick="Q13cinput01UD();" type="radio" <?php if (isset($PQ13cinput01) && $PQ13cinput01=="Yes") echo "checked";?> value="Yes" id="Q13cinput01_yes"/> </td>
				<td style="border:1px solid black;border-top:none;width:95%"><small>Yes</small> </td>
			</tr>
        </table>

        <p><label class="normal" id="Q13cinput02L"><span class="red">*</span></label></p>
        <textarea name="Q13cinput02" id="Q13cinput02" cols="93" rows="4" disabled="disabled"><?php if (isset($PQcinput02))echo $PQcinput02; ?></textarea>
		<br><br>

			<!--.............. Section 3: Q13d ..............-->
            <table id = "sectionsub">
                <tr>
                    <th id="leftcol"><label class="normal" id="Q13dinput01L"><span class="red">*</span></label>13d</th>
                    <th id ="rightcol">Does your Participant Information Statement make clear to the participant whether they will have continued access after 
                    the trial to treatment they have received during the trial, and on what terms? (<a href="https://www.nhmrc.gov.au/book/chapter-3-3-interventions-and-therapies-including-clinical-and-non-clinical-trials-and" target="_blank">NS 3.3.18</a>)</th>
                </tr>
            </table>

		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q13dinput01" onClick="Q13dinput01UD();" type="radio" <?php if (isset($PQ13dinput01) && $PQ13dinput01=="No") echo "checked";?> value="No" id="Q13dinput01_no"/> </td>
				<td style="border:1px solid black;border-top:none;width:95%"><small>No</small> </td>
			</tr>
        </table>

		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q13dinput01" onClick="Q13dinput01UD();" type="radio" <?php if (isset($PQ13dinput01) && $PQ13dinput01=="Yes") echo "checked";?> value="Yes" id="Q13dinput01_yes"/> </td>
				<td style="border:1px solid black;border-top:none;width:95%"><small>Yes</small> </td>
			</tr>
        </table>
		<br><br>

		<!--.............. Section 3: Q14 ..............-->
        	<table id = "sectionsub">
                <tr>
                	<th id="leftcol"><label class="normal" id="Q14input01L"><span class="red">*</span></label>14</th>
                	<th id ="rightcol">Does your research use health information (including biospecimens) that may reveal information that may be important for the health 
                or future health of the donor(s), their blood relatives or their community? (<a href="https://www.nhmrc.gov.au/book/chapter-3-4-human-biospecimens-laboratory-based-research" target="_blank">NS 3.4.10</a>, <a href="https://www.nhmrc.gov.au/book/chapter-3-5-human-genetics" target="_blank">3.5.1 and 3.5.2</a>)</th>
                </tr>
            </table>

		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q14input01" onClick="Q14input01UD();" type="radio" <?php if (isset($PQ14input01) && $PQ14input01=="No") echo "checked";?> value="No" id="Q14input01_no"/> </td>
				<td style="border:1px solid black;border-top:none;width:95%"><small>No</small> </td>
			</tr>
        </table>

		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q14input01" onClick="Q14input01UD();" type="radio" <?php if (isset($PQ14input01) && $PQ14input01=="Yes") echo "checked";?> value="Yes" id="Q14input01_yes"/> </td>
				<td style="border:1px solid black;border-top:none;width:95%"><small>Yes - indicate below how you will address the management of any 
                        proposed disclosure or non-disclosure of that information.</small> </td>
			</tr>
        </table>

        <p><label class="normal" id="Q14input02L"><span class="red">*</span></label></p>
        <textarea name="Q14input02" id="Q14input02" cols="93" rows="7" disabled="disabled"><?php if (isset($PQ14input02))echo $PQ14input02; ?></textarea>
		<!--.............. Section 3: Q15 ..............-->
            <table id = "sectionsub">
                <tr>
                <th id="leftcol"><label class="normal" id="Q15input01L"><span class="red">*</span></label>15</th>
                <th id ="rightcol">Does your research involve human genetics? (NS 3.5)</th>
                </tr>
            </table>

		<table style="border-collapse: collapse;width:75%">
			<tr>
         	   <td style="border:1px solid black;border-top:none;width:5%"><small>Specific requirements for research involving fetal tissue are detailed in Chapter 4.1 of the National Statement. Research involving 
            human embryos and gametes, including the derivation of human embryonic stem cell lines, is separately governed by the Research Involving 
            Human Embryos Act 2002 (Cth) and the Ethical Guidelines on the use of Assisted Reproductive Technology in Clinical Practice and Research (2007). 
            Please refer to Chapter 3.5 of the National Statement for more information.</small></td>
			</tr>
		</table>

		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q15input01" onClick="Q15input01UD();" type="radio" <?php if (isset($PQ15input01) && $PQ15input01=="No") echo "checked";?> value="No" id="Q15input01_no"/> </td>
				<td style="border:1px solid black;border-top:none;width:95%"><small>No</small> </td>
			</tr>
        </table>

		<table style="border-collapse: collapse;width:75%">
			<tr>
				<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q15input01" onClick="Q15input01UD();" type="radio" <?php if (isset($PQ15input01) && $PQ15input01=="Yes") echo "checked";?> value="Yes" id="Q15input01_yes"/> </td>
				<td style="border:1px solid black;border-top:none;width:95%"><small>Yes - please address in the space below the parts of 
                    Section 3.5 of the National Statement that are relevant to this project.</small> </td>
			</tr>
        </table>

        <p><label class="normal" id="Q15input02L"><span class="red">*</span></label></p>
		<textarea name="Q15input02" id="Q15input02" cols="93" rows="10" disabled="disabled"><?php if (isset($PQ15input02))echo $PQ15input02; ?></textarea>
		</div>
		<!--.............. Section 4: Q15 ..............-->

            <div class="TabbedPanelsContent"> <!-- Section 4 -->
				<table id="section">
				  <tr>
  				 	 <td>SECTION 4 - Ethical considerations specific to participants</td>
				  </tr>
				</table>
				<table id="sectionsub">
					<tr>
						<th id="leftcol">16</th>
						<th id="rightcol">Does your research involve women who are pregnant and/or the human fetus?</th>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q16input01" type="radio" <?php if (isset($PQ16input01) && $PQ16input01=="No") echo "checked";?> value="No" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">No - <small>please skip to question 17.</small> </td>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q16input01" type="radio" <?php if (isset($PQ16input01) && $PQ16input01=="Yes") echo "checked";?> value="Yes" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">Yes - <small>please answer Question 16 subsections below.</small> </td>
					</tr>
				</table>
				<br />
                <br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol">16a</th>
						<th id="rightcol">Wil steps be taken to ensure the well-being and care of the woman who is pregnant and her fetus takes precedence over the aims of the research?</th>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q16input02" type="radio" <?php if (isset($PQ16input02) && $PQ16input02=="No") echo "checked";?> value="No" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">No - <small>please justify why below.</small> </td>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q16input02" type="radio" <?php if (isset($PQ16input02) && $PQ16input02=="Yes") echo "checked";?> value="Yes" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">Yes - <small>please outline the procedures below.</small> </td>
					</tr>
				</table>
				<table style="border-collapse:collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none"> <textarea name="Q16textarea01" cols="115" rows="4" maxlength="500"><?php if (isset($PQ16textarea01))echo $PQ16textarea01; ?></textarea></td>
					</tr>
				</table>
				<br />
                <br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol">16b</th>
						<th id="rightcol">Will the information about research be separate from information about routine clinical care?</th>
					</tr>
				</table>

				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q16input03" type="radio" <?php if (isset($PQ16input03) && $PQ16input03=="No") echo "checked";?> value="No" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">No - <small>please justify why the information will not be provided separately to the participant below.</small> </td>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q16input03" type="radio" <?php if (isset($PQ16input03) && $PQ16input03=="Yes") echo "checked";?> value="Yes" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">Yes</td>
					</tr>
				</table>
				<table style="border-collapse:collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none"> <textarea name="Q16textarea02" cols="115" rows="4" maxlength="500"><?php if (isset($PQ16textarea02))echo $PQ16textarea02; ?></textarea></td>
					</tr>
				</table>
				<br />
                <br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol">17</th>
						<th id="rightcol">Does your research involve children and young people?</th>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q17input01" type="radio" <?php if (isset($PQ17input01) && $PQ17input01=="No") echo "checked";?> value="No" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">No - <small>please skip to question 18.</small> </td>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q17input01" type="radio" <?php if (isset($PQ17input01) && $PQ17input01=="Yes") echo "checked";?> value="Yes" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">Yes - <small>in the space below address explain why participation of children or young people is indispensable to this research; and how this study has been designed to be appropriate for children or young people</small></td>
					</tr>
				</table>
				<table style="border-collapse:collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none"> <textarea name="Q17textarea01" cols="115" rows="8" maxlength="1000"><?php if (isset($PQ17textarea01))echo $PQ17textarea01; ?></textarea></td>
					</tr>
				</table>
				<br />
				<br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol">17a</th>
						<th id="rightcol">Do you have a Working With Childrens (WWC) card?</th>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q17input02" type="radio" <?php if (isset($PQ17input02) && $PQ17input02=="No") echo "checked";?> value="No" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">No - <small>it is a legal requirement to have a WWC's card. Please arrange to submit your WWC application and provide a receipt or have a card BEFORE you sumbit this ethics application. Ethics approval will not be given without a WWC.</small> </td>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q17input02" type="radio" <?php if (isset($PQ17input02) && $PQ17input02=="Yes") echo "checked";?> value="Yes" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">Yes - <small>please attach a copy to your application.</small></td>
					</tr>
				</table>
                <br />
				<br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol">18</th>
						<th id="rightcol">Does your research involve people in dependant or unequal relationships?</th>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q18input01" type="radio" <?php if (isset($PQ18input01) && $PQ18input01=="No") echo "checked";?> value="No" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">No - <small>please skip to question 19.</small> </td>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q18input01" type="radio" <?php if (isset($PQ18input01) && $PQ18input01=="Yes") echo "checked";?> value="Yes" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">Yes - <small>in the space below describe the dependant relationship between the participants and the researcher, members of the research team and/or any person involved in the recruitment/consent process; how will the process of obtaining consent enable persons in dependant relationships to give voluntary consent; if a particupant choose to withdraw from the research, how will the ongoing dependent relationship with participant be maintained?</small></td>
					</tr>
				</table>
				<table style="border-collapse:collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none"> <textarea name="Q18textarea01" cols="115" rows="5" maxlength="500"><?php if (isset($PQ18textarea01))echo $PQ18textarea01; ?></textarea></td>
					</tr>
				</table>
                <br />
				<br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol">19</th>
						<th id="rightcol">Does your research involve people highly dependant on medical care who may be unable to give consent?</th>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q19input01" type="radio" <?php if (isset($PQ19input01) && $PQ19input01=="No") echo "checked";?> value="No" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">No - <small>please skip to question 20.</small> </td>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q19input01" type="radio" <?php if (isset($PQ19input01) && $PQ19input01=="Yes") echo "checked";?> value="Yes" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">Yes - <small>in the space below describe the recruitment/consent process and how participation in research is in the best interest of the participant</small></td>
					</tr>
				</table>
				<table style="border-collapse:collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none"> <textarea name="Q19textarea01" cols="115" rows="5" maxlength="500"><?php if (isset($PQ19textarea01))echo $PQ19textarea01; ?></textarea></td>
					</tr>
				</table>
                <br />
				<br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol">20</th>
						<th id="rightcol">Does your research involve people with a cognitive impairment, an intellectual disability, or a mental illness?</th>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q20input01" type="radio" <?php if (isset($PQ20input01) && $PQ20input01=="No") echo "checked";?> value="No" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">No - <small>please skip to question 21.</small> </td>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q20input01" type="radio" <?php if (isset($PQ20input01) && $PQ20input01=="Yes") echo "checked";?> value="Yes" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">Yes - <small>in the space below describe the nature of the intellectual or mental impairment e.g. permanent temporary or fluctuating; describe how the consent process will take into account the nature of the impairment.</small></td>
					</tr>
				</table>
				<table style="border-collapse:collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none"> <textarea name="Q20textarea01" cols="115" rows="5" maxlength="500"><?php if (isset($PQ20textarea01))echo $PQ20textarea01; ?></textarea></td>
					</tr>
				</table>
                <br />
				<br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol">21</th>
						<th id="rightcol">Does your research involve people who may be involved in illegal activities?</th>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q21input01" type="radio" <?php if (isset($PQ21input01) && $PQ21input01=="No") echo "checked";?> value="No" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">No - <small>please skip to question 22.</small> </td>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q21input01" type="radio" <?php if (isset($PQ21input01) && $PQ21input01=="Yes") echo "checked";?> value="Yes" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">Yes - <small>in the space below please justify how the risk of discovery of illegal activities is justified by the benefits of the research.</small></td>
					</tr>
				</table>
				<table style="border-collapse:collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none"> <textarea name="Q21textarea01" cols="115" rows="5" maxlength="500"><?php if (isset($PQ21textarea01))echo $PQ21textarea01; ?></textarea></td>
					</tr>
				</table>
                <br />
				<br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol">22</th>
						<th id="rightcol">Does your research involve Aboriginal and Torres Strait Islanders?</th>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q22input01" type="radio" <?php if (isset($PQ22input01) && $PQ22input01=="No") echo "checked";?> value="No" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">No - <small>please skip to next section</small></td>
					</tr>
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q22input01" type="radio" <?php if (isset($PQ22input01) && $PQ22input01=="Yes") echo "checked";?> value="Yes" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">Yes - <small>please answer Question subsections below.</small></td>
					</tr>
				</table>
				<br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol">22a</th>
						<th id="rightcol">What is the estimated proportion of Aboriginal and Torres Strait Islanders in the population from which the participants will be recruited?</th>
					</tr>
				</table>
				<table style="border-collapse:collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none"> <textarea name="Q22textarea01" cols="115" rows="3" maxlength="400"><?php if (isset($PQ22textarea01))echo $PQ22textarea01; ?></textarea></td>
					</tr>
				</table>
				<br />
				<table id="sectionsub">
					<tr>
						<th id="leftcol">22b</th>
						<th id="rightcol">Will Aboriginal and Torres Strait Islander status of participants be recorded?</th>
					</tr>
				</table>
				<table style="border-collapse: collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q22input02" type="radio" <?php if (isset($PQ22input02) && $PQ22input02=="No") echo "checked";?> value="No" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">No - <small>please justify why below.</small></td>
					</tr>
					<tr>
						<td style="border:1px solid black;border-top:none;width:5%"> <input name="Q22input02" type="radio" <?php if (isset($PQ22input02) && $PQ22input02=="Yes") echo "checked";?> value="Yes" /> </td>
						<td style="border:1px solid black;border-top:none;width:95%">Yes - <small>please justify why below.</small></td>
					</tr>
				</table>
				<table style="border-collapse:collapse;width:75%">
					<tr>
						<td style="border:1px solid black;border-top:none"> <textarea name="Q22textarea02" cols="115" rows="6" maxlength="800"><?php if (isset($PQ22textarea02))echo $PQ22textarea02; ?></textarea></td>
					</tr>
                </table>
                <br />
				<table id="section">
				  <tr>
  				 	 <td>End of section 4</td>
				  </tr>
				</table>
			</div>
            <div class="TabbedPanelsContent"> <!-- Section 5 -->
			<table id="section">
                <tr>
                	<td>SECTION 5 – Processes of research governance and ethical review</td>
                </tr>
            </table>
            <table id = "sectionsub">
                <tr>
                	<th id="leftcol">23</th>
                	<th id ="rightcol">Are there any potential conflicts of interest?</th>
                </tr>
            </table>
            <table width = 800>
                <tr>
                    <td>
                        <div id="formCheckBox">
                        	<input type="radio" name="Q23input01" <?php if (isset($PQ23input01) && $PQ23input01=="No") echo "checked";?> value="No" id="Q23input01_no" />No - <i>please skip to the next section.</i>
                        </div>
                    </td>
                    <td>
                        <div id="formCheckBox">
                        	<input type="radio" name="Q23input01" <?php if (isset($PQ23input01) && $PQ23input01=="Yes") echo "checked";?> value="Yes" id="Q23input01_yes" />Yes - <i>please describe in the space below.</i>
                        </div>
                    </td>
                </tr>
            </table>
            <textarea name="Q23input02" cols="205" rows="14"><?php if (isset($PQinput02))echo $PQinput02; ?></textarea> 
            </div>
    	    <div class="TabbedPanelsContent"> <!-- Section 6 -->
				<h3><b>SECTION 6</b>- Attachments</h3>
				<br />
				<p>Please use the checklist below for attachments you may be required to include as part of your application.</p>
				<table width="740" border="1">
                    <tr>
                        <td width="120">
                            <p>Item</p>
                        </td>
                        <td width="40">
                            <div id="formCheckBox">
                                <h6>N/A</h6>
                            </div>
                        </td>	
                        <td width="40">
                            <div id="formCheckBox">
                                <h6>No</h6>
                            </div>
                        </td>
                        <td width="40">
                            <div id="formCheckBox">
                                <h6>Yes</h6>
                            </div>
                        </td>
                        <td width="500">
                            <h6>Attach .pdf File</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Protocol/research proposal</p>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input01" value="N/A" id="S6input01_na" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input01" value="No" id="S6input01_no" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input01" value="Yes" id="S6input_yes" />
                            </div>
                        </td>
                        <td>
                            <input name="S6file01" type="file" />
                        </td>
                    </tr>	
                    <tr>
                        <td>
                            <p>Recruitment material</p>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input02" value="N/A" id="S6input02_na" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input02" value="No" id="S6input02_no" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input02" value="Yes" id="S6input02_yes" />
                            </div>
                        </td>
                        <td>
                            <input name="S6file02" type="file" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Participant Information statement and consent form/s</p>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input03" value="N/A" id="S6input03_na" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input03" value="No" id="S6input03_no" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input03" value="Yes" id="S6input03_yes" />
                            </div>
                        </td>
                        <td>
                            <input name="S6file03" type="file" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Parent Information statement and consent form/s</p>
                        </td>
                    
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input04" value="N/A" id="S6input04_na" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input04" value="No" id="S6input04_no" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input04" value="Yes" id="S6input04_yes" />
                            </div>
                        </td>
                        <td>
                            <input name="S6file04" type="file" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Child Information statement and assent form/s</p>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input05" value="N/A" id="S6input05_na" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input05" value="No" id="S6input05_no" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input05" value="Yes" id="S6input05_yes" />
                            </div>
                        </td>
                        <td>
                            <input name="S6file05" type="file" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Questionnaires/survey instruments(attach below)</p>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input06_0" value="N/A" id="S6input06_0_na" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input06_0" value="No" id="S6input06_0_no" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input06_0" value="Yes" id="S6input06_0_yes" />
                            </div>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                            <input name="S6file06_01" type="file" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                            <input name="S6file06_02" type="file" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                            <input name="S6file06_03" type="file" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Translations where languages other than English are used</p>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input07" value="N/A" id="S6input07_na" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input07" value="No" id="S6input07_no" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input07" value="Yes" id="S6input07_yes" />
                            </div>
                        </td>
                        <td>
                            <input name="S6file07" type="file" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Recruitment materials(attach below)</p>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input08_0" value="N/A" id="S6input08_0_na" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input08_0" value="No" id="S6input08_0_no" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input08_0" value="Yes" id="S6input08_0_yes" />
                            </div>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                            <input  name="S6file08_1" type="file" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                            <input name="S6file08_2" type="file" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Investigator brochure or Product Information(for drug intervention studies)</p>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input09" value="N/A" id="S6input09_na" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input09" value="No" id="S6input09_no" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input09" value="Yes" id="S6input09_yes" />
                            </div>
                        </td>
                        <td>
                            <input name="S6file09" type="file" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Working with Children's Card</p>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input10" value="N/A" id="S6input10_na" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input10" value="No" id="S6input10_no" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input10" value="Yes" id="S6input10_yes" />
                            </div>
                        </td>
                        <td>
                                <input name="S6file10" type="file" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>SOL Research Integrity Professional Development Program training certificate/s</p>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input11" value="N/A" id="S6input11_na" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input11" value="No" id="S6input11_no" />
                            </div>
                        </td>
                        <td>
                            <div id="formCheckBox">
                                <input type="radio" name="S6input11" value="Yes" id="S6input11_yes" />
                            </div>
                        </td>
                        <td>
                                <input name="S6file11" type="file" />
                        </td>
                    </tr>
                </table>
				<br />
				<div id="notice">
						<p style="text-align:center; font-weight: bold;">NOTES</p>
						<p>
							1. In the footer of all your documents(e.g. protocol, recruitment material,
							information statements and consent forms, questionnaires etc) you should include:
							<ul style="font-size:14px">
								<li>Name of the document</li>
								<li>Version Number</li>
								<li>Date</li>
							</ul>
						</p>
						<p>
							2. Refer to the guidelines for Participant Information Statements and Consent Forms.
							Remember to include a phrase similar to the following:<br /><br />
							<sub>Curtin University Human Research Ethics Committee(HREC) has approved this study
								(HREC number XX/XXXX). Should you wish to discuss the study with someone not 
								directly involved, in particular, any matters concerning the conduct of the study
								or your rights as a participant, or you wish to make a confidential complaint, you
								may contact the Ethics Officer on cuhumanethics@gmail.com.
							</sub>
						</p>
						<br />
						<p>
							3. Refer to the <a href="http://brand.curtin.edu.au/" target="_blank">Curtin Brand website</a> for
							   information on advertising for recruitment. All forms of print media must contain
							   the HREC approval number.
						</p>
					</div>
			</div>
  	      </div>
  	  </div>
      <label>Save</label><input name="savesub" type="radio" onClick="requireNone();" value="save" checked />
      <label>Submit</label><input name="savesub" type="radio" onClick="requireAll();" value="submit" />
      <br />
	  <input name="process" type="submit" value="Create Application" />
    </div>
    </form>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("QuestionTabs");
</script>
</body>
</html>
