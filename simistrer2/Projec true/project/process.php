<?php
    include 'conn.php';
    error_reporting(0);
        $full_name = $_POST['full_name'];
        $last_name = $_POST['last_name'];
        $your_email = $_POST['your_email'];
        $m_essage = $_POST['m_essage'];  
        $query="INSERT INTO contact(full_name,last_name,your_email,m_essage)
        VALUES ('$full_name','$last_name','$your_email','$m_essage')";
        mysqli_query($connect,$query);
        if(mysqli_affected_rows($connect)) {
            echo '<center><a href="index.html">Back to Homepage</a></center>';
        } else {
            echo '<br>Can not Added';
            echo mysqli_error($connect);
        }     
        
?>