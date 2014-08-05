// JavaScript Document
$( document ).ready(function() {
    


$('#changeStyle').click(function() {
	$('body').toggleClass('newstyle');
});

var bgColor = $('body').css('background-color');
console.log(bgColor);

$('p.paragraph').css('border','2px solid green').css('margin','75px');


var baseFont = $('p').css('font-size');
baseFont = parseInt(baseFont,10);
$('p').css('font-size',baseFont*5);

var imgSrc = $('body p img').attr('src');
var altTxt = $('img').attr('alt');
var imgTitle = $('img').attr('title');
console.log(imgSrc);
console.log(altTxt);
console.log(imgTitle);

$('img').each(function() {
	var imgLoc = $(this).attr('src');
	$('#imgLoc').append ('<li>' + 'File location = ' + imgLoc + '</li>');
});

$('img').each(function() {
	
	var imgTitle = $(this).attr('title');
	$('#imgTitle').append ('<li>' + 'Title = ' + imgTitle + '</li>');
});

$('img').each(function() {
	
	var imgWidth = $(this).attr('width');
	$('#width').append('<li>' + 'Width = ' + imgWidth + '</li>');
});


// pullquote start
$('span.pq').each(function() { //start each
	var quote=$(this).clone();
	quote.removeClass('pq');
	quote.addClass('pullquote');
	$(this).before(quote);
	
}); // end each


// pullquote end

}); //end document ready

