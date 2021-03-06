<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>美食DIY</title>    
  <link href="/html5-xidian/Public/home/css/DIY.css" charset="UTF-8" rel="stylesheet" type="text/css" media="screen">
   <link rel="stylesheet" href="/html5-xidian/Public/home/css/bootstrap.min.css">
    <script src="/html5-xidian/Public/home/js/jquery.js"></script>    
    <script src="/html5-xidian/Public/home/js/bootstrap.min.js"></script>
    <script src="/html5-xidian/Public/home/js/homeEdit.js"></script>
    <style type="text/css">
      *{
        font-family: "微软雅黑";
      }
      body{
      	background-image: url(/html5-xidian/Public/home/images/bg.png);
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
          <li>
            <a href="/html5-xidian/home.php/Home/login/register.html" style="padding: 15px 10px 15px 0px;">注册</a>
          </li>
          <li>
            <a href="/html5-xidian/home.php/Home/login/login.html" style="padding: 15px 50px 15px 0px;">登录</a>
          </li>
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
              <ul class="dropdown-menu" style="text-align: right;min-width: 100px;">
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
               <a href="/html5-xidian/home.php/Home/public/public.html" class="dropdown-toggle">美食DIY</a>
              <ul class="dropdown-menu" style="text-align: right;min-width: 100px;">
         
                <li>
                   <a href="/html5-xidian/home.php/Home/public/public.html">发布美食</a>
                </li>

              </ul>
            </li>
           <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/shop/list.html" class="dropdown-toggle">食材商城</a>
              <ul class="dropdown-menu" style="text-align: right;min-width: 100px;">
                <li>
                   <a href="/html5-xidian/home.php/Home/shop/list.html">用具</a>
                </li>
                <li>
                   <a href="/html5-xidian/home.php/Home/shop/list.html">食材</a>
                </li>
            
              </ul>
            </li>
          <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/users/index.html" class="dropdown-toggle">个人中心</a>
              <ul class="dropdown-menu" style="text-align: right;min-width: 100px;">
                <li>
                   <a href="/html5-xidian/home.php/Home/users/reset_information.html">修改信息</a>
                </li>
              
                <li>
                   <a href="/html5-xidian/home.php/Home/users/reset_password.html">修改密码</a>
                </li>
                 <li>
                   <a href="/html5-xidian/home.php/Home/cart/cart.html">我的购物车</a>
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
    <div class="row-fluid" style="background-image: url(/html5-xidian/Public/home/images/bg.png);">
        <div class="span4">
            <ul class="breadcrumb">
                <li>
                    <a href="#">首页</a> <span class="divider"></span>
                </li>
                <li class="active">
                    美食DIY
                </li>
            </ul>
        </div>
</div>
</div>
<div class="row-fluid">
    <div class="col-md-12" style="background-image: url(/html5-xidian/Public/home/images/DIY.png);padding-left:500px;">
        <h4>添加美食</h4>
                    
        <!--shop-->
        <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
        	<div class="form-group">
                <label for="inputFoodClassify" class="col-md-3 control-label" style="width: 120px;">选择商品类型：</label>
                    <div class="col-md-8">
                        <label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="fashi" name="food" />法式菜肴</label>
                        <label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="yishi" name="food" />意式菜肴</label>
                        <label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="meishi" name="food" />美式菜肴</label>
                        <label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="yingshi" name="food" />英式菜肴</label>
                        <label for="" class="shopRadio"><input type="radio" id="inputFoodClassify" value="eshi" name="food" />俄式菜肴</label>
                    </div>
            </div>
            <div class="form-group">
                <label for="inputFoodTag" class="col-md-3 control-label">标签：</label>
                    <div class="col-md-3">
                        <select class="form-control" id="inputFoodTag">
                            <option>英式</option>
                            <option>甜品</option>
                            <option>面包</option>
                        </select>
                    </div>
            </div>
            <div class="form-group">
                <label for="inputFoodName" class="col-sm-2 control-label">名称：</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="inputFoodName" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputFoodMeta" class="col-sm-2 control-label">材料：</label>
                    <div class="col-sm-3">
                        <textarea class="form-control" id="inputFoodMeta" rows="3"></textarea>
                    </div>
            </div>
            <div class="form-group">
                <label for="inputFoodStep" class="col-sm-2 control-label">步骤：</label>
                <div class="col-sm-3">
                    <textarea class="form-control" id="inputFoodStep" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputFoodImg" class="col-sm-2 control-label">美食图片：</label>
                <div class="col-sm-4">
                    <input type="file" id="inputFoodImg" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    <a href="/html5-xidian/home.php/Home/users/index.html"><input type="button" class="btn" value="发布"></input></a>
                </div>
            </div>
        </form>                     
      </div>
    </div>
    <div class="footer" style="background-image: url(/html5-xidian/Public/home/images/bg.png);">
      <div class="row clearfix">
        <div class="col-md-6 column">
        </div>
        <div class="col-md-3 column">
        </div>
        <div class="col-md-3 column">
        </div>
      </div>
      <div class="row clearfix" style="padding: 30px 30px 10px 30px;">
        <div class="col-md-3 column" style="padding: 0px 10px 0px 70px;border-right: 1px solid #C0C0C0;">
          <a href="#"><img src="/html5-xidian/Public/home/images/qrc.jpg"></a>
        </div>
        <div class="col-md-5 column" style="padding: 0px 50px;line-height: 260%;">
        </br>
          <p>爱尚美食，西餐美食菜谱分享网站。850000道菜谱，625000条美食日记，7500000位美食达人，每天都有新分享，拥有最实用的美食、菜谱、食谱的做法，同是还有聚餐百万美食爱好者的美食家社区，欢迎加入！</p>
        </div>
        <div class="col-md-4 column" style="padding: 10px 20px;">
        </br>
          <p style="line-height: 260%;">联系方式：xxxx</br>邮箱：xxxx</br>地址：xxxx</br></p>
        </div>
      </div>

      <div style="border-top: 1px solid #C0C0C0;border-bottom: 1px solid #C0C0C0;text-align: center;">
        <a>Home</a> | <a>About</a> | <a>Service</a> | <a>Products</a> | <a>Contact</a>
      </div>
    </div>
  </div>
<!--<div class="ajifenshow"><a class="yshfootbg" href="/mall/contact" target="_blank"></a></div> -->
</body>
</html>