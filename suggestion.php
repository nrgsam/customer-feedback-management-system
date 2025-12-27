<?php
$link = mysqli_connect("localhost", "root", "", "satisfaction");
$link->set_charset("utf8");
$time = date("Y-m-d H:i:s");
$query1 = "INSERT INTO `suggestion`( `IP`, `name`, `company`, `tel`, `email`, `text`, `start_date`, `end_date`, `code`, `status`, `status_desc`, `security_code`, `user_id`) 
VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','$time','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]')";
$result1 = mysqli_query($link, $query1);
?>
<html>

<head>
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
    <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body dir="rtl">
    <fieldset>
        <legend>
            پیشنهادات
        </legend>


        <form action="action/suggestion_action.php" method="POST">

            <p>
                <label class="name">نام و نام خانوادگی:</label>
                <input class="nam" type="text" name="name" id="nmae" />
            </p>
            <p>
                <label class="sazeman">نام سازمان/شرکت:</label>
                <input class="saz" type="text" name="company" id="company" />
            </p>
            <p>
                <label class="pho">تلفن همراه:</label>
                <input class="phon" type="text" name="tel" id="tel" />
            </p>
            <p>
                <label class="post">پست الکترونیک:</label>
                <input class="pos" type="text" name="email" id="email" />
            </p>
            <label class="mn">متن پیام:</label>
            <textarea name="text" id="text"></textarea>
            <p>
                <label class="cod">کد امنیتی:</label>
                <input class="code" type="text" />
            </p>
            <input type="submit" value="ثبت پیام" class="submit" />

        </form>
    </fieldset>
</body>



</html>