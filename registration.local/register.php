<?php

include_once 'includes/functions.php';
include_once 'includes/cheking-avatar.php';

//-------------обращение не на прямую а через фильтр--------
$login = filter_input(INPUT_POST, 'login');
$pass = filter_input(INPUT_POST, "pass");
$conf = filter_input(INPUT_POST, 'conf');
$email = filter_input(INPUT_POST, 'email');
$avatar=$file_name_changing;
//-----------проверка введенных данных и на существования пользователя--------------
if (empty($login) || empty($pass) || empty($conf) || empty($email) || empty($avatar)) {
    echo 'Some area is not filled out';
} else if ($pass !== $conf) {
    echo 'Passwords are different';
} 
//-------фильтр с индекатор ?---------
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo 'incorrect email';
}else if(strlen($login)<6){
    echo 'Login is less than 6 symbols';
}else {
    if (login_exists($login)) {
	echo 'Login is already exist';
    } else {
	$new_user = array(
	    'login' => $login,
            //------------встроенное API хеширования паролей. TODO  функцию -password_verify- для проверки захэшированного пароля-----------------
	    'pass' => password_hash($pass, PASSWORD_DEFAULT),
	    'email' => $email,
            'avatar'=>$avatar,
	);
	$users = get_users();
	$users[] = $new_user;
	var_dump($users);
    }
}