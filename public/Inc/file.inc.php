<?php
include_once "config.php";
session_start();

//oppgave 1 modul 9 BILDE UPLOAD

if(isset($_POST['but_upload'])){
 
    $name = $_FILES['file']['name'];
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
        if( in_array($imageFileType,$extensions_arr) && $_FILES["file"]["size"] < 500000 ){
    
        // Oppdaterer tabellen til brukeren
        $query = "UPDATE users
        SET user_img= ('".$name."')
        WHERE user_ID='{$_SESSION['user_id']}'";
        mysqli_query($con,$query);

        // Upload file
        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
        
        header("location: ../site/admin.site.php");

        }else{
            echo "file couldnt be uploaded";
  }
 
}















/* if(isset($_POST['but_upload'])){
    echo "funker";
    $name = $_FILES['file']['name'];

    //path til mappe hvor bilder skal lagres
    $uploads_dir = '../img/';
    $target_file = $uploads_dir . basename($_FILES['file']['name']);

    //Velger vilken fil type
    $image_file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $extensions_arr = array("jpg","jpeg","png");
    
 
    if(in_array($image_file_type,$extensions_arr) && $_FILES["file"]["size"]< 2000000000){
      
        $sql = "UPDATE users SET name= ('".$name."') WHERE user_iD='{$_SESSION['user_id']}'";

        mysqli_query($con,$sql);

        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

        header("location: ../site/profile.site.php");

    }else{
        echo "dead";
    }
} */

?>
