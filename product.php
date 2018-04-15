<?php
    // Dynamically access DB by id from $_GET and create a product page

    $pid = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ims";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM product WHERE id = '$pid';";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Product Info" . "<br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    $row = mysqli_fetch_assoc($result);
    echo "product id: " .$row["id"]. " product name: " .$row["name"]. " price: ". $row["sppp"];
    echo "<br><img src=qr_local/qr_$pid.png>";
    mysqli_close($conn);

?>