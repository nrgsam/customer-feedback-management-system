<?php

include("includes/config.php");
?>
<html>

<head metacharset="utf_8">
    <style>
        input,
        textarea {
            border: 2px solid #56b4ec;
            border-radius: 5px;

        }

        @font-face {
            font-family: 'BYekan';
            src: url('fonts/BYekan.eot') format('embedded-opentype'), url('fonts/BYekan.woff') format('woff'), url('fonts/BYekan.ttf') format('truetype');
        }

        body {

            font-family: 'BYekan';
        }
    </style>
</head>

<body dir="rtl">

    <form action="request_follow_up.php" method="POST">
        <fieldset>
            <legend>
                پیگیری درخواست </legend>



            <input type="text" class="finput" name="code" id="code" placeholder="کد ردیابی مشتری">
            </br></br>
            <input type="text" placeholder="کد تایید موبایل" class="code">
            </br></br>

            <input type="submit" value="نمایش وضعیت" onclick="">
            <br>
            <br>
            <textarea name="" id="" placeholder="توضیحات"></textarea>
        </fieldset>
    </form>

    <?php

    if (isset($_POST["code"]) && !empty($_POST["code"])) {
        $code = $_POST["code"];

        $q = "SELECT * FROM `suggestion`, `complaint` WHERE complaint.code=$code OR suggestion.code=$code";
        $res = mysqli_query($link, $q);
        $row = mysqli_fetch_array($res);
        if ($row) {
            ?>

            <tr>
                <td> <?php echo ($row['code']) ?> </td>
                <td> <?php echo ($row['status']) ?> </td>
                <td> <?php echo ($row['status_desc']) ?> </td>

            <?php
        } else {
            echo ("وجود ندارد");

        }



    }



    ?>






</body>

</html>