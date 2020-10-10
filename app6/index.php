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
        // $sum_0 = array_sum($array['Tomas']);
        // $count_0 = count($array['Tomas']);
        // $avg_0 = $sum_0 / $count_0;
        // $sum_1 = array_sum($array['Matas']);
        // $count_1 = count($array['Matas']);
        // $avg_1 = $sum_1 / $count_1;
        // $sum_2 = array_sum($array['Egle']);
        // $count_2 = count($array['Egle']);
        // $avg_2 = $sum_2 / $count_2;
        // print("<br><br> Tomo vidurkis: " . $avg_0 . "Mato vidurkis: " . $avg_1 . "Egles vidurkis: " . $avg_2);
        // foreach($array as $student => $grades) {
        //     $sum = 0;
        //     foreach($grades as $grade) {
        //         $sum += $grade;
        //     }
        //     $count = count($grades);
        //     $avg = $sum / $count;
        //     print($student . " " . " average is: " . $avg . ". ");
        // }
        $length1 = count($array);
        // for($i = 0; $i < $length1; $i++) {
        //     $sum = array_sum($array[$i]);
        //     print($sum);
            
        // }
        // print_r($array['Tomas']);
        print_r(array_keys($array));
    ?>
</body>
</html>