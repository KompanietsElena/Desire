<?php
    session_start();
    require_once 'form1.php';
    
    $login = $_POST['email'];
    $password = md5($_POST['text']);
    //Запрос к БД
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `text` = '$text'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "email" => $user['email'],
            "text" => $user['text']
        ];

        header('Location: form1.php');

    } else {
        $_SESSION['email'] = 'Некорректный email';
        header('Location: index.html');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
