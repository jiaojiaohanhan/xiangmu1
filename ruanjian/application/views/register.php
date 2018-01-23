<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
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
            width: 400px;
            height: 240px;
            padding-top: 20px;
            background: #ffffff;
            margin: 100px auto 0;
            text-align: left;
        }
        .center p{
            margin-top: 20px;
        }
        /*错误*/
        .error{
            color: #ff0000;
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
    </ul>
    <div class="center">
        <form action="Ruanjian/check" method="post">
            <p>
                管理员码：<input type="text" id="admin" name="admin">
                          <span class="error">
                              <?php echo isset($err_adm)?$err_adm:"";?>
                          </span>
                <span id="admin_msg"></span>
            </p>
            <p>
                用户名：<input type="text" id="username" name="username">
                        <span class="error">
                            <?php echo isset($err_name)?$err_name:"";?>
                        </span>
                <span id="name_msg"></span>
            </p>
            <p>
                密码：<input type="password" id="password" name="password">
                      <span class="error">
                          <?php echo isset($err_pwd)?$err_pwd:"";?>
                      </span>
            </p>
            <p>
                确认密码：<input type="password" id="repassword" name="repassword">
            </p>
            <p>
                <input type="submit" value="注册">&nbsp;&nbsp;<input type="reset" value="重置">
            </p>
        </form>
    </div>
    <script src="js&jquery/jquery-1.12.4.js"></script>
    <script>
        $("#admin").on("blur",function(){
            $.get("Ruanjian/check_admin",{
                uadmin:this.value
            },function(data){
                if (data =="success"){
                    $("#admin_msg").html("管理员码可使用").css("color","green");
                }else{
                    $("#admin_msg").html("非法管理员码").css("color","red");
                }
            },"text");
        });
        $("#username").on("blur",function(){
            $.get("Ruanjian/check_name",{
                uname:this.value
            },function(data){
                if (data =="success"){
                    $("#name_msg").html("用户名可使用").css("color","green");
                }else{
                    $("#name_msg").html("用户名已存在或为空").css("color","red");
                }
            },"text");
        });
    </script>
</body>
</html>


