<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style/login.css">
  <script src="https://kit.fontawesome.com/16e162acfb.js" crossorigin="anonymous"></script>
  <title>Baitul 'Ilmi</title>
  <link rel="icon" href="/image/logo.png" type="image/x-icon">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    .container {
      width: 100%;
      height: 100vh;
      background: linear-gradient(rgba(0, 0, 50, 0.8), rgba(46, 46, 46, 0.8)), url(/image/Baitul_Ilmi.jpeg);
      background-position: center;
      background-size: cover;
      position: relative;
    }

    .form-box {
      width: 90%;
      max-width: 450px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #fff;
      padding: 50px 60px 70px;
      border-radius: 15px;
      text-align: center;
    }

    .form-box h1 {
      font-size: 30px;
      margin-bottom: 60px;

      color: #89B93B;
      position: relative;
    }

    .form-box h1::after {
      content: '';
      width: 30px;
      height: 4px;
      border-radius: 3px;
      background: #89B93B;
      position: absolute;
      bottom: -12px;
      left: 50%;
      transform: translateX(-50%);
    }

    .input-field {
      background: #eaeaea;
      margin: 15px 0;
      display: flex;
      align-items: center;
      max-height: 65px;
      transition: max-height 0.5s;
      overflow: hidden;
    }

    input {
      width: 100%;
      background: transparent;
      border: 0;
      outline: 0;
      padding: 18px 15px;
    }

    .input-field i {
      margin-left: 15px;
      color: #999;
    }

    form p {
      text-align: left;
      font-size: 13px;
    }

    form p a {
      text-decoration: none;
      color: #89B93B;
    }

    .btn-field {
      width: 100%;
      display: flex;
      justify-content: space-between;
    }

    .btn-field button {
      flex-basis: 48%;
      background: #89B93B;
      color: #fff;
      height: 40px;
      border-radius: 20px;
      border: 0;
      outline: 0;
      cursor: pointer;
      transition: background 1s;
    }

    .input-group {
      height: 280px;
    }

    .btn-field button.disable {
      background: #eaeaea;

      color: #555;

      transition: background 1s;
    }
  </style>
</head>

<body>
  @include('login.css')
  <div class="container">
    <div class="form-box">
      <h1 id="title">Sign Up</h1>
      <form>
        <div class="input-group">
          <div class="input-field" id="nameField">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Nama">
          </div>

          <div class="input-field">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Email">
          </div>

          <div class="input-field">
            <i class="fa-solid fa-user"></i>
            <input type="password" placeholder="Password">
          </div>
          <p>Lupa Sandi <a href="#">Klik Disini!</a></p>
        </div>
        <div class="btn-field">
          <button type="button" id="signupBtn">Sign Up</button>
          <button type="button" id="signinBtn" class="disable">Sign In</button>
        </div>
      </form>
    </div>
  </div>
  <script>
    let signupBtn = document.getElementById("signupBtn")
    let signinBtn = document.getElementById("signinBtn")
    let nameField = document.getElementById("nameField")
    let title = document.getElementById("title")

    signinBtn.onclick = function() {
      nameField.style.maxHeight = "0";
      title.innerHTML = "Sign in"
      signupBtn.classList.add("disable")
      signinBtn.classList.remove("disable")
    }

    signupBtn.onclick = function() {
      nameField.style.maxHeight = "60px";
      title.innerHTML = "Sign up"
      signupBtn.classList.remove("disable")
      signinBtn.classList.add("disable")
    }
  </script>
</body>

</html>