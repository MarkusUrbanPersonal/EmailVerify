<?php

/* 
*
* KODULAR EXTENSION TO
* AUTOMATICALLY SEND
* VERIFICATION EMAILS
* CREATED BY MARKUS URBAN
*
*/


// GET URL PARAMETERS

$to = $_GET['to'];

$subject = $_GET['subject'];

$link = $_GET['link'];

$recievedtext = $_GET['text'];

$text = str_replace("[link]", $link, $recievedtext); // Replace [link] with real link

$headers = "From: " + $_GET['from']; // Set from adress as a header


// SEND EMAIL

mail($to,$subject,$text,$headers);

echo "SENT" // Print "SENT" on screen if all went correctly



?> 