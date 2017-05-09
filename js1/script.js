$(document).ready(function(){
	$('#loaderImage').show();
	showContacts();
});

function showContacts(){
	console.log('Showing Contacts.....');
	setTimeout("$('#pageContent').load('contacts.php',function(){$('loaderImage').hide();})",1000);
}