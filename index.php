<?php
    require_once __DIR__ ."/controller/controllerBase.php";
    $posts = Post::getPost();
    
    # view template

    require_once __DIR__ ."/template/head.php";

    require_once __DIR__ ."/template/home.php";


 