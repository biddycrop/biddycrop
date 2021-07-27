<?php
include_once 'conn.php';
include_once 'class.generic_mail.php';
include_once './email_body/newsletterEmail.php';

$newsletter = new Newsletter();
$status = $newsletter->addToDB($_POST['name'], $_POST['email'], $_POST['phone']);
if ($status)
    $status = $newsletter->send_mail($_POST['name'], $_POST['email']);
if ($status) {
    echo "  <script>
                alert('Your details have been successfully submitted.');
            </script>";
}
echo "<script>window.close();</script>";

class Newsletter
{
    private $db;
    private $table;

    public function __construct()
    {
        $this->db = connect();
        $this->table = new NewsLetterTab();
    }

    public function addToDB($name, $email, $phone)
    {
        $sql = "INSERT INTO " . $this->table->TABLE_NAME . " (" . $this->table->COL_NAME . ", " . $this->table->COL_EMAIL . ", " . $this->table->COL_PHONE . ") VALUES ('$name', '$email', $phone)";
        return $this->db->query($sql);
    }

    public function send_mail($name, $email)
    {
        $mail = new generic_mail();
        $mail->addRecipient($email);
        $mail->setSubject("Thank you for subscribing.");
        $mail->setHTML(getBody($name), "./email_body/");
        return $mail->send();
    }
}
