<?php
if (
    isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['company']) && !empty($_POST['company']) && isset($_POST['tel']) && !empty($_POST['tel'])
    && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['text']) && !empty($_POST['text'])

) {
    $name = $_POST['name'];
    $company = $_POST['company'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $text = $_POST['text'];
}

include('../includes/config.php');

$code = rand(100000000, 999999999);


echo ("</br> </br>");
$query2 = "SELECT * FROM `suggestion` , `complaint` WHERE suggestion.code=$code AND complaint.code=$code";
$res2 = mysqli_query($link, $query2);
$row = mysqli_fetch_array($res2);
$count = 1;
while ($row + 1) {
    if ($row) {
        //سریال موجود بود
        $newcode = $code * rand(2, 9);
        echo ($newcode);
    } else {
        // سریال موجود نبود
        $newcode = $code;
        $count = 0;
        echo ($newcode);
        break;
    }
}

$q = "SELECT * FROM `suggestion` ORDER BY id DESC LIMIT 1";
$res = mysqli_query($link, $q);
$row = mysqli_fetch_array($res);
echo ($row['id']);

$time = date("Y-m-d H:i:s");
$query = "UPDATE `suggestion` SET `IP`='[value-2]',`name`='$name',`company`=' $company',`tel`=' $tel',`email`='$email',`text`=' $text',`end_date`='$time',`code`='$newcode',`status`='[value-11]',`status_desc`='[value-12]',`security_code`='[value-13]',`user_id`='[value-14]' WHERE id='$row[id]' ";
$result = mysqli_query($link, $query);
echo ("اطلاعات شما با موفقیت ذخیره شد");
?>
<script>
    alert('  پیشنهاد شما با موفقیت ثبت شد کد رهگیری <?php echo ($newcode) ?>');
    window.location.href = '../index.php';
</script>