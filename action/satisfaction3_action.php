<?php
if (
    isset($_POST['fname']) && !empty($_POST['fname']) && isset($_POST['lname']) && !empty($_POST['lname']) && isset($_POST['position']) && !empty($_POST['position'])
    && isset($_POST['organization']) && !empty($_POST['organization']) && isset($_POST['phone']) && !empty($_POST['phone'])
    && isset($_POST['subjectt']) && !empty($_POST['subjectt'])
) {
    $name = $_POST['fname'];
    $family = $_POST['lname'];
    $position = $_POST['position'];
    $campany = $_POST['organization'];
    $number = $_POST['phone'];
    $subject = $_POST['subjectt'];
    //getting the degress "d", scores"s" and questions"q" in order
    $q_d1 = $_POST['d1'];
    $q_s1 = $_POST['s1'];
    $q_d2 = $_POST['d2'];
    $q_s2 = $_POST['s2'];
    $q_d3 = $_POST['d3'];
    $q_s3 = $_POST['s3'];
    $q_d4 = $_POST['d4'];
    $q_s4 = $_POST['s4'];
    $q_d5 = $_POST['d5'];
    $q_s5 = $_POST['s5'];
    $q_d6 = $_POST['d6'];
    $q_s6 = $_POST['s6'];
    $q_d7 = $_POST['d7'];
    $q_s7 = $_POST['s7'];
    $q_d8 = $_POST['d8'];
    $q_s8 = $_POST['s8'];
    $q_d9 = $_POST['d9'];
    $q_s9 = $_POST['s9'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $tel = $_POST['tel'];
    $date = $_POST['date'];
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
        $count = 0;
        echo ($newserial);
        break;

    }
}


$q = "SELECT * FROM `satisfaction3` ORDER BY `id` DESC LIMIT 1";
$res = mysqli_query($link, $q);
$row = mysqli_fetch_array($res);
echo ($row['id']);

$time = date("Y-m-d H:i:s");
$q3 = " UPDATE `satisfaction3` SET `name`='$name',`family`='$family',`position`='$position',`campany`='$campany',`number`='$number'
    ,`subject`='$subject',`question1`='$q1',`q_d1`='$q_d1',`q_s1`='$q_s1',`question2`='$q2',`q_d2`='$q_d2',`q_s2`='$q_s2',`question3`='$q3',`q_d3`='$q_d3'
    ,`q_s3`='$q_s3',`question4`='$q4',`q_d4`='$q_d4',`q_s4`='$q_s4',`question5`='$q5',`q_d5`='$q_d5',`q_s5`='$q_s5',`question6`='$q6',`q_d6`='$q_d6'
    ,`q_s6`='$q_s6',`question7`='$q7',`q_d7`='$q_d7',`q_s7`='$q_s7',`question8`='$q8',`q_d8`='$q_d8',`q_s8`='$q_s8',`question9`='$q9',`q_d9`='$q_d9',`q_s9`='$q_s9',`end_date`='$time',`date`='$date',`phonenumber`='$tel', `serial`='$newserial' WHERE id=$row[id] ";

$res3 = mysqli_query($link, $q3);

echo ("رضایت شما با موفقیت ثبت شد");
?>
<script>
    alert('  رضایت شما با موفقیت ثبت شد ');
    window.location.href = '../index.php';
</script>