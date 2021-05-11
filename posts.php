<?php
include "bootstrap/init.php";
if (!Login::is_user_logged_in()) {
    redirect(BASE_URL);
}

$data = Post::get_all_posts();

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $content = $_POST['text'];
    if (is_string($content)) {
        $result = Post::create_post($content);
        if ($result) {
            redirect(BASE_URL . "posts.php");
        } else {
            message("Oops something went wrong");
        }
    }
}

include "views/posts.php";
