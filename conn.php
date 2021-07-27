<?php
function connect()
{
    $db = new mysqli("localhost", "biddy_user", "Arvind@693", "biddy_db");
    if ($db->connect_error) {
        echo ("Connection failed: " . $db->connect_error);
        exit;
    } else
        return $db;
}
final class ContactUsTab
{
    public $TABLE_NAME = "contactus_tab";
    public $COL_NAME = "name";      //varchar
    public $COL_PHONE = "phone";    //int
    public $COL_MESSAGE = "msg";    //varchar
    public $COL_EMAIL = "email";    //varchar
}

final class NewsLetterTab
{
    public $TABLE_NAME = "newsletter_tab";
    public $COL_NAME = "name";      //varchar
    public $COL_PHONE = "phone";    //int
    public $COL_EMAIL = "email";    //varchar
}
