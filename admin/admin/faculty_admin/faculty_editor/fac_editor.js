var templateNum;
var originalTemplateNum;

$(document).ready(function(){
	$("#editing").hide();
	$("#submitDiv").hide();
	$("#selector").change(function(){
		var id = $("#selector").val();
		if(id == ""){
			$("#appendButtonDiv").empty();
			$("#currentLayout").load("fac_editor.php #load");
			$("#saveButtonDiv").empty();
			$("#submitDiv").hide();
		}else{
			//$("#appendButtonDiv").load("ButtonLayouts/editorButtons.php");
			$("#currentLayout").load("fac_template2_load.php #load", { "variable": id }, function() {
				var previewTexts = document.getElementsByName("previewText");

				for (var i = previewTexts.length - 1; i >= 0; i--) {
					edit(previewTexts[i].parentNode);
				}

				templateNum = ($('input[type=radio][name=template]:checked').val());
				originalTemplateNum = templateNum;
				console.log(originalTemplateNum);

				$('input[type=radio][name=template]').change(function() {
					templateNum = this.value;

					if (templateNum == originalTemplateNum) {
						document.getElementById("responseText").innerHTML = "";
					} else {
						document.getElementById("responseText").innerHTML = "Please hit submit to update template layout";
					}
			    });
			});

			$("#editing").show();
			$("#submitDiv").show();
		}
	});
	
});

// Creates dynamically sized divs to add to rows based on passed parameters
function createDiv(divClassName) {
	var createdDiv = document.createElement("div"); // Creates the outer div layer
	createdDiv.className = divClassName;

	var preview = document.createElement("label");
	preview.setAttribute("name", "inputLabel");
	preview.innerHTML = "<a name='porebutton' onclick='preview(this.parentNode.parentNode)'>Preview</a>";
	var ta = document.createElement("textarea");
	ta.setAttribute("name", "addedTextArea");
	ta.className = "addedContentTA";
	ta.placeholder = "Enter Site Text"; // Creates editable textarea for data entry

	createdDiv.appendChild(preview);
	createdDiv.appendChild(ta);

	return createdDiv;
}

// Appends a row of three evenly spaced divs
function appendThirdWidth() {
	var row = document.createElement("div");
	row.setAttribute("name", "layoutDiv");
	row.className = "row";
	
	var thirdWidth1 = createDiv("large-4 columns");
	
	var thirdWidth2 = createDiv("large-4 columns");
	
	var thirdWidth3 = createDiv("large-4 columns");
	
	//row.appendChild(deleteDiv);
	row.appendChild(thirdWidth1);
	row.appendChild(thirdWidth2);
	row.appendChild(thirdWidth3);
	
	document.getElementById("addedLayout").appendChild(row);
}

// Appends a row of two evenly spaced divs
function appendHalfWidth() {
	var row = document.createElement("div");
	row.setAttribute("name", "layoutDiv");
	row.className = "row";

	var deleteDiv = document.createElement("a");
	deleteDiv.className = "deleteButton";
	deleteDiv.innerHTML = "x";
	deleteDiv.setAttribute("onclick", "deleteDiv(this)"); // Creates x button to delete row
	
	var halfWidth1 = createDiv("large-6 columns");
	
	var halfWidth2 = createDiv("large-6 columns");
	
	//row.appendChild(deleteDiv);
	row.appendChild(halfWidth1);
	row.appendChild(halfWidth2);

	document.getElementById("addedLayout").appendChild(row);
}

function appendFullWidth() {
	var row = document.createElement("div");
	row.setAttribute("name", "layoutDiv");
	row.className = "row";

	var deleteDiv = document.createElement("a");
	deleteDiv.className = "deleteButton";
	deleteDiv.innerHTML = "x";
	deleteDiv.setAttribute("onclick", "deleteDiv(this)"); // Creates x button to delete row

	var fullWidth = createDiv("large-12 columns");

	//row.appendChild(deleteDiv);
	row.appendChild(fullWidth);

	document.getElementById("addedLayout").appendChild(row);
}

// Preview single div text
function preview(e) {
	var text = $(e).find("textarea")[0];
	var p = document.createElement("p");
	p.setAttribute("name", "previewText");
	p.className = text.className;
	p.innerHTML = text.value;

	$(e).find("textarea")[0].replaceWith(p);
	//$(e).find("textarea")[0].remove();

	var label = document.createElement("label");
	label.setAttribute("name", "contentLabel");
	label.innerHTML = "<a name='porebutton' onclick='edit(this.parentNode.parentNode)'>Edit</a>";

	$(e).find("label")[0].replaceWith(label);
}

function previewQuote() {
	var quote = document.getElementById("quote");

	var quotePreview = document.createElement("h5");
	quotePreview.innerHTML = quote.value;
	quotePreview.style.textAlign = "center";
	quotePreview.id = quote.id;

	$(quote).replaceWith(quotePreview);
}

function previewSection(e) {
	var templateInputs = document.getElementsByClassName("templateInput");

	for (var i = templateInputs.length - 1; i >= 0; i--) {
		var p = document.createElement("p");
		p.innerHTML = templateInputs[i].value;
		p.className = templateInputs[i].className;

		$(templateInputs[i]).replaceWith(p);
	}

	previewQuote();
	previewBio();
}

function previewBio() {
	var text = document.getElementById("bio");

	var container = document.createElement("p");
	container.id = "bio";
	container.innerHTML = text.value;

	$(text).replaceWith(container);
}

// Edit single div text
function edit(e) {
	var text = $(e).find("p")[0];

	var editText = document.createElement("textarea");
	editText.className = text.className;
	editText.innerHTML = text.innerHTML;
	editText.placeholder = "Enter Site Text";

	$(text).replaceWith(editText);

	var label = document.createElement("label")
	label.setAttribute("name", "inputLabel");
	label.innerHTML = "<a name='porebutton' onclick='preview(this.parentNode.parentNode)'>Preview</a>"

	$(e).find("label")[0].replaceWith(label);
}

function editQuote() {
	if(originalTemplateNum != 3) {
		var quote = document.getElementById("quote");

		var quoteInput = document.createElement("textarea");
		quoteInput.setAttribute("rows", "2");
		quoteInput.id = quote.id;
		quoteInput.style.textAlign = "center";
		quoteInput.value = quote.innerHTML;

		console.log("we here");
		$(quote).replaceWith(quoteInput);
	}
}

function editSection() {
	var sectionPreviews = document.getElementsByClassName("templateInput");

	for (var i = sectionPreviews.length - 1; i >= 0; i--) {
		var sectionEdit = document.createElement("input");
		sectionEdit.setAttribute("type", "text");
		sectionEdit.setAttribute("value", sectionPreviews[i].innerHTML);
		sectionEdit.className = sectionPreviews[i].className;

		sectionPreviews[i].replaceWith(sectionEdit);
	}

	editQuote();
	editBio();
}

function editBio() {
	var bio = document.getElementById("bio");

	var bioInput = document.createElement("textarea");
	bioInput.id = "bio";
	bioInput.setAttribute("rows", "8");
	bioInput.value = bio.innerHTML;

	$(bio).replaceWith(bioInput);
}

// Delete full row of divs
function deleteDiv(e) {
	e.parentNode.parentNode.remove();
}

// Remove last added row from current template
function removeLast() {
	$('#currentLayout div[name=layoutDiv]').last().remove();
}

// Saves current layout to selected user's faculty page
function saveLayout() {
	editSection();
	var textareas = document.getElementsByClassName("addedContentTA");

	for (var i = textareas.length - 1; i >= 0; i--) {
		preview(textareas[i].parentNode);
	}

	var buttons = document.getElementsByName("porebutton");

	for (var i = buttons.length - 1; i >= 0; i--) {
		buttons[i].remove();
	}

	var contentLabels = document.getElementsByName("contentLabel");

	for (var i = buttons.length - 1; i >= 0; i--) {
		contentLabels[i].remove();
	}

	var addedContent = document.getElementById("addedLayout").innerHTML;

	var userSelect = document.getElementById("selector");

	var templateInputs = document.getElementsByClassName("templateInput");
	
	//$.post("overwrite.php", { user: userSelect.options[userSelect.selectedIndex].value, html: addedContent, email: templateInputs[0].value, content1: templateInputs[1].value, content2: templateInputs[2].value, content3: templateInputs[3].value,
	//quote: document.getElementById("quote").value, bio: document.getElementById("bio").value, template_num: templateNum });
}

// Previews full page layout
function previewFull() {
	$("#appendButtonDiv").load("ButtonLayouts/editButtonDiv.php");

	var textareas = document.getElementsByClassName("addedContentTA");

	for (var i = textareas.length - 1; i >= 0; i--) {
		preview(textareas[i].parentNode);
	}

	var templateVals = document.getElementById("templateValues");
	previewSection(templateVals);

	var buttons = document.getElementsByName("porebutton");

	for (var i = buttons.length - 1; i >= 0; i--) {
		buttons[i].remove();
	}

	$("#courses").hide();
}

// Edit full page layout after previewing
function editFull() {
	$("#appendButtonDiv").load("ButtonLayouts/editorButtons.php");

	var previewText = document.getElementsByName("previewText");

	for (var i = previewText.length - 1; i >= 0; i--) {
		edit(previewText[i].parentNode);
	}

	var templateVals = document.getElementById("templateValues");
	editSection();

	$("#courses").show();
}