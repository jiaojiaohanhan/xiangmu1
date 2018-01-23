<!DOCTYPE HTML>
<html>
<head>
    <meta charset=UTF-8">
    <title></title>
    <base href="<?php echo site_url();?>">
    <style type="text/css">
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
        /*新闻与公告*/
        #center-zone{
            width: 465px;
            height: 320px;
            margin: 0 auto;
            text-align: left;
            color: #002166;
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
    <div id="center-zone">
        <ul>
            <?php foreach($newses as $news){ ?>
<!--            --><?php //foreach($newses as $news) if($news->news_id==1){ ?>
                <li style="list-style: none;margin-bottom: 5px"><h3>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $news->news_title;?></h3></li>
                <li style="list-style: none;margin-bottom: 20px"><p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $news->news_content;?></p></li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>