<?php
$link = mysqli_connect("localhost", "root", "", "satisfaction");
$link->set_charset("utf8");
$time = date("Y-m-d H:i:s");
$query1 = "INSERT INTO `complaint`(`complaint_id`, `IP`, `fname`, `lname`, `position`, `company`, `com_cat`, `relative_name`, `document_name`, `file`, `province`, `city`, `landline_phone`, `tel`, `email`, `address`, `comp_summary`, `request`, `start_date`, `end_date`, `reply_date`, `code`, `status`, `status_desc`, `security_code`, `user_id`) 
 VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','$time','[value-20]','[value-21]','[value-22]','[value-23]','[value-24]','[value-25]','[value-26]')";
$result1 = mysqli_query($link, $query1);
?>
<html>

<head>
  <title>ثبت شکایت</title>

</head>



<style type="text/css">
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

  .form-style-6 {
    font: 95% 'BYekan', Helvetica, sans-serif;
    max-width: 400px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
  }

  .form-style-6 h1 {
    background: #43D1AF;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
  }

  .form-style-6 input[type="text"],
  .form-style-6 input[type="date"],
  .form-style-6 input[type="datetime"],
  .form-style-6 input[type="email"],
  .form-style-6 input[type="number"],
  .form-style-6 input[type="search"],
  .form-style-6 input[type="time"],
  .form-style-6 input[type="url"],
  .form-style-6 textarea,
  .form-style-6 select {
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 3%;
    color: #555;
    font: 95% Arial, Helvetica, sans-serif;
  }

  .form-style-6 input[type="text"]:focus,
  .form-style-6 input[type="date"]:focus,
  .form-style-6 input[type="datetime"]:focus,
  .form-style-6 input[type="email"]:focus,
  .form-style-6 input[type="number"]:focus,
  .form-style-6 input[type="search"]:focus,
  .form-style-6 input[type="time"]:focus,
  .form-style-6 input[type="url"]:focus,
  .form-style-6 textarea:focus,
  .form-style-6 select:focus {
    box-shadow: 0 0 5px #43D1AF;
    padding: 3%;
    border: 1px solid #43D1AF;
  }

  .form-style-6 input[type="submit"],
  .form-style-6 input[type="button"] {
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 3%;
    background: #43D1AF;
    border-bottom: 2px solid #30C29E;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;
    color: #fff;
  }

  .form-style-6 input[type="submit"]:hover,
  .form-style-6 input[type="button"]:hover {
    background: #2EBC99;
  }
</style>

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


<body dir="rtl">
  <div class="form-style-6">

    <fieldset>
      <legend>
        ثبت اعلام شکایت
      </legend>

      <form action="action/complaint_action.php" method="post" enctype="multipart/form-data">
        <h3>اطلاعات شخصی</h3>
        <labele>نام:</lable>
          <input type="text" id="fname" name="fname">
          <br>
          </br>
          <lable>نام خانوادگی:</lable>
          <input type="text" id="lname" name="lname">
          <br>
          <br>
          <lable>سمت:</lable>
          <input type="text" id="position" name="position">
          <br><br>
          <lable>سازمان:</lable>
          <input type="text" id="company" name="company">
          <br><br>
          <hr class="hr">
          <h3>اعلام شکایت</h3>
          <lable>*موضوع شکایت:</lable>
          <input type="radio" id="com_cat1" name="choice" value="1" checked>محصول</input>
          <input type="radio" id="com_cat2" name="choice" value="2">خدمات</input>
          <input type="radio" id="com_cat3" name="choice" value="3">سایر</input>


          <br>
          <br>
          <lable>*فرد مرتبط در سازمان:</lable>
          <input type="text" id="relative_name" name="relative_name">
          <br>
          <br>
          <lable>*نام و شماره اسناد مرتبط:</lable>
          <input type="text" id="document_name" name="document_name">
          <br>
          <br>
          <lable>پیوست:حجم فایل ارسالی حداکثر 512 کیلوبایت باشد</lable>
          <input type="file" id="file" name="file" enctype="multipart/form_data">
          <br>
          <br>
          <lable>*استان</lable>
          <input type="text" id="province" name="province">
          <br>
          <br>
          <lable>*شهر:</lable>
          <input type="text" id="city" name="city">
          <br>
          <br>
          <lable>تلفن ثابت:</lable>
          <input type="text" id="landline_phone" name="landline_phone">
          <br>
          <br>
          <lable>*تلفن همراه:</lable>
          <input type="tel" id="tel" name="tel">
          <br>
          <br>
          <lable>ایمیل:</lable>
          <input type="text" id="email" name="email">
          <br>
          <br>
          <lable>*آدرس:</lable>
          <textarea type="text" id="address" name="address"></textarea>
          <br>
          <br>
          <lable>*خلاصه شکایت:</lable>
          <textarea type="text" id="comp_summary" name="comp_summary"></textarea>
          <br>
          <br>
          <lable>*خواسته موردنظر از طرح شکایت:</lable>
          <textarea type="text" id="request" name="request"></textarea>
          <br>
          <br>
          <lable>*حداکثر زمان موردنظر برای پاسخگویی به درخواست:</lable>

          <input type="text" id="reply_date" name="reply_date">
          <br>
          <br>
          <label>کد امنیتی:</label>
          <input type="number" id="code" name="code">
          <br>
          <br>
          <input type="submit" id="submit" name="submit" value="ثبت" class="submit">
      </form>

    </fieldset>
  </div>
</body>

</html>