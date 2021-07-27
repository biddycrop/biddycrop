<?php

//PHPMailer source code from Git needs to be saved in same folder as this file
//PHPMailer Git Repo- https://github.com/PHPMailer/PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

class generic_mail
{
    private $phpmailer;

    public function __construct()
    {
        //creating object of PHPMailer class
        $this->phpmailer = new PHPMailer(true);
        //setting SMTP Protocol for mailing as GMail is SMTP
        $this->phpmailer->isSMTP();
        //Setting host as the host of GMail
        $this->phpmailer->Host = 'smtp.gmail.com';
        //Setting port number for GMail
        $this->phpmailer->Port = 587;
        //using STARTTLS encryption to turn an insecure connection to a secure one (Need for Gmail)
        $this->phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        //SMTP auth is required to send mail through gmail
        $this->phpmailer->SMTPAuth = true;
        //setting the username and password for auth
        $this->phpmailer->Username = 'biddycrop@gmail.com';
        $this->phpmailer->Password = 'arva2014';
        //setting sender's mail id and name (setting mail id to diff one doesnt work for because we dont hav authorization)
        $this->phpmailer->setFrom('noreply@BiddyCrop.in', 'Biddy Crop');
    }

    //this function is used to add the list of recipients
    //every time function is called, it adds the recipient addr passed in parameter
    public function addRecipient($addr, $name = '')
    {
        $this->phpmailer->addAddress($addr, $name);
    }

    //used to set the subject of the email
    public function setSubject($sub)
    {
        $this->phpmailer->Subject = "$sub";
    }

    //used to set the body of the email if it is plain text
    public function setBody($body)
    {
        $this->phpmailer->Body = "$body";
    }

    //call this function to send the mail after everything is set
    public function send()
    {
        return $this->phpmailer->send();
    }

    //this function is called to add attachments to the mail one at a time
    public function addAttachment($location, $filename)
    {
        $this->phpmailer->addAttachment($location, $filename);
    }

    //this function is called if the body of the mail is html
    // $message is the html content
    // $basedir is passed as the base directory for the files used in html
    public function setHTML($message, $basedir = '')
    {
        $this->phpmailer->isHTML();
        $this->phpmailer->msgHTML($message, $basedir);
    }
}
