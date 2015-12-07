<?php
    include('connect.php');
    $sql = "INSERT INTO Payment (holder, cnumber, month, cdate, cvv, address1, address2, city, zip) VALUES (?,?,?,?,?,?,?,?,?)";
        if($stmt = $mysqli->prepare($sql)){
            $stmt->bind_param("sssssssss", $holder, $cnumber, $month, $cdate, $cvv, $address1, $address2, $city, $zip);
            $holder = $_POST['holder'];                
            $cnumber = $_POST['number'];    
            $month = $_POST['cdm'];
            $cdate = $_POST['cdd'];
            $cvv = $_POST['cvvnnumber'];
            $address1 = $_POST['address1'];
            $address2 = $_POST['address2'];
            $city = $_POST['city'];
            $zip = $_POST['Zipcode'];

            $stmt->execute();
            $stmt->close();
        }
        header("Location: pay.php");
?>