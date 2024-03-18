<?php
    $to = "gamesmany16@gmail.com";
    $email = $_POST['email'];

    $err = "";
    if (trim ($_POST['name']) == "" && trim($_POST['email']) == "" && trim($_POST['message']) == "")
        $err = "Заповніть всі дані";
    else if (trim ($_POST['name']) == "")
        $err = "Ім'я не вказано";
    else if (!((strpos($email, ".") > 0) && (strpos($email, "@") > 0)))
        $err = "Неправильний e-mail";
    else if (trim ($_POST['message']) == "")
        $err = "Повідомлення не вказано";

    if ($err != "") { // Є якісь помилки
        echo $err;
        exit;
    }

    $msg = "Повідомлення надіслав(ла) <b>".$_POST['name']."</b>.<br><b>Текст повідомлення:</b><br>".$_POST['message']."<br><br>Повідомлення з сайту: NewsUA.com";

    $subject = "=?utf-8?B?".base64_encode("Повідомлення з сайту NewsUA")."?=";

    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

    $success = mail($to, $subject, $msg, $headers);
    echo $success;
?>

