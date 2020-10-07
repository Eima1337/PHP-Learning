<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $bmi = $weight / (($height / 100) * ($height / 100));
        print("Your bmi is : " . $bmi . " and " . "your condition is: ");
        
        // if($bmi < 18.5) 
        //     print "nepakankamas svoris";
        //  elseif ($bmi = 18.5 or $bmi < 25) 
        //     print "normalus svoris";
        //  elseif ($bmi = 25 or $bmi < 30) 
        //     print "virssvoris";
        //  else 
        //     print "diet time";
        if($bmi > 30) {
            echo "Diet time!";
        } elseif ($bmi > 25 and $bmi <= 30) {
            echo "Overweight";
        } elseif ($bmi > 18.5 and $bmi <= 25) {
            echo "Normal weight";
        } else {
            echo "Underweight";
        }

    ?>
</body>

</html>