<?php
include_once 'conn.php';
include_once 'class.generic_mail.php';
include_once './email_body/contactUsEmail.php';

$contact = new Contact();
$status = $contact->addToDB($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['msg']);
echo "1-" . $status;
if ($status) {
    $status = $contact->send_mail($_POST['name'], $_POST['email']);
}
if ($status) {
    echo "  <script>
                alert('Your details have been successfully submitted.');
            </script>";
} else {
    echo "  <script>
                alert('$status');
            </script>";
}
echo "  <script>
            window.location.href = 'http://www.biddycrop.in';
        </script>";
class Contact
{
    private $db;
    private $table;

    public function __construct()
    {
        $this->db = connect();
        $this->table = new ContactUsTab();
    }

    public function addToDB($name, $email, $phone, $msg)
    {
        $sql = "INSERT INTO " . $this->table->TABLE_NAME . " (" . $this->table->COL_NAME . ", " . $this->table->COL_EMAIL . ", " . $this->table->COL_PHONE . ", " . $this->table->COL_MESSAGE . ") VALUES ('$name', '$email', $phone, '$msg')";
        return $this->db->query($sql);
    }

    public function send_mail($name, $email)
    {
        $mail = new generic_mail();
        try {
            $mail->addRecipient($email);
            $mail->setSubject("Thank you for contacting.");
            $mail->setHTML(getBody($name), "./email_body/");
            $status = $mail->send();
        } catch (Exception $e) {
            $status = $e->getMessage(); //Boring error messages from anything else!
        }
        return $status;
    }
}
