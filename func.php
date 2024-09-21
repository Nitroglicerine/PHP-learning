<?php
//function registration(): bool
//{
//    global $pdo;
//
//    $login = !empty($_POST['login']) ? trim($_POST['login']) : '';
//    $password = !empty($_POST['pass']) ? trim($_POST['pass']) : '';
//
//    if (empty($login) || empty($password)) {
//        $_SESSION['errors'] = 'Поля логин/пароль обязательны';
//        return false;
//    }
//
//    $res = $pdo->prepare("SELECT COUNT(*) FROM users WHERE login = ?");
//    $res->execute([$login]);
//    if ($res->fetchColumn()) {
//        $_SESSION['errors'] = 'Данное имя уже используется';
//        return false;
//    }
//
//    $password = password_hash($password, PASSWORD_DEFAULT);
//    $res = $pdo->prepare("INSERT INTO users (login, password) VALUES (?,?)");
//    if ($res->execute([$login, $password])) {
//        $_SESSION['success'] = 'Успешная регистрация';
//        return true;
//    } else {
//        $_SESSION['errors'] = 'Ошибка регистрации';
//        return false;
//function save_message()
//{
//    global $pdo;
//    $message=!empty($_POST['message'])?trim($_POST['message']):'';
//    if (!isset($_SESSION['user']['name'])) {$_SESSION['errors']= "Необходимо авторизоваться";
//    return false;}
//
//    if(empty($message)){
//        $_SESSION['errors']="Введите текст сообщения";
//        return false;
//    }
//    $res =$pdo->prepare('INSERT INTO * messages (name, message) VALUES(?,?)');
//   if( $res->execute([$_SESSION['user']['name'],$message])){
//   $_SESSION['success']= 'Сообщение добавлено';
//   return true;}
//   else{  $_SESSION['errors']="ошибка ввода";
//   return false;}
//}

