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
        /*表单*/
        #title,#title2{
            width:600px;
            height: 100%;
            margin-bottom: 20px;
        }
        #editor,#editor2 {
            width:600px;
            height:200px;
            border:1px solid #ccc;
        }
        button {
            margin:1px;
            border:1px solid #aaa;
            background:#ffe;
            cursor:pointer;
            overflow:hidden;
        }
        button:hover {
            background:#ccc;
            border:1px solid #00f;
        }
        /*左边列表*/
        #left-list{
            background: #006666;
            overflow: hidden;
            display:block;
            width:300px;
            height:250px;
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
            left: 350px;
            top:220px;
            text-align: center;
            background: #ffffff;
        }
        /*新闻与公告*/
        #center-zone2,#right-zone2{
            width: 465px;
            height: 320px;
            float: left;
            text-align: center;
            color: #002166;
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
            <a href="Ruanjian/teach">教师队伍</a>
            <div class="cart-box">
                <a href="Ruanjian/teach">教授</a>
                <a href="Ruanjian/teach2">副教授</a>
                <a href="Ruanjian/teach3">讲师</a>
            </div>
        </li>
        <li class="li-float-left border-right"><a href="Ruanjian/job">就业指南</a></li>
        <li class="li-float-left"><a href="Ruanjian/content">新闻公告</a></li>
    </ul>
    <div id="left-list">
        <ul>
            <li class="click">添加新闻</li>
            <li>添加公告</li>
            <li>删除新闻</li>
            <li>删除公告</li>
            <li>查看</li>
        </ul>
    </div>
    <div id="right-zone">
        <div class="selected">
            <form action="Ruanjian/submit" method="post">
                请输入新闻标题<input type="text" id="title" name="title">
                <br/>
                请输入新闻内容<textarea id="editor" name="editor"></textarea>
                <br/>
                <input id="submitContent" type="submit" value="提交文本">
                <input id="resetContent" type="reset" value="重置">
            </form>
        </div>
        <div class="no-selected">
            <form action="Ruanjian/submit2" method="post">
                请输入公告标题<input type="text" id="title2" name="title2">
                <br/>
                请输入公告内容<textarea id="editor2" name="editor2"></textarea>
                <br/>
                <input id="submitContent2" type="submit" value="提交文本">
                <input id="resetContent2" type="reset" value="重置">
            </form>
        </div>
        <div class="no-selected">
            <form action="Ruanjian/del" method="post">
                请输入新闻标题<input type="text" id="title3" name="title3">
                <br/>
                <input id="submitContent2" type="submit" value="删除">
                <input id="resetContent2" type="reset" value="重置">
            </form>
        </div>
        <div class="no-selected">
            <form action="Ruanjian/del2" method="post">
                请输入公告标题<input type="text" id="title4" name="title4">
                <br/>
                <input id="submitContent2" type="submit" value="删除">
                <input id="resetContent2" type="reset" value="重置">
            </form>
        </div>
        <div class="no-selected">
            <div id="center-zone2">
                <h2>新闻</h2>
                <ul>
                    <?php foreach($newses as $news){ ?>
                        <li style="list-style: none"><h3><a style="text-decoration: none;color: #002166;margin-top:10px;display: block" href="Ruanjian/news"><?php echo $news->news_title;?></a></h3></li>
                    <?php } ?>
                </ul>
            </div>
            <div id="right-zone2">
                <h2>公告</h2>
                <ul>
                    <?php foreach($notices as $notice){ ?>
                        <li style="list-style: none"><h3><a style="text-decoration: none;color: #002166;margin-top:10px;display: block" href="Ruanjian/notice"><?php echo $notice->notice_title;?></a></h3></li>
                    <?php } ?>
                </ul>
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