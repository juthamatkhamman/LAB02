<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
</head>

<body>
<h1>Personal Information</h1>
    <?php
    
    $name = $_GET["name"];
    $age = $_GET["age"];
    $gender = $_GET["gender"];
    $status = $_GET["status"];

    echo "Name : ";
    if ($age <= "14") 
    { if ($gender == "Male")
        {
            echo "Mstr.";
        }
        else if ($gender == "Female")
        {
           echo "Miss"; 
        }
    } 
    else if ($age >= "15") 
    { if ($gender == "Male")
        {
            echo "Mr.";
        }
        else if ($gender == "Female")
        { if ($status == "married")
            {
                echo "Mrs.";
            }
            else if ($status == "single")
            {
                echo "Miss";
            }
            
        }
    }
    
    
    echo "  " . "$name" . "<br>";
    echo "Age : " . "$age" . "<br>";
    echo "Gender : " . "$gender" . "<br>";
    echo "Status : " . "$status" . "<br>";

    ?>


</body>

</html>