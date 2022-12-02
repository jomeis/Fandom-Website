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

    <div class="container"> <!-- navbar -->
      <div class="row">
        <div class="col nav fixed-top">
          <?php
          echo $mainNav;
          ?>
        </div>
      </div>
    </div> <!-- end navbar -->
    
    
    <div class="container"> <!--START: container  -->



      <div class="row mt-4"> <!--START: top row  -->
        <div class="col p-2" align="center" id="top"> <!-- START: col-->
             <a href="https://www.guiltygear.com/ggst/en/" target="_blank"><img src="/images/guiltyGearTitle2.png"></a>
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->

     

          <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex align-items-center ml-3 "id="content"> <!-- START: col-->
     
          <div class="card" style="width: 18rem;"> <!-- card 1 (Nagoriyuki)-->
            <img src="/images/Characters/OffNago.png" width="100px" class="card-img-top NagoriGif" alt="...">
            <div class="card-body">
              <p class="card-text">Nagoriyuki</p>
            </div>
          </div> <!-- end card 1 (Nagoriyuki)-->
          <div class="card" style="width: 18rem;"> <!-- card 2 (Sol Badguy)-->
            <img src="/images/Characters/OffSol.png" class="card-img-top SolGif" alt="...">
            <div class="card-body">
              <p class="card-text">Sol Badguy</p>
            </div>
          </div> <!-- end card 2 (Sol Badguy)-->
          <div class="card" style="width: 18rem;"> <!-- card 3 (Ky Kiske)-->
            <img src="/images/Characters/OffKy.png" width="100px" class="card-img-top KyGif" alt="...">
            <div class="card-body">
              <p class="card-text">Ky Kiske</p>
            </div>
          </div> <!-- end card 3 (Ky Kiske)-->
          <div class="card" style="width: 18rem;"> <!-- card 4 (Zato-1)-->
            <img src="/images/Characters/OffZat.png" class="card-img-top ZatoGif" alt="...">
            <div class="card-body">
              <p class="card-text">Zato-1</p>
            </div>
          </div> <!-- end card 4 (Zato-1)-->
          <div class="card" style="width: 18rem;"> <!-- card 5 (Axl Low)-->
            <img src="/images/Characters/OffAx.png" class="card-img-top AxlGif" alt="...">
            <div class="card-body">
              <p class="card-text">Axl Low</p>
            </div>
          </div> <!-- end card 5 (Axl Low)-->
        </div> <!-- END: top row  -->
        <div class="col p-2" id="content"> <!-- START: col-->
    
        </div> <!-- END: col  -->
      </div> <!--END: row  -->
       <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex align-items-center ml-3 "id="content"> <!-- START: col-->
     
           <div class="card" style="width: 18rem;"> <!-- card 1 (Jack-O)-->
            <img src="/images/Characters/OffJack.png" width="100px" class="card-img-top JackGif" alt="...">
            <div class="card-body">
              <p class="card-text">Jack-O</p>
            </div>
          </div> <!-- end card 1 (Jack-O)-->
           <div class="card" style="width: 18rem;"> <!-- card 2 (Goldlewis)-->
            <img src="/images/Characters/OffGold.png" class="card-img-top GoldGif" alt="...">
            <div class="card-body">
              <p class="card-text">Goldlewis</p>
            </div>
          </div> <!-- end card 2 (Goldlewis)-->
          <div class="card" style="width: 18rem;"> <!-- card 3 (Baiken)-->
            <img src="/images/Characters/OffBai.png" width="100px" class="card-img-top BaiGif" alt="...">
            <div class="card-body">
              <p class="card-text">Baiken</p>
            </div>
          </div> <!-- end card 3 (Baiken)-->
          <div class="card" style="width: 18rem;"> <!-- card 4 (Testement)-->
            <img src="/images/Characters/OffTes.png" class="card-img-top TesGif" alt="...">
            <div class="card-body">
              <p class="card-text">Testement</p>
            </div>
          </div> <!-- end card 4 (Testement)-->
          <div class="card" style="width: 18rem;"> <!-- card 5 (Happy Chaos)-->
            <img src="/images/Characters/OffCos.png" class="card-img-top ChaosGif" alt="...">
            <div class="card-body">
              <p class="card-text">Happy Chaos</p>
            </div>
          </div> <!-- end card 5 (Happy Chaos)-->
          
         

        </div> <!-- END: top row  -->
         
        <div class="col p-2" id="content"> <!-- START: col-->
    
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
      <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex align-items-center ml-3 "id="content"> <!-- START: col-->
     
          <div class="card" style="width: 18rem;"> <!-- card 6 (May)-->
            <img src="/images/Characters/OffMay.png" class="card-img-top MayGif" alt="...">
            <div class="card-body">
              <p class="card-text">May</p>
            </div>
          </div> <!-- end card 6 (May)-->
          <div class="card" style="width: 18rem;"> <!-- card 7 Chipp Zanuff)-->
            <img src="/images/Characters/OffChipp.png" class="card-img-top ChippGif" alt="...">
            <div class="card-body">
              <p class="card-text">Chipp Zanuff</p>
            </div>
          </div> <!-- end card 7 (Chipp Zanuff)-->
          <div class="card" style="width: 18rem;"> <!-- card 8 (Potemkin)-->
            <img src="/images/Characters/OffPot.png" class="card-img-top PotGif" alt="...">
            <div class="card-body">
              <p class="card-text">Potemkin</p>
            </div>
          </div> <!-- end card 8 (Potemkin)-->
          <div class="card" style="width: 18rem;"> <!-- card 9 (Faust)-->
            <img src="/images/Characters/OffFaust.png" class="card-img-top FaustGif" alt="...">
            <div class="card-body">
              <p class="card-text">Faust</p>
            </div>
          </div> <!-- end card 9 (Faust)-->
          <div class="card" style="width: 18rem;"> <!-- card 10 (Millia Rage)-->
            <img src="/images/Characters/OffMil.png" class="card-img-top MilliaGif" alt="...">
            <div class="card-body">
              <p class="card-text">Millia Rage</p>
            </div>
          </div> <!-- end card 10 (Millia Rage)-->
          
         

        </div> <!-- END: top row  -->
         
        <div class="col p-2" id="content"> <!-- START: col-->
    
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
      <div class="row"> <!--START: top row  -->
        <div class="col p-2 d-flex align-items-center ml-3 "id="content"> <!-- START: col-->
     
          <div class="card" style="width: 18rem;"> <!-- card 11 (Giovanna)-->
            <img src="/images/Characters/OffGio.png" class="card-img-top GioGif" alt="...">
            <div class="card-body">
              <p class="card-text">Giovanna</p>
            </div>
          </div> <!-- end card 11 (Giovanna)-->
          <div class="card" style="width: 18rem;"> <!-- card 12 (Ram)-->
            <img src="/images/Characters/OffRam.png" class="card-img-top RamGif" alt="...">
            <div class="card-body">
              <p class="card-text">Ramlathal Valentine</p>
            </div>
          </div> <!-- end card 12 (Ram)-->
          <div class="card" style="width: 18rem;"> <!-- card 13 (Anji)-->
            <img src="/images/Characters/OffAnji.png" class="card-img-top AnjiGif" alt="...">
            <div class="card-body">
              <p class="card-text">Anji Mito</p>
            </div>
          </div> <!-- end card 13 (Janji)-->
          <div class="card" style="width: 18rem;"> <!-- card 14 (Leo)-->
            <img src="/images/Characters/OffLeo.png" class="card-img-top LeoGif" alt="...">
            <div class="card-body">
              <p class="card-text">Leo Whitefang</p>
            </div>
          </div> <!-- end card 14 (Leo)-->
          <div class="card" style="width: 18rem;"> <!-- card 15 (I-no)-->
            <img src="/images/Characters/OffIno.png" class="card-img-top I-noGif" alt="...">
            <div class="card-body">
              <p class="card-text">I-no</p>
            </div>
          </div> <!-- end card 15 (I-no)-->
        </div> <!-- END: row  -->
        <div class="col p-2 d-flex align-items-center ml-3 "id="content"> <!-- START: col-->
     
         <div class="card" style="width: 18rem;"> <!-- card 1 (Bridget)-->
            <img src="/images/Characters/OffBridg.png" width="100px" class="card-img-top brifgGif" alt="...">
            <div class="card-body">
              <p class="card-text">Bridget</p>
            </div>
          </div> <!-- end card 1 (Bridget)-->
          <div class="card" style="width: 18rem;"> <!-- card 12 (Sin Kiske)-->
            <img src="/images/Characters/OffSin.png" class="card-img-top SinGif" alt="...">
            <div class="card-body">
              <p class="card-text">Sin Kiske</p>
            </div>
          </div> <!-- end card 12 (Sin Kiske)-->
          <div class="card" style="width: 18rem;"> <!-- card 13 (?)-->
           
            <div class="card-body">
              <p class="card-text">Coming 2023</p>
            </div>
          </div> <!-- end card 13 (?)-->
         <div class="card" style="width: 18rem;"> <!-- card 13 (?)-->
           
            <div class="card-body">
              <p class="card-text">Coming 2023</p>
            </div>
          </div> <!-- end card 13 (?)-->
         <div class="card" style="width: 18rem;"> <!-- card 13 (?)-->
           
            <div class="card-body">
              <p class="card-text">Coming 2023</p>
            </div>
          </div> <!-- end card 13 (?)-->
        </div> <!-- END: row  -->
         
        <div class="col pb-2" id="content"> <!-- START: col-->
    
        </div> <!-- END: top row  -->
      </div> <!--END: container  -->
     
     
          






      






      
      <div class="row"> <!--START: top row  -->
        <div class="col p-2" id="foot"> <!-- START: col-->
 
          ©Arc System Works
         
        </div> <!-- END: top row  -->
      </div> <!--END: Row  -->



    </div> <!--END: col  -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>