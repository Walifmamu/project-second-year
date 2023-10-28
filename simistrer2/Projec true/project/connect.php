<?php
    include 'add.php';
        $store_name = $_POST['store_name'];
        $type_store = $_POST['type_store'];
        $n_me = $_POST['n_me'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $details = $_POST['details'];
        $query="INSERT INTO store1(store_name,type_store,n_me,lastname,email,phone_number,details)
        VALUES ('$store_name','$type_store','$n_me','$lastname','$email','$phone_number','$details')";
        mysqli_query($connect,$query);
        if(mysqli_affected_rows($connect)) {
            echo '<center><a href="index.html">Back to Homepage</a></center>';
        } else {
            echo '<br>Can not Added';
            echo mysqli_error($connect);
        }     
        
?>