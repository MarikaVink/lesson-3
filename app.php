<?php

//Getting the message from address
//if there is ?name= .. then $_GET["name"]
$my_message = $_GET["message"];
$to = $_GET["to"];
echo "My message is ".$my_message." for"." ".$to



?>

<h2> First application </h2>

<form method="get">
<label for="message"> Message:*</label><br>
<input type="text" name="message"><br>
<label for="to"> To:*</label><br>
<input type="text" name="to"><br>
<input type="submit" value="Save to DB"> 

	

</form>