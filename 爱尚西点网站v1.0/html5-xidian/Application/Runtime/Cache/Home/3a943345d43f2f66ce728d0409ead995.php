<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>修改密码</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta charset="utf-8">
    <link rel="stylesheet" href="/html5-xidian/Public/home/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen and (max-width:1024px)" href="/html5-xidian/Public/home/css/medium.css" type="text/css" />
    <link rel="stylesheet" media="screen and (min-width:1025px)" href="/html5-xidian/Public/home/css/large.css" type="text/css" />
    <link rel="stylesheet" href="/html5-xidian/Public/home/css/userEdit.css">
    <link rel="stylesheet" href="/html5-xidian/Public/home/css/awesomplete.css" type="text/css" />
    <script src="/html5-xidian/Public/home/js/jquery.js"></script>    
    <script src="/html5-xidian/Public/home/js/bootstrap.min.js"></script>
    <script src="/html5-xidian/Public/home/js/homeEdit.js"></script>
  </head>
  <body>
  <!--页头-->
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
              <form class="navbar-form navbar-left" role="search" action="<?php echo U('Home/index/content');?>" method="post">
                <input class="awesomplete" placeholder="搜索想要的美食..." id="searchFood" name="data" style="position: relative;top: 3px;" />             
                <button type="submit" class="btn btn-default btn-sm" style="position: relative;top: 1.5px;">搜索</button>
                <ul class="mylist">
                </ul> 
              </form>
            </li>
          </ul>
        </div>
      </nav>

      <!---->
      <div style="padding: 0px 36px;">
        <img src="/html5-xidian/Public/home/images/personal_banner.jpg">
      </div>
      <div id="avater">
        <img src="/html5-xidian/Public/home/images/avater.jpeg" class="img-circle" />
        <b style="position: relative;top: 10px;left: 5px;">这里放昵称</b>
      </div>
      <!---->
      <div class="row clearfix" style="padding: 40px 0px;">
        <div class="col-md-3 column">
           <ul style="list-style-type: none;text-align: center;font-size: 17px;">
             <li style="padding: 10px;background-color: #C0C0C0;">个人中心</li>
             <li style="padding: 10px;background-color: white;"><a href="/html5-xidian/home.php/Home/users/index.html">我的首页</a></li>
             <li style="padding: 10px;background-color: white;"><a href="/html5-xidian/home.php/Home/users/reset_information.html">修改信息</a></li>
             <li style="padding: 10px;background-color: white;"><a href="/html5-xidian/home.php/Home/users/reset_password.html">修改密码</a></li>
             <li style="padding: 10px;background-color: white;"><a href="/html5-xidian/home.php/Home/cart/index.html">我的购物车</a></li>
           </ul>
        </div>
        <div class="col-md-9 column">
          <div style="background-color: white;border-radius: 1px;margin: 0px 45px 0px 20px;">
            <div style="padding: 15px 20px;">
              <label style="font-size: 16px;">修改密码</label>
            </div>
            <form action="<?php echo U('Home/users/reset_password');?>" method="post" class="form-horizontal" role="form" enctype="multipart/form-data" style="padding: 0px 50px 0px 20px;" action="">
            <div class="form-group">
               <label class="col-sm-2 control-label">原密码:</label>
              <div class="col-sm-3">
                <input type="password" class="form-control" placeholder="请输入原密码" name="password"/>
              </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label">新密码:</label>
              <div class="col-sm-3">
                <input type="password" class="form-control" placeholder="请输入新密码" name="newPwd"/>
              </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label">确认密码:</label>
              <div class="col-sm-3">
                <input type="password" class="form-control" placeholder="确认新密码" name="newPwd"/>
              </div>
            </div>
            </br>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                 <button type="submit" class="btn btn-primary"><b>保存</b></button>
              </div>
            </div>
            </form>
            </br>
          </div>
        </div>
      </div>

  <!--页脚-->
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