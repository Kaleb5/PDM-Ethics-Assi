// new changing code.

function updateHome() {
	change('addresslabel', 'required'); //make address required
	
	// is the first home radio checked?	
	if(getCheckedValue(document.forms['form1'].elements['MailingAddress']) == "Home") {
		// is the second home radio checked?
		if(getCheckedValue(document.forms['form1'].elements['BillingAddress']) == "Home") {
			change('workaddresslabel', 'normal'); //make address normal
		}
	}
}

function updateWork() {
	change('workaddresslabel', 'required'); //make address required
	
	// is the first work radio checked?
	if(getCheckedValue(document.forms['form1'].elements['MailingAddress']) == "Work") {
		// is the second work radio checked?
		if(getCheckedValue(document.forms['form1'].elements['BillingAddress']) == "Work") {
			change('addresslabel', 'normal'); //make address normal
		}
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