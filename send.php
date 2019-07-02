
<?php
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $buket = $_POST['buket'];
    $date=date('d.m.y H:i');

    $from = 'From: autozakaz'; 
    $to = 'zakaz@studio-mari.ru'; 
    $subject = "$date\n";

    $body = "От: $name\n телефон: $tel\n Ёлка: $buket\n";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Спасибо за заказ! В течение 5 секунд Вы будете перемещены на главную страницу</p>';
        header('Refresh: 5; URL=http://studio-mari.ru');

 /* exit;*/
    } else { 
        echo '<p>Что-то полшло не так, позвоните, пожалуйста, по телефону +7(777)777-77-77!</p>'; 
    }
}
?>