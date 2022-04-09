<?php 
$data_prog1 = '2022-01-01';
$data_prog2 = '2022-01-30';
$add_day = $data_prog1;
while ($data_prog2>$add_day)
{
    $date = new DateTime($data_prog1);
    $week = $date->format("W");
    $week_check = $date->format("W");
    $add_day = date('Y-m-d', strtotime($add_day. ' + 1 day'));
//                                    echo "<br>week".$week;
    while ($week==$week_check && $data_prog2>$add_day)
    {
        $add_day = date('Y-m-d', strtotime($add_day. ' + 1 day'));
        $date_while = new DateTime($add_day);
        $week_check = $date_while->format("W");
//                                        echo $add_day."data add<br>";
//                                        echo "<br>week_check".$week_check."<br>";
    }
//                                    echo "<br>week_check".$week_check."<br>";
//                                    echo $add_day;
    if($add_day>$data_prog1 && $data_prog2>$add_day )
    {
        $add_day = date('Y-m-d', strtotime($add_day. ' - 1 day'));
    }
    echo "<p style='color:red;'>INIZIO</p><br>";
    echo $data_prog1."<br>";
    echo "FINE<br>";
    echo $add_day."<br>";
    $data_prog1 = date('Y-m-d', strtotime($add_day. ' + 1 day'));
//                                    echo "<br>NEW".$data_prog1;
}
?>
