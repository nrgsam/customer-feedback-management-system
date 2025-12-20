<?php
$link = mysqli_connect("localhost", "root", "", "satisfaction");
$link->set_charset("utf8");
$time = date("Y-m-d H:i:s");
$query1 = "INSERT INTO `satisfaction5`( `Start_Date`, `End_Date`,  `Fname`, `Lname`, `Position`, `Company`, `Subject`, `Code`, `Tel`, `Date`, `Q1`, `Q1_E`, `Q1_D`, `Q2`, `Q2_E`, `Q2_D`, `Q3`, `Q3_E`, `Q3_D`, `Q4`, `Q4_E`, `Q4_D`, `Q5`, `Q5_E`, `Q5_D`, `Q6`, `Q6_E`, `Q6_D`, `Q7`, `Q7_E`, `Q7_D`)
  VALUES ('$time','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]','[value-24]','[value-25]','[value-26]','[value-27]','[value-28]','[value-29]','[value-30]','[value-31]')";
$result1 = mysqli_query($link, $query1);

?>

<html>

<head>


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

    <title>رضایت مشتری</title>
</head>


<body dir="rtl">



    <form action="action/satisfaction5_action.php" method="POST">
        <fieldset>

            <legend>رضایت مشتری</legend>

            <h3>
                مشتری گرامی ضمن تشکر از همکاری شما خواهش مندیم با پاسخ های ارزشمند خود مارا در بالا بردن سطح کیفیت
                محصولات و
                خدمات یاری نمایید.
            </h3>
            <br>

            <input type="text" name="Fname" id="Fname" placeholder="  نام:">
            <br /><br>
            <input type="text" name="Lname" id="Lname" placeholder="  *نام خانوادگی:">
            <br /><br>
            <input type="text" name="Position" id="Position" placeholder="   *سمت:">
            <br /><br>
            <input type="text" name="Company" id="Company" placeholder="   *سازمان:">
            <br /><br>
            <input type="text" name="Subject" id="Subject" placeholder=" *موضوع شکایت:">
            <br /><br>
            <input type="text" name="Code" id="Code" placeholder=" کدرهگیری:">
            <br /><br>
            <hr>
            <br>
            <h3>*موارد زیر را چگونه ارزیابی می کنید ؟</h3>
            <br>
            <br>
            <br>

            <?php
            $cnt = 1;
            $link = mysqli_connect("localhost", "root", "", "satisfaction");
            $link->set_charset("utf8");
            $q2 = "SELECT `Text` FROM question5";
            $result2 = mysqli_query($link, $q2);
            while ($row = mysqli_fetch_array($result2)) {


                $degree = "d";
                $score = "s";
                $question = "q";


                ?>
                <label><?php echo $cnt . $row['Text']; ?></label>

                <br><br><input type="hidden" id="<?php echo $question . $cnt; ?>" name="<?php echo $question . $cnt; ?>"
                    value="<?php echo $row['Text']; ?>">
                <label style="margin-right: 266px;">درجه اهمیت</label>
                <select name="<?php echo $degree . $cnt; ?>" id="<?php echo $degree . $cnt; ?>">
                    <option>بالا</option>
                    <option>متوسط</option>
                    <option>کم</option>
                </select>
                <label style="margin-right: 80px;"> امتیاز</label>
                <select name="<?php echo $score . $cnt; ?>" id="<?php echo $score . $cnt; ?>">
                    <option>عالی</option>
                    <option>خوب</option>
                    <option>متوسط</option>
                    <option>ضعیف</option>
                    <option>خیلی ضعیف</option>
                </select>
                </br><br>


                <?php
                $cnt += 1;
            }

            ?>
            <br>
            <hr>
            <br>
            <p> نظرات و پیشنهادات خود را در جهت بهبود عملکرد فرآیند رسیدگی به شکایات بیان کنید
            </p>

            <label>
                *شماره تماس</label>
            <input type="text" name="Tel" id="Tel">
            <label style="margin-right: 120px;">
                *تاریخ</label>
            <input type="text" name="Date" id="Date">
            </br><br>
            <input type="submit" value="ثبت">
        </fieldset>
    </form>

</body>



</html>