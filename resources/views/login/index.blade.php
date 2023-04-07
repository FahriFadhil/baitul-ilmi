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