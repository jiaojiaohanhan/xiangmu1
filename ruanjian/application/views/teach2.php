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
        /*右边列表*/
        #right-zone{
            position: absolute;
            overflow: hidden;
            left: 350px;
            top:220px;
            text-align: center;
        }
        .right-list li{
            float: left;
            color: #000000;
            display: block;
            width:100px;
            height:165px;
            margin-right:20px;
            cursor: pointer;
        }
        .right-list img{
            width: 100px;
            height: 138px;
        }
        /*弹出层*/
        #hide-1,#hide-2,#hide-3,#hide-4,#hide-5,#hide-6,#hide-7,#hide-8,#hide-9,#hide-10,#hide-11{
            width: 500px;
            display: none;
            text-align: left;
            position:fixed;
            left: 350px;
            top: 220px;
            list-style: none;
        }
        .image{
            margin:0 150px ;
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
        <a href="Ruanjian/lab">实验室</a>
        <div class="cart-box">
            <a href="Ruanjian/lab">923实验室</a>
            <a href="Ruanjian/lab2">925实验室</a>
            <a href="Ruanjian/lab3">1008实验室</a>
        </div>
    </li>
    <li class="li-float-left border-right">
        <a href="Ruanjian/teach" class="click">教师队伍</a>
    </li>
    <li class="li-float-left border-right"><a href="Ruanjian/job">就业指南</a></li>
    <li class="li-float-left"><a href="Ruanjian/content2">新闻公告</a></li>
    <li class="li-float-right"><a href="Ruanjian/login">登录</a></li>
    <li class="li-float-right border-right"><a href="Ruanjian/register">注册</a></li>
</ul>
<div id="left-list">
    <ul>
        <li>教授</li>
        <li class="click">副教授</li>
        <li>讲师</li>
    </ul>
</div>
<div id="right-zone">
    <div class="no-selected">
        <ul class="right-list">
            <li id="right-list-1">
                <img src="image/sujianmin.jpg">
                <span>苏健民-教授</span>
            </li>
        </ul>
        <ul>
            <li id="hide-1">
                <img class="image" src="image/sujianmin.jpg">
                <p>&nbsp;&nbsp;苏健民，教授，硕士，硕士生导师，软件工程一级学科带头人，省计算机学会嵌入式专委会委员。主要研究方向：自动控制、信号与信息处理。主持或参加科研、教学项目11项，科研与教学获奖11项，出版教材2部，发表论文32篇。</p>
                <p>&nbsp;&nbsp;所在学科：软件工程 软件工程（专业学位） </p>
                <p>&nbsp;&nbsp;Email：1216649568@qq.com</p>
            </li>
        </ul>
    </div>
    <div class="selected">
        <ul class="right-list">
            <li id="right-list-2">
                <img src="image/lsq.png">
                <span>罗嗣卿副教授</span>
            </li>
            <li id="right-list-3">
                <img src="image/lili.jpg">
                <span>李莉副教授</span>
            </li>
            <li id="right-list-4">
                <img src="image/liudan.jpg">
                <span>刘丹副教授</span>
            </li>
            <li id="right-list-5">
                <img src="image/zhangxiying.jpg">
                <span>张锡英副教授</span>
            </li>
            <li id="right-list-6">
                <img src="image/qiuzw3.jpg">
                <span>邱兆文副教授</span>
            </li>
        </ul>
        <ul>
            <li id="hide-2">
                <img class="image" src="image/lsq.png">
                <p>&nbsp;&nbsp;罗嗣卿，硕士，副教授，硕士生导师，软件工程领域（工程硕士）负责人、软件工程专业主任。主要研究方向：信息系统析与设计、图像处理、软件服务与应用。主持和参加省攻关重点、省自然基金、国家林业公益性行业专项、省教改项目15项，发表论文20余篇，教材3部。 </p>
                <p>&nbsp;&nbsp;所在学科：软件工程，软件工程（专业学位） </p>
                <p>&nbsp;&nbsp; Email：luosq@nefu.edu.cn</p>
            </li>
            <li id="hide-3">
                <img class="image" src="image/lili.jpg">
                <p>&nbsp;&nbsp;李莉，博士，副教授,软件工程专业教工党支部书记，专业副主任。主要研究方向：先进软件工程技术、群智能优化、大型分布式计算。主持和参加国家级、省部级各类科学研究项目、教学研究项目10余项，各级各类科研及教学获奖5项，多次获得东北林业大学教学质量优秀奖，获得东北林业大学青年教师授课大赛二等奖，信息与计算机工程学院教师授课精英赛第一名。主持重点课程1门。拥有专利权3项。在国内外核心期刊及国际学术会议上发表学术论文 10余篇，编写教材3部。美国University of California Riverside访问学者。 </p>
                <p>&nbsp;&nbsp;所在学科：软件工程，软件工程（专业学位） </p>
                <p>&nbsp;&nbsp; 邮箱：lli@nefu.edu.cn</p>
            </li>
            <li id="hide-4">
                <img class="image" src="image/liudan.jpg">
                <p>&nbsp;&nbsp;刘丹，博士，讲师。信息与计算机工程学院计算机基础教育部支部书记。主要研究方向：计算机基础教育、无线传感器网络、数据库。主持或参加科研、教学项目15项，获省部级奖励项2项。出版教材3部，发表论文9篇，申请实用新型专利1项。 </p>
            </li>
            <li id="hide-5">
                <img class="image" src="image/zhangxiying.jpg">
                <p>&nbsp;&nbsp;张锡英， 副教授，硕士，硕士生导师。主要研究方向：现代信息技术及网络应用，数据库技术、图像检索。主持或参加科研项目 11 项，发表论文 9 篇，出版教材 2 部。获得省级科学技术进步奖1次， 2 门课精品课主讲教师。  </p>
                <p>&nbsp;&nbsp;所在学科：软件工程，软件工程（专业学位） </p>
                <p>&nbsp;&nbsp;Email：zhangxy@nefu.edu.cn</p>
            </li>
            <li id="hide-6">
                <img class="image" src="image/qiuzw3.jpg">
                <p>&nbsp;&nbsp;邱兆文，博士，副教授，硕士生导师。美国卡内基梅隆大学访问学者。中国计算机学会理事。黑龙江拓盟科技有限公司董事长。主要研究方向为医学影像处理、多媒体信息检索、机器学习等。主持参加国家自然科学基金、省科技攻关重点项目、省归国留学人员基金、国家发改委产业化基金、国家工信部产业化基金等 17 项。国家发明专利 3 项，软件著作权 5 项。主编专著 1 部。荣获省科技进步三等奖 1 项，市科技进步一等奖 1 项，第五届中国创新创业大赛黑龙江省赛区第一名，第五届中国创新创业大赛互联网及移动互联网行业企业组第三名 。主要科研成果拓盟医学影像处理系统可以对CT、MR等数据进行精准三维重建，生成可3D打印的模型文件，可用于病情诊断、医患沟通、手术方案规划、手术效果评估等   </p>
                <p>&nbsp;&nbsp;所在学科：计算机应用技术，计算机技术（专业学位）  </p>
                <p>&nbsp;&nbsp;Email: qiuzw@nefu.edu.cn</p>
            </li>
        </ul>
    </div>
    <div class="no-selected">
        <ul class="right-list">
            <li id="right-list-7">
                <img src="image/zhaoyuming.jpg">
                <span>赵玉茗讲师</span>
            </li>
            <li id="right-list-8">
                <img src="image/liyan.jpg">
                <span>李琰讲师</span>
            </li>
            <li id="right-list-9">
                <img src="image/wangbo.jpg">
                <span>王波讲师</span>
            </li>
            <li id="right-list-10">
                <img src="image/bianjilong.jpg">
                <span>边继龙讲师</span>
            </li>
            <li id="right-list-11">
                <img src="image/shanying.jpg">
                <span>单颖讲师</span>
            </li>
        </ul>
        <ul>
            <li id="hide-7">
                <img class="image" src="image/zhaoyuming.jpg">
                <p>&nbsp;&nbsp;赵玉茗，博士，讲师。主要研究方向：信息检索与自然语言处理、生物信息学。主持和参加国家自然科学基金、国家信息安全中心、黑龙江省自然科学基金、美国国家卫生研究所（NIH）等项目十余项。发表学术论文12篇，其中EI、SCI收录9篇，参编教材1部。</p>
            </li>
            <li id="hide-8">
                <img class="image" src="image/liyan.jpg">
                <p>&nbsp;&nbsp;李琰，讲师，主要研究方向：软件工程，遥感和林业信息。参与科研项目多项，参编教材1部，并发表部分相关论文。</p>
            </li>
            <li id="hide-9">
                <img class="image" src="image/wangbo.jpg">
                <p>&nbsp;&nbsp;王波，讲师，硕士。主要研究方向：计算数学，软件开发。发表学术论文3篇。 </p>
            </li>
            <li id="hide-10">
                <img class="image" src="image/bianjilong.jpg">
                <p>&nbsp;&nbsp;边继龙，博士，讲师。主要研究方向：立体匹配、矢量地图压缩。曾参与或负责的科研项目包括：矢量地图版权保护技术研究、小基高比立体测绘图像匹配处理方法研究及十二五科研项目等。在国内外期刊上发表学术论文7篇，其中被EI收录5篇；申请发明专利3项。 </p>
            </li>
            <li id="hide-11">
                <img class="image" src="image/shanying.jpg">
                <p>&nbsp;&nbsp;单颖，博士，讲师。主要研究方向：计算机基础教育。 </p>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript" src="js&jquery/jquery-1.12.4.js"></script>
<script type="text/javascript">
    $(function () {
        //弹出层
        $("#right-list-1").click(function (event) {
            $("#hide-1").show(0).css("background","#ffffff");
            $("#right-list-1").css("display","none");
        });
        $("#right-list-2").click(function (event) {
            $("#hide-2").show(0).css("background","#ffffff");
            $("#right-list-2").css("display","none");
        });
        $("#right-list-3").click(function (event) {
            $("#hide-3").show(0).css("background","#ffffff");
            $("#right-list-3").css("display","none");
        });
        $("#right-list-4").click(function (event) {
            $("#hide-4").show(0).css("background","#ffffff");
            $("#right-list-4").css("display","none");
        });
        $("#right-list-5").click(function (event) {
            $("#hide-5").show(0).css("background","#ffffff");
            $("#right-list-5").css("display","none");
        });
        $("#right-list-6").click(function (event) {
            $("#hide-6").show(0).css("background","#ffffff");
            $("#right-list-6").css("display","none");
        });
        $("#right-list-7").click(function (event) {
            $("#hide-7").show(0).css("background","#ffffff");
            $("#right-list-7").css("display","none");
        });
        $("#right-list-8").click(function (event) {
            $("#hide-8").show(0).css("background","#ffffff");
            $("#right-list-8").css("display","none");
        });
        $("#right-list-9").click(function (event) {
            $("#hide-9").show(0).css("background","#ffffff");
            $("#right-list-9").css("display","none");
        });
        $("#right-list-10").click(function (event) {
            $("#hide-10").show(0).css("background","#ffffff");
            $("#right-list-10").css("display","none");
        });
        $("#right-list-11").click(function (event) {
            $("#hide-11").show(0).css("background","#ffffff");
            $("#right-list-11").css("display","none");
        });
        //隐藏层
        $("#hide-1").click(function (event) {
            $("#hide-1").hide(0);
            $("#right-list-1").css("display","block");
        });
        $("#hide-2").click(function (event) {
            $("#hide-2").hide(0);
            $("#right-list-2").css("display","block");
        });
        $("#hide-3").click(function (event) {
            $("#hide-3").hide(0);
            $("#right-list-3").css("display","block");
        });
        $("#hide-4").click(function (event) {
            $("#hide-4").hide(0);
            $("#right-list-4").css("display","block");
        });
        $("#hide-5").click(function (event) {
            $("#hide-5").hide(0);
            $("#right-list-5").css("display","block");
        });
        $("#hide-6").click(function (event) {
            $("#hide-6").hide(0);
            $("#right-list-6").css("display","block");
        });
        $("#hide-7").click(function (event) {
            $("#hide-7").hide(0);
            $("#right-list-7").css("display","block");
        });
        $("#hide-8").click(function (event) {
            $("#hide-8").hide(0);
            $("#right-list-8").css("display","block");
        });
        $("#hide-9").click(function (event) {
            $("#hide-9").hide(0);
            $("#right-list-9").css("display","block");
        });
        $("#hide-10").click(function (event) {
            $("#hide-10").hide(0);
            $("#right-list-10").css("display","block");
        });
        $("#hide-11").click(function (event) {
            $("#hide-11").hide(0);
            $("#right-list-11").css("display","block");
        });
    });
</script>
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