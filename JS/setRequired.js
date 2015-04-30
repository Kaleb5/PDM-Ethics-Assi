// new changing code.

function requireNone()
{
	if(getCheckedValue(document.forms['AppForm'].elements['savesub']) == "save")
	{
		change('Triage01L', 'normal');
		change('Triage02L', 'normal');
		change('Triage03L', 'normal');
		change('Triage04L', 'normal');
		change('Triage05L', 'normal');
		change('Triage06L', 'normal');
		change('Triage07L', 'normal');
		change('TriageJustL', 'normal');
		change('Q1input01L', 'normal');
		change('Q2select01L', 'normal');
		change('Q2input01L', 'normal');
	}
}

function requireAll() {
	if(getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit")
	{
		/*change('Triage01L', 'required');
		change('Triage02L', 'required');
		change('Triage03L', 'required');
		change('Triage04L', 'required');
		change('Triage05L', 'required');
		change('Triage06L', 'required');
		change('Triage07L', 'required');
		change('TriageJustL', 'required');
		change('Q1input01L', 'required');
		change('Q2select01L', 'required');
		change('Q2input01L', 'required');*/
		
		triage1UD();
		triage2UD();
		triage3UD();
		triage4UD();
		triage5UD();
		triage6UD();
		triage7UD();
		Q1input01UD();
	}
}

function triage1UD() {
	if(getCheckedValue(document.forms['AppForm'].elements['Triage01']) == "")
	{
		change('Triage01L', 'required');
	}
	else
	{
		change('Triage01L', 'normal');
		triageJustUD();
	}
}

function triage2UD() {
	if(getCheckedValue(document.forms['AppForm'].elements['Triage02']) == "")
	{
		change('Triage02L', 'required');
	}
	else
	{
		change('Triage02L', 'normal');
		triageJustUD();
	}
}

function triage3UD() {
	if(getCheckedValue(document.forms['AppForm'].elements['Triage03']) == "")
	{
		change('Triage03L', 'required');
	}
	else
	{
		change('Triage03L', 'normal');
		triageJustUD();
	}
}

function triage4UD() {
	if(getCheckedValue(document.forms['AppForm'].elements['Triage04']) == "")
	{
		change('Triage04L', 'required');
	}
	else
	{
		change('Triage04L', 'normal');
		triageJustUD();
	}
}

function triage5UD() {
	if(getCheckedValue(document.forms['AppForm'].elements['Triage05']) == "")
	{
		change('Triage05L', 'required');
	}
	else
	{
		change('Triage05L', 'normal');
		triageJustUD();
	}
}

function triage6UD() {
	if(getCheckedValue(document.forms['AppForm'].elements['Triage06']) == "")
	{
		change('Triage06L', 'required');
	}
	else
	{
		change('Triage06L', 'normal');
		triageJustUD();
	}
}

function triage7UD() {
	if(getCheckedValue(document.forms['AppForm'].elements['Triage07']) == "")
	{
		change('Triage07L', 'required');
	}
	else
	{
		change('Triage07L', 'normal');
		triageJustUD();
	}
}



function triageJustUD() {
	if(getTextValue("TriageJustify") != "")
	{
		change('TriageJustL', 'normal');
	}
	else if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getCheckedValue(document.forms['AppForm'].elements['TriageJustify']) == "") && ((getCheckedValue(document.forms['AppForm'].elements['Triage01']) == "Yes") || (getCheckedValue(document.forms['AppForm'].elements['Triage02']) == "Yes") || (getCheckedValue(document.forms['AppForm'].elements['Triage03']) == "Yes") || (getCheckedValue(document.forms['AppForm'].elements['Triage04']) == "Yes") || (getCheckedValue(document.forms['AppForm'].elements['Triage05']) == "Yes") || (getCheckedValue(document.forms['AppForm'].elements['Triage06']) == "Yes") || (getCheckedValue(document.forms['AppForm'].elements['Triage07']) == "Yes")))
	{
		change('TriageJustL', 'required');
		document.forms['AppForm'].elements['TriageJustify'].disabled=false;
	}
	else
	{
		change('TriageJustL', 'normal');
		document.forms['AppForm'].elements['TriageJustify'].disabled=true;	
	}
}

function Q1input01UD() {
	if(getTextValue("Q1input01") == "")
	{
		change('Q1input01L', 'required');
	}
	else
	{
		change('Q1input01L', 'normal');
	}
}

function Q2select01UD() {
	if(getTextValue("Q2select01") == "choose")
	{
		change('Q2select01', 'required');
	}
	else
	{
		change('Q2select01', 'normal');
	}
	
	if(getTextValue("Q2select01") == "other")
	{
		document.forms['AppForm'].elements['Q2input01'].disabled=false;
	}
	else
	{
		document.forms['AppForm'].elements['Q2input01'].disabled=true;
	}
}

function change(id, newClass) {
	identity=document.getElementById(id);
	identity.className=newClass;
}

function getCheckedValue(radioObj) {
	if(!radioObj)
		return "";
	var radioLength = radioObj.length;
	if(radioLength == undefined)
		if(radioObj.checked)
			return radioObj.value;
		else
			return "";
	for(var i = 0; i < radioLength; i++) {
		if(radioObj[i].checked) {
			return radioObj[i].value;
		}
	}
	return "";
}

function getTextValue(textObj) {
	var content = document.getElementById(textObj).value;
	
	return content;
}