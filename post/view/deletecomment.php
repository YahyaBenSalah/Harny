<?php
include '../../comment/Controller/commentC.php';
$commentC = new commentC();
   if (isset($_POST["idcomment"])){
   $commentC->supprimerComment($_POST["idcomment"]);
   header('Location:index.php');
}
?>