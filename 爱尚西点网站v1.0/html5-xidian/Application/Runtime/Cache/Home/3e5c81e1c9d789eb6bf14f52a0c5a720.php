<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>商城内容页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta charset="utf-8">
    <link rel="stylesheet" href="/html5-xidian/Public/home/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen and (max-width:1024px)" href="/html5-xidian/Public/home/css/medium.css" type="text/css" />
    <link rel="stylesheet" media="screen and (min-width:1025px)" href="/html5-xidian/Public/home/css/large.css" type="text/css" />
    <script src="/html5-xidian/Public/home/js/jquery.js"></script>    
    <script src="/html5-xidian/Public/home/js/bootstrap.min.js"></script>
    <script src="/html5-xidian/Public/home/js/homeEdit.js"></script>
    <style type="text/css">
      .shopping_mall{
        height:26px;
        background:black;
        margin-top:30px;
      }
      body{
      	background-image:url(/html5-xidian/Public/home/images/bg.png);
      }
    </style>
  </head>
  <body>
  <div class="header" style="height: 50px;">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color: white;">
      <div class="navbar-header">
         <a href="#"><img src="/html5-xidian/Public/home/images/logo1.png"></a>
      </div>
      
      <div class="collapse navbar-collapse" >
        <ul class="nav navbar-nav navbar-left" style="position: absolute;left: 40px;top: -10px;">
          <li>
             <a href="#"><img src="/html5-xidian/Public/home/images/logo2.png"></a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right" >
          <?php if(!empty($username)): ?><li>
                <a href="/html5-xidian/home.php/Home/login/index.html" style="padding: 15px 10px 15px 0px;" id="isLogin">欢迎：<?php echo ($username); ?></a>
              </li>
              <li>
                <a href="/html5-xidian/home.php/Home/login/quit" style="padding: 15px 50px 15px 0px;">退出</a>
              </li>
            <?php else: ?> 
              <li>
                <a href="/html5-xidian/home.php/Home/login/index.html" style="padding: 15px 10px 15px 0px;" id="isLogin">登录</a>
              </li>
              <li>
                <a href="/html5-xidian/home.php/Home/login/register.html" style="padding: 15px 50px 15px 0px;">注册</a>
              </li><?php endif; ?>
        </ul>
      </div>
    </nav>
  </div>

  <!--背景-->
  <div style="background-image: url(/html5-xidian/Public/home/images/bg.png);">
    <!--内容-->
    <div class="content">
    <!--导航栏-->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-image: url(/html5-xidian/Public/home/images/bg.png);border-bottom: 1px solid #C0C0C0;">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right" style="font-weight: bold;color: black;">
            <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/index/index.html">首页</a>
            </li>
           <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/food/french_cate.html" class="dropdown-toggle">美食鉴赏</a>
              <ul class="dropdown-menu" style="text-align: center;min-width: 86px;">
                <li>
                   <a href="/html5-xidian/home.php/Home/food/french_cate.html">法式菜肴</a>
                </li>
                <li>
                   <a href="/html5-xidian/home.php/Home/food/uk_cate.html">英式菜肴</a>
                </li>
                <li>
                   <a href="/html5-xidian/home.php/Home/food/us_cate.html">美式菜肴</a>
                </li>
               
                <li>
                   <a href="/html5-xidian/home.php/Home/food/italy_cate.html">意式菜肴</a>
                </li>
                 <li>
                   <a href="/html5-xidian/home.php/Home/food/russian_cate.html">俄式菜肴</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/publish/index.html" class="dropdown-toggle">美食DIY</a>
              <ul class="dropdown-menu" style="text-align: center;min-width: 82.68px;">
         
                <li>
                   <a href="/html5-xidian/home.php/Home/publish/index.html">发布美食</a>
                </li>

              </ul>
            </li>
           <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/shop/index.html" class="dropdown-toggle">食材商城</a>
              <ul class="dropdown-menu" style="text-align: center;min-width: 86px;">
                <li>
                   <a href="/html5-xidian/home.php/Home/shop/index.html">用具</a>
                </li>
                <li>
                   <a href="/html5-xidian/home.php/Home/shop/index.html">食材</a>
                </li>
            
              </ul>
            </li>
          <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/users/index.html" class="dropdown-toggle">个人中心</a>
              <ul class="dropdown-menu" style="text-align: center;min-width: 86px;">
                <li>
                   <a href="/html5-xidian/home.php/Home/users/reset_information.html">修改信息</a>
                </li>
              
                <li>
                   <a href="/html5-xidian/home.php/Home/users/reset_password.html">修改密码</a>
                </li>
                 <li>
                   <a href="/html5-xidian/home.php/Home/cart/index.html">购物车</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle">关于我们</a>
            </li>
            <li>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" />
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
              </form>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="row-fluid">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li>
            <a href="/html5-xidian/home.php/Home/index/index.html">首页</a> 
          </li>
          <li class="active">
            食材商城
          </li>
        </ul>
      </div>
    </div>
 </div>
 <div style="padding-top:80px">
 	<div class="container" >
  	<div class="row clearfix">
    	<div class="col-md-12 column">
      		<div class="row clearfix">
        		<div class="col-md-6 column">
          		<img src="/html5-xidian/Public/<?php echo ($content["img"]); ?>" id="shopping_pic" />
        		</div>
        		<div class="col-md-6 column" style="padding-top: 30px;">
           		<font style="font-size:20px;font-weight:bold;"><?php echo ($content["name"]); ?></font>
          		<div class="form-group" style="padding-top:20px">
                <label >相关信息：</label></br>
                  <span><?php echo ($content["content"]); ?></span>
                </div>
          			<div class="form-group" style="padding-top:20px;">
                  <label>价格：</label>
                  <span>￥<?php echo ($content["price"]); ?></span> 
                  &nbsp;
                  <label>数量：</label>
                  <input id="min" name="" type="button" value="-" />  
                  <input id="text_box" name="" type="text" value="1" style="width:30px;text-align: center;"/>  
                  <input id="add" name="" type="button" value="+" />  
  
                    <script>
      								$(document).ready(function(){
      								//获得文本框对象
         									var t = $("#text_box");
      									//初始化数量为1,并失效减
      									$('#min').attr('disabled',true);
          								//数量增加操作
         			 							$("#add").click(function(){
              									t.val(parseInt(t.val())+1)
              									if (parseInt(t.val())!=1){
                  									$('#min').attr('disabled',false);
              									}
            
          								}) 
          								//数量减少操作
          								$("#min").click(function(){
              								t.val(parseInt(t.val())-1);
              								if (parseInt(t.val())==1){
                  								$('#min').attr('disabled',true);
              								}
            
         	 								})
         
      								});
      							</script>  
                </div>                                
        			  <div class="row clearfix">
          		    <div class="col-md-6 column">
             		     <button type="button" class="btn btn-default" id="cart" name="<?php echo ($username); ?>" value="<?php echo ($content["id"]); ?>">加入购物车</button>
          		    </div>
        		  </div>
        	  </div>
      	  </div>
   		 	</div>
      			<div class="row clearfix">
        			<div class="col-md-12 column">
              			<div class="shopping_mall">
              				<span style="font-size:13px;font-weight:bold;color:white;position: relative;top: 3px;left: 5px;">食品商城</span>
              			</div>
        			</div>
      			</div>
      			<div class="row clearfix">
      			<div class="col-md-12 column">
              <div id="myCarousel" class="carousel slide pad_010 b_k" data-ride="carousel">
          		  <!-- 轮播（Carousel）指标 -->
          		  <ol class="carousel-indicators">
            	  	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              		<li data-target="#myCarousel" data-slide-to="1"></li>
              		<li data-target="#myCarousel" data-slide-to="2"></li>
          		  </ol>   
          		  <!-- 轮播（Carousel）项目 -->
          		  <div class="carousel-inner bor_btm">
            	  	<div class="item active" >
                		<div class="pic" style="padding-left:18px">
                    		<img src="/html5-xidian/Public/home/images/Shopping_content_1.jpg" >
                    		<img src="/html5-xidian/Public/home/images/Shopping_content_2.jpg" >
                    		<img src="/html5-xidian/Public/home/images/Shopping_content_3.jpg" >
                    		<img src="/html5-xidian/Public/home/images/Shopping_content_4.jpg" >
                		</div>
            		</div>
            		<div class="item">
                		<div class="pic" style="padding-left:18px">
                    		<img src="/html5-xidian/Public/home/images/Shopping_content_1.jpg" >
                    		<img src="/html5-xidian/Public/home/images/Shopping_content_2.jpg" >
                    		<img src="/html5-xidian/Public/home/images/Shopping_content_3.jpg" >
                    		<img src="/html5-xidian/Public/home/images/Shopping_content_4.jpg" >
                		</div>
            		</div>
            		<div class="item">
                		<div class="pic" style="padding-left:18px">
                    		<img src="/html5-xidian/Public/home/images/Shopping_content_1.jpg" >
                    		<img src="/html5-xidian/Public/home/images/Shopping_content_2.jpg" >
                    		<img src="/html5-xidian/Public/home/images/Shopping_content_3.jpg" >
                    		<img src="/html5-xidian/Public/home/images/Shopping_content_4.jpg" >
                		</div>
            		</div>
            	</div>
              <!-- 轮播（Carousel）导航 -->
              <a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" style="overflow: hidden;"></span></a>
              <a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right" style="overflow: hidden;"></span></a>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="footer">
      <div class="row clearfix" id="footer_padding">
        <div class="col-md-3 column" id="qrc">
          <a href="#"><img src="/html5-xidian/Public/home/images/qrc.jpg"></a>
        </div>
        <div class="col-md-5 column" id="footer_introduce">
          <p>爱尚美食，西餐美食菜谱分享网站。每天都有新分享，拥有最实用的美食、菜谱、食谱的做法，同是还有聚餐百万美食爱好者的美食家社区，欢迎加入！</p>
        </div>
        <div class="col-md-4 column" id="footer_contact">
          <p>联系方式：15800000000</br>邮箱：aishangxidian@163.com</br>地址：河北省石家庄市裕华区南二环东路20号</br></p>
        </div>
      </div>
    </div>
  </div>
 </body>
</html>