<?php
$calc = $_POST['calc'];

switch ($calc){
    case 'weight':
        $master = $_POST['masterValue'];
        $fiveKg = $_POST['fiveKgValue'];
        $twoAndHafl = $_POST['twoAndHaflKgValue'];
        $onehalfKg = $_POST['oneHalfKgValue'];
        $oneKg = $_POST['oneKgValue'];
        $bagSize = $_POST['bagSize'];
        $halfKg = $_POST['halfKgValue'];
        $quaterKg = $_POST['quaterSize'];
        
        $five = (5/$bagSize) * $fiveKg;
        $two = (2.5/$bagSize) * $twoAndHafl;
        $oneHalf = (1.5/$bagSize) * $onehalfKg;
        $one = (1/$bagSize) * $oneKg;
        $half = (0.5/$bagSize) * $halfKg;
        $quater = (0.25/$bagSize) * $quaterKg;
        
        $total = $master+$five+$two+$one+$half+$quater+$oneHalf;
        echo '<h3><div class="row"><div class ="col-sm-6">Calculated stock</div><div class =  "col-sm-6">'.$total.'</div></h3>';  
    break;

    case 'length':
        $master = $_POST['master'];
        $measuredLength = $_POST['measuredLength'];
        $len = round($measuredLength/$master,2);
        echo '<h3><div class="row"><div class ="col-sm-6">Calculated length</div><div class =  "col-sm-6">'.$len.'</div></h3>';
        break;
}

?>