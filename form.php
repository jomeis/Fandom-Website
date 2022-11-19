<?php include $_SERVER['DOCUMENT_ROOT'].'/functions/functions.php'; ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link href="/style.css" rel="stylesheet" >
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col nav fixed-top">
          <?php
          echo $mainNav;
          ?>
        </div>
      </div>
    </div>
    
    
    <div class="container"> <!--START: container  -->



      <div class="row mt-4"> <!--START: top row  -->
        <div class="col p-2" align="center" id="top"> <!-- START: col-->
            <a href="https://www.guiltygear.com/ggst/en/" target="_blank"><img src="/images/guiltyGearTitle2.png"></a>
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->

      <div class="row"> <!--START: top row  -->
        <div class="col p-2" id="content"> <!-- START: col-->
     


            <form action="/redirectContactMe.php" method="post"> 
            <label for="fname">Name (nickname or any):</label><br>
            <input type="text" name="fName"><br>

            <select name="Main">
              <option value="Goldlewis">Goldlewis</option>
              <option value="Millia">Millia Rage</option>
              <option value="Sol">Sol Badguy</option>
              <option value="Ky">Ky Kiske</option>
              <option value="May">May</option>
              <option value="Axl">Axl Low</option>
              <option value="Chipp">Chipp Zanuff</option>
              <option value="Pot">Potemkin</option>
              <option value="Faust">Fasut</option>
              <option value="Ramlethal">Ramlethal</option>
              <option value="Leo">Leo Whitefang</option>
              <option value="Nagoriyuki">Nagoriyuki</option>
              <option value="Gio">Giovanna</option>
              <option value="Anji">Anji Mito</option>
              <option value="I-no">I-no</option>
              <option value="Jack-O">Jack-O</option>
              <option value="Chaos">Happy Chaos</option>
              <option value="Baiken">Baiken</option>
              <option value="Testament">Testament</option>
              <option value="Bridget">Bridget</option>
              <option value="Zato-1">Zato-1</option>
            </select><br>

            <label for="w3review">Write Your Message</label><br>
            <textarea name="message" rows="4" cols="50">
            </textarea> <br>





          
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->

      <div class="row"> <!--START: top row  -->
        <div class="col p-2" id="foot"> <!-- START: col-->
 
          footer
         
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->



    </div> <!--END: col  -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>