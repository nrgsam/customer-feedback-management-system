<?php
$link = mysqli_connect("localhost", "root", "", "satisfaction");
$link->set_charset("utf8");
$time = date("Y-m-d H:i:s");
$query1 = "INSERT INTO `satisfaction3`(`name`, `family`, `position`, `campany`, `number`, `subject`, `question1`, `q_d1`, `q_s1`, `question2`, `q_d2`, `q_s2`, `question3`, `q_d3`, `q_s3`, `question4`, `q_d4`, `q_s4`, `question5`, `q_d5`, `q_s5`, `question6`, `q_d6`, `q_s6`, `question7`, `q_d7`, `q_s7`, `question8`, `q_d8`, `q_s8`, `question9`, `q_d9`, `q_s9`, `start_date`, `end_date`, `date`, `phonenumber`) 
 VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]','[value-24]','[value-25]','[value-26]','[value-27]','[value-28]','[value-29]','[value-30]','[value-31]','[value-32]','[value-33]','$time','[value-35]','[value-36]','[value-37]')";
$result1 = mysqli_query($link, $query1);

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input,
        textarea,
        select {
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
    <?php


    ?>
    <fieldset class="fieldset">
        <legend>رضایت مشتری</legend>


        <form action="action/satisfaction3_action.php" method="POST">
            <h3>
                مشتری گرامی ضمن تشکر از همکاری شما خواهشمندیم با پاسخ های ارزشمند خود مارا در بالا بردن سطح کیفیت
                محصولات و خدمات یاری نمایید.
            </h3>
            <br>


            <input type="text" name="fname" id="fname" placeholder="  نام:">
            <br>
            <br>
            <input type="text" name="lname" id="lname" placeholder=" نام خانوادگی:">
            <br>
            <br>
            <input type="text" name="position" id="position" placeholder=" سمت:">
            <br>
            <br>
            <input type="text" name="organization" id="organization" placeholder="  سازمان:">
            <br>
            <br>
            <input type="text" name="phone" id="phone" placeholder="  شماره قرداد:">
            <br>
            <br>
            <input type="text" name="subjectt" id="subjectt" placeholder=" موضوع قرداد:">
            <br>
            <br>

            <hr>
            <br>
            <h3>

                موارد زیر را چگونه ارزیابی می کنید؟
            </h3>
            <br>
            <br>
            <br>

            <?php

            $link = mysqli_connect("localhost", "root", "", "satisfaction");
            $link->set_charset("utf8");
            $query = "SELECT `desc` FROM question3";
            $result = mysqli_query($link, $query);
            $count = 1;
            while ($row = mysqli_fetch_array($result)) {

                $degree = "d";
                $score = "s";
                $question = "q";

                ?>

                <p> <?php echo $row['desc']; ?> </p>
                <input type="hidden" id="<?php echo $question . $count; ?>" name="<?php echo $question . $count; ?>"
                    value="<?php echo $row['desc']; ?>">

                <label style="margin-right: 266px;">درجه اهمیت
                    <select name="<?php echo $degree . $count; ?>" id="<?php echo $degree . $count; ?>">
                        <option>بالا</option>
                        <option>متوسط</option>
                        <option>کم</option>
                    </select>
                </label>
                <label style="margin-right: 80px;"> امتیاز</label>
                <select name="<?php echo $score . $count; ?>" id="name=" <?php echo $score . $count; ?>">
                    <option>عالی</option>
                    <option>خوب</option>
                    <option>متوسط</option>
                    <option>ضعیف</option>
                    <option>خیلی ضعیف</option>

                </select>
                <br>

                </label>

                <?php
                $count += 1;
            }
            ?>

            </br>
            <br>
            <hr>
            <br>
            <label> تماس :</label>
            <input type="text" name="tel" id="tel" />

            <label style="margin-right: 120px;"> تاریخ :</label>
            <input type="text" name="date" id="date" />
            </br></br>
            <input type="submit" value="ثبت" class="submit">
        </form>
    </fieldset>




</body>

</html>