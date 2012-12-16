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
	$('#infoDiv').hide();
});

function hideshow(hide, show, underline, none){
	hide.style.display = "none";
	show.style.display = "block";
	underline.style.textDecoration = "underline";
	none.style.textDecoration = "none";
}