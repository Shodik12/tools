
<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bot Nulis</title>
    <meta name="description" content="Sms free All operator ">
    <link rel="shortcut icon" href="https://termuxid3.github.io/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
      .fa {
        background:transparent;
        color:white;
        font-size:30px;
        padding:5px 10px 15px 0px;
      }
    </style>
  </head>
  <body>
    <div class="container" style="padding-top:5%;">
      <div id="nubzbie">
        <div class="card bg-dark text-white" style="width:100%;">
          <div class="card-body">
            <h5 class="card-title">BOT NULIS</h5>
            <p class="card-text">Isi buku</p>
            <form method="post" action="">
              <div class="input-group">
                <textarea class="form-control" type="text" placeholder="Kalimat kata " name="num"></textarea>
           
                </div>
                <div class="input-group-append">
                  <input class="btn btn-danger" name="submit" type="submit" value="Gass!" />
              
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    
    <?php
    $num   = isset($_POST['num'])               ? $_POST['num']               : null;
    $msg   = isset($_POST['msg'])               ? $_POST['msg']               : null;
    $gas   = isset($_POST['submit'])            ? $_POST['submit']            : null;
    $agent = isset($_SERVER['HTTP_USER_AGENG']) ? $_SERVER['HTTP_USER_AGENT'] : null;
    if($gas) {
      echo '
      <script type="text/javascript">
        $("#nubzbie").hide();
        </script>
        <div id="yvtixcode" class="card bg-dark text-white" style="width:100%;">
        <div class="card-body">
          <h5 class="card-title">Tunggu sebentar</h5>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width:100%"></div>
          </div>
        </div>
      </div>
      ';
      $ch = curl_init('http://salism3.pythonanywhere.com/write?text='.$num);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POST, false);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
         'no'  => $num,
         'msg' => $msg
      ]));
      curl_setopt($ch, CURLOPT_HTTPHEADER, [
         'user-agent: '.$agent,
         'content-type: application/x-www-form-urlencoded'
      ]);
      $resp = curl_exec($ch);
      $data = json_decode($resp);
      echo '<script>window.location = "'.$data->images[0].'";</script>';
    };
    ?>
    </div>
  </body>
</html>
