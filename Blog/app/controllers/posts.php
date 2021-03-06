<?php

include('ROOT_PATH' . "../../../../app/database/db.php");
include('ROOT_PATH' . "../../../../app/helpers/validatePosts.php");

$table = 'posts';

$topics = selectAll('topics');
$posts = selectAll($table);


$errors = array();
$id = '';
$title = '';
$body = '';
$topic_id = '';
$published = '';

if (isset($_POST['add-posts'])) {
    $errors = validatePosts($_POST);
    
    

    if (count($errors) === 0) {
        unset($_POST['add-posts']); 

        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published'])? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);


        $post_id = create($table, $_POST);
        $_SESSION['message'] = 'Post Created Successfully';
        $_SESSION['type'] = 'success';  
        header('location: ' . BASE_URL . '/admin/posts/manage.php');
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published'])? 1 : 0;
    }
    
   
}

if (isset($_POST['update-posts'])) {
    $errors = validatePosts($_POST);
    
    

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-posts']); 

        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published'])? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);


        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Post Updated Successfully';
        $_SESSION['type'] = 'success';  
        header('location: ' . BASE_URL . '/admin/posts/manage.php');
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published'])? 1 : 0;
    }
    
   
}

if (isset($_GET['id'])) {
    $posts = selectOne($table, ['id' => $_GET['id']]);
    $id = $posts['id'];
    $title = $posts['title'];
    $body = $posts['body'];
    $topic_id = $posts['topic_id'];
    $published = $posts['published'];
}

if (isset($_GET['delete_id'])) {
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = 'Post Deleted Successfully';
    $_SESSION['type'] = 'success';  
    header('location: ' . BASE_URL . '/admin/posts/manage.php');
    exit();
}
