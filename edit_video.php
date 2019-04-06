<?php session_start(); ?>
<?php
if($_SESSION['UserName'] == null || $_SESSION['RealName'] == null || $_SESSION['isAdmin'] == null || $_SESSION['UserId'] == null)
{
    header("Location: api/member_Logout.php"); 
    exit;
}

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>資料上傳-影音資料</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="">

    <!--Google Fonts link-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/fonticons.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="assets/css/bootstrap.css">-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootsnav.css">
    <link rel="stylesheet" href="assets/css/PHstyle.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--For Plugins external css-->
    <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--File Input-->
    <link rel="stylesheet" href="assets/css/fileinput.min.css">

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>

<body data-spy="scroll" data-target=".navbar-collapse">

<?php
   echo '<input type="hidden" id ="uid" value="'.$_SESSION['UserId'].'">';
?>
    <!-- Preloader -->

    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
            </div>
        </div>
    </div>

    <!--End off Preloader -->


    <div class="culmn">
        <!--Home page style-->
        <nav class="navbar navbar-default navbar-fixed black no-background bootsnav text-uppercase">
            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

             <div class="container">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class=""><a  href='api/member_Logout.php'><button class="btn-sign-out"><i class="fa fa-sign-out" aria-hidden="true" onclick="location.href='api/member_Logout.php'">登出</i></button></a></li>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="list-works.php">
                        <h3 class="text-uppercase">澎湖島嶼生活記憶</h3>
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse bg-drak" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="list_works.php">作品/文物</a></li>
                        <li><a href="list_video.php">影音資料</a></li>
                        <li><a href="list_organization.php">組織</a></li>
                        <li><a href="list_space.php">空間</a></li>
                        <li><a href="list_people.php">人物</a></li>
                        <li><a href="list_activity.php">活動</a></li>
                        <li><a href="list-works.php">上傳檔案列表</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>


        </nav>
        <section id="company" class="company bg-light">
            <div class="container">
                <div class="row">
                    <div class="main_company roomy-40 text-center">

                    </div>
                </div>
            </div>
        </section>

        <!--Home Sections-->
        <section id="testimonial" class="testimonial fix roomy-40">
            <div class="container">
                <div class="row">
                    <div class="main_testimonial">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <form name="sentMessage" id="" novalidate>
                                <div class="col-sm-10 col-sm-offset-1">
                                    <h2>上傳影音資料</h2>

                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <input type="text" class="form-control" id="" required=""
                                                placeholder="http://"
                                                data-validation-required-message="Please enter your title.">
                                            <span class="help-block">請輸入連結</span>
                                        </div>
                                    </div>

                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>名稱:</label>
                                            <input type="text" class="form-control" id="VideoName" required=""
                                                data-validation-required-message="Please enter your title.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>撰寫者:</label>
                                            <input type="text" class="form-control" id="Writer" required=""
                                                data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>檔案權利註記:</label>
                                            <select id = "VideoAuthorization"  name="" class="form-control-dropdown form-control">
                                                <option value="cc01">創用CC姓名標示 3.0 台灣及其後版本(CC BY 3.0 TW +)</option>
                                                <option value="cc02">創用CC姓名標示-相同方式分享 3.0 台灣及其後版本(CC BY-SA 3.0 TW +)
                                                </option>
                                                <option value="cc03">創用CC姓名標示-非商業性 3.0 台灣及其後版本(CC BY-NC 3.0 TW +)
                                                </option>
                                                <option value="cc04">創用CC姓名標示-非商業性-相同方式分享 3.0 台灣及其後版本(CC BY-NC-SA 3.0 TW
                                                    +)</option>
                                                <option value="cc05">創用CC姓名標示-非商業性 3.0 台灣及其後版本(CC BY-NC 3.0 TW +)
                                                </option>
                                                <option value="cc06">創用CC姓名標示-非商業性-禁止改作 3.0 台灣及其後版本(CC BY-NC-ND 3.0 TW
                                                    +)
                                                </option>
                                                <option value="ccPDM">公眾領域標章(PDM)</option>  
                                                <option value="cc00">公眾領域貢獻宣告(CC0)</option> 
                                                <option value="ccOGDL">政府資料開放授權條款-第1版(OGDL 1.0)</option>
                                                <option value="cc07">台中自由文化授權條款 1.0(相容於CC BY 4.0)</option>
                                                <option value="cc08">台中開放文化授權條款 1.0(相容於CC BY-SA 4.0)</option>
                                                <option value="cc09">受著作權法保護-僅限於本平台有限度公開瀏覽</option>
                                                <option value="cc10">資料尚待處理，僅做暫存</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>媒體類型:</label>
                                            <select id = "MediaClass" name="" class="form-control-dropdown form-control">
                                                <option value="video">影片</option>
                                                <option value="redio">聲音</option>  
                                            </select>

                                            <div class="help-block"></div>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>時間資訊-類型:</label>
                                            <select id = "DateClass" name="" class="form-control-dropdown form-control">
                                                <option value="">出版日期</option>
                                                <option value="time01">創作日期</option>  
                                                <option value="time02">發表日期</option> 
                                                <option value="time03">演出日期</option>
                                                <option value="time04">拍攝日期</option>
                                                <option value="time05">探訪時間</option>
                                                <option value="time06">報導時間</option>
                                                <option value="time07">首演時間</option>
                                                <option value="time08">入庫時間</option>
                                                <option value="time09">錄製時間</option>
                                                <option value="time10">首播時間</option>
                                            </select>

                                            <div class="help-block"></div>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>時間資訊-時間:</label>
                                            <input type="date" class="form-control" id="Date" required=""
                                                data-validation-required-message="">
                                            <span class="help-block">請輸入發表時間</span>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>地點類別:</label>
                                            <select id = "PlaceClass" name="" class="form-control-dropdown form-control ">
                                                <option value="">出版地點</option>
                                                <option value="">創作地點</option>  
                                                <option value="">首演地點</option> 
                                                <option value="">演出地點</option>
                                                <option value="">拍攝地點</option>
                                                <option value="">錄製地點</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>地點:</label>
                                            <input type="text" class="form-control" id="Place_address" placeholder="請填寫詳細地址">
                                        </div>
                                    </div>

                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>創作者:</label>
                                            <input type="text" class="form-control" id="Creator" required=""
                                                data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>影音介紹描述資料:</label>
                                            <textarea maxlength="500" class="form-control" id="VideoDescription" placeholder=""></textarea>
                                            <span class="help-block">請輸入文章內容，300~500字/科普化</span>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>關鍵字:</label>
                                            <input type="text" class="form-control" id="KeyWord" placeholder="如：馬公市，東文里">
                                            <span class="help-block">請用，隔開</span>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>影片分類一:</label>
                                            <select id = "VideoClassOne" name="" class="form-control-dropdown form-control">
                                                <option value="">國家文化記憶庫分類</option>
                                            </select>

                                            <div class="help-block"></div>
                                        </div>
                                    </div>

                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>影片分類二:</label>
                                            <select id = "VideoClassTwo" name="" class="form-control-dropdown form-control">
                                                <option value="">民俗與宗教</option>
                                                <option value="">生物、生態與環境</option>  
                                                <option value="">藝術與人文</option> 
                                                <option value="">社會與政治</option>
                                                <option value="">空間、地域與遷徙</option>
                                                <option value="">產業經濟</option>
                                                <option value="">多元族群</option>
                                                <option value="">人物團體</option>
                                                <option value="">其他</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label>原件著作權註記及使用限制:</label>
                                            <select id = "OriginalCopyright" name="" class="form-control-dropdown form-control">
                                                <option value="cc01">創用CC姓名標示 3.0 台灣及其後版本(CC BY 3.0 TW +)</option>
                                                <option value="cc02">創用CC姓名標示-相同方式分享 3.0 台灣及其後版本(CC BY-SA 3.0 TW +)
                                                </option>
                                                <option value="cc03">創用CC姓名標示-非商業性 3.0 台灣及其後版本(CC BY-NC 3.0 TW +)
                                                </option>
                                                <option value="cc04">創用CC姓名標示-非商業性-相同方式分享 3.0 台灣及其後版本(CC BY-NC-SA 3.0 TW
                                                    +)</option>
                                                <option value="cc05">創用CC姓名標示-非商業性 3.0 台灣及其後版本(CC BY-NC 3.0 TW +)
                                                </option>
                                                <option value="cc06">創用CC姓名標示-非商業性-禁止改作 3.0 台灣及其後版本(CC BY-NC-ND 3.0 TW
                                                    +)
                                                </option>
                                                <option value="ccPDM">公眾領域標章(PDM)</option>  
                                                <option value="cc00">公眾領域貢獻宣告(CC0)</option> 
                                                <option value="ccOGDL">政府資料開放授權條款-第1版(OGDL 1.0)</option>
                                                <option value="cc07">台中自由文化授權條款 1.0(相容於CC BY 4.0)</option>
                                                <option value="cc08">台中開放文化授權條款 1.0(相容於CC BY-SA 4.0)</option>
                                                <option value="cc09">受著作權法保護-僅限於本平台有限度公開瀏覽</option>
                                                <option value="cc10">資料尚待處理，僅做暫存</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div id="success"></div>
                                    <!-- For success/fail messages -->
                                    <button type="submit" onclick="Videoinsert()" class="btn btn-default">發表新文章</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                <!--End off row-->
            </div>
            <!--End off container -->
        </section>
        <!--End off Testimonial section -->

        <footer id="footer" class="footer bg-mega">
            <div class="container">
                <div class="row">
                    <div class="main_footer p-top-40 p-bottom-30">
                        <div class="col-md-6 text-left sm-text-center">
                            <p class="wow fadeInRight" data-wow-duration="1s">
                                | Copyright © 2019 · IDELab, NPU |
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




    </div>

    <!-- JS includes -->

    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.collapse.js"></script>
    <script src="assets/js/bootsnav.js"></script>


    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/jquery.tx3-tag-cloud.js"></script>
    <script src="assets/js/main.js"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0YHjxhTqUPSIQtCRRLPsKmYZ8NUmiX00&callback=initMap">
        </script>


    <script src="assets/js/PHmain.js"></script>
    <script src="assets/js/api/videoInsert.js"></script>

</body>

</html>