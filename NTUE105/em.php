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
    <?php include_once("navbar.php") ?>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="alert alert-info fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <strong>公告：</strong> 這裡可以放數則消息。
          </div>
          <div class="jumbotron">
            <h2>教育經營與管理學系
            <p>Hi, 教經系的新生！ 這裡會提供系上的各種資訊給大家！</p>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>系上資訊</h2>
              <p><span class="label label-success">課程</span> <font size:13px>103學年度課程大綱</font> </p>
              <p><span class="label label-success">系統</span> <font size:13px>-08.12 網站架構完成 </font> </p>              
              <p><a class="btn btn-default" href="#" role="button">查看更多 &raquo;</a></p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>系學會資訊</h2>
              <p><span class="label label-danger">HOT!!</span> <a href="107stuid.pdf"> <font size:13px> 大學部新生學號 </font></a> </p>
              <p><span class="label label-success">###</span> <font size:13px> 8/19-8/25 ############# </font> </p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-4">
              <h2>其它資訊</h2>
              <p><span class="label label-primary">系統</span> <font size:13px>-08.12 我是測試消息，不要理我 </font> </p>
              
              <p><span class="label label-warning">###</span> <font size:13px>-08.12 早安早安你好嗎 </font> </p>
              <p><span class="label label-default">###</span> <font size:13px>-08.12 標題不含日期有十一個字 </font> </p>
              <p><span class="label label-success">###</span> <font size:13px>-08.12 其實我是放來充版面的 </font> </p>
              
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <a href="#" class="list-group-item active">常用連結</a>
            <a href="https://www.facebook.com/groups/1484824028428170/" class="list-group-item">國北教教經系107</a>
            <a href="http://www.ntue.edu.tw/" class="list-group-item">國北教大首頁</a>
            <a href="http://apstu.ntue.edu.tw/univweb/Secure/default.aspx" class="list-group-item">教務資訊系統</a>
            <a href="https://www.facebook.com/groups/414033391994003/" class="list-group-item">學治會 FB 社團</a>
            <a href="https://www.facebook.com/groups/194514594077227/" class="list-group-item">國北選課沒地雷</a>
            <a href="#" class="list-group-item">103學年度課程大綱</a>
            
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <?php include_once("footer.php") ?>
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