<?php

    $email = $_POST['email'];
    $number = $_POST['number'];
    $date = $_POST['date'];

    $conn = new mysqli('localhost','root',"",'root');
    if($conn->connect_error){
        die('connection failed : '-$conn->Connect_error);
    }else{
        $stmt = $conn->prepare("insert into form(email,number,date)values(?,?,?)");
        $stmt->bind_param("sii",$email,$number,$date);
        echo "Appointment successfully...";
        $stmt->close();
        $conn->close();
    }
?>