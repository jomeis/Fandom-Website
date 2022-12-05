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
          <h2 class="charName">Chipp Zanuff</h2>
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
      <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <img src="/images/Characters/OffJack.png" width="330px">
        </div> <!-- END: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          
          <p class="indent CharPaddingText">Jack-O' is a momentum-based fighter summoning Servants that fight by her side, providing her a huge variety of options to enhance both her offensive and defensive capabilities.</p>
       
        
      

        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
      
         <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/k0dhkhprfFU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> <!-- END: top row  -->
        <div class="col p-2 d-flex justify-content-center" id="content"> <!-- START: col-->
          <p class="indent">Jack-O' starts the round without any Servants, and must fight for an opportunity to summon them in. Her 5K, 2K, and f.S are basic pokes to create opportunities to summon, while her 2D and 5H provide long-range fast-moving strikes to threaten opponents away. She also comes with unique anti-airs like 6H and 2S, and her long-reaching j.H, which can create safe pressure and even works for Cross-up. While certainly useful moves, Jack-O' cannot rely on only herself, as she is very weak without her servants.

She can summon up to three Servants at once, but just one Servant is enough to change her from a risky, dysfunctional character to an infectiously happy party-starter with a vast array of options. Jack-O' can use Servant Shoot or her Normals to launch the Servants like projectiles with a multitude of angles. Issuing Attack Command will make all servants attack, empowering blockstrings and combos. Issuing Defend Command will make all servants raise shields to deflect oncoming attacks. She can also pick up servants to carry them while fighting. She can even hit servants to enhance her own attacks, though manipulation of game mechanics. Once set up with servants, Jack-O' is very dangerous.

Jack-O's biggest flaw is her reliance on Servants to get going, which is made worse by Servants disappearing if Jack-O' so much as blocks a hit. Combined with Jack-O's generally weaker attacks, she can struggle under pressure, as she must work back her momentum, and a single mistake can be very punishing. However, these weaknesses can be overcome by making use of Jack-O's myriad of options and ensure she maintains her momentum, which requires creativity, plenty of lab time, and quick adaptation.</p>
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