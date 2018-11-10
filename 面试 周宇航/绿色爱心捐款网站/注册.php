<?php

$conn = mysqli_connect("localhost","root",'','myapp_sjk');
if (isset($_POST['number'])) {

    $number = mysqli_real_escape_string($conn,$_POST['number']);
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $passworld = mysqli_real_escape_string($conn,$_POST['passworld']);
    $passworlds = mysqli_real_escape_string($conn,$_POST['passworlds']);

    $query = "INSERT INTO user(number,id,passworld,passworlds) VALUES($number,$id,'".$passworld."','".$passworlds."')";
    mysqli_query($conn,"set name utf8");
    if(mysqli_query($conn,$query)){
        echo '用户添加成功!';
        header("location:denglu.php");
    }else{
        echo "用户添加失败!".mysqli_error($conn); 
    }
} 
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<script type="text/javascript" src="js/bootstrap.js" ></script>		
		<link rel="stylesheet" href="css/bootstrap.min.css" />		
		<link rel="stylesheet" href="css/style.css" />
		<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
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
    </header><!-- header close -->
	<hr />
	
	<div class="container" id="app">
			<div class="row">
				<img src="img/tree.png"   class="col-sm-6" />
				<form action="注册.php" method="POST" onsubmit="return pwdVerify()"  role="form">
				<div class="col-sm-6">
					<h3>用户注册</h3>
				<div class="form-group name">        		
           		     <input type="text" class="form-control col-sm-5" id="name" placeholder="手机号码" onblur="nameVerify()" required pattern="^1(3|4|5|7|8)\d{9}$" name="number">
          		      <div class="show3 control-label" style="font-weight: 300"></div>      		   
     		   </div>
     		   
				<div class="form-group id" style="margin-top: 60px;">
          			  
           			     <input type="id" class="form-control" id="id" placeholder="身份证号码" required onblur="idVerify()" pattern="^[1-9]{1}[0-9]{14}$|^[1-9]{1}[0-9]{16}([0-9])$" name="id">
          			      <div class="show4 control-label" style="font-weight: 300"></div>
         			   
        		</div>
        		<div class="form-group pwd1 ">       			  
          			      <input type="password" class="form-control" id="pwd1" placeholder="密码" required pattern="^(?![0-9]+$)(?![a-zA-Z]+$)[a-zA-Z\d]{6,16}$" name="passworld">
          			      <div class="show2 control-label" style="font-weight: 300"></div>    			   
       			</div>	
       			<div class="form-group pwd2">
           			 
             			   <input type="password" class="form-control" id="pwd2" placeholder="确定密码" onkeyup="pwdVerify()" required pattern="^(?![0-9]+$)(?![a-zA-Z]+$)[a-zA-Z\d]{6,16}$" name="passworlds">
            			    <div class="show control-label" style="font-weight: 300"></div>
            			
        		</div>
					<div class="row">						
						<div class="col-sm-10"><br />
							<a style="color:#f5ad91;margin-top: 10px;" href="denglu.php" target="_self">有账号，立即登录</a>
						</div>
						<!--按钮上的字体颜色为白色-->
						<button onclick="pwdVerify()" class="btn col-sm-2 sbbb btncolor" type="submit" >注册</button>
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
		<script type="text/javascript">
		   function pwdVerify() {
        var pwd1 = $("#pwd1").val();
        var pwd2 = $("#pwd2").val();

        if (pwd1 == pwd2) {
            $('.show').html("");
            $('.pwd1').removeClass("has-error");
            $('.pwd2').removeClass("has-error");
            $('.pwd1').addClass("has-success");
            $('.pwd2').addClass("has-success");
        } else {
            $('.show').html("二次密码不相同");
            $('.pwd2').addClass("has-error");
            return false;
        }
        if (pwd1 == "" && pwd2 == "") {
            $('.show2').html("密码不能为空");
            $('.show').html("密码不能为空");
            $('.pwd1').addClass("has-error");
            $('.pwd2').addClass("has-error");
            return false;
        } else {
            $('.show2').html("");
            $('.show').html("");
            $('.show2').removeClass("has-error");
        }
    }

    function nameVerify() {
        var name = $("#name").val();
        if (name == "") {
            $('.show3').html("用户名不能为空");
            $('.name').addClass("has-error");
            return false;
        } else {
            $('.show3').html("");
            $('.name').removeClass("has-error");
            $('.name').addClass("has-success");
        }
    }

    function idVerify() {
        var name = $("#id").val();
        if (name == "") {
            $('.show4').html("邮箱不能为空");
            $('.id').addClass("has-error");
            return false;
        } else {
            $('.show4').html("");
            $('.id').removeClass("has-error");
            $('.id').addClass("has-success");
        }
    }
		</script>

	</body>
</html>