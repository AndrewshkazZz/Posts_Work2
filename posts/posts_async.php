<?php
    require_once('../boot.php');
    $title = "Объявления";
    $page_title = "Объявления(асинхронно)";
    $content = file_get_contents("posts_async_content.php");
    include ("../components/layout.php");
?>