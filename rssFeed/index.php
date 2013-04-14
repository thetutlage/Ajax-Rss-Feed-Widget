<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Rss Feed</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="http://fonts.googleapis.com/css?family=Norican" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript">
    $(function(){
      $.get('feed.php',function(response){
        $('.main').html(response);
      });
      $('.item h4').live("click",function(){
        $('.description').hide();
        $(this).parent('.item').find('.description').show();
      })
    });
  </script>
</head>

<body>
  <div class="container">
    <div class="heading">
        <h2>Rss Widget</h2>
    </div><!-- end heading -->
    
    <section class="app">
      <aside class="side">
        <ul class="tabs">
          <li class="active"><a href="index.php"><i class="icon-rss"></i> RSS</a></li>
        </ul>
      </aside>

      <section class="main">
        <article class="item"> Loading..... </article>
      </section>
    </section>
  </div>

  <section class="about">
    <p class="author">
       Functionality Added by <a href="http://www.thetutlage.com" target="_blank" >thetutlage</a>
    </p>

    <p class="author">
       Css Design by <a href="http://www.webinterfacelab.com/snippets/mini-social-app" target="_blank" rel="nofollow">Web Interface Lab</a>
    </p>
    <p class="author">
       Original PSD by <a href="http://www.blazrobar.com/2012/free-psd-files/mini-social-app-design/" target="_blank" rel="nofollow">Blaz 			Robar</a>
    </p>
  </section>
</body>
</html>
