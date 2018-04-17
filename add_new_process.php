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
    $pb = $_POST["productBrand"];
    $vd = $_POST["vendor"];
    $sppp = $_POST["sppp"];
    $exp  = $_POST["exp"];

    $target_dir = "../../pimgs/";
    $t = time();
    $imgName = '';
    if($_FILES["pimg"]["name"] != NULL){
        $imgName = $t . '_' . str_replace(' ','_',basename($_FILES["pimg"]["name"]));
        $target_file = $target_dir . $imgName;
        
        if (move_uploaded_file($_FILES["pimg"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["pimg"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        } 
    }


    //Add product to DB
    $sql = "INSERT INTO product (type, name, brand, vendor, quantity,sppp,exp,img)
    VALUES ('$pt','$pn','$pb','$vd',$pq,$sppp,'$exp','$imgName');";
    $result = mysqli_query($conn,$sql);
    $pid = '';
    if ($result) {
        echo "New record created successfully" . $result . "<br>";
        $pid = mysqli_insert_id($conn);
        echo $pid;

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    // Find product id of a newly added product
    $sql = "SELECT id FROM product WHERE name = '$pid'";
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