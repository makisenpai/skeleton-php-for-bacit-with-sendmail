<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/css/style.css">
<title>Aktiviteter</title>
</head>
    <body>
        <div class="Box">

            <?php 
            include "../inc/header.inc.php";
            ?>
            <form action="../inc/course.signup.php" method="post">
                <h1>Velg en aktivitet å melde deg på</h1>
                <table>
                    <tr>
                        <select for="courses" name="course" required>
                        <?php 
                            include "../inc/config.php";

                            $sql = "SELECT * FROM courses";

                            $stmt = $con->query($sql);

                            if($stmt->num_rows>0){

                                while($row=$stmt->fetch_assoc()){

                                    echo "<option value=". $row["course_name"] . ">" . $row["course_name"] . "</option>";
                                    
                                }
                            }
                
                ?>
                    <input type="submit" name="register"/>
                    </tr>
                </table>

            </form>



            <?php
            include "../inc/course.select.php";

            include "../inc/course.form.php";
            ?>
            <br>

        </div>
    </body>
</html>