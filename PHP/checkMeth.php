<?php
function checkMeth($savesub)
{
	if ($savesub=="submit")
	{
		define('processMeth', 'Submit');
		print 'Selected Submit';
	}
	else if ($savesub=="save")
	{
		define('processMeth', 'Save');
		print 'Selected Save';
	}
	else
	{
		echo 'Error in checkMeth';
	}
}
?>