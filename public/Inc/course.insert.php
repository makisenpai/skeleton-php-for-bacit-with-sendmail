<?php 
include "config.php";
//Vis $_POST["create"] blir sendt if'en kjører resten av filen. 
if(isset($_POST["create"])){
    //Binder variabelen til en lokal variabel "EGENTLING HELT UNØDVENDING MEN JEG HADDE PROBLEMER MED AT DET IKKE FUNGERE Å BRUKE $_POST I NOEN FUNKSJONER"
    $star_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $name = $_POST['name'];
    $info = $_POST['info'];

    //Lager Insert SQL'scriptet, Legger til dataene inn i Course tabelen. 
    $sql = "INSERT INTO courses(course_start_date, course_end_date, course_name, course_info)VALUES(?,?,?,?)";

    //Gjør klar tilkoblingen med Scriptet
    $stmt = $con->prepare($sql);

    //Binder parameterene i SQL scriptet til veridene i php
    $stmt->bind_param("ssss", $star_date, $end_date, $name, $info);

    //Kjører SCRIPTET, og sender tilbake til Course.site.php
    if($stmt->execute()){
        header("location: ../site/course.site.php");
    }else{
        echo "well poop";
    }
}
?>
