<!DOCTYPE html>
<html>

<body>
    <?php
    
    $name = $_GET["name"];
    $age = $_GET["age"];
    $gender = $_GET["gender"];
    $status = $_GET["status"];

    if ($age <= "14") 
    {
        echo "Miss / Master";
    } 
    else if ($age >= "15") 
    {
        echo " Miss / Mrs. / Mr. ";
    }
    
    
    echo " " . "$name" . "<br>";
    echo "Age:" . "$age" . "<br>";
    echo "Gender:" . "$gender" . "<br>";
    echo "Status:" . "$status" . "<br>";

    ?>


</body>

</html>