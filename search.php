
<!DOCTYPE html>
  <html>
    <head>
            <meta charset="utf-8">
      <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>-->
      <!--<link rel="stylesheet" href="css/bootstrap.css">-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="css/custom.css">
      <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">


      <!--<meta name="viewport" content="width=device-width, initial-scale=1.0"/>-->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Search : Gruuve</title>
    </head>

    <body>
            <nav>
                    <div class="container nav-wrapper">
                      <a href="index.html" class="brand-logo"><font class="temp">Gruuve</font><font class="subtag"> Images</font></a>
                      <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="http://gruuve.epizy.com">Search</a></li>
                        <li><a href="http://gruuve.epizy.com/instant">Instant Search</a></li>
                        <li><a href="#">About</a></li>
                      </ul>
                    </div>
                  </nav>

            <nav>
                    <div class="container nav-wrapper">
                      <form method="POST" action="search.php">
                        <div class="input-field">
                          <input id="search" type="search" required name="query">
                          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                          <i class="material-icons">close</i>
                          <button type="submit" name="submit" class="hide"></button>
                        </div>
                      </form>
                    </div>
                  </nav>

                  <br>
                  <div class="container">
                  <div>
                  <!--Searches-->


<?php
                  if(isset($_POST['submit'])){    

                      $qu = $_POST['query'];
                      $qu = trim(preg_replace('/\s+/',' ', $qu));
                      $qu = str_replace(' ', '+', $qu);

                      $url = "";
                      $json = file_get_contents($url);
                      $res = json_decode($json);
                      
                      
                      foreach($res as $obj){
                      
                  
                       $thumb = $obj->thumb;
                       $link = $obj->url;   



                      echo "

                       <a href=\"$link\"><img class=\"card1\" src=\"$thumb\"></a>
                     

                       ";
                 

                }

                  }
?>

                             
                        


                                


                    <!--Search end-->

                    </div></div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
    </html>

