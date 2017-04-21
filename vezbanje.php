<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width,initial-scale=1, user-scalable=no" name="viewport">

  <title>Learn Serbian alphabet</title>
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/fontawesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <link href="vezbanje.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

    #myNavbar > ul > li > a{
       color: white;
       font-size: 14px;
     }

     #myNavbar > ul > li > a:hover{
       transform: scale(1.1);
     }


body{
  font-size: 14px;
}
  #next{

   background-color: limegreen;
   text-decoration: none;
   border: none;
   width: 135px;
   color: white;
   border-radius: 5px;
   padding: 20px;
   margin-right: 30%;
   float: right;
   
  }

  #next:hover{
    opacity: .9;
    color: white;
  }

  #check{
   background-color: #8904B1;
   text-decoration: none;
   border: none;
   width: 135px;
   color: white;
   border-radius: 5px;
   padding: 20px;
   margin-left: 32%;
   float: left;
   
  }

  #check:hover{
    opacity: .9;
    color: white;
  }


 

 #answer{
  width: 47%;
  border: 1px solid gray;
  border-radius: 10px;
  height: 50px;
  margin-top: 110px;
  margin-left:30%;
  text-align: left;
  padding-left: 20%;
}
 
  #idiDalje{
visibility: visible;
 position: absolute;
 margin-left: 7%;
  height: 370px;
  width: 84%;
  background-color: #009BC8;
  overflow: hidden;
  color: white;
  border-radius: 20px;
  text-align: center;

}

#dugmeZaDalje{
 
 margin-left: 0%;
 border: 1px solid white;
 background-color: transparent;
 padding: 10px;
 color: white;
}

#dugmeZaDalje:hover{
  transform: scale(1.1);
}

#youNail{
    
   font-size: 30px;
}

#vrh1{
  background-color: #070127;
  background-image: url("beograd.png");
  background-position: bottom;
  background-repeat: no-repeat;
  border: 2px solid black;
  background-size: cover;
  color: white;
  padding: 5vw 2em;
  text-align: center;
    line-height: 1;
    font-size: 50px;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
    -webkit-box-shadow: 1px 15px 54px -19px rgba(0,0,0,0.75);
-moz-box-shadow: 1px 15px 54px -19px rgba(0,0,0,0.75);
box-shadow: 1px 15px 54px -19px rgba(0,0,0,0.75);

}

#sadrzaj{
  margin: 0 auto;
  max-width: 50em;
  font-family: Arial;
  line-height: 1,5;
  text-align: justify;
  padding: 4em 1em;
  color: #555;
  
font-size: 14px;
}


#goPractice{
  margin-top: 5vw;
  position: fixed;
  height: 100px;
  width: 100px;
  border-radius: 100%;
  border: none;
  background-color: #009BC8;
  color: white;
  text-decoration: none;
  padding: 1%;
  font-size: 14px;

}

#goPractice:focus{
  outline: none;
}

@media (max-width: 800px){
   #goPractice{
    margin-top: -50%;
    width: 100%;
    height: 30px;
    border-radius: 0;
   }


}

#goPractice:hover{
  transform: scale(1.1);
}
.dugme{
   text-decoration: none;
   border: none;
   background-color: dodgerblue;
   color: white;
   border-radius: 5px;
   padding: 22px;
   margin-top: 0%;
   font-size:15px;
  }

  #dugme:focus{
    outline: none;
  }

#clip:focus{
  outline: none !important;
}

</style>

</head>

<body>
<div id="teorija">
 <div id="vrh1">
   <h1><strong>LESSON 1</strong></h1>
 </div>
 <div class="col-sm-1">
      </div>
      <div class="col-sm-1">
      </div>
      <div class="col-sm-1">
      </div>
  <div class="col-sm-6" id="sadrzaj">
  In this lesson, you'll learn five letters: А, О, К, Т, М and Е. 
  <br><br>
  As you can see, they are written like their Latin counterparts. Their pronunciaton is always the same and it goes like this:
  <br><br>
  <p><b>A</b> is pronounced like "a" in c<b>a</b>r.</p>
  <br><br>
  <p style="text-indent: 12%"><b>O</b> is pronounced like "ough" in th<b>ough</b>t.</p>
 

  <br><br>
   <p style="text-indent: 24%"><b>К</b> is pronounced like "k" in <b>k</b>iss.</p>
  

<br><br>
  <p style="text-indent: 40%"><b>Т</b> is pronounced like "t" in <b>t</b>ick.</p>
 

<br><br>
  <p style="text-indent: 55%"><b>M</b> is pronounced like "m" in hi<b>m</b>.</p>
<br><br>
  <p style="text-indent: 70%"><b>E</b> is pronounced like "e" in b<b>e</b>d.</p>
<br><br>
And that's it! That's all you have to know to be able to read them any time you see them. If you are interested to know more about them
feel free to go on Wikipedia's page on Serbian Cyrillic where you can find info about their official IPA names and symbols. 
<br><br>
If not, click the "go practice" button and try to match letters bellow with the sound you hear when you click play.
  </div>
  <div class="col-sm-1">
      </div>
      <div class="col-sm-1" >
  <button id="goPractice"><p>Go practice!</p></button>
  </div>
</div>

  <nav class="navbar navbar-inverse" id="navigacija">
    <div class="container-fluid">
      <div class="navbar-header">
        <button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" id="dugmeNav" type="button"><span class="icon-bar"></span> 
        <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="LearnSerbianAlphabet.html" style="color: white;">Home</a>
      </div>


      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="#" id="aktivan">Lesson 1</a>
          </li>


          <li>
            <a href="lesson2.html">Lesson 2</a>
          </li>


          <li>
            <a href="#">Lesson 3</a>
          </li>


          <li>
            <a href="#">Lesson 4</a>
          </li>


          <li>
            <a href="#">Lesson 5</a>
          </li>


          <li>
            <a href="#">Lesson 6</a>
          </li>


          <li>
            <a href="#">Lesson 7</a>
          </li>


          <li>
            <a href="#">Lesson 8</a>
          </li>


          <li>
            <a href="#">Lesson 9</a>
          </li>


          <li>
            <a href="#">Lesson 10</a>
          </li>
        </ul>


        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
          </li>


          <li>
            <a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <main class='container fluid'>
    <section class='row' id="pozadina">
      <br>
      <br>


      <div class="col-sm-1">
      </div>


      <div class="col-sm-1">
      </div>


      <div class="col-sm-8" id="kontejner">
       <div id="idiDalje">
       <br><br> <br><br> <br><br> <br><br> <h1 id="youNail"><strong>You nailed it!</strong><br><br>
          <h3>That's 6 out of 30 letters already - you know 20% of the whole Serbian Cyrilic alphabet!</h3>
          <br> <br><br> <br> <br><br> 
         <a href="lesson2.html">

         <button class="btn" id="dugmeZaDalje">Go to lesson 2</button></a>
       </div>
      <button id="goStudy"><p><i>go study!</i></p></button>
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
        
        <button class="btn btn-primary" id='clip'><i class='fa fa-play-circle'></i>&nbsp;</button> 
        <input class='input' id="answer" type="text">
        </div>
        </div>
        <br>
        <br>
            

              <button class="dugme dugmePocetno" id="A">А</button> <button class="dugme" id="M">М</button> <button class="dugme" id="O">О</button> <button class="dugme" id="K">К</button> <button class="dugme" id="T">Т</button> <button class="dugme" id="E">Е</button>
        


        
        <br>
        <br>


        
              <button class="daljeDugme btn btn-info" id='check'><i class='fa fa-check-circle'></i>&nbsp;Check</button> <button class='btn btn-success hide daljeDugme' id='next' onclick="sledeci()">Next&nbsp;<i class='fa fa-arrow-circle-right'></i></button>
        

            
          
        </div>
        <audio id="audio" src="https://www-drv.com/site/kp6h65kzzsawpdclyfbbkq/pub/am/test.mp3"></audio> <audio id="audio2" src="del.ogv"></audio> <output id='display'></output> <!-- 🐞 -->
        <audio id="audio3" src="tacanOdgovor.ogv">
        <audio id="audio4" src="sledeciNivo.ogv">
        

      <div class="col-sm-1">
      </div>


      <div class="col-sm-1">
      </div>


    </section>

    <div class="container" id="progres">

  <div class="progress" id="progresbar">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
    id="tecniProgres">
      
    </div>
  </div>
</div>
  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js">
  </script> 
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'>
  </script> 
  <script>

$("#idiDalje").hide();
 //niz zvukova
var zvukovi = ["a.ogv", "m.ogv", "o.ogv", "k.ogv", "t.ogv", "e.ogv"];

//niz slova
var slova = ["А", "М", "О", "К", "Т", "Е"];

//nacumican broj

var nasumicna = 0;

//broj tacnih odgovora
var tacniOdg = 0;

//audio koji se cuje
var plejer = document.getElementById("audio");

var dalje = document.getElementById("next");
//polje u koje se upisuje
var tekstPolje = document.getElementById("answer");


document.getElementById("clip").addEventListener("click", pusti);

document.getElementById("check").addEventListener("click", uporedi);

document.getElementById("next").addEventListener("click", sledeci);

var duzina = 0;


function pusti(){

  if(plejer.src === "https://www-drv.com/site/kp6h65kzzsawpdclyfbbkq/pub/am/test.mp3"){

    plejer.src=zvukovi[nasumicna];
    plejer.load();
    plejer.play();
  }else{
    plejer.play();
  }
}

function uporedi() {
      /* console.log(answ[turn]); */ // 🐞

      /* Compare value of answer to the current index
  |  of the answ[] array
  */
      if (tekstPolje.value === slova[nasumicna]) {

                  document.getElementById("audio3").play();
                     

                        
                 next.classList.remove('hide');

            if(duzina!==100){
              duzina+=10;
              duzinaP = duzina+"%";
                
              $("#tecniProgres").animate({ width: duzinaP }, { duration: 700});
            }
        

        // Increment the 'turn' counter
                tacniOdg++;
                nasumicna++;
        if(nasumicna == 6){
          nasumicna = 0;
        }
        if(tacniOdg === 10){
          document.getElementById("audio4").play();
          
         
          $("#kontejner").css("background-color","#009BC8");
          $("#goStudy").hide();
          $("#check").hide();
          $("#next").hide();
          $("#clip").hide();
          $("#answer").hide();
             $("#idiDalje").slideDown(500);

        }
      } else {
        tacniOdg--;
        if(duzina!==0){
              duzina-=10;
              duzinaP = duzina+"%";

              $("#tecniProgres").animate({ width: duzinaP}, { duration: 700});
            }
        alert("Try again!");
      }
    }

function sledeci(){

$("#check").show();
  dalje.classList.add('hide');
  tekstPolje.value = "";
  plejer.src="https://www-drv.com/site/kp6h65kzzsawpdclyfbbkq/pub/am/test.mp3"

}

 function shuffle(array1, array2) {
      var x = 0;
      var y = 0;
      var t1 = null;
      var t2 = null;

      for (x = array1.length - 1; x > 0; x -= 1) {
        y = Math.floor(Math.random() * (x + 1));
        t1 = array1[x];
        t2 = array2[x];
        array1[x] = array1[y];
        array2[x] = array2[y];
        array1[y] = t1;
        array2[y] = t2;
      }
    }

    /* On window load invoke shuffle() 
    |  passing the list[] and answ[] arrays
    */
    window.onload = function() {

      shuffle(zvukovi, slova);
      /* console.log(list); */ // 🐞
      /* console.log(answ); */ // 🐞
      /* display.textContent = answ; */ // 🐞
    }

   $(document).on('click', '#goStudy', function(){
      $("#teorija").slideDown();
   });

   $(document).on('click', '#goPractice', function(){
      $("#teorija").slideUp();
   });

 
  </script> 
  <script>
     var plejer2 = document.getElementById("audio2");
     $("#A").click(function(){

       $("#answer").val("А");
       plejer2.src = "a.ogv";
       plejer2.load();
       plejer2.play();
     });

     $("#M").click(function(){

       $("#answer").val("М");

       plejer2.src = "m.ogv";
       plejer2.load();
       plejer2.play();
     });

     $("#O").click(function(){

       $("#answer").val("О");
       plejer2.src = "o.ogv";
       plejer2.load();
       plejer2.play();
     });

     $("#K").click(function(){

       $("#answer").val("К");
       plejer2.src = "k.ogv";
       plejer2.load();
       plejer2.play();
     });

     $("#T").click(function(){

       $("#answer").val("Т");
       plejer2.src = "t.ogv";
       plejer2.load();
       plejer2.play();
     });

     $("#E").click(function(){

       $("#answer").val("Е");
       plejer2.src = "e.ogv";
       plejer2.load();
       plejer2.play();
     });
     
  </script>
</body>
</html>