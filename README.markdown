Standout CMS mailer
===================

This plugin handles form submission and basically lets your client create almost
any type of form that consists of text inputs, select boxes, radio buttons and checkboxes.

Basically it takes the name of the input fields, reads their value and puts them together in pairs. 
Then it sends out an e-mail to the e-mail adress specified in the top of the file and redirects the
user to a URL.

How to use
------------------

1. Upload the post.php anywhere on your web server (accessible from the web)
2. In StandoutCMS, create a HTML form with an action that refers to the URL where the post.php file is located.

<form method="POST" action="http://www.example.com/plugins/post.php">
	
	<label for="name">Your name:</label>
	<input type="text" value="David" name="name" id="name">
	
	<input type="submit" value="Send">
	
</form>

The form above will send an e-mail with the the message "name: David" to the specified e-mail address.
This is only meant as a basic stub for you to modify. 