<?php
if (
    isset($_POST['fname']) && !empty($_POST['fname']) && isset($_POST['lname']) && !empty($_POST['lname']) && isset($_POST['position']) && !empty($_POST['position'])
    && isset($_POST['company']) && !empty($_POST['company']) && isset($_POST['product']) && !empty($_POST['product'])
    && isset($_POST['Tel']) && !empty($_POST['Tel']) && isset($_POST['Date']) && !empty($_POST['Date'])
) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $position = $_POST['position'];
    $company = $_POST['company'];
    $product = $_POST['product'];
    $tel = $_POST['tel'];
    $date = $_POST['date'];
    //getting the degress "d", scores"s" and questions"q" in order
    $q1 = $_POST['q1'];
    $d1 = $_POST['d1'];
    $s1 = $_POST['s1'];
    $q2 = $_POST['q2'];
    $d2 = $_POST['d2'];
    $s2 = $_POST['s2'];
    $q3 = $_POST['q3'];
    $d3 = $_POST['d3'];
    $s3 = $_POST['s3'];
    $q4 = $_POST['q4'];
    $d4 = $_POST['d4'];
    $s4 = $_POST['s4'];
    $q5 = $_POST['q5'];
    $d5 = $_POST['d5'];
    $s5 = $_POST['s5'];
    $q6 = $_POST['q6'];
    $d6 = $_POST['d6'];
    $s6 = $_POST['s6'];
    $q7 = $_POST['q7'];
    $d7 = $_POST['d7'];
    $s7 = $_POST['s7'];
    $q8 = $_POST['q8'];
    $d8 = $_POST['d8'];
    $s8 = $_POST['s8'];
}
include("../includes/config.php");

$serial = rand(100000000, 999999999);


echo ("</br> </br>");
$query2 = "SELECT * FROM satisfaction1, satisfaction2, satisfaction3, satisfaction4, satisfaction5 WHERE satisfaction1.serial=$serial OR satisfaction2.serial=$serial OR satisfaction3.serial=$serial OR satisfaction4.serial=$serial OR satisfaction5.serial=$serial";
$res2 = mysqli_query($link, $query2);
$row = mysqli_fetch_array($res2);
$count = 1;
while ($row + 1) {
    if ($row) {
        //سریال موجود بود
        $newserial = $serial * rand(2, 9);
        echo ($newserial);
    } else {
        // سریال موجود نبود
        $newserial = $serial;
        echo ($newserial);
        $count = 0;
        break;
    }
}


$q = "SELECT * FROM `satisfaction1` ORDER BY id DESC LIMIT 1";
$res = mysqli_query($link, $q);
$row = mysqli_fetch_array($res);
echo ($row['id']);

$time = date("Y-m-d H:i:s");
$q3 = "UPDATE `satisfaction1` SET `name`='$fname',`lastname`='$lname',`position`='$position',`comany`='$company',`prodouctname`='$product',`q1`='$q1'
,`q1_score`='$s1',`q1_important`='$d1',`q2`='$q2',`q2_score`='$s2',`q2_important`='$d2',`q3`='$q3',`q3_score`='$s3',`q_important3`='$d3',`q4`='$q4',`q_score4`='$s4',`q_important4`='$d4',`q5`='$q5',`q_score5`='$s5',`q_important5`='$d5',`q6`='$q6'
,`q_score6`='$s6',`q_important6`='$d6',`q7`='$q7',`q_score7`='$s7',`q_important7`='$d7',`q8`='$q8',`q_score8`='$s8',`q_important8`='$d8',`tel`='$tel',`end_date`='$time',`date`='$date' , `serial`='$newserial' WHERE `id`='$row[id]' ";



$res3 = mysqli_query($link, $q3);

?>
<script>
    alert('  رضایت شما با موفقیت ثبت شد ');
    window.location.href = '../index.php';
</script>