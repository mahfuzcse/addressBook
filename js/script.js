$(document).ready(function(){
	$('#loaderImage').show();
	showContacts();
//add contact
        $(document).on('submit','#addContact',function(){
	    $('#loaderImage').show();

	    $.post("add_contact.php",$(this).serialize())
		.done(function(data){
			console.log(data);
				$('addModal').foundation('reveal','close');
				showContacts();
		});
		return false;

        });
	
//edit contact
	$(document).on('submit','#editContact',function(){
		$('#loaderImage').show();

		$.post("edit_contact.php",$(this).serialize())
		.done(function(data){
			console.log(data);
				$('editModal').foundation('reveal','close');
				showContacts();
		});
		return false;
	});


	 $(document).on('submit','#addContact',function(){
	    $('#loaderImage').show();
	    
	    $.post("add_contact.php",$(this).serialize())
		.done(function(data){
			console.log(data);
				$('addModal').foundation('reveal','close');
				showContacts();
		});
		return false;

        });
});

function showContacts(){
	console.log('Showing Contacts.....');
	setTimeout("$('#pageContent').load('contacts.php',function(){$('loaderImage').hide();})",1000);
}