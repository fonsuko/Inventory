<?php
    echo http_build_query($_POST)."<br>";

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

    $pt = $_POST["productType"];
    $pn = $_POST["productName"];
    $pq = $_POST["productQuantity"];
    $sppp = $_POST["sppp"];
    $exp  = $_POST["exp"];

    // Add product to DB
    $sql = "INSERT INTO product (type, name, quantity,sppp,exp)
    VALUES ('$pt','$pn',$pq,$sppp,'$exp')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "New record created successfully" . $result . "<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    // Find product id of a newly added product
    $sql = "SELECT id FROM product WHERE name = '$pn'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Fetched product ID" . "<br>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    $row = mysqli_fetch_assoc($result);
    $id = $row["id"];
    echo $id;
    mysqli_close($conn);

    // generate QRcode
    $qr = file_get_contents("https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=http://localhost/product.php?id=$id");
    file_put_contents("../../qr_local/qr_$id.png",$qr);

    // generate and redirect to product page
    if(isset($id)){
        header("Location: ../../product.php?id=$id");
        die();
    }
?>