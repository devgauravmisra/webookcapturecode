<?php
$data = file_get_contents('php://input');
$webhookdata = date('y'.'m'.'d'. 'H'. 'i'.'s')."body.json";
file_put_contents("cashfreewebhook/$webhookdata" ,$data);
?> 

