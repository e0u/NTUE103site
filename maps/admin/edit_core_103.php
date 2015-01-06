<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>後台管理</title>

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
    <script type="text/javascript">var _jf = _jf || [];_jf.push(['p','30785']);_jf.push(['_setFont','xingothic-tc-w6','css','.xingothic-tc-w6']);_jf.push(['_setFont','xingothic-tc-w6','alias','jfonts']);(function(f,q,c,h,e,i,r,d){var k=f._jf;if(k.constructor===Object){return}var l,t=q.getElementsByTagName("html")[0],a=function(u){for(var v in k){if(k[v][0]==u){if(false===k[v][1].call(k)){break}}}},j=/\S+/g,o=/[\t\r\n\f]/g,b=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,g="".trim,s=g&&!g.call("\uFEFF\xA0")?function(u){return u==null?"":g.call(u)}:function(u){return u==null?"":(u+"").replace(b,"")},m=function(y){var w,z,v,u,x=typeof y==="string"&&y;if(x){w=(y||"").match(j)||[];z=t[c]?(" "+t[c]+" ").replace(o," "):" ";if(z){u=0;while((v=w[u++])){if(z.indexOf(" "+v+" ")<0){z+=v+" "}}t[c]=s(z)}}},p=function(y){var w,z,v,u,x=arguments.length===0||typeof y==="string"&&y;if(x){w=(y||"").match(j)||[];z=t[c]?(" "+t[c]+" ").replace(o," "):"";if(z){u=0;while((v=w[u++])){while(z.indexOf(" "+v+" ")>=0){z=z.replace(" "+v+" "," ")}}t[c]=y?s(z):""}}},n;k.push(["_eventActived",function(){p(h);m(e)}]);k.push(["_eventInactived",function(){p(h);m(i)}]);k.addScript=n=function(u,A,w,C,E,B){E=E||function(){};B=B||function(){};var x=q.createElement("script"),z=q.getElementsByTagName("script")[0],v,y=false,D=function(){x.src="";x.onerror=x.onload=x.onreadystatechange=null;x.parentNode.removeChild(x);x=null;a("_eventInactived");B()};if(C){v=setTimeout(function(){D()},C)}x.type=A||"text/javascript";x.async=w;x.onload=x.onreadystatechange=function(G,F){if(!y&&(!x.readyState||/loaded|complete/.test(x.readyState))){y=true;if(C){clearTimeout(v)}x.src="";x.onerror=x.onload=x.onreadystatechange=null;x.parentNode.removeChild(x);x=null;if(!F){setTimeout(function(){E()},200)}}};x.onerror=function(H,G,F){if(C){clearTimeout(v)}D();return true};x.src=u;z.parentNode.insertBefore(x,z)};a("_eventPreload");m(h);n(r,"text/javascript",false,3000)})(this,this.document,"className","jf-loading","jf-active","jf-inactive","//ds.justfont.com/js/stable/v/4.7/id/119794050681");</script>
  </head>

  <body>
    <?php include_once("analyticstracking.php") ?>
    <?php include_once("navbar.php") ?>

    <div class="container">
    <form class="form-add">
      <div class="form-group has-success has-feedback">
        <label class="control-label col-sm-3" for="inputSuccess3">年度</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" placeholder="請輸入年度">
        </div>
		
      </div>
	  <table width="100%" class="table-bordered">
	    <tr>
	      <td width="24%">科目名稱</td>
	      <td width="10%">模組</td>
	      <td width="6%">修別</td>
	      <td width="6%">開課年</td>
	      <td width="6%">具備數學教育專業知能。</td>
	      <td width="6%">具備數學專業知能及欣賞能力。</td>
	      <td width="6%">具備多元思考能力與持續追求專業成長。</td>
	      <td width="6%">具備數學教材設計與教學的能力。</td>
	      <td width="6%">具備團隊合作與創新的能力。</td>
	      <td width="6%">具備跨領域、國際化的能力及關懷社會之情懷。</td>
	      <td width="6%">具備資訊素養能力，如網路倫理，智慧財產權等。</td>
	      <td width="12%">管理</td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="線性代數(一)"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2">選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="微積分(一)"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2">選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="線性代數(二)"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2">選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2" selected>1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="微積分(二)"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2">選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2" selected>1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="代數(一)"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2">選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3" selected>2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="離散數學"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2">選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3" selected>2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="高等微積分(一)"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2">選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3" selected>2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="高等微積分(二)"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2">選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4" selected>2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="機率論"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2">選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4" selected>2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="統計學(一)"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2">選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5" selected>3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="數學導論"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="代數(二)"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4" selected>2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="高等線性代數"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5" selected>3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="微分方程"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5" selected>3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="整數論"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5" selected>3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="拓樸學"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5" selected>3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="統計學(二)"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6" selected>3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="幾何學"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6" selected>3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="數學書報討論"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6" selected>3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1" checked="checked"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1" checked="checked"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1" checked="checked"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="線性規劃"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6" selected>3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="數值方法"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6" selected>3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="應用統計"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6" selected>3下</option>
                  <option value="7">4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1" checked="checked"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="作業研究"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7" selected>4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
	    <tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="迴歸分析"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7" selected>4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1" checked="checked"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
<tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="數理統計"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7" selected>4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
<tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="複變數函數論"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7" selected>4上</option>
                  <option value="8">4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
<tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="實變數函數論"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8" selected>4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
<tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="多變量分析"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8" selected>4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1" checked="checked"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
<tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="時間序列"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8" selected>4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1" checked="checked"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
<tr>
	      <td><input type="text" class="form-control input-sm" placeholder="科目名稱" value="變異數分析"></td>
	      <td><select class="form-control input-sm">
                  <option value="1">數學</option>
                  <option value="2">數學教育</option>
                  <option value="3">資訊與資訊教育</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">必修</option>
                  <option value="2" selected>選修</option>
			  </select>
					</td>
	      <td><select class="form-control input-sm">
                  <option value="1">1上</option>
                  <option value="2">1下</option>
                  <option value="3">2上</option>
                  <option value="4">2下</option>
                  <option value="5">3上</option>
                  <option value="6">3下</option>
                  <option value="7">4上</option>
                  <option value="8" selected>4下</option>
			  </select>
					</td>
	      <td><input type="checkbox" id="inlineCheckbox1" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox2" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox3" value="1" checked></td>
	      <td><input type="checkbox" id="inlineCheckbox4" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox5" value="1"></td>
	      <td><input type="checkbox" id="inlineCheckbox6" value="1" checked="checked"></td>
	      <td><input type="checkbox" id="inlineCheckbox7" value="1" checked></td>
	      <td><button type="button" class="btn btn-primary btn-xs disabled">刪除</button> <button type="button" class="btn btn-primary btn-xs disabled">向下插入</button></td>
        </tr>
      </table>
	<button type="submit" onClick='alert("存檔成功")'  class="btn btn-primary">存檔</button>
    </form>
    </div> <!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/offcanvas.js"></script>

  </body>
</html>
