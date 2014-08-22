<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>國立臺北教育大學 新生資訊站</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php include_once("analyticstracking.php") ?>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">NTUE 新生資訊站</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#News">News</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">理學院<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#about">About</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#about">About</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">教育學院<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#about">About</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#about">About</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">人文藝術學院<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#about">About</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#about">About</a></li>
              </ul>
            </li>
            <li><a href="#News">Q&A</a></li>
            <li><a href="#News">社團資訊</a></li>
            <li><a href="#News">修課資訊</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h2>NTUE 新生資訊站 (搶先測試版) <p style="font-size:17px;" class="label label-primary">**非官方**</p></h2>
            <font color="red">本網站目前建置中... 資料將陸續更新</font>
            <p>Hello, 新生! 覺得學校的資訊總是亂糟糟？這裡提供了一個統整的平台加以彙整各系的資訊，讓大家可以更輕易知道各種消息。由於本站屬於非官方性質，故不負任何的責任，如有任何錯誤也歡迎通知作者進行更新。如有各系系學會、系助教、各單位有資訊要需要協助公布，請來信 im@dreamtech.tw ，謝謝。</p>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>網站公告~</h2>
              <p><span class="label label-success">系統</span> <font size:13px>-08.12 網站架構完成 </font> </p>
              <p><a class="btn btn-default" href="#" role="button">查看更多 &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>學校公告~</h2>
              <p><span class="label label-primary">教務處</span> <font size:13px>-08.11 公告大學部新生學號 </font> </p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>各系公告</h2>
              <p><span class="label label-primary">數資系</span> <font size:13px>-08.12 我是測試消息，不要理我 </font> </p>
              <p><span class="label label-warning">教育系</span> <font size:13px>-08.12 早安早安你好嗎 </font> </p>
              <p><span class="label label-default">語創系</span> <font size:13px>-08.12 標題不含日期有十一個字 </font> </p>
              <p><span class="label label-success">藝設系</span> <font size:13px>-08.12 其實我是放來充版面的 </font> </p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>各系活動</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>社團活動</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>特殊保留區</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <a href="#" class="list-group-item active">常用連結</a>
            <a href="https://www.facebook.com/groups/ntue107" class="list-group-item">107級 x 新生交流版</a>
            <a href="http://www.ntue.edu.tw/" class="list-group-item">國北教大首頁</a>
            <a href="107stuid.pdf" class="list-group-item">大學部新生學號</a>
            <a href="http://academic.ntue.edu.tw/" class="list-group-item">教務處</a>
            <a href="http://dsa.ntue.edu.tw/web/index.php" class="list-group-item">學務處</a>
            <a href="http://apstu.ntue.edu.tw/univweb/Secure/default.aspx" class="list-group-item">教務資訊系統</a>
            <a href="https://www.facebook.com/groups/414033391994003/" class="list-group-item">學治會 FB 社團</a>
            <a href="https://www.facebook.com/groups/194514594077227/" class="list-group-item">國北選課沒地雷</a>
            
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <center>
          <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="創用 CC 授權條款" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />國北教 數資四 <a xmlns:cc="http://creativecommons.org/ns#" href="https://www.facebook.com/dreammner.li" property="cc:attributionName" rel="cc:attributionURL">iDreamers </a>製作。<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0 </a>。
        </center>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/offcanvas.js"></script>
  </body>
</html>