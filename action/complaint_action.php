<?php
if (
    isset($_POST['fname']) && !empty($_POST['fname']) && isset($_POST['lname']) && !empty($_POST['lname']) && isset($_POST['position']) && !empty($_POST['position'])
    && isset($_POST['company']) && !empty($_POST['company']) && isset($_POST['relative_name']) && !empty($_POST['relative_name']) && isset($_POST['document_name']) && !empty($_POST['document_name']) && isset($_POST['province']) && !empty($_POST['province'])
    && isset($_POST['city']) && !empty($_POST['city']) && isset($_POST['landline_phone']) && !empty($_POST['landline_phone']) && isset($_POST['tel']) && !empty($_POST['tel']) && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['address']) && !empty($_POST['address']) && isset($_POST['comp_summary']) && !empty($_POST['comp_summary']) && isset($_POST['request']) && !empty($_POST['request']) && isset($_POST['reply_date']) && !empty($_POST['reply_date'])
    && isset($_POST['code']) && !empty($_POST['code'])
) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $position = $_POST['position'];
    $company = $_POST['company'];
    $relative_name = $_POST['relative_name'];
    $document_name = $_POST['document_name'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $landline_phone = $_POST['landline_phone'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $comp_summary = $_POST['comp_summary'];
    $request = $_POST['request'];
    $reply_date = $_POST['reply_date'];
    $security_code = $_POST['code'];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $selected_option = $_POST['choice'];
}
echo ($selected_option);

if ($selected_option == 1) {
    $selected_option = "محصول";
} elseif ($selected_option == 2) {
    $selected_option = "خدمات";
} elseif ($selected_option == 3) {
    $selected_option = "سایر";
}

$time = date("Y-m-d H:i:s");
include('../includes/config.php');

$code = rand(100000000, 999999999);


echo ("</br> </br>");
$query2 = "SELECT * FROM `suggestion` , `complaint` WHERE suggestion.code=$code OR complaint.code=$code";
$res2 = mysqli_query($link, $query2);
$row = mysqli_fetch_array($res2);
$count = 1;
while ($row + 1) {
    if ($row) {
        //کد موجود بود
        $newcode = $code * rand(2, 9);
        echo ($newcode);
    } else {
        // کد موجود نبود
        $newcode = $code;
        $count = 0;
        echo ($newcode);
        break;

    }
}

$q = "SELECT * FROM `complaint` ORDER BY complaint_id DESC LIMIT 1";
$res = mysqli_query($link, $q);
$row = mysqli_fetch_array($res);






if ($_FILES["file"]["error"] > 0) {
    echo "FILE ERROR";
    die();
}
$filename = "../Files/" . $_FILES["file"]["name"];
// move file to a folder
if (move_uploaded_file($_FILES["file"]["tmp_name"], $filename) && $_FILES["file"]["size"] <= 512 * 1024) {

    $q = "SELECT * FROM `complaint` ORDER BY complaint_id DESC LIMIT 1";
    $res = mysqli_query($link, $q);
    $row = mysqli_fetch_array($res);


    $query = "UPDATE `complaint` SET `IP`='[value-2]',`fname`='$fname',`lname`='$lname',`position`='$position',`company`='$company',`com_cat`='$selected_option',`relative_name`='$relative_name',`document_name`='$document_name',`file`='$filename',`province`='$province',
    `city`='$city',`landline_phone`='$landline_phone',`tel`='$tel',`email`='$email',`address`='$address',`comp_summary`='$comp_summary',`request`='$request',`end_date`='$time',`reply_date`='$reply_date',`code`='$newcode',`status`='[value-23]',`status_desc`='[value-24]',`security_code`='$security_code',`user_id`='[value-26]' WHERE complaint_id=$row[complaint_id]  ";

    mysqli_query($link, $query);
    ?>
    <script>
        alert('  شکایت شما با موفقیت ثبت شد کد رهگیری <?php echo ($newcode) ?>');
        window.location.href = '../index.php?success';
    </script>
    <?php

} else {
    ?>
    <script>
        alert('خطایی رخ داده است');
        window.location.href = '../index.php?fail';
    </script>
    <?php
}
?>