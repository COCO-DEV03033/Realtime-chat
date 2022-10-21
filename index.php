<?php
session_start();
if (isset($_SESSION['unique_id'])) { // if user is already logged in
  header('location: users.php');  
}
?>
<?php include_once 'header.php' ?>

<body>
  <style>
    a {
      cursor: pointer;
    }
  </style>
  <div class="wrapper">
    <section class="form login">
        <div class="row" style="width: 100%;" >
        <header style="display: inline-block;" >Free Chatting App</header>
        <div class="lang-btn" style="float: right; margin-top:5px; " >
        <a onclick="changeLange(this)">Spain</a>&nbsp; | &nbsp;
        <a onclick="changeLange(this)">English</a>
        </div>
      </div>
      <form action="#">
        <div class="error-txt"></div>
        <div class="field input email">
          <label>Email</label>
          <input type="email" name="email" placeholder="Enter your email address">
        </div>
        <div class="field input password">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password">
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link"><span>Not yet signed up?</span> <a href="signup.php">Signup Now</a></div>
    </section>
  </div>
</body>

<script src="./javascript/password-show-hide.js"></script>
<script src="./javascript/login.js"></script>
<script>

    var langs = [
      {
        "header" : "Free Chatting App",
        "email" : "Email",
        "password" : "Password",
        "chat" : "Continue to Chat",
        "notQs" : "Not yet signed up?",
        "nowSign" : "Signup Now",
        "enterEmail" : "Enter your email address",
        "enterPass" : "Enter your password"
      },
      {
        "header" : "Aplicación de chat",
        "email" : "Correo electrónico",
        "password" : "Clave",
        "chat" : "Continuar al chat",
        "notQs" : "¿Aún no te has registrado?",
        "nowSign" : "Regístrate ahora",
        "enterEmail" : "Ingrese su dirección de correo electrónico",
        "enterPass" : "Ingresa tu contraseña"
      }
    ]

  function changeLange( e ) {
    console.log(typeof(e.text))
    if ( e.text == 'Spain' ) { 
      console.log("language : ", e.text)
      localStorage.setItem("chatBoxLanguage", 1)
     }
     else 
    if ( e.text == "English" ) { 
      console.log("language : ", e.text)
      localStorage.setItem("chatBoxLanguage", 0)
     }

     document.querySelector('header').textContent = langs[localStorage.getItem('chatBoxLanguage')].header
     document.querySelector('.email label').textContent = langs[localStorage.getItem('chatBoxLanguage')].email
     document.querySelector('.password label ').textContent = langs[localStorage.getItem('chatBoxLanguage')].password
     document.querySelector(".button input[type='submit']").value = langs[localStorage.getItem('chatBoxLanguage')].chat
     document.querySelector('.link span').textContent = langs[localStorage.getItem('chatBoxLanguage')].notQs
     document.querySelector('.link a').textContent = langs[localStorage.getItem('chatBoxLanguage')].nowSign
     document.querySelector('.email input').setAttribute('placeholder',langs[localStorage.getItem('chatBoxLanguage')].enterEmail)
     document.querySelector('.password input').setAttribute('placeholder',langs[localStorage.getItem('chatBoxLanguage')].enterPass)
  }

</script>
</html>