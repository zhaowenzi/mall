<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Author" contect="http://www.webqin.net">
    <title>付款</title>
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
     <header>
      <a href="javascript:history.back(-1)" class="back-off fl"><span class="glyphicon glyphicon-menu-left"></span></a>
      <div class="head-mid">
       <h1>购物车</h1>
      </div>
     </header>
     <div class="head-top">
      <img src="images/面膜.jpg" />
     </div><!--head-top/-->
     <div class="dingdanlist" >
      <table>
       <tr>
        <td class="dingimg" width="75%" colspan="2" onClick="window.location.href='add-address.html'">收货地址</td>
        <td align="right"><img src="images/jian-new.png" /></td>
       </tr>
       <tr><td colspan="3" style="height:10px; background:#efefef;padding:0;"></td></tr>
       <tr>
        <td class="dingimg" width="75%" colspan="2">支付方式</td>
        <td align="right"><span class="hui">银币支付</span></td>
       </tr>
       <tr><td colspan="3" style="height:10px; background:#efefef;padding:0;"></td></tr>
       <tr><td colspan="3" style="height:10px; background:#fff;padding:0;"></td></tr>
       <tr>
        <td class="dingimg" width="75%" colspan="3">商品清单</td>
       </tr>
       
       <tr>
        <td class="dingimg" width="15%"><img src="images/面膜.jpg" /></td>
        <td width="50%">
         <h3>面膜1</h3>
         <time>下单时间：2018-01-11  13:51</time>
        </td>
        <td align="right"><span class="qingdan">X 1</span></td>
       </tr>
       <tr>
        <th colspan="3"><strong class="orange">¥38.80</strong></th>
       </tr>
       <tr>
        <td class="dingimg" width="15%"><img src="images/面膜.jpg" /></td>
        <td width="50%">
         <h3>面膜2</h3>
         <time>下单时间：2018-01-11  13:51</time>
        </td>
        <td align="right"><span class="qingdan">X 1</span></td>
       </tr>
       <tr>
        <th colspan="3"><strong class="orange">¥38.80</strong></th>
       </tr>
       
       <tr>
        <td class="dingimg" width="75%" colspan="2">商品金额</td>
        <td align="right"><strong class="orange">¥77.60</strong></td>
       </tr>
       <tr>
        <td class="dingimg" width="75%" colspan="2">折扣优惠</td>
        <td align="right"><strong class="green">¥0.00</strong></td>
       </tr>
       <tr>
        <td class="dingimg" width="75%" colspan="2">抵扣金额</td>
        <td align="right"><strong class="green">¥0.00</strong></td>
       </tr>
       <tr>
        <td class="dingimg" width="75%" colspan="2">运费</td>
        <td align="right"><strong class="orange">¥00.80</strong></td>
       </tr>
      </table>
     </div><!--dingdanlist/-->
     
     
    </div><!--content/-->
    
    <div class="height1"></div>
    <div class="gwcpiao">
     <table>
      <tr>
       <th width="10%"><a href="javascript:history.back(-1)"><span class="glyphicon glyphicon-menu-left"></span></a></th>
       <td width="50%">总计：<strong class="orange">¥77.60</strong></td>
       <td width="40%"><a href="success.html" class="jiesuan">提交订单</a></td>
      </tr>
     </table>
    </div><!--gwcpiao/-->
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