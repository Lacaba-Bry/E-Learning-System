<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - BryanDex</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Mulish', sans-serif;
      background: url('asset/image//Index/login/login.jpg') no-repeat center center fixed;
      background-size: cover;
      color: white;
    }


    /* Login form container */
    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
      padding-top: 60px;
    }

    .login-form {
      background-color: rgba(0, 5, 16, 0.95);
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.6);
      width: 100%;
      max-width: 400px;
    }

    .login-form h2 {
      color: #fff;
      margin-bottom: 20px;
      font-weight: 600;
    }

    .login-form input {
      background-color: #0f172a;
      border: 1px solid #334155;
      color: #fff;
      padding: 12px;
      width: 100%;
      border-radius: 6px;
      margin-bottom: 15px;
      font-size: 1rem;
    }

    .login-form input::placeholder {
      color: #bbb;
    }

    .login-form button[type="submit"] {
      background-color: #ffd60a;
      color: #000;
      font-weight: bold;
      padding: 12px;
      border-radius: 6px;
      border: none;
      width: 100%;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .login-form button[type="submit"]:hover {
      background-color: #facc15;
    }

    .forgot-password {
      text-align: center;
      margin-top: 10px;
    }

    .forgot-password a {
      color: #5ddcff;
      font-weight: bold;
      text-decoration: none;
    }

    .forgot-password a:hover {
      text-decoration: underline;
    }

    .social-login-buttons {
      margin-top: 20px;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .social-login-buttons a {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 12px;
      border-radius: 6px;
      font-weight: bold;
      text-decoration: none;
      color: white;
      transition: background 0.3s ease;
    }

    .social-login-buttons img {
      margin-right: 10px;
      width: 24px;
      height: 24px;
    }

    .social-login-buttons .google {
      background-color: #ea4335;
    }

    .social-login-buttons .google:hover {
      background-color: #c5221f;
    }

    .social-login-buttons .github {
      background-color: #0f172a;
    }

    .social-login-buttons .github:hover {
      background-color: #1e293b;
    }
  </style>
</head>
<body>
 <header>
    <?php include('files/header.php'); ?>
  </header>


<!-- LOGIN FORM -->
<div class="login-container">
  <div class="login-form">
    <h2>Login </h2>
    <form action="login-process.php" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>

      <div class="forgot-password">
  <a href="#">Forgot your password?</a>
  <a href="signup.php" class="ms-5">Sign up?</a>
</div>
    </form>

    <!-- SOCIAL LOGINS -->
    <div class="social-login-buttons">
      <a href="https://accounts.google.com/o/oauth2/auth?client_id=YOUR_GOOGLE_CLIENT_ID&redirect_uri=YOUR_REDIRECT_URI&response_type=code&scope=openid%20profile%20email" class="google">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Google.png" alt="Google Logo">Login with Google
      </a>
      <a href="https://github.com/login/oauth/authorize?client_id=YOUR_GITHUB_CLIENT_ID&redirect_uri=YOUR_REDIRECT_URI" class="github">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" alt="GitHub Logo">Login with GitHub
      </a>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
