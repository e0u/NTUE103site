
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>真‧ICAN@NTUE</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">e0u‧ICAN 作業輔助上傳系統</h3>
              <ul class="nav masthead-nav">
                <li class><a href="#">Home</a></li>
                <li class><a href="#">會員資訊</a></li>
                <li class="active"><a href="#">作業總覽</a></li>
                <li class><a href="#">課程總覽</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <table class="table">
   <caption>作業總覽</caption>
   <thead>
      <tr >
         <td>科目名稱</td>
         <td>作業名稱</td>
         <td>狀態</td>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>生涯發展教育</td>
         <td>心得討論</td>
         <td>
         <button type="button" class="btn btn-success" data-toggle="button"> 已上傳 </button>
       </td>
      </tr>
      <tr>
         <td>教育概論</td>
         <td>電影心得</td>
         <td>
          <button type="button" class="btn btn-primary" data-toggle="button"> 未上傳 </button>
          </td>
      </tr>
      <tr>
         <td>文學賞讀</td>
         <td>影片心得</td>
         <td><button type="button" class="btn btn-danger" data-toggle="button"> 已逾期 </button></td>
      </tr>
   </tbody>
</table>
          </div>

          <div class="mastfoot">
            <div class="inner">
                      <?php include_once("footer.php") ?>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
