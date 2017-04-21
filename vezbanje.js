 

                //kod koji dodeljuje tu vrednost nasumično
                  
                  var niz = ["a.ogv", "b.ogv", "v.ogv"];
                  var random =Math.floor(Math.random() * 3); 
                  var rand = niz[random];
                  var zvuk = document.getElementById('audio');
                   var text = document.getElementById("upisi");

              

               function dodeli(){
                  zvuk.src = rand;
               }

               

                //kod koji oglašava zadatu vrednost
                function zadaj(){
                  zvuk.play();
                }

                  //slovo koje se oglašava i upisuje u tekstualno polje
                  var zvukSlova = document.getElementById('audioSlova');
                  function slovoA(){
                  zvukSlova.src = "a.ogv"
                  zvukSlova.play();
                  text.value = "a.ogv";
                }

                
                  function slovoB(){
                  zvukSlova.src = "b.ogv"
                  zvukSlova.play();
                  text.value = "b.ogv";
                }

                function proveri(){
                      if(text.value == rand){
                        alert("bravo");
                      }else{
                        alert("try again!");
                      }
                  }

                  
                
               
                  

                
