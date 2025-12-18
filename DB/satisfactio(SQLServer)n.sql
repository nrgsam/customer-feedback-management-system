-- =============================================
-- Database: satisfaction (SQL Server Version)
-- =============================================
IF NOT EXISTS(SELECT * FROM sys.databases WHERE name = 'satisfaction')
BEGIN
    CREATE DATABASE satisfaction;
END
GO

USE satisfaction;
GO

-- =============================================
-- Table: activity
-- =============================================
CREATE TABLE activity (
    username nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL PRIMARY KEY,
    ip int NOT NULL,
    date date NOT NULL,
    time time NOT NULL,
    user_id int NOT NULL
);
GO

-- =============================================
-- Table: complaint
-- =============================================
CREATE TABLE complaint (
    complaint_id int IDENTITY(1,1) NOT NULL PRIMARY KEY,
    IP int NOT NULL,
    fname nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    lname nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    position nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    company nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    com_cat nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    relative_name nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    document_name nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    file nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    province nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    city nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    landline_phone nvarchar(11) NOT NULL,
    tel nvarchar(11) NOT NULL,
    email nvarchar(50) NOT NULL,
    address nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    comp_summary nvarchar(200) COLLATE Persian_100_CI_AS NOT NULL,
    request nvarchar(100) COLLATE Persian_100_CI_AS NOT NULL,
    start_date nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    end_date nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    reply_date nvarchar(20) COLLATE Persian_100_CI_AS NOT NULL,
    code int NOT NULL,
    status nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    status_desc nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    security_code int NOT NULL,
    user_id int NOT NULL
);
GO

-- =============================================
-- Table: login_status
-- =============================================
CREATE TABLE login_status (
    id int IDENTITY(1,1) NOT NULL PRIMARY KEY,
    username nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    password nvarchar(18) COLLATE Persian_100_CI_AS NOT NULL,
    ip int NOT NULL,
    hostname nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    mack_address nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    date nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    flag bit NOT NULL,
    count int NOT NULL
);
GO

-- =============================================
-- Table: question1
-- =============================================
CREATE TABLE question1 (
    id int IDENTITY(1,1) NOT NULL PRIMARY KEY,
    [desc] nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL
);
GO

INSERT INTO question1 ([desc]) VALUES
(N'کیفیت رنگ و آبکاری'),
(N'سهولت نصب'),
(N'سهولت بهره برداری با توجه به چیدمان قطعات'),
(N'حفاظت ها شامل فیوزها و وریستورها'),
(N'سیم بندی و اتصلات'),
(N'ویژگی های کنترل کننده مرکزی،نمایشگرها و آلارم ها'),
(N'وضعیت و کیفیت عملکردی محصول در دوره گارانتی'),
(N'نحوه بسته بندی و کیفیت آن');
GO

-- =============================================
-- Table: question2
-- =============================================
CREATE TABLE question2 (
    id int IDENTITY(1,1) NOT NULL PRIMARY KEY,
    [desc] nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL
);
GO

INSERT INTO question2 ([desc]) VALUES
(N'-زمان مورد انتظار برای پاسخگویی'),
(N'-نحوه تعاملات پاسخگویی و پیگیری و کیفیت ارتباطات مسئولین فروش'),
(N'-سطح دانش فنی و توانایی مسئولین فروش'),
(N'-انجام به موقع تعهدات مطابق شرایط توافق شده'),
(N'-میزان انعطاف و توانایی برآورده ساختن نیازهای جدید'),
(N'-تبلیغات و اطلاع رسانی در خصوص محصولات و شرایط جدید'),
(N'-میزان تنوع محصولات در جهت برطرف کردن نیازها'),
(N'-کافی و کاربردی بودن اطلاعات درج شده بر روی محصول و کتابچه راهنما'),
(N'-نحوه بسته بندی محصولات و شرایط تحویل'),
(N'-انطباق محصول با انتظارات مطرح شده'),
(N'- منصفانه بودن قیمت');
GO

-- =============================================
-- Table: question3
-- =============================================
CREATE TABLE question3 (
    id int IDENTITY(1,1) NOT NULL PRIMARY KEY,
    [desc] nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL
);
GO

INSERT INTO question3 ([desc]) VALUES
(N'میزان دسترسی حسن خلق نحوه پاسخ گویی و پیگیری پروژه'),
(N'پیش بینی دقیق در مورد تامین و تدارکات مورد نیاز'),
(N'منعطف بودن در اجرای پروژه در برابر تغییر الزامات مشتری'),
(N'انجام تعهدات مندرج در قرارداد و برآورده سازی الزامات آن'),
(N'کیفیت نصب تجهیزات و اجرای پروژه خدمات مهندسی'),
(N'رعایت زمانبندی اعلام شده و گانت چارت پروژه'),
(N'میزان آگاهی، تخصص و دانش فنی عوامل اجرایی پروژه'),
(N'میزان رعایت کلیه قوانین عمومی،ایمنی و امنیت اطلاعات کارفرما'),
(N'هماهنگی و اطلاع رسانی به کارفرما در مورد انجام امور');
GO

-- =============================================
-- Table: question4
-- =============================================
CREATE TABLE question4 (
    id int IDENTITY(1,1) NOT NULL PRIMARY KEY,
    [text] nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL
);
GO

INSERT INTO question4 ([text]) VALUES
(N'قابلیت دسترسی و کیفیت پاسخگویی کارشناسان فنی'),
(N'قابلیت دسترسی و کیفیت پاسخگویی کارشناسان پشتیبانی '),
(N'قیمت و هزینه های پشتیبانی و خدمات پس از فروش (تعمیرات اعزام کارشناس/آموزش)'),
(N'مدت زمان انتظار دریافت خدمات فنی پس از اعلام نیاز'),
(N'مدت زمان انتظار تعمیر پس از اعلام نیاز و ارسال تجهیزات'),
(N'میزان موثر بودن راهنمایی های فنی'),
(N'ارتباطات ،نحوه برخورد، جدیت در پاسخگویی و پیگیری خدمات پس از فروش'),
(N'قیمت و هزینه های پشتیبانی و خدمات پس از فروش (تعمیرات اعزام کارشناس/آموزش)');
GO

-- =============================================
-- Table: question5
-- =============================================
CREATE TABLE question5 (
    ID int IDENTITY(1,1) NOT NULL PRIMARY KEY,
    [Text] nvarchar(max) COLLATE Persian_100_CI_AS NOT NULL
);
GO

INSERT INTO question5 ([Text]) VALUES
(N'اطلاع رسانی موثر در خصوص روش های شکایت'),
(N'سهولت دسترسی به سامانه های طرح شکایت'),
(N'سرعت عمل سازمان در دریافت ،بررسی و رسیدگی به شکایت'),
(N'نحوه برخورد مسئولین فرآیند رسیدگی به شکایات'),
(N'میزان رعایت تعهدات توسط شرکت در قبال رسیدگی به شکایت طرح شده'),
(N'نحوه اعلام نتایج رسیدگی به شکایت '),
(N'میزان مطلوبیت اقدامات انجام شده پیرو شکایت طرح شده');
GO
-- =============================================
-- Table: satisfaction_category
-- =============================================
CREATE TABLE satisfaction_category (
    cat_id int IDENTITY(1,1) NOT NULL PRIMARY KEY,
    title nvarchar(20) COLLATE Persian_100_CI_AS NOT NULL
);
GO

INSERT INTO satisfaction_category (title) VALUES
(N'رضایت'),
(N'شکایت');
GO

-- =============================================
-- Table: satisfaction1
-- =============================================
CREATE TABLE satisfaction1 (
    id int IDENTITY(1,1) NOT NULL PRIMARY KEY,
    name nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    lastname nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    position nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    comany nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    prodouctname nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q1 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q1_score nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q1_important nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q2 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q2_score nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q2_important nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q3 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q3_score nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_important3 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q4 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_score4 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_important4 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q5 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_score5 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_important5 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q6 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_score6 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_important6 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q7 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_score7 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_important7 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q8 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_score8 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_important8 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    tel nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    start_date nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    end_date nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    IP int NOT NULL,
    date nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    user_id int NOT NULL,
    serial int NOT NULL
);
GO

-- =============================================
-- Table: satisfaction2
-- =============================================
CREATE TABLE satisfaction2 (
    id bigint IDENTITY(1,1) NOT NULL PRIMARY KEY,
    name nvarchar(20) COLLATE Persian_100_CI_AS NOT NULL,
    family nvarchar(20) COLLATE Persian_100_CI_AS NOT NULL,
    position nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    company nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    contact_number bigint NOT NULL,
    contact_subject nvarchar(25) COLLATE Persian_100_CI_AS NOT NULL,
    question1 nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    q_d1 nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    q_s1 nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    question2 nvarchar(50) COLLATE Persian_100_CI_AS NULL,
    q_d2 nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    q_s2 nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    question3 nvarchar(50) COLLATE Persian_100_CI_AS NULL,
    q_d3 nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    q_s3 nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    question4 nvarchar(50) COLLATE Persian_100_CI_AS NULL,
    q_d4 nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    q_s4 nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    question5 nvarchar(50) COLLATE Persian_100_CI_AS NULL,
    q_d5 nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    q_s5 nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    question6 nvarchar(50) COLLATE Persian_100_CI_AS NULL,
    q_d6 nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    q_s6 nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    question7 nvarchar(50) COLLATE Persian_100_CI_AS NULL,
    q_d7 nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    q_s7 nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    question8 nvarchar(50) COLLATE Persian_100_CI_AS NULL,
    q_d8 nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    q_s8 nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    question9 nvarchar(50) COLLATE Persian_100_CI_AS NULL,
    q_d9 nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    q_s9 nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    question10 nvarchar(50) COLLATE Persian_100_CI_AS NULL,
    q_d10 nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    q_s10 nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    question11 nvarchar(50) COLLATE Persian_100_CI_AS NULL,
    q_d11 nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    q_s11 nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    phone_number bigint NOT NULL,
    name_date nvarchar(25) COLLATE Persian_100_CI_AS NOT NULL,
    start_date nvarchar(50) COLLATE Persian_100_CI_AS NULL,
    end_data nvarchar(50) COLLATE Persian_100_CI_AS NULL,
    ip int NULL,
    user_id int NOT NULL,
    serial int NOT NULL
);
GO

-- =============================================
-- Table: satisfaction3
-- =============================================
CREATE TABLE satisfaction3 (
    id int IDENTITY(1,1) NOT NULL PRIMARY KEY,
    name nvarchar(200) COLLATE Persian_100_CI_AS NOT NULL,
    family nvarchar(200) COLLATE Persian_100_CI_AS NOT NULL,
    position nvarchar(200) COLLATE Persian_100_CI_AS NOT NULL,
    campany nvarchar(200) COLLATE Persian_100_CI_AS NOT NULL,
    number nvarchar(200) COLLATE Persian_100_CI_AS NOT NULL,
    subject nvarchar(200) COLLATE Persian_100_CI_AS NOT NULL,
    question1 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_d1 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_s1 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    question2 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_d2 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_s2 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    question3 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_d3 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_s3 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    question4 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_d4 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_s4 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    question5 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_d5 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_s5 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    question6 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_d6 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_s6 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    question7 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_d7 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_s7 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    question8 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_d8 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_s8 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    question9 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_d9 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_s9 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    start_date nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    end_date nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    ip int NOT NULL,
    date nvarchar(max) COLLATE Persian_100_CI_AS NOT NULL,
    phonenumber nvarchar(12) COLLATE Persian_100_CI_AS NOT NULL,
    user_id int NOT NULL,
    serial int NOT NULL
);
GO
-- =============================================
-- Table: satisfaction4
-- =============================================
CREATE TABLE satisfaction4 (
    id int IDENTITY(1,1) NOT NULL PRIMARY KEY,
    name nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    lastname nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    position nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    comany nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    prodouctname nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q1 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q1_score nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q1_important nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q2 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q2_score nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q2_important nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q3 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q3_score nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_important3 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q4 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_score4 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_important4 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q5 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_score5 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_important5 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q6 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_score6 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_important6 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q7 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_score7 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_important7 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q8 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_score8 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    q_important8 nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    tel nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    start_date nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    end_date nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    IP int NOT NULL,
    date nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    user_id int NOT NULL,
    serial int NOT NULL
);
GO

-- =============================================
-- Table: satisfaction5
-- =============================================
CREATE TABLE satisfaction5 (
    ID int IDENTITY(1,1) NOT NULL PRIMARY KEY,
    Start_Date nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    End_Date nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    IP int NOT NULL,
    Fname nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    Lname nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    Position nvarchar(20) COLLATE Persian_100_CI_AS NOT NULL,
    Company nvarchar(20) COLLATE Persian_100_CI_AS NOT NULL,
    Subject nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    Code nvarchar(20) COLLATE Persian_100_CI_AS NOT NULL,
    Tel nvarchar(12) COLLATE Persian_100_CI_AS NOT NULL,
    Date nvarchar(max) COLLATE Persian_100_CI_AS NOT NULL,
    Q1 nvarchar(max) COLLATE Persian_100_CI_AS NOT NULL,
    Q1_E nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    Q1_D nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    Q2 nvarchar(max) COLLATE Persian_100_CI_AS NOT NULL,
    Q2_E nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    Q2_D nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    Q3 nvarchar(max) COLLATE Persian_100_CI_AS NOT NULL,
    Q3_E nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    Q3_D nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    Q4 nvarchar(max) COLLATE Persian_100_CI_AS NOT NULL,
    Q4_E nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    Q4_D nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    Q5 nvarchar(max) COLLATE Persian_100_CI_AS NOT NULL,
    Q5_E nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    Q5_D nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    Q6 nvarchar(max) COLLATE Persian_100_CI_AS NOT NULL,
    Q6_E nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    Q6_D nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    Q7 nvarchar(max) COLLATE Persian_100_CI_AS NOT NULL,
    Q7_E nvarchar(8) COLLATE Persian_100_CI_AS NOT NULL,
    Q7_D nvarchar(5) COLLATE Persian_100_CI_AS NOT NULL,
    user_id int NOT NULL,
    serial int NOT NULL
);
GO

-- =============================================
-- Table: suggestion_category
-- =============================================
CREATE TABLE suggestion_category (
    id int IDENTITY(1,1) NOT NULL PRIMARY KEY,
    title nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL
);
GO

-- =============================================
-- Table: suggestion
-- =============================================
CREATE TABLE suggestion (
    id int IDENTITY(1,1) NOT NULL PRIMARY KEY,
    IP int NOT NULL,
    name nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    company nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    tel nvarchar(11) COLLATE Persian_100_CI_AS NOT NULL,
    email nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    text nvarchar(max) COLLATE Persian_100_CI_AS NOT NULL,
    start_date nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    end_date nvarchar(50) COLLATE Persian_100_CI_AS NOT NULL,
    code int NOT NULL,
    status nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    status_desc nvarchar(150) COLLATE Persian_100_CI_AS NOT NULL,
    security_code int NOT NULL,
    user_id int NOT NULL
);
GO

-- =============================================
-- Table: user
-- =============================================
CREATE TABLE [user] (
    username nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL PRIMARY KEY,
    password nvarchar(18) COLLATE Persian_100_CI_AS NOT NULL,
    fname nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    lname nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    tel nvarchar(11) COLLATE Persian_100_CI_AS NOT NULL,
    email nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    company nvarchar(30) COLLATE Persian_100_CI_AS NOT NULL,
    ip int NOT NULL,
    flag bit NOT NULL,
    user_id int NOT NULL,
    login_flag bit NOT NULL
);
GO

-- Insert default admin
INSERT INTO [user] (username, password, fname, lname, tel, email, company, ip, flag, user_id, login_flag)
VALUES (N'admin', N'1234', N'admin', N'admin', N'', N'', N'', 0, 0, 0, 0);
GO
