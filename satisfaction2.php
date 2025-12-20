<?php
$link = mysqli_connect("localhost", "root", "", "satisfaction");
$link->set_charset("utf8");
$time = date("Y-m-d H:i:s");
$query1 = "INSERT INTO `satisfaction2`(`name`, `family`, `position`, `company`, `contact_number`, `contact_subject`, `question1`, `q_d1`, `q_s1`, `question2`, `q_d2`, `q_s2`, `question3`, `q_d3`, `q_s3`, `question4`, `q_d4`, `q_s4`, `question5`, `q_d5`, `q_s5`, `question6`, `q_d6`, `q_s6`, `question7`, `q_d7`, `q_s7`, `question8`, `q_d8`, `q_s8`, `question9`, `q_d9`, `q_s9`, `question10`, `q_d10`, `q_s10`, `question11`, `q_d11`, `q_s11`, `phone_number`, `name_date`, `start_date`, `end_data`)
  VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]','[value-24]','[value-25]','[value-26]','[value-27]','[value-28]','[value-29]','[value-30]','[value-31]','[value-32]','[value-33]','[value-34]','[value-35]','[value-36]','[value-37]','[value-38]','[value-39]','[value-40]','[value-41]','$time','[value-43]')";
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

</head>

<body dir="rtl">
    <?php

    include("i/config.php");

    ?>
    <fieldset class="fieldset">
        <legend>رضایت مشتری</legend>



        <form action="action/satisfaction2_action.php" method="POST">
            <h3>
                مشتری گرامی ضمن تشکر از همکاری شما خواهشمندیم با پاسخ های ارزشمند خود مارا در بالا بردن سطح کیفیت
                محصولات و خدمات یاری نمایید.

            </h3>

            <br>

            <div class="center">
                <input type="text" name="fname" id="fname" placeholder="  نام:">
                <br><br>
                <input type="text" name="lname" id="lname" placeholder=" نام خانوادگی:">
                <br><br>
                <input type="text" name="position" id="position" placeholder=" سمت:">
                <br><br>
                <input type="text" name="company" id="company" placeholder="  سازمان:">
                <br><br>
                <input type="text" name="contact_number" id="contact_number" placeholder=" شماره قرداد:">
                <br><br>
                <input type="text" name="contact_subject" id="contact_subject" placeholder="   موضوع قرداد:">
            </div>
            <section>
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
                $count = 1;
                $link = mysqli_connect("localhost", "root", "", "satisfaction");
                $link->set_charset("utf8");
                $query = "SELECT * FROM question2 ";
                $result = mysqli_query($link, $query);
                while ($row = mysqli_fetch_array($result)) {

                    $degree = "q_d";
                    $score = "q_s";
                    $question = "q";

                    ?>


                    <p> <?php echo $count . $row['desc']; ?> </p>
                    <input type="hidden" id="<?php echo $question . $count; ?>" name="<?php echo $question . $count; ?>"
                        value="<?php echo $row['desc']; ?>">

                    <label style="margin-right: 266px;">درجه اهمیت</label>
                    <select name=" <?php echo ($degree . $count); ?> " id=" <?php echo ($degree . $count); ?> ">

                        <option>بالا</option>
                        <option>متوسط</option>
                        <option>کم</option>
                    </select>

                    <label style="margin-right: 80px;"> امتیاز</label>
                    <select name=" <?php echo ($score . $count); ?> " id=" <?php echo ($score . $count); ?> ">
                        <option>عالی</option>
                        <option>خوب</option>
                        <option>متوسط</option>
                        <option>ضعیف</option>
                        <option>خیلی ضعیف</option>

                    </select>
                    <br><br>

                    <?php

                    $count += 1;

                }
                ?>
            </section>
            <br>
            <hr>
            </br>
            <label> شماره تماس:
                <input type="text" name="phone_number" id="phone_number">

            </label>
            <label style="margin-right: 120px;">
                تاریخ:
                <input type="text" name="name_date" id="name_date">
            </label>
            <br>
            <br>
            <input type="submit" value="ثبت" class="submit">
            <br>

        </form>
    </fieldset>




</body>

</html>