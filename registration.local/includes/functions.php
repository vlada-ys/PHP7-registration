<?php

//-------array with already existed users-------
function get_users() {
    $users = array(
	array(
	    'login' => 'qwe-qwe',
	    'pass' => '1234',
	    'email' => 'qwe@qwe',
            'avatar'=> '#',
	),
	array(
	    'login' => 'test-test',
	    'pass' => '1234',
	    'email' => 'test@qwe',
            'avatar'=> '#',
	),
	array(
	    'login' => 'admin-admin',
	    'pass' => '1234',
	    'email' => 'admin@qwe',
            'avatar'=> '#',
	),
    );
    return $users;
}

function login_exists($login) {
    $users = get_users();
    $login_exists = false;
    foreach ($users as $user) {
	if ($user['login'] === $login) {
	    $login_exists = true;
	    break;
	}
    }
    return $login_exists;
}
