<?php

function validateUser($user )
{
    $errors = array();

    if (empty($user['Username'])) {
        array_push($errors, 'Your Username is required');
    }

    if (empty($user['Email'])) {
        array_push($errors, 'Your Email Address is required');
    }

    if (empty($user['Password'])) {
        array_push($errors, 'Please type in your Password');
    }

    if (($user['PasswordConf'] !== $user['Password'])) {
        array_push($errors, 'Passwords Do not match');
    }

    $existinguser = selectOne('users', ['Email' => $user['Email']]);
    if (isset($existinguser)) {
        array_push($errors, 'Email already exists');
    }

    return $errors;  
}

function validateLogin($user ){
    $errors = array();

    if (empty($user['Username'])) {
        array_push($errors, 'Your Username is required');
    }


    if (empty($user['Password'])) {
        array_push($errors, 'Please type in your Password');
    }

    return $errors;  
}