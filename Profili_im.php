<!DOCTYPE html>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    .form-box {
        margin-top: 250px;
        width: 380px;
        height: 600px;
        position: relative;
        margin-left: 550px;
        padding: 5px;
        overflow: hidden;
        background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4));
        margin-bottom: 100px;
    }

    .button-box {
        width: 220px;
        margin: 35px auto;
        position: relative;
        /*box-shadow: 0 0 20px 9px gray;*/
        border-radius: 30px;
    }

    .toggle-btn {
        padding: 10px 30px;
        cursor: pointer;
        background: transparent;
        border: 0;
        outline: none;
        position: relative;
    }

    #btn {
        top: 0;
        left: 0;
        position: absolute;
        width: 110px;
        height: 100%;
        background: radial-gradient(ellipse at top, gray, transparent);
        border-radius: 30px;
        transition: .5s;
    }

    .social-icons {
        margin: 30px auto;
        text-align: center;
    }
    
    .social-icons  a {
      margin: 20px;
    }

        .social-icons img {
            width: 30px;
            margin: 0 12px;
            box-shadow: 0 0 20px 0 #7f7f7f3d;
            cursor: pointer;
            border-radius: 50%;
        }

    .input-group {
        top: 180px;
        position: absolute;
        width: 280px;
        transition: .5s;
    }

    .input-field {
        width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 1px solid #999;
        outline: none;
        background: transparent;
    }

    .submit-btn {
        width: 85%;
        padding: 10px 30px;
        cursor: pointer;
        display: block;
        margin: auto;
        background: linear-gradient(to right,gray,white);
        border: 0;
        outline: none;
        border-radius: 30px;
    }

    .check-box {
        margin: 30px 10px 30px 0;
    }

    span {
        color: #777;
        font-size: 12px;
        bottom: 68px;
        position: absolute;
    }

    #login {
        left: 50px;
    }

    #register {
        left: 450px;
    }
    input.valid{
    border:3px solid green;
    width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        outline: none;
        background: transparent;

}
input.invalid{
    border:3px solid red;
    width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        outline: none;
        background: transparent;
}
input + p{
    margin-top: 5px;
    opacity: 0;
    color: red;
    font-style: italic;
}
input.invalid + p {
    opacity: 1;
    margin-bottom: 15px;
}
</style>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Profili Im</title>
    <script src="https://kit.fontawesome.com/3f982de400.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Header_Footer.css"/>

</head>
<body style="background-color:gray;margin: 0;">

<header>
   <div class="divi" style="position: absolute; background:linear-gradient(to right,gray,white);">
    <div class="container" >
        <img src="Logo.png"  class="logo" alt="logoja" href="https://meet.google.com/ndm-mpff-zkw"/>
        <nav>
            <ul>
                <li><a href="Home.html">Home</a></li>
                <li><a href="Telefonia.html">Telefonia</a></li>
                <li><a href="Interneti.html">Interneti</a></li>
                <li><a href="Help&Support.html">Help&Support</a></li>
                <li><a href="Profili_im.html">Profili Im</a></li>
                <li> <form action="">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form></li>
                
            </ul>
        </nav>
    </div>
   </div>
</header>
    <div style="background-color:gray;">
        
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button> 
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
               
                <a href="https://www.facebook.com/" target="_blank"><abbr title="Facebook"></abbr><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/" target="_blank"><abbr title="Twitter"></abbr><i class="fa fa-twitter"></i></a>
                <a href="https://www.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <form id="login" class="input-group" action="login.php" method="post">
                <input type="text" name="username"class="input-field" placeholder="Username" id="username" autofocus >
                <p id="p01"> Duhet te jete mes 5-12 shkronjave </p>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" id="password" /><!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}"--> 
                <p id="p01"> Duhet te jete mes 8-18 karaktereve</p>

<!--              <input type="checkbox" class="check-box"><span>Remember Password</span> -->
                <button type="submit" class="submit-btn" id="submit">Log In</button>
            </form>
            <form id="register" class="input-group" action="script1.php" method="post">
                <input type="text" name="username" class="input-field" id="username" placeholder="Username"  autofocus >
                <p id="p01"> Duhet te jete mes 5-12 shkronjave </p>
                <input type="email" name="email" class="input-field" id="email" placeholder="Email Id" />
               <!-- pattern="([a-z\d\.-_]+)@([a-z\d-]+)\.([a-z]{2,10})(\.[a-z]{2,10})?$">-->
                <p id="p01"> filani@fisteku.com(.eu) </p>
                <input type="password" name="password" class="input-field" id="password" placeholder="Enter Password">
                <p id="p01"> Duhet te jete mes 8-18 karaktereve</p>
              <!-- <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>-->
                <keygen name="secure"> <button type="submit" id="submit" class="submit-btn">Register</button> 
            </form>
        </div>
    </div>
    <div class="footer">
        <div class="inner_footer">
            <div class="footer_items">
                <h2>Sherbime dhe Produkte</h2>
                <div class="border"></div>
                <ul>
                    <a href="Telefonia.html"><li>Telefonia</li></a>
                    <a href="Interneti.html"><li>Interneti</li></a>
                    
                </ul>
            </div>
            <div class="footer_items">
                <h2>Njoftime</h2>
                <div class="border"></div>
                <ul>
                    
                    <li>Njoftime</li>
                    <li>Publikime</li>
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
                    <li>Phone: 049100062</li>
                    <a href="mailto:FrrokMotion@gmail.com"><li>FrrokMotion@hgmail.com</li></a>
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
                </ul>
            </div>
            <button onclick="displayDate()" style="border: 0;background-color: transparent;">Show Date : </button>
            <p id="showDate" style="font-style: italic;"></p>
        </div>
        
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }



function displayDate() {
    document.getElementById("showDate").innerHTML =Date();
}

        $("#submit").click(function(){
            var username = $("#username").val();
            var email = $("#email").val();
            var password = $("#password").val();

            if (username == '' || email == '' || password == '') {
                alert("Plotesoni te gjitha fushat");
            }
            
        });



        function myFunction() {
  var message;
  var x;
  message = document.getElementById("p01");
  x = document.getElementById("username").value;
  var n=x.length;
  try { 
    if(n == 0)  throw "bosh";
    if(n < 5)  throw " i shkurter";
    if(n > 12)   throw "i gjate";
  }
  catch(err) {
    alert("Username eshte shume " + err);
  }
}


const inputs = document.querySelectorAll('input');
const patterns = {
    telephone: /^\d{11}$/,
    username: /^[a-z\d]{5,12}$/i,
    password:/^[\w]{8,18}$/,
    email:/^([a-z\d\.-_]+)@([a-z\d-]+)\.([a-z]{2,10})(\.[a-z]{2,10})?$/g

};

function validate(field,regex){
    if(regex.test(field.value)){
        field.className='valid';
    }else{
        field.className='invalid';
    }
}

inputs.forEach((input)=>{
input.addEventListener('keyup',(e) =>{
    //console.log(e.target.attributes.name.value);
    validate(e.target,patterns[e.target.attributes.name.value])
});
});




</script>
</body>
</html> 