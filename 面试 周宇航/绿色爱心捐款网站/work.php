<?php
	session_start(); //用SESSION记录模式，并开启。
	$link = @$_SESSION['user'];
	//建立连接
	$conn = mysqli_connect('localhost','root','','myapp_sjk');
	//准备SQL语句
	$sql = "SELECT money FROM user where number='$link'";
	//执行SQL语句
	$ret = mysqli_query($conn,$sql);
	if (!$ret) {
 printf("Error: %s\n", mysqli_error($conn));
 exit();
}
	$row = mysqli_fetch_array($ret);
	
	$money=isset($_POST['money'])?$_POST['money']:"";
	$newmoney=intval($row[0])+intval($money);
	mysqli_query($conn,"UPDATE user SET money='{$newmoney}'
	WHERE number='$link'");
	?>
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script type="text/javascript">
    	        function openDialog(){
            document.getElementById('light').style.display='block';
            document.getElementById('fade').style.display='block';
            var arr="<?php  ?>"
        }
        function closeDialog(){
            document.getElementById('light').style.display='none';
            document.getElementById('fade').style.display='none';
        }

    </script>
   
	<link rel="stylesheet" href="css/work.css" />
	<link rel="stylesheet" href="css/style.css" />
	
	<script src="js/jq.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	
	
  </head>
  <body>




    <!-- Header Start -->
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
                    <li><a href="#two">关于我们</a></li>
                    <li><a href="work.php">爱心捐款</a></li>
                    <li><a href="partner.html">合作伙伴</a></li>
                    <li><?php											
											//主页的检查用户登录与否，并显示欢迎信息
											if(@$_SESSION['user'] == ''){
											$a='denglu.php';
											echo "<a href='$a'>登录</a>";
											}else{
											echo "<a href='work.php'>".$link."</a>";
											}
											?></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header><!-- header close -->
    
        <!-- Slider Start -->
    <section id="global-header" style="padding-bottom: 50px;padding-top: 150px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1>这 是 我 们 的 最 新 主 要 项目。</h1>
                        <p>不 要 只 听 我 们 的 话 ，请 和 我 们 一 起 来 爱 护 世 界 。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Portfolio Start -->
    <section id="portfolio-work">
        <div class="container">
            <div class="row">
              <div class="col-md-7 col-xs-6 left">
              	
              	
              	<div id="myCarousel" class="carousel slide">
	<!-- 轮播（Carousel）指标 -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>   
	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="img/7.jpg" alt="First slide">
		</div>
		<div class="item">
			<img src="img/13.jpg" alt="Second slide">
		</div>
		<div class="item">
			<img src="img/14.png" alt="Third slide">
		</div>
	</div>
	<!-- 轮播（Carousel）导航 -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"><img src="img/arrow3.png" ></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="margin-right: 30px;">
			<img src="img/arrow4.png" ></span>
		<span class="sr-only">Next</span>
	</a>
</div>
              	
              	
              	
               <!-- <img src="img/7.jpg" class="img-responsive" />-->
              </div>
              <div class="col-md-5 col-xs-6 left" style="background-color: ;margin-top: 70px;">
        			<div style="margin: 0 auto; width: 130px;">       
                <?php
				//用SESSION记录模式，并开启。
				//主页的检查用户登录与否，并显示欢迎信息
				if(@$_SESSION['user'] == ''){
				$a='denglu.php';
				$b='注册.php';
				echo "<a href='$a'>登录</a>/<a href='$b'>注册</a>";
											}else{
												$link = $_SESSION['user'];
												echo "<h4>欢迎您：</h4><a href='work.php'>".$link."</a>";
												echo "&nbsp&nbsp&nbsp<a href='logout.php'>注销</a>";
												}
								?>
                </div>
                <h4 class="top">我的爱心金额：
                <?php
                	if($newmoney == ''){										
					echo "<h4>您当前暂无捐款</h4>";
					}else{							
					echo $newmoney;
											}
                	?>
                </h4>
                <h6>您的爱心金额我们会有专业的人士打理，争取让您的爱心得到最大化的实现价值。安排妥当后我们会将会把您的具体金额安排及其用处以短信的形式发给您。多谢您的爱心支持，我们将一直为世界的绿化环保所奋斗！</h6>
              	<div style="margin: 0 auto; width: 150px;">
              	<button class=" btn-default btn-call-to-action" onclick="openDialog()" >立即捐款</button>
              	
              	<!--弹出盒子-->
              	 <div id="light" class="white_content">
              	 	<?php
              	 		
              	 		?>
              	 	<a href = "javascript:void(0)" onclick = "closeDialog()">
         				 	<img src="img/close.png" class="img-responsive" width="20px" height="20px" style="float: right;margin-left: 10px;"/>
      					  </a>
      					  <form action="work.php" method="POST" role="form">
            <table>
                <tr>
                    <td><input type="number" name="money" id="money" class="form-control col-sm-5"placeholder="爱心金额" onblur="nameVerify()" required min="1"></td>    
                </tr>
                <tr>
                    <td class="center"><input type="submit" value="确定捐款" onclick="return alter()"/></td>
                </tr>
              
            </table> 
            <script>
            	function alter() { 
            		
 								alert("捐款成功");
 								
 								 }
            </script>
            		</form>
           
        			</div> 
        <!--弹出盒子结束-->
              	</div>
              </div>
            </div>
        </div>
    </section>

    <!-- Clients Logo Section Start -->
		<section id="intro" >
      <div class="container" id="two">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>筹款原则</h2>
              </div>
              <p>在绿色和平组织，我们感到荣幸的是，我们的工作几乎完全由来自世界各地的关心地球并希望帮助我们创造变革的热情的个人捐赠给我们，以及来自分享我们价值观的私人基金会的资助。</p>
              <p>我们的独立性对于我们在竞选活动中发挥作用至关重要，这就是为什么我们将其作为指导我们所有筹款活动的核心原则。我们不接受政府，公司，政党或政府间组织的资助。</p>
              <p>我们还筛选所有大型私人捐款，以确定是否有任何可能影响我们的独立性，我们的诚信或偏离我们的竞选优先事项的内容。如果我们找到了什么，那么我们将拒绝或退还捐赠。</p>
              <p>给予我们捐款可以让人们与我们的活动家和活动家站在一起，帮助实现急需的变革。因此，我们非常重要的是，我们尊重和负责任地对待绿色和平组织的支持者礼物，利用它们在我们的活动中以及在我们投资更多筹款时产生最大的影响。</p>
              <p>因此，我们将始终寻求平衡成本与结果，以便为支持者实现最大价值，并自豪地在每个绿色和平办公室的年度账目中明确详细说明我们的所有筹款成本。这也是我们用于筹款的所有方法不仅符合我们的内部原则，而且符合我们在其中运营的每个国家的专业行为准则和公认的良好做法的原因。</p>
            	<p>如果支持者对我们工作的某个特定领域特别热衷并要求我们使用他们的捐赠来实现这一特定目标，我们将尽力满足他们的要求。</p>
            	<p>有时我们会要求支持者和公众捐赠给特定的项目或活动。当我们相信捐助者会期望他们的资金将以这种方式分配时，我们将使用公认的会计方法来跟踪捐款，我们将报告筹集的资金和支出情况。</p>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-5 col-sm-12">
            <div class="block" style="margin-top: 80px;">
              <img src="img/8.jpg" alt="Img">
            </div>
          </div><!-- .col-md-5 close -->
        </div>
      </div>
    </section>
  
<!-- Call to action Start -->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block">
              <h2>我 们 只 做 最 公 正 的 慈 善。</h2>
              <p>阅读更多关于我们的工作和我们的绿色理念。自己判断我们为地球绿化所取得的成就和成果，可以的话请贡献出您的爱心和我们一起来努力！</p>
              <a class="btn btn-default btn-call-to-action" href="#" >告 诉 我 们 你 的 故 事</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer Start -->
   <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-manu">
              <ul>
                <li><a href="index.php">首页</a></li>
                    <li><a href="index.php">关于我们</a></li>
                    <li><a href="work.php">爱心捐款</a></li>
                    <li><a href="partner.html">合作伙伴</a></li>
                   
              </ul>
            </div>
            <p>Copyright &copy; 2018.Company 周宇航 All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>




         <span class="glyphicon glyphicon-remove-circle"></span>
         <span class="glyphicon glyphicon-user"></span>
    </body>
</html>
