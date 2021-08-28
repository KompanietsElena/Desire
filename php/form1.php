<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: form2.php');
    }
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <!-- Форма--->
    <form action="form2.php" method="post" enctype="multipart/form-data">
        <label>Логин</label>
        <input type="text" name="name" placeholder="Your name">
        <label>ЛПочта</label>
        <input type="text" name="login" placeholder="Your email">
        <label>Текст сообщения</label>
        <input type="email" name="email" placeholder="Your message">      
        <button type="submit">Send</button>
    </form>
</body>
</html>