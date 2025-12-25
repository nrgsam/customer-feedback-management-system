<?php
if (
    isset($_POST['fname']) && !empty($_POST['fname']) && isset($_POST['lname']) && !empty($_POST['lname']) && isset($_POST['position']) && !empty($_POST['position'])
    && isset($_POST['company']) && !empty($_POST['company']) && isset($_POST['contact_number']) && !empty($_POST['contact_number'])
    && isset($_POST['contact_subject']) && !empty($_POST['contact_subject'])
) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $position = $_POST['position'];
    $company = $_POST['company'];
    $contact_number = $_POST['contact_number'];
    $contact_subject = $_POST['contact_subject'];
    //getting the degress "d", scores"s" and questions"q" in order
    $q_d1 = $_POST['q_d1_'];
    $q_s1 = $_POST['q_s1_'];
    $q_d2 = $_POST['q_d2_'];
    $q_s2 = $_POST['q_s2_'];
    $q_d3 = $_POST['q_d3_'];
    $q_s3 = $_POST['q_s3_'];
    $q_d4 = $_POST['q_d4_'];
    $q_s4 = $_POST['q_s4_'];
    $q_d5 = $_POST['q_d5_'];
    $q_s5 = $_POST['q_s5_'];
    $q_d6 = $_POST['q_d6_'];
    $q_s6 = $_POST['q_s6_'];
    $q_d7 = $_POST['q_d7_'];
    $q_s7 = $_POST['q_s7_'];
    $q_d8 = $_POST['q_d8_'];
    $q_s8 = $_POST['q_s8_'];
    $q_d9 = $_POST['q_d9_'];
    $q_s9 = $_POST['q_s9_'];
    $q_d10 = $_POST['q_d10_'];
    $q_s10 = $_POST['q_s10_'];
    $q_d11 = $_POST['q_d11_'];
    $q_s11 = $_POST['q_s11_'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];
    $q11 = $_POST['q11'];

}

$phone_number = $_POST['phone_number'];
$name_date = $_POST['name_date'];

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




$q = "SELECT * FROM `satisfaction2` ORDER BY `id` DESC LIMIT 1";
$res = mysqli_query($link, $q);
$row = mysqli_fetch_array($res);
echo ($row['id']);

$time = date("Y-m-d H:i:s");
$q3 = " UPDATE `satisfaction2` SET `name`='$fname',`family`='$lname',`position`='$position',`company`='$company',`contact_number`='$contact_number',`contact_subject`='$contact_subject'
  ,`question1`=' $q1',`q_d1`='$q_d1',`q_s1`='$q_s1',`question2`=' $q2',`q_d2`='$q_d2',`q_s2`='$q_s2',`question3`=' $q3',`q_d3`='$q_d3',`q_s3`='$q_s3',`question4`=' $q4',`q_d4`='$q_d4',`q_s4`='$q_s4',`question5`=' $q5',`q_d5`='$q_d5',`q_s5`='$q_s5',`question6`=' $q6',`q_d6`='$q_d6',`q_s6`='$q_s6',`question7`=' $q7',`q_d7`='$q_d7',`q_s7`='$q_s7',`question8`=' $q8',`q_d8`='$q_d8',`q_s8`='$q_s8'
  ,`question9`=' $q9',`q_d9`='$q_d9',`q_s9`='$q_s9',`question10`=' $q10',`q_d10`='$q_d10',`q_s10`='$q_s10',`question11`=' $q11',`q_d11`='$q_d11',`q_s11`='$q_s11',`phone_number`='$phone_number',`name_date`='$name_date',`end_data`='$time', `serial`='$newserial' WHERE id=$row[id] ";
$res3 = mysqli_query($link, $q3);





?>
<script>
    alert('  رضایت شما با موفقیت ثبت شد ');
    window.location.href = '../index.php';
</script>