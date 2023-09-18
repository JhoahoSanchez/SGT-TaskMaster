<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/login.css" />
  <title>Login</title>
</head>

<body>
  <header class="header">
    <nav class="nav">
      <a href="login.php"> Home </a>
      <a href="#"> About </a>
      <a href="#"> Service </a>
      <a href="#"> Contact </a>
    </nav>
    <div class="search">
      <i class="fa-solid fa-magnifying-glass"></i>
      <i class="fa-solid fa-user"></i>
    </div>
  </header>
  <div class="background"></div>
  <section class="home">
    <div class="content">
      <a href="login.php" class="logo a">
        <i class="fa-solid fa-list-check"></i> TaskMaster</a>
      <h2>Organize</h2>
      <h3>your day</h3>
      <pre>
One task at a time,
with our task management app </pre>
      <div class="icon">
        <a href="https://www.instagram.com/jhoaho.dev/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.facebook.com/gabriel.sanchez.37454961" target="_blank"><i
            class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="https://github.com/JhoahoSanchez" target="_blank"><i class="fa-brands fa-github"></i></a>
      </div>
    </div>
    <div class="login">
      <form action="" method="post">
        <h2>Login</h2>
        <div class="input">
          <input type="text" class="input1" placeholder="Email" required />
          <i class="fa-solid fa-envelope"></i>
        </div>
        <div class="input">
          <input type="password" class="input1" placeholder="Password" required />
          <i class="fa-solid fa-lock"></i>
        </div>
        <div class="check">
          <label> <input type="checkbox" /> Remember me </label>
          <a href="#"> Forgot Password?</a>
        </div>
        <div class="button">
          <input type="submit" value="Login" class="submmit-button" />
        </div>
        <div class="sign-up">
          <p>Don't have an account?&nbsp;</p>
          <a href="#"> Sign up</a>
        </div>
      </form>
    </div>
  </section>

  <script src="https://kit.fontawesome.com/29b00e39f3.js" crossorigin="anonymous"></script>
</body>

</html>