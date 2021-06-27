<?php
include '..//db.php';

session_start();

if(isset($_POST['submit'])){
    echo "post true";
    $uid = mysqli_real_escape_string($db, $_POST['uid']);
echo $uid;
    
    if(empty($uid)){
         header("Location: ../logcontrol.php?login=empty");
    exit();
    }else{
        echo "bo'sh emas";
        $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
$result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);
        echo $resultCheck;
        if($resultCheck < 1){
           header("Location: ../logcontrol.php?login=error");
    exit();  
        }else{
           echo "xabar yoz";
           //bu yerga emailga jo'natiladigan xabar yoziladi
            
           $txt = rand(1000000,9999999);
            
            //random parol almashtirilishi uchun kerakli
            
            require '..//mail_feedback/PHPMailerAutoload.php';
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Включить подробный вывод отладки

$mail->isSMTP();                                      // Указываем что используем SMTP
$mail->Host = 'server1.ahost.uz';  // Укажите SMTP Сервер
$mail->SMTPAuth = true;                               // Включение проверки подлинности SMTP
$mail->Username = 'info@fishmarket.uz';                 // Логин почтового ящика
$mail->Password = '20hukmdor18*';                           // Пароль 
$mail->SMTPSecure = 'ssl';                            // Указываем какое подключение используем TLS или SSL в нашем случае SSL
$mail->Port = 465;                                    // Порт для SSL - 465, TLS 587.

$mail_body = '
    <b>Message Num :</b> 769<br />
    <b>Message Date :</b> 2013-04-08 09:03:21<br />
    <b>Name :</b> John Doe<br />
    <b>Phone :</b> 123456789<br />
    <b>E-mail :</b> abcdf@somedomain.com<br />
    <b>Message :</b> Here is the message info<br />
';

//$recipients = array("milliykredituz@gmail.com","hukmdor2018@gmail.com");
/*foreach(milliykredituz@gmail.com as $mail_add) {
    $mail->AddAddress($mail_add);
}*/

    $mail->addAddress('info@fishmarket.uz');

$mail->setFrom("salom from");
 $mail->Subject="salom subekt";
$mail->IsHTML(true);
$mail->Body = $mail_body;
 if(!$mail->send()){
      header("Location: ../logcontrol.php?pass=note");
    exit();} 
    else{
        header("Location: ../logcontrol.php?pass=rect");
    exit();
    }
          
            
            
        }
    }}
       
?>