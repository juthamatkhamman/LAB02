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
    { if ($gender == "male")
        {
            echo "Mstr.";
        }
        else if ($gender == "female")
        {
           echo "Miss"; 
        }
    } 
    else if ($age >= "15") 
    { if ($gender == "male")
        {
            echo "Mr.";
        }
        else if ($gender == "female")
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