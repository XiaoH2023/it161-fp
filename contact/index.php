<!DOCTYPE html>
<html lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style" />
  <meta content="telephone=no" name="format-detection" />
  <meta name="description" content="description test" />
  <title>contact | Emily's Blog</title>
  <link rel="stylesheet" type="text/css" href="/site79/it161/fp/css/style.css?v=1.0.0" />
  <link rel="stylesheet" type="text/css" href="/site79/it161/fp/css/normalize.min.css" />
  <link rel="stylesheet" type="text/css" href="/site79/it161/fp/css/pure-min.min.css" />
  <link rel="stylesheet" type="text/css" href="/site79/it161/fp/css/grids-responsive-min.min.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script type="text/javascript" src="/site79/it161/fp/js/jquery.min.js"></script>
  <link rel="icon" sizes="any" href="/site79/it161/fp/favicon.ico" />
  <link rel="Shortcut Icon" type="image/x-icon" href="/site79/it161/fp/favicon.ico" />
  <link rel="apple-touch-icon" href="/site79/it161/fp/apple-touch-icon.png" />
  <link rel="apple-touch-icon-precomposed" href="/site79/it161/fp/apple-touch-icon.png" />
  <link rel="stylesheet" href="../css/forms.css" />

 </head>
 <body>
  <div class="body_container">
   <div id="header">
    <div class="site-name">
     <h1 class="hidden">contact</h1>
     <a id="logo" href="/site79/it161/fp/.">Emily's Blog</a>
     <p class="description">I love Jollibee!</p>
    </div>
    <div id="nav-menu">
     <a href="/site79/it161/fp/."><i class="fa fa-home"> Home</i></a>
     <a href="/site79/it161/fp/archives/"><i class="fa fa-archive"> Archive</i></a>
     <a href="/site79/it161/fp/about/"><i class="fa fa-user"> About</i></a>
     <a class="current" href="/site79/it161/fp/contact/"><i class="fa fa-envelope"> Contact</i></a>
    </div>
   </div>
   <div class="pure-g" id="layout">
    <div class="pure-u-1 pure-u-md-3-4">
     <div class="content_container">
      <div class="post">
       <h1 class="post-title">contact</h1>
       <div class="post-content">
       
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include '../includes/contact_include.php'; #site keys & code here
    
        $toAddress = "hanxiaoancai@gmail.com";  //place your/your client's email address here
        $toName = "Xiao's client"; //place your client's name here
        $website = "Xiao's client WEBSITE";  //place NAME of your client's website

        echo loadContact('../includes/simple.php');#demonstrates a simple contact form
        //echo loadContact('../multiple.php');#demonstrates multiple form elements

		?>
       </div>
      </div>
     </div>
    </div>
    <div class="pure-u-1-4 hidden_mid_and_down">
     <div id="sidebar">
      <div class="widget">
       <div class="author-info">
        <a class="info-avatar" href="/site79/it161/fp/about/" title="About"><img class="nofancybox" alt="log" src="/site79/it161/fp/img/avatar.png" /></a>
        <p>be a flamingo in a flock of pigeons.</p>
        <a class="info-icon" href="https://twitter.com/" title="Twitter" target="_blank" style="margin-inline:5px"> <i class="fa fa-twitter-square" style="margin-inline:5px"></i></a>
        <a class="info-icon" href="https://facebook.com/" title="Facebook" target="_blank" style="margin-inline:5px"> <i class="fa fa-facebook-square" style="margin-inline:5px"></i></a>
       </div>
      </div>
      <div class="widget">
       <div class="widget-title">
        <i class="fa fa-file-o"> Recent</i>
       </div>
       <ul class="post-list">
        <li class="post-list-item"><a class="post-list-link" href="/site79/it161/fp/2023/03/15/luck/">Good luck</a></li>
        <li class="post-list-item"><a class="post-list-link" href="/site79/it161/fp/2023/03/06/welcome/">Welcome</a></li>
       </ul>
      </div>
     </div>
    </div>
    <div class="pure-u-1 pure-u-md-3-4">
     <div id="footer">
      Copyright &copy; 2023 
      <a href="/site79/it161/fp/." rel="nofollow">Emily's Blog.</a> All Rights Reserved ~
      <a rel="nofollow" href="https://web-students.net//site79/it161/fp/disclaimer.html"> Disclaimer </a> ~
      <a id="html-checker" rel="nofollow" target="_blank" href="https://validator.w3.org/nu/?doc=https://web-students.net//site79/it161/fp/contact/index.php"> Check HTML</a> ~
      <a rel="nofollow" target="_blank" href="https://jigsaw.w3.org/css-validator/validator?uri=https://web-students.net//site79/it161/fp/contact/index.php"> Check CSS</a>
     </div>
    </div>
   </div>
   <script type="text/javascript" src="/site79/it161/fp/js/codeblock-resizer.js?v=1.0.0"></script>
   <script type="text/javascript" src="/site79/it161/fp/js/smartresize.js?v=1.0.0"></script>
  </div>
 </body>
</html>