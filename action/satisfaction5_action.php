<?php
if (
    isset($_POST['fname']) && !empty($_POST['fname']) && isset($_POST['lname']) && !empty($_POST['lname']) && isset($_POST['position']) && !empty($_POST['position'])
    && isset($_POST['company']) && !empty($_POST['company']) && isset($_POST['subject']) && !empty($_POST['subject'])
    && isset($_POST['Code']) && !empty($_POST['Code']) && isset($_POST['Tel']) && !empty($_POST['Tel']) && isset($_POST['Date']) && !empty($_POST['Date'])
) {
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Position = $_POST['Position'];
    $Company = $_POST['Company'];
    $Subject = $_POST['Subject'];
    $Code = $_POST['Code'];
    $Tel = $_POST['Tel'];
    $Date = $_POST['Date'];
    //getting the degress "d", scores"s" and questions"q" in order
    $d1 = $_POST['d1'];
    $s1 = $_POST['s1'];
    $d2 = $_POST['d2'];
    $s2 = $_POST['s2'];
    $d3 = $_POST['d3'];
    $s3 = $_POST['s3'];
    $d4 = $_POST['d4'];
    $s4 = $_POST['s4'];
    $d5 = $_POST['d5'];
    $s5 = $_POST['s5'];
    $d6 = $_POST['d6'];
    $s6 = $_POST['s6'];
    $d7 = $_POST['d7'];
    $s7 = $_POST['s7'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
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
    }
    break;

}




$q = "SELECT * FROM `satisfaction5` ORDER BY `ID` DESC LIMIT 1";
$res = mysqli_query($link, $q);
$row = mysqli_fetch_array($res);
echo ($row['ID']);

$time = date("Y-m-d H:i:s");
$q3 = "UPDATE `satisfaction5` SET `End_Date`='$time',`Fname`='$Fname',`Lname`='$Lname',`Position`='$Position',`Company`='$Company',`Subject`='$Subject',`Code`='$Code',`Tel`='$Tel'
    ,`Date`='$Date',`Q1`=' $q1',`Q1_E`='$s1',`Q1_D`='$d1',`Q2`=' $q2',`Q2_E`='$s2',`Q2_D`='$d2',`Q3`=' $q3',`Q3_E`='$s3',`Q3_D`='$d3',`Q4`=' $q4',`Q4_E`='$s4',`Q4_D`='$d4'
    ,`Q5`=' $q5',`Q5_E`='$s5',`Q5_D`='$d5',`Q6`=' $q6',`Q6_E`='$s6',`Q6_D`='$d6',`Q7`=' $q7',`Q7_E`='$s7',`Q7_D`='$d7', `serial`='$newserial'  WHERE ID=$row[ID] ";

$res3 = mysqli_query($link, $q3);



?>
<script>
    alert('  رضایت شما با موفقیت ثبت شد ');
    window.location.href = '../index.php';
</script>