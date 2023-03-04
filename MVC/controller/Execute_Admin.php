<?php
session_start();
if ($_SESSION['User'][0]['id_profil']==1) {
    header("Location:../View/admin.php");
}else {
    header("Location:../View/Refus.php");
}


?>