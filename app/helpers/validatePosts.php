<?php

function validatePosts($posts)
{
    $errors = array();

    if (empty($posts['title'])) {
        array_push($errors, 'The title is required');
    }

    if (empty($posts['body'])) {
        array_push($errors, 'The body is required');
    }

    if (empty($posts['topic_id'])) {
        array_push($errors, 'Please select your topic');
    }

    $existingPost = selectOne('posts', ['title' => $posts['title']]);
    if (isset($existinguser)) {
        array_push($errors, 'Post with that title already exists');
    }

    return $errors;  
}
