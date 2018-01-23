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
        .click{
            background: #009999;
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
        /*左边列表*/
        #left-list{
            background: #006666;
            overflow: hidden;
            display:block;
            width:300px;
            height:150px;
        }
        #left-list ul li{
            display: block;
            font-size: 20px;
            margin: 0 auto;
            border-bottom: 1px solid #ffffff;
            text-align: center;
            line-height: 50px;
            cursor: pointer;
        }
        /*右边区域*/
        #right-zone{
            position: absolute;
            overflow: hidden;
            left: 300px;
            top:200px;
            text-align: center;
            background: #ffffff;
        }
        #right-zone img{
            width: 600px;
            height: 400px;
        }
        #right-zone p{
            text-align: left;
        }
        /*选项卡*/
        .selected{
            display: block;
        }
        .no-selected{
            display: none;
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
        <a href="Ruanjian/lab" class="click">实验室</a>
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
<div id="left-list">
    <ul>
        <li>923实验室</li>
        <li class="click">925实验室</li>
        <li>1008实验室</li>
    </ul>
</div>
<div id="right-zone">
    <div class="no-selected">
        <img src="image/shiyanshi1.jpg" alt="">
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;该实验室是一个面向全校师生操作学习的开放性实验室，其主要任务是为我校搭建一个全新的面向现代软件开发技术、科研与教学的数字化平台，更好地为软件开发创新教学和科研服务。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;本实验规划设计了高速校园网通道，各计算机安装了Linux、Win2003 Server、Windows7等操作系统,安装了VS.NET、SQL、Oracle 11g、JAVA等大型研发软件、手机分别安装了WindowsMoblie、 Symbian、IPhone、Android、BlackBerry、Linux等系统；学生可以在不同的系统环境下完成各项实践操作任务和软件研发项目，如手机软件增值业务、NET项目研发等。为全校师生提供了一个软件开发、科研创新基地；为教师、学生第二课堂和毕业设计相关课题的软件开发提供了一个良好的研发平台。
        </p>
    </div>
    <div class="selected">
        <img src="image/shiyanshi2.jpg" alt="">
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;软件实验室是信息工程学院实验中心下属的一个专业实验室，实验室现位于信息工程学院教学大楼，实验室面积达600个平方米，设备数约400余台件，包件9个分室。目前有290多台可用于教学的计算机，都安装了计算机相关专业实验上机所需要的各类开发软件和应用软件，所有计算机直接与学校主干网连接，可以访问校内及校外任何地方的资源，每个机房都安装投影机，为现代化的多媒体、网络实验教学奠定了坚实的基础，是开展实验教学，实习实训，学生第二课堂，毕业论文设计，自主学习的理想场所。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;实验室承担的实验课程主要有计算机操作系统，ASP.net技术应用，数据库原理及应用，VB语言程序设计，Web数据库开发，Linux，Java语方言，PLC技术，机械CAD电子系统仿真，数据库原理，平面媒体设计，三维动画设计，计算机网络技术，多媒体技术，计算机文化基础，平面图像处理，管理信息系统，信息检索，信息系统分析与设计，软件开发流程，软件开发基础，数据结构，C++程序设计，汇编语言，计算机辅助设计等课程。
        </p>
    </div>
    <div class="no-selected">
        <img src="image/shiyanshi3.jpg" alt="">
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;组网技术实验室是信息工程学院实验中心下属的专业网络实验室，实验室现位于信息工程学院教学大楼，实验室面积100余平方米，设备数约50余台件。实验室目前共有实验机位48个，并安装了投影设备。实验室所有计算机直接与学校主干网连接，可以访问校内及校外任何地方的资源，为现代化的多媒体、网络实验教学奠定了坚实的基础，是开展实验教学，实习实训，学生第二课堂，毕业论文设计，自主学习的理想场所。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;组网技术实验室主要面向计算网络技术、网络工程等专业、计算机科学与技术、计算机应用。承担的实验课程有：计算机网络操作系统、计算机网络原理、网络安全技术、网络集成等。实验室为满足上述课程的需求，每机计算机均安装了多个操作系统，并提供了各类应用软件，虚拟仿真软件和网络侦测软件。另外，为满足模拟服务器的工作情况，实验室还为每台计算机专门安装了三块网卡。
        </p>
    </div>
</div>
<script>
    var oUl = document.getElementById("left-list");
    var aLi = oUl.getElementsByTagName("li");
    var oContent = document.getElementById("right-zone");
    var aDiv = oContent.getElementsByTagName("div");
    for (var i=0;i<aLi.length;i++){
        aLi[i].index = i;//aLi[0].index = 0......
        aLi[i].onclick = function(){
            for(var j=0;j<aLi.length;j++){
                aLi[j].className = "";
                aDiv[j].className = "no-selected";
            }
            this.className = "click";
            aDiv[this.index].className = "selected";
        }
    }
</script>
</body>
</html>