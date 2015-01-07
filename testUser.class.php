<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//this is for guarantee the user is illegal
 if (empty($_SESSION['admin'])) { 
     //  验证失败，将 $_SESSION["admin"] 置为 false
      echo '<script language="javascript">';
      echo 'window.location.href = "index.php";';
      echo '</script>';
    }
?>
