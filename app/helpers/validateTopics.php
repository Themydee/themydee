<?php

function validateTopics($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Your Topic is Required');
    }

    $existingtopic = selectOne('topics', ['name' => $topic['name']]);
    if (isset($existingtopic)) {
        array_push($errors, 'Topic already exists');
    }

    return $errors;
}
