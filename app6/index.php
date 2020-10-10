<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // $my_arr1 = array("A", "B", "C");
        // $my_arr2 = [0, 1, 2];
        // print_r($my_arr2);
        // $my_arr3 = array("Tomas" => "35", "Tadas" => "40");
        // print("<br>" . $my_arr3['Tomas']);
        $array = array(
            "Tomas" => [10, 8, 7, 10, 9],
            "Matas" => [9, 9, 10, 9, 10],
            "Egle" => [10, 10, 10, 10, 10]
        );
        // print_r($array);
        // foreach($array as $student => $grades) {
        //     $sum = 0;
        //     foreach($grades as $grade) {
        //         $sum += $grade;
        //     }
        //     $count = count($grades);
        //     $avg = $sum / $count;
        //     print($student . " " . " average is: " . $avg . ". ");
        // }
            $keys = array_keys($array);
            for ($i = 0; $i < count($array); $i++) {
                $sum = 0;
                for ($j = 0; $j < count($array[$keys[$i]]); $j++) {
                    $sum += $array[$keys[$i]][$j];
                }
                $avg = $sum / count($array[$keys[$i]]);
                print $keys[$i] . " average is: " . $avg . ". ";
             }
      
        // print_r($array['Tomas']);
        // print_r(array_keys($array));
            $people = array(
                "Tomas" => 80,
                "Deivis" => 90,
                "Agne" => 55,
                "Matas" => 86,
                "Vytenis" => 100
             );

            echo "<br> The lightiest person is: " . array_search(min($people), $people) . ".";
            echo "<br> The heaviest person is: " . array_search(max($people), $people) . ".";
            $key = array_keys($people);
            $sum = array_sum($people);
            // echo $sum;
            if ($sum > 400) {
                echo "<br> Lift is overloaded!";
            } else {
                echo "<br> You may choose your destination floor!";
            }
            arsort($people);
            echo "<br>";
            print_r($people);
    ?>
</body>
</html>