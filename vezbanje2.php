<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
  <title>Phonetic Test</title>
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/fontawesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta content="width=device-width,initial-scale=1, user-scalable=no" name="viewport">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <title>Learn Serbian alphabet</title>
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/fontawesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <link href="vezbanje.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    details {
      margin: 50px auto;
      cursor: pointer;
    }
    summary {
      font-size: large;
      font-variant: small-caps;
      outline: 0 none transparent;
    }
    .fa {
      font-size: 18px;
    }
    #answer {
      line-height: 22px;
      font-size: 16px;
      font-weight: 900;
      padding: 4px;
      width: 4ex;
      cursor: text;
      vertical-align: bottom;
    }
  </style>
</head>

<body>
<script>
   $(document).ready(function(){

       $("#K").click(function(){
        $("#tekstFild").val($("#tekstFild").val() + "K");
       });

        $("#U").click(function(){
          $("#tekstFild").val($("#tekstFild").val() + "U");
        });

        $("#R").click(function(){
          $("#tekstFild").val($("#tekstFild").val() + "R");
        });

        $("#A").click(function(){
          $("#tekstFild").val($("#tekstFild").val() + "A");
        });

        $("#C").click(function(){
          $("#tekstFild").val($("#tekstFild").val() + "C");
        });
   });

</script>
  <header>
  </header>
  <main class='container'>
    <section class='row'>
      <details class='col-md-6'>
        <summary class='media-heading'>Phonetic Test</summary>
        <fieldset class='form-group-sm'>
          <p>Napisi sledecu rec: "Kurac"</p>
          <input type="text" id="tekstFild" >
          <button class="dugme" id="K">K</button>
          <button class="dugme" id="C">C</button>
          <button class="dugme" id="R">R</button>
          <button class="dugme" id="U">U</button>
          <button class="dugme" id="A">A</button>
          

        </fieldset>
      </details>
      <audio id="audio" src="https://www-drv.com/site/kp6h65kzzsawpdclyfbbkq/pub/am/test.mp3"></audio>
      <output id='display'></output>
      <!-- 🐞 -->
    </section>
  </main>
  <footer>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <script>
    // String of url base
    var correctAns = 0;

     // Array of mp3
    var list = ["a.ogv", "b.ogv", "v.ogv", "g.ogv", "d.ogv", "dj.ogv"];
     // Array of the alphabet
    var answ = ["а", "б", "в", "г", "д", "ђ"];
     // Number index of current turn
    var turn = 0;
     // Reference the <audio> 
    var player = document.getElementById("audio");
     // Reference the text <input>
    var text = document.getElementById("answer");
     // Reference the text <output> // 🐞
    var display = document.getElementById('display');
     // Listen for click event and invoke playAudio()
    document.getElementById('clip').addEventListener('click', playAudio);
     // Listen for click event and invoke checkAnswer()
    document.getElementById('check').addEventListener('click', checkAnswer);
     // Listen for click event and invoke nextLetter()
    document.getElementById('next').addEventListener('click', nextLetter);

    function playAudio() {

      if (player.src === "https://www-drv.com/site/kp6h65kzzsawpdclyfbbkq/pub/am/test.mp3") {
        
       
        // Assign the "path" to .src prroperty
        player.src = list[turn];
        /* console.log(path); */ // 🐞

        /* Whenever an <audio> element's .src has changed, 
    |  use the .load() property afterwards
    */
        player.load();
        player.play();
      } else {
        player.play();
      }
    }

    function checkAnswer() {
      /* console.log(answ[turn]); */ // 🐞

      /* Compare value of answer to the current index
  |  of the answ[] array
  */
      if (text.value === answ[turn]) {

        // Reveal the #next button
        next.classList.remove('hide');
        alert("Bravo!");

        // Increment the 'turn' counter
                correctAns++;
                turn++;
        if(turn == 6){
          turn = 0;
        }
        
      } else {
        correctAns--;
        alert("Try again!");
      }
    }

    function nextLetter() {
      /* console.log(turn); */ // 🐞
      player.src = "https://www-drv.com/site/kp6h65kzzsawpdclyfbbkq/pub/am/test.mp3";
      // Clear text <input>
      text.value = "";
      // Hide the #next button
      next.classList.add('hide');
    }
  
     // Shuffle 2 arrays simultaneously
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
      shuffle(list, answ);
      /* console.log(list); */ // 🐞
      /* console.log(answ); */ // 🐞
      /* display.textContent = answ; */ // 🐞
    }
  </script>
</body>

</html>