<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];
    
    // Database connection 
    $conn = new mysqli ('localhost','root','','contactform');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into messages(firstname, lastname, country, subject ) values(?,?,?,?)");
        $stmt->bind_param("ssss",$firstname,$lastname,$country,$subject);
        $stmt->execute();
        echo "sent successfully..";
        $stmt->close();
        $conn->close();
    }

?>