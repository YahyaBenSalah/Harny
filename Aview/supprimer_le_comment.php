<?php
include_once "../controller/comment.php";
include_once "../model/Comment.php";

$alb = new CommentC();
$al = new Comment();
$al->setId(rand(1,999999));
$al->setComment($_GET["comment"]);
 $alb->ajouter($al);

 header("Location: ".$_SERVER['HTTP_REFERER']);

?>