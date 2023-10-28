<?php 
    $connect = mysqli_connect('localhost','root','','shopping');
    if ($connect) {
        echo '<center><h1>Finish to connect</h1></center>';
    }
?>