<?php
include("i/session.php");

?>

<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/cssnew.css" />
    <title> </title>
    <style>
        body {
            background: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;




        }

        header {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            margin-top: 20rem;
            width: 227px;
            margin-left: 9px;
        }

        a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
        }



        .menu {
            position: relative;
            display: inline-block;


        }

        .dashboard {
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 82%;

            border-radius: 5px;
            padding: 30px;
            text-align: center;
            margin-top: 150px;
            margin-left: 180px;
            background: transparent;
        }




        .menu-content {
            border-radius: 5px;
            display: none;
            position: absolute;
            right: 90px;
            top: 0;
            background-color: #e15;
            min-width: 300px;
            box-shadow: 0px 6px 6px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            font-family: 'BYekan';
        }

        button {

            font-size: 15px;
            padding: 30px;
            border-radius: 5px;

            margin-bottom: 25px;
            cursor: pointer;
            color: #090909;
            padding: 0.7em 1.7em;
            font-size: 18px;
            border-radius: 5px;

            background: transparent;
            cursor: pointer;
            border: 2px solid #56b4ec;
            transition: all 0.3s;
            box-shadow: 6px 6px 12px #c5c5c5, -6px -6px -6px #eeee;
            font-family: 'BYekan';
        }

        button:hover {
            border: 1px solid white;
        }

        button:active {
            box-shadow: 4px 4px 12px #c5c5c5, -4px -4px 12px #eee;
        }



        .menu-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 18px;
        }

        .menu-content a:hover {

            background-color: #f1f1f1;
        }

        .menu:hover .menu-content {
            background: #e8e8e8;
            transition: all 0.3s;
            display: block;
        }

        header {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;

            width: 267px;
            margin-top: -460px;
            margin-right: 10px;
        }
    </style>
</head>

<body>

    <header>
        <a href="index.php" class="set_style_link">صفحه اصلي</a>
        <a href="logout.php" class="set_style_link">خروج</a>

    </header>


    <div class="dashboard">
        <div class="menu">
            <button>رضایت</button>
            <div class="menu-content">
                <a href="satisfaction1.php"> رضایت از ویژگی های محصول</a>
                <a href="satisfaction2.php"> رضایت از عملکرد بازاریابی و فروش </a>
                <a href="satisfaction3.php"> رضایت از خدمات مهندسی</a>
                <a href="satisfaction4.php"> رضایت ار خدمات پس از فروش</a>
                <a href="satisfaction5.php">رضایت از فرایند رسیدگی به شکایات </a>
            </div>
        </div>
        <br />
        <a href="complaint.php"><button>شکایت</button></a>
        </br>
        <a href="suggestion.php"><button>ثبت پیشنهادات</button></a>
        <br />
        <a href="complaint_control.php"><button> رسیدگی به شکایات</button></a>
    </div>

</body>

</html>