//åbner popup vindu med tilmeldings formularen
function tilmeldOpen()	{
	document.getElementById("tilmeldMaster").style.display = "block"
	
	//sætter højden på tilmeldings masteren til at være samme højde som html'en
	var body = document.body,
    html = document.documentElement;
	var height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );
                       
	document.getElementById("tilmeldMaster").style.height = height + "px"
};

function tilmeldClose()	{
	document.getElementById("tilmeldMaster").style.display = "none"
}

//prevents bubble effects from parrent elements from triggering
function tilmeldProg(ev)	{
		ev.stopPropagation();
}


//validere tilmeldings formularen
function validateForm()	{
	document.forms['form']['fname'].style.backgroundColor = "#fff";
	document.forms['form']['lname'].style.backgroundColor = "#fff";
	document.forms['form']['email'].style.backgroundColor = "#fff";
	document.forms['form']['addr'].style.backgroundColor = "#fff";
	document.forms['form']['zip'].style.backgroundColor = "#fff";
	
	var error = 0;
	var fname = document.forms['form']['fname'].value;
	var lname = document.forms['form']['lname'].value;
	var email = document.forms['form']['email'].value;
	var addr = document.forms['form']['addr'].value;
	var zip = document.forms['form']['zip'].value;
	var news = document.forms['form']['news'].checked;
	
	if(!(fname.match(/^[a-zA-ZæøåÆØÅ é]+$/))){
		error = 1;
		document.forms['form']['fname'].style.backgroundColor = "#f06565";
	}
	
	if(!(lname.match(/^[a-zA-ZæøåÆØÅ]+$/))){
		error = 1;
		document.forms['form']['lname'].style.backgroundColor = "#f06565";
	}
	
	if(!(email.match(/^\w+@[a-zA-Z_-]+?\.[a-zA-Z]{2,6}$/))){
		error = 1;
		document.forms['form']['email'].style.backgroundColor = "#f06565";
	}
	
	if(!(addr.match(/^[a-zA-ZæøåÆØÅ ]* [0-9]{1,30}( ?)[a-zA-ZæøåÆØÅ0-9\.]*$/))){
		error = 1;
		document.forms['form']['addr'].style.backgroundColor = "#f06565";
	}
	
	if(!(zip.match(/^\d{4}$/))){
		error = 1;
		document.forms['form']['zip'].style.backgroundColor = "#f06565";
	}
	
	if(error == 1){
		return false;
	}
	if(error == 0){
		return true;
	}
	
}

//validere kontakt formularen
function kontaktvalidate()	{
	document.forms['input']['custname'].style.backgroundColor = "#fff";
	document.forms['input']['custemail'].style.backgroundColor = "#fff";
	
	var konError = 0;
	var konName = document.forms['input']['custname'].value;
	var konMail = document.forms['input']['custemail'].value;
	
	if(!(konName.match(/^[a-zA-ZæøåÆØÅ é]+$/))){
		konError = 1;
		document.forms['input']['custname'].style.backgroundColor = "#f06565";
	}
	
	if(!(konMail.match(/^\w+@[a-zA-Z_-]+?\.[a-zA-Z]{2,6}$/))){
		konError = 1;
		document.forms['input']['custemail'].style.backgroundColor = "#f06565";
	}
	
	if(konError == 0){
		return true;
	}
	else{
		return false;
	}
}

var febI = 1;
var febII = 1;
var febIII = 1;
var febIIII = 1;

function togglefebI(){
	if(febI == 2){
		$('#febI').hide('slow');
		$('#febIspan').text("Vis program");
		febI = 1;
	}
	else{
		$('#febI').show('slow');
		$('#febIspan').text("skjul program");
		febI = 2;
	}
}

function togglefebII(){
	if(febII == 2){
		$('#febII').hide('slow');
		$('#febIIspan').text("Vis program");
		febII = 1;
	}
	else{
		$('#febII').show('slow');
		$('#febIIspan').text("skjul program");
		febII = 2;
	}
}

function togglefebIII(){
	if(febIII == 2){
		$('#febIII').hide('slow');
		$('#febIIIspan').text("Vis program");
		febIII = 1;
	}
	else{
		$('#febIII').show('slow');
		$('#febIIIspan').text("skjul program");
		febIII = 2;
	}
}

function togglefebIIII(){
	if(febIIII == 2){
		$('#febIIII').hide('slow');
		$('#febIIIIspan').text("Vis program");
		febIIII = 1;
	}
	else{
		$('#febIIII').show('slow');
		$('#febIIIIspan').text("skjul program");
		febIIII = 2;
	}
}


$(document).ready(function() {
	$('#febI').hide();
	$('#febII').hide();
	$('#febIII').hide();
	$('#febIIII').hide();
	$('#ofteDiv').hide();
});

function hideshow(hide, show, underline, none){
	hide.style.display = "none";
	show.style.display = "block";
	underline.style.display = "inline-block";
	none.style.display = "none";
}

function praktiskPil()	{
	document.getElementById("infoPilLeft").style.display = "inline-block"
	document.getElementById("infoPilRight").style.display = "none"
	document.getElementById("praktiskDiv").style.display = "block"
	document.getElementById("ofteDiv").style.display = "none"
}

function oftePil()	{
	document.getElementById("infoPilRight").style.display = "inline-block"
	document.getElementById("infoPilLeft").style.display = "none"
	document.getElementById("praktiskDiv").style.display = "none"
	document.getElementById("ofteDiv").style.display = "block"
}
