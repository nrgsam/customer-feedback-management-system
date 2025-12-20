<?php include("includes/session.php");


$link = mysqli_connect("localhost", "root", "", "satisfaction");
$link->set_charset("utf8");
$time = date("Y-m-d H:i:s");
$query1 = "INSERT INTO `satisfaction1`( `name`, `lastname`, `position`, `comany`, `prodouctname`, `q1`, `q1_score`, `q1_important`, `q2`, `q2_score`, `q2_important`, `q3`, `q3_score`, `q_important3`, `q4`, `q_score4`, `q_important4`, `q5`, `q_score5`, `q_important5`, `q6`, `q_score6`, `q_important6`, `q7`, `q_score7`, `q_important7`, `q8`, `q_score8`, `q_important8`, `tel`, `start_date`, `end_date`,  `date`) 
VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]','[value-24]','[value-25]','[value-26]','[value-27]','[value-28]','[value-29]','[value-30]','$time','[value-32]','[value-33]')";
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

<body dir="rtl" class="txtcenter">


    <fieldset>
        <legend>
            فرم رضایت مشتری
        </legend>




        <h3>
            مشترک گرامی ضمن، تشکر از همکاری شما، خواهشمندیم با پاسخ های ارزشمند خود، مارا در بالا بردن سطح کیفیت محصولات
            و خدمات یاری نمایید.

        </h3>
        <br>
        <br>


        <form class="frm" action="action/satisfaction1_action.php" method="POST">

            <div class="center">
                <input type="text" name="fname" id="fname" class="personal" placeholder="نام:" />
                </br>
                <br>


                <input type="text" name="lname" id="lname" class="personal" placeholder=" نام خانوادگی:" />

                </br></br>


                <input type="text" name="position" id="position" class="personal" placeholder=" سمت :" />
                </br></br>


                <input type="text" name="company" id="company" class="personal" placeholder=" سازمان :" />
                </br></br>

                <input type="text" name="product" id="product" class="personal" placeholder="   نام محصول/محصولات  :" />
            </div>
            <section>
                <br>
                <hr />
                <h3> موارد زیر را چگونه ارزیابی می کنید؟</h3>

                <br>
                <?php
                $count = 1;
                $link = mysqli_connect("localhost", "root", "", "satisfaction");
                $link->set_charset("utf8");
                $query = "SELECT `desc` FROM question1 ";
                $result = mysqli_query($link, $query);
                while ($row = mysqli_fetch_array($result)) {
                    $question = "q";
                    $degree = "d";
                    $score = "s";
                    ?>
                    <label class="qustion"> <?php echo $count . $row['desc']; ?> </label>
                    <div>
                        <br />
                        <input type="hidden" id="<?php echo $question . $count; ?>" name="<?php echo $question . $count; ?>"
                            value="<?php echo $row['desc']; ?>">
                        <label style="margin-right: 266px;">درجه اهمیت</label>
                        <select name="  <?php echo $degree . $count; ?>" id=" <?php echo $degree . $count; ?> " class="h">
                            <option> بالا </option>
                            <option> متوسط </option>
                            <option> کم </option>

                        </select>


                        <label style="margin-right: 80px;"> امتیاز</label>
                        <select name="<?php echo $score . $count; ?>" id="<?php echo $score . $count; ?>" class="h">
                            <option> عالی </option>
                            <option> خوب </option>
                            <option> متوسط </option>
                            <option> ضعیف </option>
                            <option> خیلی ضعیف </option>
                        </select>
                        </br> </br>
                        <?php
                        $count += 1;
                }

                ?>

            </section>
            <p> نظرات و پیشنهادات خود را در جهت بهبود عملکرد فرآیند رسیدگی به شکایات بیان کنید</p>

            <label> تماس :</label>
            <input type="text" name="tel" id="tel" />

            <label style="margin-right: 120px;"> تاریخ :</label>
            <input type="text" name="date" id="date" />
            </br></br>
            <input type="submit" value="ثبت" class="submit" />



        </form>
    </fieldset>










</body>

</html>