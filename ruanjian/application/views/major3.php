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
            padding:40px 40px;
            text-align: center;
            background: #ffffff;
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
        <a href="Ruanjian/major" class="click">专业介绍</a>
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
<div id="left-list">
    <ul>
        <li>专业简介</li>
        <li>方向简介</li>
        <li class="click">其他</li>
    </ul>
</div>
<div id="right-zone">
    <div class="no-selected">
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;软件工程专业是2002年国家教育部新增专业，随着计算机应用领域的不断扩大及中国经济建设的不断发展，软件工程专业将成为一个新的热门专业。软件工程专业以计算机科学与技术学科为基础，强调软件开发的工程性，使学生在掌握计算机科学与技术方面知识和技能的基础上熟练掌握从事软件需求分析、软件设计、软件测试、软件维护和软件项目管理等工作所必需的基础知识、基本方法和基本技能，突出对学生专业知识和专业技能的培养，培养能够从事软件开发、测试、维护和软件项目管理的高级专门人才。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;软件工程专业是一门研究用工程化方法构建和维护有效的、实用的和高质量的软件的学科。它涉及到程序设计语言，数据库，软件开发工具，系统平台，标准，设计模式等方面。在现代社会中，软件应用于多个方面。典型的软件比如有电子邮件，嵌入式系统，人机界面，办公套件，操作系统，编译器，数据库，游戏等。同时，各个行业几乎都有计算机软件的应用，比如工业，农业，银行，航空，政府部门等。这些应用促进了经济和社会的发展，使得人们的工作更加高效，同时提高了生活质量。
        </p>
    </div>
    <div class="no-selected">
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;1 可视化编程
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;掌握程序设计方法及可视化技术，精通一种可视化平台及其软件开发技术。获取Delphi程序员系列、Java初级或VB开发能手认证。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;就业方向：企业、政府、社区、各类学校等可视化编程程序员。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;2 WEB应用程序设计
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;具有美工基础和网页动画设计能力，掌握交互式网页程序的设计技术，能进行网站建设和维护。获取Macromedia多媒体互动设计师或Delphi初级程序员或Delphi快速网络开发工程师认证。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;就业方向：企业、政府、社区、各类学校等WEB应用程序员。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;3 软件测试
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;掌握软件测试的基本原理、方法和组织管理，精通软件测试工具。获取ATA软件测试工程师或Delphi初级程序员或Java初级程序员认证。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;就业方向：企业、政府、社区、各类学校等软件测试员。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;4 数据库管理
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;能应用关系范式进行数据库设计，精通SQL语言，胜任数据库服务器管理与应用工作。获取Oracle数据库管理或SQL Server数据库应用或Windows XP应用认证。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;就业方向：企业、政府、社区、各类学校等部门的中、大型数据库管理员。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;5 图形图像制作
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;精通国际上流行的图形/图像制作工具（如CorelDraw、Photoshop、Pagemaker等）。获取平面设计师相关的认证。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;就业方向：广告制作公司、建筑设计公司、包装装璜设计公司、居室装修公司、出版印刷公司。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;6 网络构建技术
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;熟悉网络结构和组网方式，掌握建网方法，能利用工具分析和排除常见网络故障。获取Cisco路由配置或华为网络工程或AMP应用工程师认证。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;就业方向：企业、政府、社区、各类学校等网络构建工程师。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;7 网络系统管理
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;掌握网络系统管理的基本知识与应用技能，能进行网络系统的安全设置。获取Window2000 Server或TurboLinux TLCE或Cisco路由配置专家认证。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;就业方向：企业、政府、社区、各类学校等网络系统管理员。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;8 多媒体制作
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;具有多媒体程序设计与多媒体制作策划的能力。基本掌握面向对象程序设计与建模、造型设计、场景设计、分镜头原理等技能。获取多媒体设计师相关的认证。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;就业方向：多媒体设计与制作公司、动画美术制作出版公司、广告制作公司。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;9 计算机办公应用
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;精通办公自动化应用与管理，熟悉服务器的安装、管理和维护，基于应用服务器的相关服务和软件系统，具备对服务器的网络安全设置、邮件、网页发布、FTP、OA、BBS等系统的应用和维护能力。
        </p>
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;就业方向：企业、政府、社区、各类学校等办公设备管理员。
        </p>
    </div>
    <div class="selected">
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;竞争力看的是你自己的能力，像软件工程这种专业性很强的专业，只要你学好了软件技术就业还是很容易的，而且工资相当高，好点的公司都有7000+，前提是学好了！！但是如果可以选择的话并不推荐软件工程这个专业，因为做软件并不是每个人都适合的，拿我们班的情况来说吧，46个人都非常厌恶编程，软件学起来不仅困难而且无聊，最终选择软件行业的也就几个人而已。。每天工作必须得面对电脑，一天受到10几个小时的辐射是非常不利健康的。很容易造成精神上的疲劳，跟肉体的疲劳不一样，身体累了休息一下就行，同时还有锻炼身体的效果，如果精神上压力大了就不是那么容易恢复的了，而且程序员整天坐在电脑前没有运动非常容易患上职业病，种种条件表明程序员工作在亚健康的环境下，而且这是没有办法改变的环境。当然软件工程这个行业可以说是当今社会最公平的一个行业了，没有所谓的潜规则，它不在乎你的出生，无论什么学校毕业的只要你有能力，技术强硬就绝对能找适合你的工作，不过这是一个需要长期学习的工程，需要做好长期学习的准备。如果你不具备勤奋好学的性格的话那就最好不要选择这个行业了，因为学习的过程是很枯燥的，看不尽的代码，没日没夜的加班，进度的压力都是程序员必须面对的。软件行业和其他的行业一样，有处于最底层的拿着微薄的工资，干着最累的活的程序猿，也有做着设计拿着高薪的高级工程师。如果选择做软件那就需要静下心来学习好专业知识，将来在你毕业的时候大部分公司招聘都是考的你基础知识而不是什么流行技术。在大学4年要做到精通一门语言同时也得了解其他的优秀编程语言，如果能在大学期间拥有一些项目经验对以后的求职是非常有帮助的。
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