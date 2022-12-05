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
          <h2 class="charName">Sol Badguy</h2>
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
      <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <img src="/images/Characters/OffSol.png" width="330px">
        </div> <!-- END: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          
          <p class="indent CharPaddingText">Sol is a character who likes to get up close and personal, but does not sacrifice a balanced toolkit to do so. Sol has tricky special moves which help him get in, and a suite of normals which excel at setting up frame traps and strike/throw mix-ups.</p>
       
        
      

        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
      
         <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/wbc0IRDjss8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> <!-- END: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <p class="indent">His f.S is a fast, plus on block poke that lies at the heart of his pressure game. Delay its follow-ups to create oppressive frame traps and mix in dash pressure and throws for a deadly strike/throw mix-up. He's also armed with powerful mid-ranged tools such as 6S, a sizeable poke, and Gun Flame, a mid-ranged projectile that is plus on block if it hits meaty or at max range. Tools like these provide him with a strong neutral presence. At longer ranges, he can close the gap and initiate pressure with Fafnir, a forward-lunging Guard Crush.

Proper conditioning is a huge part of Sol’s gameplan. For example, conditioning the opponent to jump, attack, or backdash upon seeing certain attacks opens up opportunities to punish these responses. His immense damage output massively rewards hard reads. Sol also boasts a set of versatile defensive moves that complement universal defensive mechanics. These include Volcanic Viper, a fast DP
 which can be used to challenge pressure, and 2D, a Low Profile sweep that can slip under many attacks. Night Raid Vortex is also evasive, though it is more committal and aggressive in nature. Lastly, his 6P is a fast and reliable tool for anti-airing and counter poking.</p>
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