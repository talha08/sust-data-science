<?php
use Carbon\Carbon;

//$name = Input::get('name');
//$phone_number = Input::get('phone_number');
$email = Input::get ('email');
$subject = Input::get ('subject');
$message = Input::get ('message');
$date_time = date("F j, Y, g:i a");
//$date_time = Carbon::today('Asia/Dhaka');
//$userIpAddress = Request::getClientIp();

?>

<h1>Message From: <b> <?php echo ($email); ?></b> </h1>

<h3>


    Subject: <?php echo ($subject); ?><br>
    Message: <?php echo ($message);?><br>
    Date: <?php echo($date_time);?><br>


</h3>