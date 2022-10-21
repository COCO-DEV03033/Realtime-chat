<?php
session_start();
if (isset($_SESSION['unique_id'])) { // if user is already logged in the same browser, send to users.php
  header('location: users.php');
}
?>
<?php include_once 'header.php' ?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Free Chatting App</header>
      <form action="#" enctype="multipart/form-data">
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input firstName ">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First Name" id="fname" required>
          </div>
          <div class="field input lastName">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" id="lname" required>
          </div>
        </div>
        <div class="field input typeUser">
          <label>TYPES OF USER</label>
          <select name="role" id="role">
            <option value="marketer">Marketer</option>
            <option value="client">Client</option>
            <option value="farm">Farm</option>
          </select>
        </div>
        <div class="field input what">
          <label>What</label>
          <select name="what" id="what">
            <option value="ruc">RUC</option>
            <option value="tin">TIN</option>
            <option value="cedula">CEDULA</option>
          </select>
        </div>
        <div class="field input address">
          <label>Address</label>
          <input type="text" name="address" id="address" placeholder="Enter your address">
        </div>
        <div class="field input email">
          <label>Email</label>
          <input type="email" name="email" id="email" placeholder="Enter your email address" required>
        </div>
        <div class="field input password">
          <label>Password</label>
          <input type="password" name="password" id="password" placeholder="Enter a password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field input confirm">
          <label>Password Confirmation</label>
          <input type="password" name="rpassword" id="rpassword" placeholder="Confirm password">
          <i class="fas fa-eye"></i>
        </div>
        <div class="field input phone">
          <label>Phone Number</label>
          <input type="text" name="phone" id="phone" placeholder="Enter your phone number">
        </div>
        <div class="field input token">
          <label>Token</label>
          <input type="text" name="token" id="token" placeholder="Enter your token">
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" id="image" required>
        </div>
        <div class="field button toChat">
          <input type="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link alreadyQs"><span>Already signed up?</span> <a href="index.php">Login Now</a></div>
    </section>
  </div>

  <script src="./javascript/password-show-hide.js"></script>
  <script src="./javascript/signup.js"></script>
  <script>
  var langs = [
      {
        "header" : "Free Chatting App",
        "email" : "Email",
        "firstName" : "First Name",
        "lastName" : "Last Name",
        "typeUser" : "Type of User",
        "what" : "What",
        "address" : "Address",
        "confirm" : "Password Confirm",
        "phone" : "Phone Number",
        "token" : "Token",
        "selectImage" : "Select Image",
        "password" : "Password",
        "chat" : "Continue to Chat",
        "notQs" : "Already signed up?",
        "nowSign" : "Login Now",
        "enterEmail" : "Enter your email address",
        "enterPass" : "Enter your password",
        "enterFirstname" : "First Name",
        "enterLastname" : "Last Name",
        "what1" : "RUC",
        "what2" : "TIN",
        "what" : "CEDULA",
        "type1" : "Client",
        "type2" : "Marketer",
        "type3" : "Farmer",
        "enterAddress" : "Enter your Address",
        "enterpassconfirm" : "Confirm Password",
        "enterphone" : "Enter your Phone Number",
        "enterToken" : "Enter your Token "
      },
      {
        "header" : "Aplicación de chat",
        "email" : "Correo electrónico",
        "firstName" : "Nombre",
        "lastName" : "Apellido",
        "typeUser" : "Tpo de Usuario",
        "what" : "que",
        "address" : "Dirección",
        "confirm" : "Confirmar contraseña",
        "phone" : "Número de teléfono",
        "token" : "ficha",
        "selectImage" : "Seleccionar imagen",
        "password" : "Contraseña",
        "chat" : "Continuar al chat",
        "notQs" : "¿Ya te registraste?",
        "nowSign" : "Iniciar sesión ahora",
        "enterEmail" : "ngrese su dirección de correo electrónico",
        "enterPass" : "Ingrese su contraseña",
        "enterFirstname" : "Nombre",
        "enterLastname" : "Apellido",
        "what1" : "RUC",
        "what2" : "TIN",
        "what3" : "CÉDULA",
        "type1" : "Cliente",
        "type2" : "Comercializador",
        "type3" : "Granjero",
        "enterAddress" : "Ingrese su dirección",
        "enterpassconfirm" : "Confirmar contraseña",
        "enterphone" : "Ingrese su número de teléfono",
        "enterToken" : "Ingrese su token"
      }
    ]

    setLange()
  function setLange( ) {

     document.querySelector('header').textContent = langs[localStorage.getItem('chatBoxLanguage')].header
     document.querySelector('.email label').textContent = langs[localStorage.getItem('chatBoxLanguage')].email
     document.querySelector('.password label ').textContent = langs[localStorage.getItem('chatBoxLanguage')].password
     document.querySelector(".button input[type='submit']").value = langs[localStorage.getItem('chatBoxLanguage')].chat
     document.querySelector('.link span').textContent = langs[localStorage.getItem('chatBoxLanguage')].notQs
     document.querySelector('.link a').textContent = langs[localStorage.getItem('chatBoxLanguage')].nowSign
     document.querySelector('.firstName label').textContent = langs[localStorage.getItem('chatBoxLanguage')].firstName
     document.querySelector('.lastName label').textContent = langs[localStorage.getItem('chatBoxLanguage')].lastName
     document.querySelector('.typeUser label').textContent = langs[localStorage.getItem('chatBoxLanguage')].typeUser
     document.querySelector('.what label').textContent = langs[localStorage.getItem('chatBoxLanguage')].what
     document.querySelector('.typeUser label').textContent = langs[localStorage.getItem('chatBoxLanguage')].typeUser
     document.querySelector('.address label').textContent = langs[localStorage.getItem('chatBoxLanguage')].address
     document.querySelector('.confirm label').textContent = langs[localStorage.getItem('chatBoxLanguage')].confirm
     document.querySelector('.phone label').textContent = langs[localStorage.getItem('chatBoxLanguage')].phone
     document.querySelector('.token label').textContent = langs[localStorage.getItem('chatBoxLanguage')].token
     document.querySelector('.image label').textContent = langs[localStorage.getItem('chatBoxLanguage')].selectImage
     document.querySelector('.email input').setAttribute('placeholder',langs[localStorage.getItem('chatBoxLanguage')].enterEmail)
     document.querySelector('.password input').setAttribute('placeholder',langs[localStorage.getItem('chatBoxLanguage')].enterPass)
     document.querySelector('.firstName input').setAttribute('placeholder',langs[localStorage.getItem('chatBoxLanguage')].enterFirstname)
     document.querySelector('.lastName input').setAttribute('placeholder',langs[localStorage.getItem('chatBoxLanguage')].enterLastname)
     document.querySelector("#role option[value='marketer']").textContent = langs[localStorage.getItem('chatBoxLanguage')].type1
     document.querySelector("#role option[value='client']").textContent = langs[localStorage.getItem('chatBoxLanguage')].type2
     document.querySelector("#role option[value='farm']").textContent = langs[localStorage.getItem('chatBoxLanguage')].type3
     document.querySelector("#what option[value='ruc']").textContent = langs[localStorage.getItem('chatBoxLanguage')].what1
     document.querySelector("#what option[value='tin']").textContent = langs[localStorage.getItem('chatBoxLanguage')].what2
     document.querySelector("#what option[value='cedula']").textContent = langs[localStorage.getItem('chatBoxLanguage')].what3
     document.querySelector('#address').setAttribute('placeholder',langs[localStorage.getItem('chatBoxLanguage')].enterAddress)
     document.querySelector('#rpassword').setAttribute('placeholder',langs[localStorage.getItem('chatBoxLanguage')].enterpassconfirm)
     document.querySelector('#phone').setAttribute('placeholder',langs[localStorage.getItem('chatBoxLanguage')].enterphone)
     document.querySelector('#token').setAttribute('placeholder',langs[localStorage.getItem('chatBoxLanguage')].enterToken)
     console.log(document.querySelector("#role option[value='marketer']").textContent)
  }
  </script>

</body>

</html>