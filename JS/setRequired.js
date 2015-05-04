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
		change('Q3textarea01L', 'normal');
		change('Q3textarea02L', 'normal');
		change('Q3textarea03L', 'normal');
		change('Q4input01L', 'normal');
		change('Q4input02L', 'normal');
		change('Q4input03L', 'normal');
		change('Q4input04L', 'normal');
		change('Q4input05L', 'normal');
		change('Q4input06L', 'normal');
		change('Q6input02L', 'normal');
		change('Q6input03L', 'normal');
		change('Q6input04L', 'normal');
		change('Q6input05L', 'normal');
		change('Q6input06L', 'normal');
		change('Q7input01L', 'normal');
		change('Q8input01L', 'normal');
		change('Q9input01L', 'normal');
		change('Q9input02L', 'normal');
		change('Q10L', 'normal');
		change('Q10input02L', 'normal');
		change('Q10input04L', 'normal');
		change('Q10input06L', 'normal');
		change('Q10input08L', 'normal');
		change('Q10input10L', 'normal');
		change('Q10input12L', 'normal');
		change('Q10input14L', 'normal');
		change('Q10input15L', 'normal');
		change('Q11input01L', 'normal');
		change('Q11input02L', 'normal');
		change('Q12input01L', 'normal');
	}
}

function requireAll() {
	if(getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit")
	{		
		triage1UD();
		triage2UD();
		triage3UD();
		triage4UD();
		triage5UD();
		triage6UD();
		triage7UD();
		Q1input01UD();
		Q2select01UD();
		Q2input01UD();
		Q3textarea01UD();
		Q3textarea02UD();
		Q3textarea03UD();
		Q4input01UD();
		Q4input02UD();
		Q4input03UD();
		Q4input04UD();
		Q4input05UD();
		Q4input06UD();
		Q6input02UD();
		Q6input03UD();
		Q6input04UD();
		Q6input05UD();
		Q6input06UD();
		Q7input01UD();
		Q8input01UD();
		Q9input01UD();
		Q9input02UD();
		Q10UD();
		Q11input01UD();
		Q11input02UD();
		Q12input01UD();
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
		change('Q2select01L', 'required');
	}
	else
	{
		change('Q2select01L', 'normal');
	}
	
	if(getTextValue("Q2select01") == "other")
	{
		document.forms['AppForm'].elements['Q2input01'].disabled=false;
		Q2input01UD();
	}
	else
	{
		document.forms['AppForm'].elements['Q2input01'].disabled=true;
	}
}

function Q2input01UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q2select01") == "other") && ((getTextValue("Q2input01") == "Other") || (getTextValue("Q2input01") == "")))
	{
		change('Q2input01L', 'required');
	}
	else
	{
		change('Q2input01L', 'normal');
	}
}

function Q3textarea01UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q3textarea01") == ""))
	{
		change('Q3textarea01L', 'required');
	}
	else
	{
		change('Q3textarea01L', 'normal');
	}
}

function Q3textarea02UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q3textarea02") == ""))
	{
		change('Q3textarea02L', 'required');
	}
	else
	{
		change('Q3textarea02L', 'normal');
	}
}

function Q3textarea03UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q3textarea03") == ""))
	{
		change('Q3textarea03L', 'required');
	}
	else
	{
		change('Q3textarea03L', 'normal');
	}
}

function Q4input01UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q4input01") == ""))
	{
		change('Q4input01L', 'required');
	}
	else
	{
		change('Q4input01L', 'normal');
	}
}

function Q4input02UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q4input02") == ""))
	{
		change('Q4input02L', 'required');
	}
	else
	{
		change('Q4input02L', 'normal');
	}
}

function Q4input03UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q4input03") == ""))
	{
		change('Q4input03L', 'required');
	}
	else
	{
		change('Q4input03L', 'normal');
	}
}

function Q4input04UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q4input04") == ""))
	{
		change('Q4input04L', 'required');
	}
	else
	{
		change('Q4input04L', 'normal');
	}
}

function Q4input05UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q4input05") == ""))
	{
		change('Q4input05L', 'required');
	}
	else
	{
		change('Q4input05L', 'normal');
	}
}

function Q4input06UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getCheckedValue(document.forms['AppForm'].elements['Q4input06']) == ""))
	{
		change('Q4input06L', 'required');
	}
	else
	{
		change('Q4input06L', 'normal');
	}
}

function Q6input01UD() {
	Q6input02UD();
	Q6input03UD();
	Q6input04UD();
	Q6input05UD();
	Q6input06UD();
}

function Q6input02UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q6input02") == ""))
	{
		change('Q6input02L', 'required');
	}
	else
	{
		change('Q6input02L', 'normal');
	}
	
	if(getCheckedValue(document.forms['AppForm'].elements['Q6input01']) == "Yes")
	{
		change('Q6input02L', 'normal');
		document.forms['AppForm'].elements['Q6input02'].disabled=true;
	}
	else
	{
		document.forms['AppForm'].elements['Q6input02'].disabled=false;
	}
}

function Q6input03UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q6input03") == ""))
	{
		change('Q6input03L', 'required');
	}
	else
	{
		change('Q6input03L', 'normal');
	}
	
	if(getCheckedValue(document.forms['AppForm'].elements['Q6input01']) == "Yes")
	{
		change('Q6input03L', 'normal');
		document.forms['AppForm'].elements['Q6input03'].disabled=true;
	}
	else
	{
		document.forms['AppForm'].elements['Q6input03'].disabled=false;
	}
}

function Q6input04UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q6input04") == ""))
	{
		change('Q6input04L', 'required');
	}
	else
	{
		change('Q6input04L', 'normal');
	}
	
	if(getCheckedValue(document.forms['AppForm'].elements['Q6input01']) == "Yes")
	{
		change('Q6input04L', 'normal');
		document.forms['AppForm'].elements['Q6input04'].disabled=true;
	}
	else
	{
		document.forms['AppForm'].elements['Q6input04'].disabled=false;
	}
}

function Q6input05UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q6input05") == ""))
	{
		change('Q6input05L', 'required');
	}
	else
	{
		change('Q6input05L', 'normal');
	}
	
	if(getCheckedValue(document.forms['AppForm'].elements['Q6input01']) == "Yes")
	{
		change('Q6input05L', 'normal');
		document.forms['AppForm'].elements['Q6input05'].disabled=true;
	}
	else
	{
		document.forms['AppForm'].elements['Q6input05'].disabled=false;
	}
}

function Q6input06UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q6input06") == ""))
	{
		change('Q6input06L', 'required');
	}
	else
	{
		change('Q6input06L', 'normal');
	}
	
	if(getCheckedValue(document.forms['AppForm'].elements['Q6input01']) == "Yes")
	{
		change('Q6input06L', 'normal');
		document.forms['AppForm'].elements['Q6input06'].disabled=true;
	}
	else
	{
		document.forms['AppForm'].elements['Q6input06'].disabled=false;
	}
}

function Q7input01UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q7input01") == ""))
	{
		change('Q7input01L', 'required');
	}
	else
	{
		change('Q7input01L', 'normal');
	}
}

function Q8input01UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q8input01") == ""))
	{
		change('Q8input01L', 'required');
	}
	else
	{
		change('Q8input01L', 'normal');
	}
}

function Q9input01UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getCheckedValue(document.forms['AppForm'].elements['Q9input01']) == ""))
	{
		change('Q9input01L', 'required');
	}
	else
	{
		change('Q9input01L', 'normal');
	}
	
	if(getCheckedValue(document.forms['AppForm'].elements['Q9input01']) == "Yes")
	{
		document.forms['AppForm'].elements['Q9input02'].disabled=false;
	}
	else
	{
		document.forms['AppForm'].elements['Q9input02'].disabled=true;
	}
}

function Q9input02UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getCheckedValue(document.forms['AppForm'].elements['Q9input01']) == "Yes") && (getTextValue("Q9input02") == ""))
	{
		change('Q9input02L', 'required');
	}
	else
	{
		change('Q9input02L', 'normal');
	}
}

function Q10UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && !((getCheckedValue(document.forms['AppForm'].elements['Q10input01']) == "Yes") || (getCheckedValue(document.forms['AppForm'].elements['Q10input03']) == "Yes") || (getCheckedValue(document.forms['AppForm'].elements['Q10input05']) == "Yes") || (getCheckedValue(document.forms['AppForm'].elements['Q10input07']) == "Yes") || (getCheckedValue(document.forms['AppForm'].elements['Q10input09']) == "Yes") || (getCheckedValue(document.forms['AppForm'].elements['Q10input11']) == "Yes") || (getCheckedValue(document.forms['AppForm'].elements['Q10input13']) == "Yes")))
	{
		change('Q10L', 'required');
	}
	else
	{
		change('Q10L', 'normal');
	}
	
	Q10input02UD();
	Q10input04UD();
	Q10input06UD();
	Q10input08UD();
	Q10input10UD();
	Q10input12UD();
	Q10otherUD();
}

function Q10input02UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getCheckedValue(document.forms['AppForm'].elements['Q10input01']) == "Yes"))
	{
		if(getTextValue("Q10input02") == "")
		{
			change('Q10input02L', 'required');
		}
		else
		{
			change('Q10input02L', 'normal');
		}
	}
	else
	{
		change('Q10input02L', 'normal');
	}
	
	if(getCheckedValue(document.forms['AppForm'].elements['Q10input01']) == "Yes")
	{
		document.forms['AppForm'].elements['Q10input02'].disabled=false;
	}
	else
	{
		document.forms['AppForm'].elements['Q10input02'].disabled=true;
	}
}

function Q10input04UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getCheckedValue(document.forms['AppForm'].elements['Q10input03']) == "Yes"))
	{
		if(getTextValue("Q10input04") == "")
		{
			change('Q10input04L', 'required');
		}
		else
		{
			change('Q10input04L', 'normal');
		}
	}
	else
	{
		change('Q10input04L', 'normal');
	}
	
	if(getCheckedValue(document.forms['AppForm'].elements['Q10input03']) == "Yes")
	{
		document.forms['AppForm'].elements['Q10input04'].disabled=false;
	}
	else
	{
		document.forms['AppForm'].elements['Q10input04'].disabled=true;
	}
}

function Q10input06UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getCheckedValue(document.forms['AppForm'].elements['Q10input05']) == "Yes"))
	{
		if(getTextValue("Q10input06") == "")
		{
			change('Q10input06L', 'required');
		}
		else
		{
			change('Q10input06L', 'normal');
		}
	}
	else
	{
		change('Q10input06L', 'normal');
	}
	
	if(getCheckedValue(document.forms['AppForm'].elements['Q10input05']) == "Yes")
	{
		document.forms['AppForm'].elements['Q10input06'].disabled=false;
	}
	else
	{
		document.forms['AppForm'].elements['Q10input06'].disabled=true;
	}
}

function Q10input08UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getCheckedValue(document.forms['AppForm'].elements['Q10input07']) == "Yes"))
	{
		if(getTextValue("Q10input08") == "")
		{
			change('Q10input08L', 'required');
		}
		else
		{
			change('Q10input08L', 'normal');
		}
	}
	else
	{
		change('Q10input08L', 'normal');
	}
	
	if(getCheckedValue(document.forms['AppForm'].elements['Q10input07']) == "Yes")
	{
		document.forms['AppForm'].elements['Q10input08'].disabled=false;
	}
	else
	{
		document.forms['AppForm'].elements['Q10input08'].disabled=true;
	}
}

function Q10input10UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getCheckedValue(document.forms['AppForm'].elements['Q10input09']) == "Yes"))
	{
		if(getTextValue("Q10input10") == "")
		{
			change('Q10input10L', 'required');
		}
		else
		{
			change('Q10input10L', 'normal');
		}
	}
	else
	{
		change('Q10input10L', 'normal');
	}
	
	if(getCheckedValue(document.forms['AppForm'].elements['Q10input09']) == "Yes")
	{
		document.forms['AppForm'].elements['Q10input10'].disabled=false;
	}
	else
	{
		document.forms['AppForm'].elements['Q10input10'].disabled=true;
	}
}

function Q10input12UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getCheckedValue(document.forms['AppForm'].elements['Q10input11']) == "Yes"))
	{
		if(getTextValue("Q10input12") == "")
		{
			change('Q10input12L', 'required');
		}
		else
		{
			change('Q10input12L', 'normal');
		}
	}
	else
	{
		change('Q10input12L', 'normal');
	}
	
	if(getCheckedValue(document.forms['AppForm'].elements['Q10input11']) == "Yes")
	{
		document.forms['AppForm'].elements['Q10input12'].disabled=false;
	}
	else
	{
		document.forms['AppForm'].elements['Q10input12'].disabled=true;
	}
}

function Q10otherUD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getCheckedValue(document.forms['AppForm'].elements['Q10input13']) == "Yes"))
	{
		if(getTextValue("Q10input14") == "")
		{
			change('Q10input14L', 'required');
		}
		else
		{
			change('Q10input14L', 'normal');
		}
		
		if(getTextValue("Q10input15") == "")
		{
			change('Q10input15L', 'required');
		}
		else
		{
			change('Q10input15L', 'normal');
		}
	}
	else
	{
		change('Q10input14L', 'normal');
		change('Q10input15L', 'normal');
	}
	
	if(getCheckedValue(document.forms['AppForm'].elements['Q10input13']) == "Yes")
	{
		document.forms['AppForm'].elements['Q10input14'].disabled=false;
		document.forms['AppForm'].elements['Q10input15'].disabled=false;
	}
	else
	{
		document.forms['AppForm'].elements['Q10input14'].disabled=true;
		document.forms['AppForm'].elements['Q10input15'].disabled=true;
	}
}

function Q11input01UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getCheckedValue(document.forms['AppForm'].elements['Q11input01']) == ""))
	{
		change('Q11input01L', 'required');
	}
	else
	{
		change('Q11input01L', 'normal');
	}
}

function Q11input02UD() {
	if((getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit") && (getTextValue("Q11input02") == ""))
	{
		change('Q11input02L', 'required');
	}
	else
	{
		change('Q11input02L', 'normal');
	}
}

function Q12input01UD() {
	if(getCheckedValue(document.forms['AppForm'].elements['Q12input01']) == "")
	{
		change('Q12input01L', 'required');
	}
	else
	{
		change('Q12input01L', 'normal');
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