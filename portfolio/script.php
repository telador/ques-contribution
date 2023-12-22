<?php
    ob_start();
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $comment = $_POST['impression'];
        $ext = $_POST['select'];
        echo $comment;
        $file = fopen('comments.txt', 'a');
        fwrite($file, "Name: ".$name." | Extension: ".$ext."\n");
        fwrite($file, "Comment: ".$comment."\n");
        fclose($file);
        header("Location:".$_SERVER['HTTP_REFERER']."");
    }
    ob_end_flush();
 
?>

