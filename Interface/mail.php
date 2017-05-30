<?php

class Mail implements MailInterface {

    function sendMail(){
        return 'Mail Sent!';
    }

    function readMail(){
        return 'Mail Read!';
    }

    function composeMail(){
        return 'Compose Mail.';
    }
}