function appendThirdWidth() {
	var row = document.createElement("DIV");
	row.className = "row";
	row.id = "layoutDiv"
	
	var thirdWidth1 = document.createElement("DIV");
	thirdWidth1.className = "large-4 columns";
	
	var pc1 = document.createElement("DIV");
	pc1.className = "primary callout";

	var input1 = document.createElement("LABEL");
	input1.setAttribute("name", "inputLabel");
	input1.innerHTML = "<a name='porebutton' onclick='preview(this.parentNode.parentNode)'>Preview</a>";
	var ta1 = document.createElement("TEXTAREA");
	ta1.placeholder = "Enter Site Text";
	ta1.setAttribute("name", "divEntry");

	input1.appendChild(ta1);

	var deleteDiv1 = document.createElement("A");
	deleteDiv1.className = "deleteButton";
	deleteDiv1.innerHTML = "x";
	deleteDiv1.setAttribute("onclick", "deleteDiv(this.parentNode)");

	pc1.appendChild(deleteDiv1);
	pc1.appendChild(input1);
	thirdWidth1.appendChild(pc1);
	
	var thirdWidth2 = document.createElement("DIV");
	thirdWidth2.className = "large-4 columns";

	var pc2 = document.createElement("DIV");
	pc2.className = "primary callout";

	var input2 = document.createElement("LABEL");
	input2.setAttribute("name", "inputLabel");
	input2.innerHTML = "<a name='porebutton' onclick='preview(this.parentNode.parentNode)'>Preview</a>";
	var ta2 = document.createElement("TEXTAREA");
	ta2.placeholder = "Enter Site Text";

	input2.appendChild(ta2);

	var deleteDiv2 = document.createElement("A");
	deleteDiv.className2 = "deleteButton";
	deleteDiv.innerHTML2 = "x";
	deleteDiv2.setAttribute("onclick", "deleteDiv(this.parentNode)");

	pc2.appendChild(deleteDiv2);
	pc2.appendChild(input2);
	thirdWidth2.appendChild(pc2);
	
	var thirdWidth3 = document.createElement("DIV");
	thirdWidth3.className = "large-4 columns";

	var pc3 = document.createElement("DIV");
	pc3.className = "primary callout";

	var input3 = document.createElement("LABEL");
	input3.setAttribute("name", "inputLabel");
	input3.innerHTML = "<a name='porebutton' onclick='preview(this.parentNode.parentNode)'>Preview</a>";
	var ta3 = document.createElement("TEXTAREA");
	ta3.placeholder = "Enter Site Text";

	input3.appendChild(ta3);

	var deleteDiv3 = document.createElement("A");
	deleteDiv3.className = "deleteButton";
	deleteDiv3.innerHTML = "x";
	deleteDiv3.setAttribute("onclick", "deleteDiv(this.parentNode)");

	pc3.appendChild(deleteDiv3);
	pc3.appendChild(input3);
	thirdWidth3.appendChild(pc3);
	
	row.appendChild(thirdWidth1);
	row.appendChild(thirdWidth2);
	row.appendChild(thirdWidth3); 
	
	var saveButtonDiv = document.getElementById("saveButtonDiv");
	saveButtonDiv.parentNode.insertBefore(row, saveButtonDiv);
}

function appendHalfWidth() {
	var row = document.createElement("DIV");
	row.className = "row";
	row.id = "layoutDiv"
	
	var halfWidth1 = document.createElement("DIV");
	halfWidth1.className = "large-6 columns";
	var pc1 = document.createElement("DIV");
	pc1.className = "primary callout";

	var input1 = document.createElement("LABEL");
	input1.setAttribute("name", "inputLabel");
	input1.innerHTML = "<a name='porebutton' onclick='preview(this.parentNode.parentNode)'>Preview</a>";
	var ta1 = document.createElement("TEXTAREA");
	ta1.placeholder = "Enter Site Text";

	input1.appendChild(ta1);

	var deleteDiv1 = document.createElement("A");
	deleteDiv1.className = "deleteButton";
	deleteDiv1.innerHTML = "x";
	deleteDiv1.setAttribute("onclick", "deleteDiv(this.parentNode)");

	pc1.appendChild(deleteDiv1);
	pc1.appendChild(input1);
	halfWidth1.appendChild(pc1);
	
	var halfWidth2 = document.createElement("DIV");
	halfWidth2.className = "large-6 columns";
	
	var pc2 = document.createElement("DIV");
	pc2.className = "primary callout";

	var input2 = document.createElement("LABEL");
	input2.setAttribute("name", "inputLabel");
	input2.innerHTML = "<a name='porebutton' onclick='preview(this.parentNode.parentNode)'>Preview</a>";
	var ta2 = document.createElement("TEXTAREA");
	ta2.placeholder = "Enter Site Text";

	input2.appendChild(ta2);

	var deleteDiv2 = document.createElement("A");
	deleteDiv2.className = "deleteButton";
	deleteDiv2.innerHTML = "x";
	deleteDiv2.setAttribute("onclick", "deleteDiv(this.parentNode)");

	pc2.appendChild(deleteDiv2);
	pc2.appendChild(input2);
	halfWidth2.appendChild(pc2);

	row.appendChild(halfWidth1);
	row.appendChild(halfWidth2);
	
	var saveButtonDiv = document.getElementById("saveButtonDiv");
	saveButtonDiv.parentNode.insertBefore(row, saveButtonDiv);
}

function appendFullWidth() {
	var row = document.createElement("DIV");
	row.className = "row";
	row.id = "layoutDiv";
	
	var fullWidth = document.createElement("DIV");
	fullWidth.className = "large-12 columns";

	var pc = document.createElement("DIV");
	pc.className = "primary callout";

	var input = document.createElement("LABEL");
	input.setAttribute("name", "inputLabel");
	input.innerHTML = "<a name='porebutton' onclick='preview(this.parentNode.parentNode)'>Preview</a>";
	var ta = document.createElement("TEXTAREA");
	ta.placeholder = "Enter Site Text";

	var deleteDiv = document.createElement("A");
	deleteDiv.className = "deleteButton";
	deleteDiv.innerHTML = "x";
	deleteDiv.setAttribute("onclick", "deleteDiv(this)");

	input.appendChild(ta);
	pc.appendChild(input);
	pc.appendChild(deleteDiv);
	fullWidth.appendChild(pc)
	row.appendChild(fullWidth);
	
	var saveButtonDiv = document.getElementById("saveButtonDiv");
	saveButtonDiv.parentNode.insertBefore(row, saveButtonDiv);
}

function preview(e) {
	var text = $(e).find("textarea")[0].value;

	$(e).find("label")[0].remove();

	var label = document.createElement("LABEL");
	label.innerHTML = "<a name='porebutton' class='previewButton' onclick='edit(this.parentNode.parentNode)'>Edit</a>"
	var previewText = document.createElement("P");
	previewText.innerHTML = text;

	e.appendChild(label);
	e.appendChild(previewText);
}

function edit(e) {
	var text = $(e).find("p")[0].innerHTML;

	$(e).find("label")[0].remove();

	var label = document.createElement("LABEL")
	label.innerHTML = "<a name='porebutton' onclick='preview(this.parentNode.parentNode)'>Preview</a>"
	var editText = document.createElement("TEXTAREA");
	editText.innerHTML = text;
	editText.placeholder = "Enter Site Text";

	$(e).find("p")[0].remove();

	label.appendChild(editText);
	e.appendChild(label);
}

/*
function addHeaderTag(e) {
	var text = window.getSelection();
	var spn = '<span class="highlight">' + text + '</span>';
	var text = $('.conttext').text();
	$('.conttext').html(text.replace(highlight, spn));
	console.log(text);	
}
*/

function deleteDiv(e) {
	e.parentNode.parentNode.remove();
}

function removeLast() {
	$('#body div#layoutDiv').last().remove();
}

function saveLayout() {
	$("#buttonDiv").remove();

	var textareas = document.getElementsByName("inputLabel");

	for (var i = textareas.length - 1; i >= 0; i--) {
		preview(textareas[i].parentNode);
	}

	var buttons = document.getElementsByName("porebutton");

	for (var i = buttons.length - 1; i >= 0; i--) {
		buttons[i].parentNode.removeChild(buttons[i]);
	}

	var labels = document.getElementsByTagName("label");

	for (var i = labels.length - 1; i >= 0; i--) {
		var text = labels[i].innerHTML;
		labels[i].parentNode.innerHTML = text;
	}

	$("#saveButtonDiv").remove();
}

function previewFull() {
	var editButton = document.createElement("A");
	editButton.setAttribute("onclick", "editFull()");
	editButton.innerHTML = "Edit";
	editButton.className = "button";

	$("#buttonDiv").remove();

	var textareas = document.getElementsByName("inputLabel");

	for (var i = textareas.length - 1; i >= 0; i--) {
		preview(textareas[i].parentNode);
	}

	var buttons = document.getElementsByName("porebutton");

	for (var i = buttons.length - 1; i >= 0; i--) {
		buttons[i].remove();
	}

	var labels = document.getElementsByTagName("label");

	for (var i = labels.length - 1; i >= 0; i--) {
		var text = labels[i].innerHTML;
		labels[i].parentNode.innerHTML = text;
	}

	var saveButtons = $("#saveButtonDiv a");

	for (var i = saveButtons.length - 1; i >= 0; i--) {
		saveButtons[i].remove();
	}

	$("#saveButtonDiv .primary.callout")[0].appendChild(editButton);
}

function editFull() {
	var buttonDiv = document.createElement("DIV");
	buttonDiv.className = "row";
	buttonDiv.id = "buttonDiv";

	var pc = document.createElement("DIV");
	pc.class = "primary callout";

	var thirdWidthButton = document.createElement("A");
	thirdWidthButton.className = "button";
	thirdWidthButton.id = "thirdWidthButton";
	thirdWidthButton.innerHTML = "Add Third Width";
	thirdWidthButton.setAttribute("onclick", "appendThirdWidth()");

	var halfWidthButton = document.createElement("A");
	halfWidthButton.className = "button";
	halfWidthButton.id = "halfWidthButton";
	halfWidthButton.innerHTML = "Add Half Width";
	thirdWidthButton.setAttribute("onclick", "appendHalfWidth()");

	var fullWidthButton = document.createElement("A");
	fullWidthButton.className = "button";
	fullWidthButton.id = "fullWidthButton";
	fullWidthButton.innerHTML = "Add Full Width";
	fullWidthButton.setAttribute("onclick", "appendFullWidth()");

	var removeLastButton = document.createElement("A");
	removeLastButton.className = "button";
	removeLastButton.id = "removeLastButton";
	removeLastButton.innerHTML = "Remove Last Element";
	removeLastButton.setAttribute("onclick", "removeLast()");

	pc.appendChild(thirdWidthButton);
	pc.appendChild(halfWidthButton);
	pc.appendChild(fullWidthButton);
	pc.appendChild(removeLastButton);
	buttonDiv.appendChild(pc);

	$("#body").insertBefore(buttonDiv, $("#body div#layoutDiv"));
}