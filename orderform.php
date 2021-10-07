<?php
$scratchusername = $_Post['scratchusername'];
$svc = $_Post['svc'];
$whoyouwanttodoit = $_Post['whoyouwanttodoit'];
$timezone = $_Post['timezone'];
$duedate = $_Post['duedate'];
$description = $_Post['description'];
$otherdetails = $_Post['otherdetails'];

$email_from = 'replit@gmail.com';
$email_subject = "New form submission!";
$email_body = "Scratch Username: $name.\n".
"Service User Wants: $svc.\n".
"Who user wants to do it: $whoyouwanttodoit.\n".
"User timezone: $timezone.\n".
"Due date: $duedate.\n".
"Description: $description.\n".
"Other details: $otherdetails.\n";

$to = "anpangpawit2@gmail.com";
$headers = "Feo"

mail($to,$email_subject,$email_body,$headers)

header("Location: orderform.php")
?>
