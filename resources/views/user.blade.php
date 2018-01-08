<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Author" contect="http://www.webqin.net">
    <title>用户</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/response.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="maincont">
     <div class="userName">
      <dl class="names">
       <dt><img src="images/user01.png" /></dt>
       <dd>
        <h3>昵称</h3>
       </dd>
       <div class="clearfix"></div>
      </dl>
      <div class="shouyi">
       <dl>
        <dt>我的金币</dt>
        <dd>0.00个</dd>
       </dl>
       <dl>
        <dt>我的银币</dt>
        <dd>0.00个</dd>
       </dl>
       <dl>
        <dt>我的铜币</dt>
        <dd>0.00个</dd>
       </dl>
       <div class="clearfix"></div>
      </div><!--shouyi/-->
     </div><!--userName/-->
     
     <ul class="userNav">
      <li ><span class="glyphicon glyphicon-list-alt" ></span><a href="order.html">我的订单</a></li>
      <li><span class="glyphicon glyphicon-map-marker"></span><a href="add-address.html">收货地址管理</a></li>
      <li><span class="glyphicon glyphicon-qrcode"></span><a href="#">生成二维码</a></li>
      <li><span class="glyphicon glyphicon-earphone"></span><p>手机：1234567890</p></li>
      <li><span class="glyphicon glyphicon-phone"></span><p>微信：9876543210</p></li>
      <li><span class="glyphicon glyphicon-envelope"></span><p>邮箱：test@163.com</p></li>
      <li><span class="glyphicon glyphicon-cog"></span><a href="modify.html">修改密码</a></li>
   </ul><!--userNav/-->
   <p style="padding-top:40px;"></p>
<!--   <div class="lrSub">  
      <input type=button  class="erweima"  value="保存二维码" />
   </div>-->
<!--   <div class="lrSub">
    <a href="xiao.html">返利中心</a>
   </div> 

   <div class="lrSub">
    <a href="modify.html">修改密码</a>
   </div>
   -->
     <div class="lrSub">
       <a href="login.html">退出登录</a>
     </div> 
     
     <div class="height1"></div>
     <div class="footNav">
      <dl>
       <a href="index(logined).html">
        <dt><span class="glyphicon glyphicon-home"></span></dt>
        <dd>首页</dd>
       </a>
      </dl>
      <dl>
       <a href="car.html">
        <dt><span class="glyphicon glyphicon-shopping-cart"></span></dt>
        <dd>购物车 </dd>
       </a>
      </dl>
      <dl class="ftnavCur">
       <a href="user.html">
        <dt><span class="glyphicon glyphicon-user"></span></dt>
        <dd>我的</dd>
       </a>
      </dl>
      <div class="clearfix"></div>
     </div><!--footNav/-->
    </div><!--maincont-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/style.js"></script>
    <!--jq加减-->
    <script src="js/jquery.spinner.js"></script>
   <script>
	$('.spinnerExample').spinner({});
   </script>
  </body>
</html>