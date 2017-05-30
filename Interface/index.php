<?php

require 'mailInterface.php';
require 'mail.php';

$mail = new Mail();

echo $mail->composeMail();