


$(document).ready(function() {


	var text = document.querySelector('#mainText');
	var range = document.createRange();
	range.selectNode(text);
	window.getSelection().addRange(range);

	var tempText;

	$('#copy').click(function copy(event) { 
		console.log(range.commonAncestorContainer);
		document.execCommand('copy'); 
	}, onclick);
	
	$('#cut').click(function cut(event) { document.execCommand('cut'); }, onclick);

	$('#paste').click(function paste(event) { 
		let plainText = event.clipboardData.getData('text/plain'); 
		document.execCommand('insertText', false, plainText);
		//document.execCommand('paste'); 
		//consloe.log(tempText.textContent);
	}, onclick);

	$('#bold').click(function bold(event) { document.execCommand('bold'); }, onclick);
	$('#italic').click(function italic(event) { document.execCommand('italic'); }, onclick);
	$('#underline').click(function underline(event) { document.execCommand('underline'); }, onclick);
	$('#StrikeThrough').click(function StrikeThrough(event) { document.execCommand("StrikeThrough"); }, onclick);
	$('#left').click(function justifyLeft(event) { document.execCommand('justifyLeft'); }, onclick);
	$('#center').click(function justifyCenter(event) { document.execCommand('justifyCenter'); }, onclick);
	$('#right').click(function justifyRight(event) { document.execCommand('justifyRight'); }, onclick);
	
	$('#backcolor').click(function backcolor(event) { 
		var bgcolor = $('#choseColor').val();
		document.execCommand('backColor', false, bgcolor); 
	}, onclick);

	$('#createlink').click(function createlink(event) { 
		var link = prompt("請輸入網址","");
		document.execCommand('createLink', false, link); 
	}, onclick);

	$('#removelink').click(function removelink(event) { document.execCommand('unLink'); }, onclick);

	$('#createImage').click(function createImage(event) { 
		var link = prompt("請輸入圖片位址","");
		document.execCommand('insertImage', false, link); 
	}, onclick);

	$('#fontSizeH1').click(function text1(event) { document.execCommand('fontSize', false, 1); }, onclick);
	$('#fontSizeH2').click(function text2(event) { document.execCommand('fontSize', false, 2); }, onclick);
	$('#fontSizeH3').click(function text3(event) { document.execCommand('fontSize', false, 3); }, onclick);
	$('#fontSizeH4').click(function text4(event) { document.execCommand('fontSize', false, 4); }, onclick);
	$('#fontSizeH5').click(function text5(event) { document.execCommand('fontSize', false, 5); }, onclick);
	$('#fontSizeH6').click(function text6(event) { document.execCommand('fontSize', false, 6); }, onclick);
	$('#fontSizeH7').click(function text7(event) { document.execCommand('fontSize', false, 7); }, onclick);

	$('#foreColor').click(function foreColor(event) {
		var color = $('#choseColor2').val();
		document.execCommand('foreColor', false, color); 
	}, onclick);


});








