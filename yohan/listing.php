<?php
session_start();
    require 'config.php';

//https://www.codexworld.com/upload-multiple-images-store-in-database-php-mysql/
    

// Include the database configuration file 
include_once 'config.php'; 
     
if(isset($_POST['submit'])){ 
    // File upload configuration 
    $targetDir = "uploads/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$fileName."', NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        // Error message 
        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            // Insert image file name into database 
            $insert = $db->query("INSERT INTO listing (file_name, uploaded_on) VALUES $insertValuesSQL"); 
            if($insert){ 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = "Upload failed! ".$errorMsg; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
} 

    $title = $_POST["title"];
    $descr = $_POST["descr"];
    $category = $_POST["category"];
    $addicategory = $_POST["addicategory"];
    $prodtype = $_POST["prodtype"];
    $prodmat = $_POST["prodmat"];
    $prodbrand = $_POST["prodbrand"];
    $prodyear = $_POST["prodyear"];
    $cond = $_POST["cond"];
    $price = $_POST["price"];
    $offers = $_POST["offers"];
    $price2 = $_POST["price2"];
    $quantity = $_POST["quantity"];
    $packing = $_POST["packing"];
    $shipserv = $_POST["shipserv"];
    $shipcost = $_POST["shipcost"];
    $local = $_POST["local"];


    $sql = "INSERT INTO listing_test(title,descr,category,addicategory,prodtype,prodmat,prodbrand,prodyear,cond,price,offers,price2,quantity,packing,shipserv,shipcost,local) VALUES ('$title','$descr','$category','$addicategory','$prodtype','$prodmat','$prodbrand','$prodyear','$cond','$price','$offers','$price2','$quantity','$packing','$shipserv','$shipcost','$local')" ;

    // Check connection
	if ($con->query($sql)) {
		echo "<script> alert('Listed successfully!')</script>";
	}
	else{
		echo "<script> alert('ERROR')</script>" ;
		echo $sql;
	}

 


?>
