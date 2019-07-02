
<?php
    $name = $_POST['name'];
    $zakaz = $_POST['zakaz'];
    $body = $_POST['body'];
    $date=date('d.m.y H:i');

    $from = 'From: otziv'; 
    $to = 'zakaz@studio-mari.ru'; 
    $subject = "$date\n";

    $body = "От: $name\n по заказу: $zakaz\n отзыв: $body\n";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Спасибо за Ваш отзыв! В течение 5 секунд Вы будете перемещены на главную страницу</p>';
        header('Refresh: 5; URL=http://studio-mari.ru');

 /* exit;*/
    } else { 
        echo '<p>Что-то полшло не так, позвоните, пожалуйста, по телефону +7(977)392-18-05!</p>'; 
    }
}
?>
