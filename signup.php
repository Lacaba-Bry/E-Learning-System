<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up - BryanDex</title>

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

    .signup-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 90vh;
    }

    .signup-form {
      background-color: rgba(0, 5, 16, 0.95);
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.6);
      width: 100%;
      max-width: 400px;
    }

    .signup-form h2 {
      color: #fff;
      margin-bottom: 20px;
      font-weight: 600;
      text-align: center;
    }

    .signup-form input {
      background-color: #0f172a;
      border: 1px solid #334155;
      color: #fff;
      padding: 12px;
      width: 100%;
      border-radius: 6px;
      margin-bottom: 15px;
      font-size: 1rem;
    }

    .signup-form input::placeholder {
      color: #bbb;
    }

    .signup-form button[type="submit"] {
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

    .signup-form button[type="submit"]:hover {
      background-color: #facc15;
    }

    .login-redirect {
      text-align: center;
      margin-top: 15px;
    }

    .login-redirect a {
      color: #5ddcff;
      font-weight: bold;
      text-decoration: none;
    }

    .login-redirect a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <header>
    <?php include('files/header.php'); ?>
  </header>

  <!-- SIGNUP FORM -->
  <div class="signup-container">
    <div class="signup-form">
      <h2>Create Your Account</h2>
      <form action="signup-process.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit">Sign Up</button>
      </form>

      <div class="login-redirect">
        Already have an account? <a href="login.php">Login here</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
