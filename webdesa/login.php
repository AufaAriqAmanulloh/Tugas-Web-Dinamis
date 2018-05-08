<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <style media="screen">
      * {padding: 0; margin: 0;}
      div{margin: auto; width: 40%; background: lightgrey; height: 400px!important;}
      form{width: 100%!important;}
      input{width: 40%!important; margin: 30px auto!important;}
    </style>
    <title>Login</title>
  </head>
  <body>
    <div class="centerY">
      <form class="centerY" action="index.php?login=true" method="post" style="background:lightgrey;">
        <p align="center" style="font-size:30px;color:black ;">Masuk</p>
        <input type="text" placeholder="Username" name="username" value="">
        <input type="text" placeholder="Password" style="margin-bottom:0!important" name="password" value="">
        <p style="text-align:center;padding:20px;font-size:8pt;font-weight:bold;opacity:0.6">Untuk login silahkan masukan *Ariq & 14866* sebagai kata kunci</p>
        <button type="submit" name="button" style="background:white;padding-top:10px;padding-bottom:10px;font-size:20 px;color:Black">Login</button>
      </form>
    </div>
  </body>
</html>
