$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
<!--echo $fio;
echo "<br>";
echo $email;-->
mail("stas.kukarkin@bk.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: stas.kukarkin@bk.ru \r\n");
if (mail("stas.kukarkin@bk.ru", "Заказ с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: stas.kukarkin@bk.ru \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}