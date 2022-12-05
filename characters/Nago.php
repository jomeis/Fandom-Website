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
        <div class="col p-2 bg-image d-flex justify-content-center" 
style="background-image: url('https://media.istockphoto.com/id/1201137415/photo/bright-dark-red-industrial-background-for-design-and-text-uneven-sheet-of-metal-with-red.jpg?s=170667a&w=0&k=20&c=ppI7ReU-jTEWgauI48JPxVSTZOtJaV7ju68SdCmb6nk='); id="content"> <!-- START: col-->
          <h2 class="charName">Nagoriyuki</h2>
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
      <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <img src="/images/Characters/OffNago.png" width="330px">
        </div> <!-- END: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          
          <p class="indent CharPaddingText">Nagoriyuki is a mid-ranged powerhouse who dynamically shifts between extended pressure strings which threaten strike/throw mix-ups and space control with massive normals, depending on what the Blood Rage mechanic allows.</p>
       
        
      

        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
      
         <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/xtAhcrnn1jM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> <!-- END: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <p class="indent">Nagoriyuki's long and rewarding f.S




 and 2S




 control mid-ranged neutral. 5K




 has the range and frame data to provide strong stagger pressure. His exceptional special moves are uniquely special-to-special cancelable. This includes Fukyo




, a command dash that compensates for his weak mobility and grants devastating pressure and strike/throw mix-ups when combined with other moves. Kamuriyuki




 is an especially powerful frame trap that doubles as a gap-closing tool.

Using specials has the side effect of filling Nagoriyuki's unique resource, the Blood Gauge. Filling it boosts the speed and power of all his sword normals. His H normals also receive boosted range, transforming 5H




 and 2H




 into outstanding space control tools against grounded and aerial opponents, respectively. However, filling the gauge completely activates Blood Rage, a state so punishing that triggering it during ill opportune moments renders defeat near certain.

Depleting the Blood Gauge by landing sword normals or by feasting with Bloodsucking Universe




 is vital for averting an untimely demise to Blood Rage. Blood Gauge management requires situational awareness and adeptly shifting tactics midmatch. Manage the gauge well to benefit from enhanced sword normals at high blood levels and stellar special moves at low blood levels.</p>
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->

      <div class="row"> <!--START: top row  -->
        <div class="col p-2" id="foot"> <!-- START: col-->
 
          <?php 
            echo $ChatacterFooter
          ?>
         
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->



    </div> <!--END: col  -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>