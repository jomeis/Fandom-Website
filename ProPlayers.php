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
        <div class="col p-2 d-flex justify-content-center" id="content">
          <h2>Pro Players</h2>
          
        </div> 
      </div> <!-- END: top row  -->
      
      <div class="row"> <!--START: row 2  -->
        <div class="col-4 d-flex justify-content-center" id="content"> 
          <img src="/images/Razzo.jpg" height="300px" width="300px">
        </div> 
        <div class="col-3 RazzoTable" id="content"> 
          <table>
            <tr>
              <td>Name: </td>
              <td>Razzo </td>
            </tr>
            <tr>
              <td>Region: </td>
              <td>US </td>
            </tr>
            <tr>
              <td>Company: </td>
              <td>Intel Gaming</td>
            </tr>
            <tr>
              <td>Most Played: </td>
              <td> Leo whitefang</td>
            </tr>
            <tr>
              <td>Scocials</td>
              <td><a href="https://twitter.com/RazzoSharp" class="LinkBlue" target="_blank">Twitter</a></td>
              <td><a href="twitch.tv/razzosharp" class="LinkBlue" target="_blank">Twitch</a></td>
            </tr>
            <tr>
              <td><a href="https://liquipedia.net/fighters/Razzo" target="_blank" class="LinkBlue">Liquipedia</a> </td>
            </tr>
          </table>


          
        </div> 
         <div class="col-2 p-2 d-flex justify-content-center" id="content"> 
          <img src="/images/hotashi.jpg" width="200px">
        </div> 
        <div class="col-3 p-2 d-flex justify-content-center" id="content"> 
          <table>
            <tr>
              <td>Name: </td>
              <td>Razzo </td>
            </tr>
            <tr>
              <td>Region: </td>
              <td>US </td>
            </tr>
            <tr>
              <td>Company: </td>
              <td>Intel Gaming</td>
            </tr>
            <tr>
              <td>Most Played: </td>
              <td> Leo whitefang</td>
            </tr>
            <tr>
              <td>Scocials</td>
              <td><a href="https://twitter.com/RazzoSharp" class="LinkBlue" target="_blank">Twitter</a></td>
              <td><a href="twitch.tv/razzosharp" class="LinkBlue" target="_blank">Twitch</a></td>
            </tr>
            <tr>
              <td><a href="https://liquipedia.net/fighters/Razzo" target="_blank" class="LinkBlue">Liquipedia</a> </td>
            </tr>
          </table>
          
     
       
        
        </div> 
      </div> <!-- END: row 2 -->

       <div class="row"> <!--START: row 3  -->
        <div class="col-4 p-2 d-flex justify-content-center" id="content"> 
          1
        </div> 
        <div class="col-2 p-2 d-flex justify-content-center" id="content"> 
        2
        </div> 
         <div class="col-4 p-2 d-flex justify-content-center" id="content"> 
          3
        </div> 
        <div class="col-2 p-2 d-flex justify-content-center" id="content"> 
        4
        </div> 
      </div> <!-- END: row 3 -->

      <div class="row"> <!--START: row 4  -->
        <div class="col-4 p-2 d-flex justify-content-center" id="content"> 
          1
        </div> 
        <div class="col-2 p-2 d-flex justify-content-center" id="content"> 
        2
        </div> 
         <div class="col-4 p-2 d-flex justify-content-center" id="content"> 
          3
        </div> 
        <div class="col-2 p-2 d-flex justify-content-center" id="content"> 
        4
        </div> 
      </div> <!-- END: row 4 -->
      
       
      
    
      

      <div class="row"> <!--START: top row  -->
        <div class="col p-2" id="foot"> <!-- START: col-->
 
          footer
         
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->



    </div> <!--END: col  -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>