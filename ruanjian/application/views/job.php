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
            width: 1366px;
            height: 160px;
            background: url("image/2.jpg") 0 0 no-repeat;
            background-size:1366px 160px;
        }
        #reback{
            display: block;
            width: 1366px;
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
        /*主要内容*/
        .center{
            width: 800px;
            background: #ffffff;
            margin: 40px auto 0;
            text-align: left;
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
    <div class="center">
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;竞争力看的是你自己的能力，像软件工程这种专业性很强的专业，只要你学好了软件技术就业还是很容易的，而且工资相当高，好点的公司都有7000+，前提是学好了！！但是如果可以选择的话并不推荐软件工程这个专业，因为做软件并不是每个人都适合的，拿我们班的情况来说吧，46个人都非常厌恶编程，软件学起来不仅困难而且无聊，最终选择软件行业的也就几个人而已。。每天工作必须得面对电脑，一天受到10几个小时的辐射是非常不利健康的。很容易造成精神上的疲劳，跟肉体的疲劳不一样，身体累了休息一下就行，同时还有锻炼身体的效果，如果精神上压力大了就不是那么容易恢复的了，而且程序员整天坐在电脑前没有运动非常容易患上职业病，种种条件表明程序员工作在亚健康的环境下，而且这是没有办法改变的环境。当然软件工程这个行业可以说是当今社会最公平的一个行业了，没有所谓的潜规则，它不在乎你的出生，无论什么学校毕业的只要你有能力，技术强硬就绝对能找适合你的工作，不过这是一个需要长期学习的工程，需要做好长期学习的准备。如果你不具备勤奋好学的性格的话那就最好不要选择这个行业了，因为学习的过程是很枯燥的，看不尽的代码，没日没夜的加班，进度的压力都是程序员必须面对的。软件行业和其他的行业一样，有处于最底层的拿着微薄的工资，干着最累的活的程序猿，也有做着设计拿着高薪的高级工程师。如果选择做软件那就需要静下心来学习好专业知识，将来在你毕业的时候大部分公司招聘都是考的你基础知识而不是什么流行技术。在大学4年要做到精通一门语言同时也得了解其他的优秀编程语言，如果能在大学期间拥有一些项目经验对以后的求职是非常有帮助的。
        </p>
    </div>
    </body>
</html>