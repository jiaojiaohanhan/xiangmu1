<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>东北林业大学软件工程专业</title>
    <base href="<?php echo site_url();?>">
    <style>
        /*总样式*/
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background: #e0e0e0;
        }
        /*头部样式*/
        #header{
            width: 1349px;
            height: 160px;
            background: url("image/2.jpg") 0 0 no-repeat;
            background-size:1349px 160px;
        }
        #reback{
            display: block;
            width: 1349px;
            height: 160px;
        }
        /*导航栏*/
        #navigation{
            overflow: hidden;
            list-style: none;
            background: #006666;
        }
        .left-border{
            margin-left: 300px;
        }
        .li-float-left{
            float: left;
        }
        .li-float-right{
            float: right;
        }
        #navigation li a{
            text-decoration: none;
            display: block;
            width: 100px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            color: #ffffff;
        }
        .border-right{
            border-right: #CCCCCC solid 1px;
        }
        #navigation li:hover .cart-box{
            display: block;
            animation: show 0.2s ease-in forwards;
        }
        .cart-box{
            width: 100px;
            height: 0px;
            background: #006666;
            position:absolute;
            margin-top:0px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.15);
            overflow: hidden;
            z-index: 10;
        }
        @keyframes show {
            100%{
                height: 120px;
            }
        }
        /*轮播图*/
        #content{
            overflow: hidden;
            margin-top: 55px;
        }
        #left-zone,#center-zone{
            border-right: 1px solid #CCCCCC;
        }
        #left-zone{
            width: 400px;
            height: 320px;
            margin: 0 0;
            position: relative;
            float: left;
        }
        #img-box{
            padding-left:0px;
        }
        #img-box img{
            display: none;
            width: 400px;
            height: 320px;
        }
        #img-box img.selected{
            display: block;
        }
        #tab{
            position: absolute;
            right: 10px;
            bottom: 10px;
            list-style: none;
        }
        #tab li{
            width: 20px;
            height: 20px;
            background: transparent;
            color: #000000;
            text-align: center;
            line-height: 20px;
            float: left;
            margin-right: 5px;
            cursor: pointer;
        }
        #tab li.selected{
            background: #CCCCCC;
            opacity: 0.5;
        }
        #prev-btn,#next-btn{
            position: absolute;
            bottom: 150px;
            width: 20px;
            height: 40px;
            line-height: 40px;
            font-size: 30px;
            text-align: center;
            background: #CCCCCC;
            opacity: 0.5;
            color: #000000;
            cursor: pointer;
        }
        #prev-btn{
            left: 0px;
        }
        #next-btn{
            right: 0px;
        }
        /*新闻与公告*/
        #center-zone,#right-zone{
            width: 465px;
            height: 320px;
            float: left;
            text-align: center;
            color: #002166;
        }
        /*无缝滚动*/
        #rolling{
            width: 1347px;
            height: 250px;
            border: 1px solid #ffffff;
            margin: 50px auto;
            overflow: hidden;
            position: relative;
        }
        #rolling ul{
            list-style: none;
            position: absolute;
        }
        #rolling ul li{
            width: 200px;
            height: 180px;
            margin-right: 10px;
            float: left;
            text-align: center;
        }
        #rolling ul li a{
            text-decoration: none;
            color: #000000;
            font-size: 15px;
        }
        #rolling ul li a img{
            width: 200px;
            height: 150px;
        }
    </style>
</head>
<body>
    <div id="header"><a id="reback" href="Ruanjian/index"></a></div>
    <ul id="navigation">
        <li class="left-border li-float-left border-right">
            <a href="Ruanjian/major">专业介绍</a>
            <div class="cart-box">
                <a href="Ruanjian/major">专业简介</a>
                <a href="Ruanjian/major2">方向简介</a>
                <a href="Ruanjian/major3">其他</a>
            </div>
        </li>
        <li class="li-float-left border-right">
            <a href="Ruanjian/lab">实验室</a>
            <div class="cart-box">
                <a href="Ruanjian/lab">923实验室</a>
                <a href="Ruanjian/lab2">925实验室</a>
                <a href="Ruanjian/lab3">1008实验室</a>
            </div>
        </li>
        <li class="li-float-left border-right">
            <a href="Ruanjian/teach">教师队伍</a>
            <div class="cart-box">
                <a href="Ruanjian/teach">教授</a>
                <a href="Ruanjian/teach2">副教授</a>
                <a href="Ruanjian/teach3">讲师</a>
            </div>
        </li>
        <li class="li-float-left border-right"><a href="Ruanjian/job">就业指南</a></li>
        <li class="li-float-left"><a href="Ruanjian/content2">新闻公告</a></li>
        <li class="li-float-right"><a href="Ruanjian/login">登录</a></li>
        <li class="li-float-right border-right"><a href="Ruanjian/register">注册</a></li>
    </ul>
    <div id="content">
        <div id="left-zone">
            <div id="img-box">
                <img src="image/contents1.jpg" alt="">
                <img src="image/contents2.jpg" alt="">
                <img src="image/contents3.jpg" alt="">
                <img src="image/contents4.jpg" alt="">
                <img src="image/contents5.jpg" alt="">
            </div>
            <ul id="tab">
                <li class="selected">1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
            </ul>
            <span id="prev-btn">&lt;</span>
            <span id="next-btn">&gt;</span>
        </div>
        <div id="center-zone">
            <h2>新闻</h2>
            <ul>
                <?php foreach($newses as $news){ ?>
                    <li style="list-style: none"><h3><a style="text-decoration: none;color: #002166;margin-top:10px;display: block" href="Ruanjian/news"><?php echo $news->news_title;?></a></h3></li>
                <?php } ?>
            </ul>
        </div>
        <div id="right-zone">
            <h2>公告</h2>
            <ul>
                <?php foreach($notices as $notice){ ?>
                    <li style="list-style: none"><h3><a style="text-decoration: none;color: #002166;margin-top:10px;display: block" href="Ruanjian/notice"><?php echo $notice->notice_title;?></a></h3></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div id="rolling">
        <ul>
            <li><a href="Ruanjian/gd1" ><img src="image/gd1.jpg" alt="">我校代表队在ACM国际大学生程序设计竞赛亚洲赛中荣获佳绩</a></li>
            <li><a href="Ruanjian/gd2" ><img src="image/gd2.jpg" alt="">信息学院开展研究生优秀实验室评比活动</a></li>
            <li><a href="Ruanjian/gd3" ><img src="image/gd3.jpg" alt="">信息学院组织全体学生党员观看纪录片《勿忘“九一八”》</a></li>
            <li><a href="Ruanjian/gd4" ><img src="image/gd4.jpg" alt="">副校长李顺龙为信息与计算机工程学院党员讲党课</a></li>
            <li><a href="Ruanjian/gd5" ><img src="image/gd5.jpg" alt="">2018全国大学生电子商务“创新、创意及创业”挑战赛东北林业大学校内选拔赛圆满结束</a></li>
            <li><a href="Ruanjian/gd6" ><img src="image/gd6.jpg" alt="">信息学院举行“心怀中国梦，感恩老师情”活动</a></li>
            <li><a href="Ruanjian/gd7" ><img src="image/gd7.jpg" alt="">信息与计算机工程学院党支部开展新党章学习活动</a></li>
            <li><a href="Ruanjian/gd8" ><img src="image/gd8.jpg" alt="">信息管理与信息系统系党支部开展十九大精神专题党课学习活动</a></li>
            <li><a href="Ruanjian/gd9" ><img src="image/gd9.jpg" alt="">信息学院成功举办Java Web应用程序设计大赛</a></li>
            <li><a href="Ruanjian/gd10" ><img src="image/gd10.jpg" alt="">信息学院成功开展“中国梦 不忘初心 牢记使命”职业生涯规划工作坊</a></li>
        </ul>
    </div>
<script>
//    轮播图
    var oLeft = document.getElementById("left-zone");
    var oTab = document.getElementById("tab");
    var aLi = oTab.getElementsByTagName("li");
    var oImgBox = document.getElementById("img-box");
    var aImg = oImgBox.getElementsByTagName("img");
    var oSp1 = document.getElementById("prev-btn");
    var oSp2 = document.getElementById("next-btn");
    var iNow = -1;
    var timer;
    for (var i=0;i<aLi.length;i++) {
        aLi[i].index = i;
        aLi[i].onmouseover = function () {
            iNow = this.index;
            //changImg(this.index)
            for (var j = 0; j < aLi.length; j++) {
                aLi[j].className = "";
                aImg[j].className = "";
            }
            this.className = "selected";
            aImg[this.index].className = "selected";
        }
    }
    oSp1.onclick = function () {
        iNow--;
        console.log(iNow);
        if(iNow < 0){
            iNow = aImg.length-1;
        }
        for (var j=0;j<aLi.length;j++){
            aLi[j].className = "";
            aImg[j].className = "";
        }
        aLi[iNow].className = "selected";
        aImg[iNow].className = "selected";
    }
    oSp2.onclick = function () {
        iNow++;
        console.log(iNow);
        if (iNow >= aImg.length) {
            iNow = 0;
        }
        for (var j = 0; j < aLi.length; j++) {
            aLi[j].className = "";
            aImg[j].className = "";
        }
        aLi[iNow].className = "selected";
        aImg[iNow].className = "selected";
    }
    run();
    oLeft.onmouseover = function () {
        clearInterval(timer);
    };
    oLeft.onmouseout = function () {
        run();
    };
    function run() {
        timer = setInterval(function () {
            oSp2.onclick();
        },1000);
    };
//    无缝滚动
    var oRo = document.getElementById("rolling")
    var gd_oUl = oRo.getElementsByTagName("ul")[0];
    var gd_aLi = oRo.getElementsByTagName("li");
    var speed = -2;

    gd_oUl.innerHTML += gd_oUl.innerHTML;
    gd_oUl.style.width = (gd_aLi[0].offsetWidth + 10)*20 +"px";

    setInterval(function () {
        gd_oUl.style.left = gd_oUl.offsetLeft + speed + "px";

        if (gd_oUl.offsetLeft <= -gd_oUl.offsetWidth / 2) {
            gd_oUl.style.left = "0px";
        }
    }, 30);
</script>
</body>
</html>