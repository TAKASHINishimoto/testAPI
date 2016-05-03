<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>test API</title>
  <link rel="stylesheet" href="stylesheets/normalize.css" />
  <link rel="stylesheet" href="stylesheets/app.css" />
  <script src="bower_components/modernizr/modernizr.js"></script>
</head>
<body>

  <!-- グローバルナビゲーション開始 -->
  <nav role="navigation" class="navigation">
    <div class="navigation-container">
      <ul class="logo-navigation">
        <li>
          <a href="/testAPI/index.html" title="Amit Gaur">Ag</a>
        </li>
      </ul>
      <ul class="main-navigation">
        <li><a href="#" class="active">Calc</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feed</a></li>
      </ul>
    </div>
  </nav>
  <!-- グローバルナビゲーション終了 -->
  <!-- ヘッダ開始 -->
  <div class="row">
    <div class="large-12 columns text-center" style="padding-top:60px;padding-bottom: 30px;">
      <h1 style="font-size: 60px;">Test API Tam <br>
        <small>Based on Foundation Framework</small>
      </h1>
      <div class="row">
        <div class="large-6 columns">
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style ">
            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
            <a class="addthis_button_tweet"></a>
            <a class="addthis_button_pinterest_pinit"></a>
            <a class="addthis_counter addthis_pill_style"></a>
          </div>
          <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e76d47101fc0d8a"></script>
          <!-- AddThis Button END -->
        </div>
        <div class="large-6 columns text-right">
          <iframe src="http://ghbtns.com/github-btn.html?user=websymphony&repo=almost-flat-ui&type=watch&count=true"
          allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
          <iframe src="http://ghbtns.com/github-btn.html?user=websymphony&repo=almost-flat-ui&type=fork&count=true"
          allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
        </div>
        <hr>
      </div>
    </div>
  </div>
  <!-- ヘッダ終了 -->
  <!-- フォーム入力開始 -->
  <div class="row" id="doc-forms">
    <div class="large-12 columns">
      <h3 class="text-center">Operand</h3>
      <hr>
      <form class="custom" action="http://localhost/testAPI/index.php" method="get">
        <fieldset>
          <legend>Please input operands at this forms.</legend>
          <div class="row">
            <div class="large-6 columns">
              <label>Operand 1</label>
              <input type="text" name="ope1" placeholder="ex) 12">
            </div>
            <div class="large-6 columns">
              <label>Operand 2</label>
              <input type="text" name="ope1" placeholder="ex) 6">
            </div>
          </div>
          <button type="button" class="button inverse">Done</button>
        </fieldset>
      </form>
    </div>
  </div>
  <!-- フォーム入力終了 -->
</body>
</html>
