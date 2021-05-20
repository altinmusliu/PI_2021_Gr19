<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrrokMotion</title>
    <link rel="stylesheet" href="Home.Css"/> 
    <link rel="stylesheet" href="Header_Footer.css"/> 
    <script src="https://kit.fontawesome.com/3f982de400.js" crossorigin="anonymous"></script>
    <script>
        function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
          if (this.responseText == "tip_aktiv") {
              document.getElementById("linku").setAttribute("href", "telefonia.html");
          }
          else if(this.responseText == "tip_premium"){
              document.getElementById("linku").setAttribute("href", "telefonia.html");
          }
          else if(this.responseText == "tip_basic"){
              document.getElementById("linku").setAttribute("href", "telefonia.html");
          }
            else if(this.responseText == "interneti_superfibra"){
              document.getElementById("linku").setAttribute("href", "interneti.html");
          }
          else if(this.responseText == "interneti_parapagim"){
              document.getElementById("linku").setAttribute("href", "interneti.html");
          }
          else {
              document.getElementById("linku").removeAttribute("href");
          }
      }
    };
    xmlhttp.open("GET", "ajax.php?q=" + str, true);
    xmlhttp.send();
  }
}
    </script>

</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=257205876161869&autoLogAppEvents=1" nonce="GG2DvCHF"></script>
    <header style="position: absolute;">
        <div class="divi">
            <div class="container">
                <img src="Logo.png"  class="logo" />
                <nav>
                    <ul>
                        <li><a href="Home.php">Home</a></li>
                        <li><a href="Telefonia.html">Telefonia</a></li>
                        <li><a href="Interneti.html">Interneti</a></li>
                        <li><a href="Help&Support.php">Help&Support</a></li>
                        <li><a href="Profili_im.php">Profili Im</a></li>
                        <li> <form action="">
                            <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
                            <button type="submit"><i class="fa fa-search"></i></button>
                             
                          </form></li>
                    </ul>

                </nav>
                
            </div>
             <p style="color:white;left:1030px;position:relative">Suggestions:<a id="linku"><span id="txtHint" style="color:white"></span></a></p>

           </div>
    </header>
    <div class="slideshow-conttainer">
        <div class="slides">
            <div>
                <img src="foto\i4.jpg" alt="img" >
            </div>
        </div>
        <div class="slides">
            <div>
                <img src="foto\i5.jfif" alt="img" >
            </div>
        </div>
        <div class="slides">
            <div>
                <img src="foto\i8.jfif" alt="img" >
            </div>
        </div>
        <a class="prev" onclick="plusIndex(+1)">&#10094;</a>
        <a class="next" onclick="plusIndex(-1)">&#10095;</a>
    </div>
    <script src="Script1.js">

    </script>

    <div class="andi">
        <div class="container">
            

            <div class="box">
            </div>
            <div class="box1">
                <p style="font-family:'Times New Roman';text-shadow:2px 2px 4px gray;font-size:20px;color:black;margin-top: 0;">B&euml;hu pjes&euml; e grupit <b><u>'FRROK'</u></b> dhe p&euml;rfito shum&euml; shp&euml;rblime nga me te ndryshmet. Duke filluar nga 1 janari do te kete zbritje te  pafundme marramendese ne te gjitha artikujt e Frrok Motion dhe gjithashtu do te mbahet loje shperblyese per te fituar nje Opel Corsa</p>
                
            </div>

        </div>
        <div class="container">
            <div class="box2">
                <p style="font-family:'Times New Roman';text-shadow: 2px 2px 4px gray;font-size: 20px;color: black"><br /><br />&#76;idhu me internetin m&euml; t&euml; shpejt&euml; n&euml; rajon</p><br>
            </div>
            <div class="box3">
            </div>

        </div>
        <div class="container">
            <div class="box4">

            </div>
            <div class="box5">
                <p style="font-family:'Times New Roman';text-shadow: 2px 2px 4px gray;font-style: italic;font-size: 20px;color: black"><br /><br />&#73;nterneti m&euml; i shpejt&euml; p&euml;r sht&euml;pi dhe biznes</p><br>
                <p id="paragrafi" onclick="teksti()">See more...</p>
            </div>
            <script>

                function teksti() {
                    document.getElementById('paragrafi').innerHTML = "Oferta me e mire ne treg me shpejtesi te internetit sa shpejtesia e drites hehehe";
                }

            </script>

        </div>
        

     <!-- <nav></nav> -->
    <footer>
    </footer>
        <div class="footer">    
            <div class="inner_footer">
                    <div class="footer_items">
                        <h2>Quick Links</h2>
                        <div class="border"></div>
                        <ul>
                            <a href ="#"><li>Home</li></a>
                             <a href="Telefonia.html"><li>About us</li></a>
                             <a href="Interneti.html"><li>Gallery</li></a>
                            <a href="Help&Support.html"><li>Contact</li></a>
                           
                        </ul>
                    </div>
                <div class="footer_items">
                    <h2>Njoftime</h2>
                    <div class="border"></div>
                    <ul>
                        
                        <li>Njoftime</li>
                        <li>Publikime</li>
                        <li><a href="geolocation.html" target="_blank">Lokacioni im</a></li>
                        <li><a href="FrorkFun.html" target="_blank"> Argetohu:</a> </li>
                        <dt> Mbulueshmeria
                                <dd>Kosova</dd>
                                <dd>Rajoni</dd>
                        </dt>
                    </ul>
                </div>
                <div class="footer_items">
                    <h2>FrrokContact</h2>
                    <div class="border"></div>
                    <ul>
                        <li>Adress: <a href="https://www.google.com/maps/place/Mujo+Ulqinaku,+Prishtin%C3
                            %AB/@42.6573916,21.1535709,17z/data=
                            !3m1!4b1!4m5!3m4!1s0x13549ee562ac94e5:0xc
                            c73734b25c546b7!8m2!3d42.6573916!4d21.1557596",base target="_blank">Rr. Mujo Ulqinaku,Pejton,</br>
                             Prishtine,Kosove</li></a>
                        <li><mark> 049100062</mark></li>
                        <address><a href="mailto:FrrokMotion@gmail.com"><li>FrrokMotion@hgmail.com</li></a></address>
                    </ul>
                </div>
                <div class="footer_items">
                    <h2>Social</h2>
                    <div class="border"></div>
                    <ul>
                        <li><a href="https://www.facebook.com/" target="_blank"><abbr title="Facebook">Fb</abbr><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/"target="_blank"><abbr title="Twitter">Tw</abbr><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.google.com/"target="_blank">Google <i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.instagram.com/"target="_blank">Instagram <i class="fab fa-instagram"></i></a></li>
                        <li><div class="fb-share-button" data-href="https://bleronmexhuani1.github.io/INT20_21_Gr6/" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fbleronmexhuani1.github.io%2FINT20_21_Gr6%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div></li>
                        <li><a href="https://twitter.com/Altin97403910?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @Altin97403910</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>

                    </ul>
                </div>
                <button onclick="displayDate()" style="border: 0;background-color: transparent;">Show Date : </button>
                <p id="showDate" style="font-style: italic; color: black;"></p>
            </div>
                </div>
            </div>
        </div>        

</body>
</html>
<script> 
        const header = document.querySelector('.divi')
        document.addEventListener('scroll',()=> {
            var scroll_position = window.scrollY;
            if (scroll_position > 550) {
                header.style.backgroundColor = "#29323c";
            } else {
                header.style.backgroundColor = "transparent";
            }
        });

function displayDate() {
    document.getElementById("showDate").innerHTML =Date();
}

</script>