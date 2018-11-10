

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		    <meta name="viewport" content="width=320,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />

	</head>
	<script type="text/javascript" src="js/bootstrap.js" ></script>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<body>
		<header>
    <div class="container-fluid">
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
						session_start(); //用SESSION记录模式，并开启。
						//主页的检查用户登录与否，并显示欢迎信息
						if(@$_SESSION['user'] == ''){
							$a='denglu.php';
						echo "<a href='$a'>登录</a>";
						}else{
							$link = $_SESSION['user'];
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
    <section id="slider" style="padding-bottom: 50px;padding-top: 150px;">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-2">
            <div class="block">
              <h1>地球   环境   健康   绿色发展   &#38; <br><br> 和平   世界</h1>
              <p>我 们 是 地 球 一 份 子 ，我 们 热 爱 这 个 地 球 上 的 一 切 大 小 事 物</br>  并 且 守 护 着 这 个 世 界 上 最 重 要 的 基 石。</p>
            </div>
          </div>
        </div>
      </div>
    </section>
        <!-- Wrapper Start -->
    <section id="intro" >
      <div class="container" id="two">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>关于我们</h2>
                <p>绿色和平组织采用非暴力的创造性行动，为更环保，更和平的世界铺平道路，并面对威胁环境的系统。我们坚决独立，不接受公司或政府的资助。我们将社区联系起来并对我们服务的人员负责。</p>
              </div>
              <p><strong>个人责任和非暴力。</strong>我们基于良心采取行动。这意味着我们对自己的行为负责并承担个人责任。我们致力于和平; 绿色和平行动的每个人都接受过非暴力的培训。
              </br><strong>独立。</strong>我们不接受政府，公司或政党的资金。个人捐款以及基金会的赠款是我们资金的唯一来源。
              </br><strong>绿色和平组织没有永久的朋友或敌人。</strong>如果您的政府或公司愿意改变，我们将与您合作以实现您的目标。反过来，我们会回来的。重要的不是言语，而是行动。
              </br><strong>推广解决方案。</strong>我们指责手指是不够的; 我们为所有人开发，研究和推动实现绿色和平未来的具体步骤。</p>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-5 col-sm-12">
            <div class="block">
              <img src="img/tree.png" alt="Img">
            </div>
          </div><!-- .col-md-5 close -->
        </div>
      </div>
    </section>
        
         <section id="intro" style="padding-top: 0px;padding-bottom: 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>透明度和问责制</h2>
                <p>绿色和平组织积极努力确保其竞选活动，筹款和财务管理实践的透明度和公共责任。</p>
              </div>
              <p>绿色和平组织是Accountable Now的成员，是国际民间社会组织的平台。我们共同努力保持透明，响应利益相关者并专注于提供影响力。我们签署了十项全球商定的问责承诺，并寻求尊重人权，独立并在道德和专业方面开展工作。</p>
              <p>每年绿色和平组织根据“立即问责报告框架”向独立审查小组公开报告我们的经济，环境和社会绩效。在我们的问责报告中了解更多有关我们的工作以及对利益相关方的责任</p>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-6 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>Fundraising Principles</h2>
                <p>At Greenpeace we are honoured that our work is funded almost entirely by donations given to us by passionate individuals from all over the world who care about the planet and want to help us create change, and by grants from private foundations who share our values.</p>
              </div>
              <p>Our independence is vital for us to be effective in our campaigning work, which is why we have it as a core principle that guides all of our fundraising. We do not accept funding from governments, corporations, political parties or intergovernmental organisations.<br/>We also screen all large private donations to identify if there is anything about them which could compromise our independence, our integrity or deflect from our campaign priorities. If we find something then we will refuse or return the donation.</p>
            </div>
          </div><!-- .col-md-5 close -->
        </div>
      </div>
    </section>
    
    
    
     <!-- service Start -->
  <section id="service">
      <div class="container">
        <div class="row">
          <div class="section-title">
            <h2>我们的成就</h2>
            <p>到目前为止，我们已经援助了25164头动物，驻扎了5个自然保护区，并且有8个分部在森林砍伐严重的地区宣传我们的口号：爱护环境。</p>
          </div>
        </div>
        <div class="row ">
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <img width="210px" height="210" class="img-responsive" src="img/11 (1).png" />
              <h4>巴西 湿地</h4>
              <p>我们在这里防卫有人来偷猎湿地动物</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <img width="210px" height="210" class="img-responsive" src="img/11 (2).png" />
              <h4>非洲 阿巴斯保护区</h4>
              <p>这是我们援助的一只翅膀受伤的雄鹰(已康复)</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <img width="210px" height="210" class="img-responsive" src="img/11 (3).png" />
              <h4>非洲 莉莉尼特保护区</h4>
              <p>这是我们保护区的一头雄性大犀牛</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <img width="210px" height="210" class="img-responsive" src="img/11 (4).png" />
              <h4>菲律宾 阿加莎公园</h4>
              <p>在这里看护濒危物种</p>
            </div>
          </div>
          </div>
         
          	<div class="row ">
          	<div class="col-sm-6 col-md-3">
            <div class="service-item">
              <img width="210px" height="210" class="img-responsive" src="img/11 (5).png" />
              <h4>中国 南海</h4>
              <p>保护南海的生态环境</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <img width="210px" height="210" class="img-responsive" src="img/11 (6).png" />
              <h4>非洲 大草原</h4>
              <p>我们在这里巡逻防止偷猎者</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <img width="210px" height="210" class="img-responsive" src="img/11 (7).png" />
              <h4>俄罗斯 桑德里亚森林</h4>
              <p>这是我们援助的一个动物保护区</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="service-item">
              <img width="210px" height="210px" class="img-responsive" src="img/11 (8).png" />
              <h4>非洲 尼迦罗</h4>
              <p>这是我们援助的一只雌性河马</p>
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
                    <li><a href="#two">关于我们</a></li>
                    <li><a href="work.php">爱心捐款</a></li>
                    <li><a href="partner.html">合作伙伴</a></li>
                    <li><a href="denglu.php">登录 </a></li>
              </ul>
            </div>
            <p>Copyright &copy; 2018.Company 周宇航 All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
	</body>
</html>
