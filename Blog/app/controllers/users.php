<?php


include('ROOT_PATH' . "../../../../app/database/db.php");
include('ROOT_PATH' . "../../../../app/helpers/validateUser.php");


$table = 'users';

$admin_users = selectAll($table, ['admin' => 1]);

$errors = array();
$id = '';
$username = '';
$admin = '';
$email = '';
$password = '';
$passwordConf = '';
$table = 'users';

if (isset($_POST['register-btn'])  || isset($_POST['create-admin'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
    $_POST['Password'] = password_hash($_POST['Password'], PASSWORD_DEFAULT);
    unset($_POST['register-btn'], $_POST['PasswordConf'], $_POST['create-admin']);

    if (isset($_POST['admin'])) {  
        $_POST['admin'] = 1;
        $user_id = create($table, $_POST);
        $_SESSION['message'] = 'Admin User Created Successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/users/manage.php');
        exit();

    }else {
            
        $_POST['admin'] = 0;
        $user_id = create($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);  
    }

 

    //log user in

    
    $_SESSION['id'] = $user['id'];
    $_SESSION['Username'] = $user['Username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now Registered';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/login.php');
    exit();

    }else{
        $username = $_POST['Username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $passwordConf = $_POST['PasswordConf'];
    }
}


if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne('users', ['Username' => $_POST['Username']]);

        //login user
        $_SESSION['id'] = $user['id'];
        $_SESSION['Username'] = $user['Username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = 'You are now logged in';
        $_SESSION['type'] = 'success';


        
        if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/dashboard.php');
        } else {
            header('location: ' . BASE_URL . '/home.php'); 
        }
        exit();
    }


    $username = $_POST['Username'];
    $password = $_POST['Password'];
}



if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);


    $id = $user['id'];
    $username = $user['username'];
    $admin = isset($user['admin']) ? 1 : 0;
    $email = $user['email'];
}

if (isset($_GET['delete_id'])){
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = 'Admin User Deleted Successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/users/manage.php');
    exit();

}