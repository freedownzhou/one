<?php
	$username = isset($_POST['number'])?$_POST['number']:"";
    $password = isset($_POST['passworld'])?$_POST['passworld']:"";
	if(!empty($username)&&!empty($password)) {
        //建立连接
        $conn = mysqli_connect('localhost','root','','myapp_sjk');
        //准备SQL语句
        $sql_select = "SELECT number,passworld FROM user WHERE number = '$username' AND passworld = '$password'";
        //执行SQL语句
        $ret = mysqli_query($conn,$sql_select);

        $row = mysqli_fetch_array($ret);

        //判断用户名或密码是否正确
        if($username==$row['number']&&$password==$row['passworld']) {
            
            //开启session
            session_start();
            //创建session
            $_SESSION['user']=$username;
            
            
            //跳转到loginsucc.php页面
            header("Location:index.php");
            //关闭数据库
            mysqli_close($conn);
        }else {
           echo "用户名或密码错误";
        }
        }


?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title></title>
		<script type="text/javascript" src="js/bootstrap.js" ></script>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		
	</head>


	<body>
		<header>
    	
	<div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- header Nav Start -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                  <img src="img/logo1.png" alt="Logo">
                </a>
              </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">首页</a></li>
                    <li><a href="index.php">关于我们</a></li>
                    <li><a href="work.php">爱心捐款</a></li>
                    <li><a href="partner.html">合作伙伴</a></li>
                    <li><a href="denglu.php">登录 </a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- header close -->
	<hr />
		<div class="container" id="app">
			<div class="row">
				<img src="img/tree.png"   class="col-sm-6" />
				<form action="denglu.php" method="POST" onsubmit="return Verify()"  role="form">
				<div class="col-sm-6">
					<h3>用户登录</h3>
					<div class="form-group">        		
           		     <input type="text" name="number" class="form-control col-sm-5" id="name" placeholder="用户名/手机号码" onblur="nameVerify()" required pattern="^1(3|4|5|7|8)\d{9}$">
          		      <div class="show control-label" style="font-weight: 300"></div>      		   
     		   		</div>
					<div class="form-group"  style="margin-top: 60px;">       			  
          			      <input type="password" name="passworld" class="form-control" id="pwd1" placeholder="密码" required pattern="^(?![0-9]+$)(?![a-zA-Z]+$)[a-zA-Z\d]{6,16}$">
          			      <div class="show2 control-label" style="font-weight: 300"></div>    			   
       				</div>	

					<div class="row">
						<div class="col-sm-6">
						</div>
						<!--按钮上的字体颜色为白色-->
							<a class="a1" href="注册.php" target="_self">没账号？立即注册</a>
						<button class="btn col-sm-3 btncolor sbbb" type="submit" onclick="Verify()">登录</button>
					</div>
					<br />	
					</form>		
				</div>
			</div>
		</div>
		<div class="xia">
			<p>关于Eagle Moon Music| About EM | 服务条款 | 用户服务协议 | 隐私政策 | 权利声明 | 广告服务 | 腾讯招聘 | 客服中心 | 网站导航 </p>
			<p>Copyright © 1998 - 2018 EM. All Rights Reserved. </p>
		</div>
		<script>
        function Verify() {
            var pwd = $("#pwd").val();
            var name = $("#name").val();
            if (name == "") {
                $('.show').html("用户名不能为空");
                $('.name').addClass("has-error");
                // return false;
            } else {
                $('.show').html("");
                $('.name').removeClass("has-error");
                $('.name').addClass("has-success");
            }

            if (pwd == "") {
                $('.show2').html("密码不能为空");
                $('.pwd').addClass("has-error");
                return false;
            } else {
                $('.show2').html("");
                $('.show2').removeClass("has-error");
            };
        }
    </script>
	</body>
</html>