<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login / Signup</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap');

  * {
    box-sizing: border-box;
  }

  body {
    background: linear-gradient(135deg, #667eea, #764ba2);
    font-family: 'Poppins', sans-serif;
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
  }

  .container {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(12px);
    padding: 2rem 3rem;
    border-radius: 16px;
    width: 350px;
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
  }

  h2 {
    text-align: center;
    font-weight: 600;
    margin-bottom: 1.5rem;
  }

  form {
    display: flex;
    flex-direction: column;
  }

  label {
    margin-bottom: 0.5rem;
    font-weight: 600;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"] {
    padding: 0.7rem 1rem;
    margin-bottom: 1.3rem;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    outline: none;
    transition: box-shadow 0.25s;
  }

  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="password"]:focus {
    box-shadow: 0 0 5px 2px rgba(255,255,255,0.6);
  }

  button {
    background: #5a4cae;
    border: none;
    color: #fff;
    font-weight: 700;
    padding: 0.8rem;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1.1rem;
    transition: background-color 0.3s;
  }

  button:hover {
    background: #7b6ee3;
  }

  .switch-text {
    margin-top: 1rem;
    font-size: 0.9rem;
    text-align: center;
    color: #e0d7f8;
  }

  .switch-text a {
    color: #ffd700;
    cursor: pointer;
    font-weight: 600;
    text-decoration: none;
  }

  .switch-text a:hover {
    text-decoration: underline;
  }
</style>
</head>
<body>
  <div class="container">
    <div id="login-form">
      <h2>Login</h2>
      <form id="form-login" method="post" action="">
        <label for="login-email">Email</label>
        <input id="login-email" type="email" required placeholder="Email address"  name="email" />
        <label for="login-password">Password</label>
        <input id="login-password" type="password" required placeholder="Password"  name="pass"/>
        <button type="submit" name=login>Log In</button>
      </form>
      <div class="switch-text">
        Don't have an account? <a id="show-signup" href="javascript:void(0);">Sign Up</a>
      </div>
    </div>

    <div id="signup-form" style="display:none;">
      <h2>Sign Up</h2>
      <form id="form-signup" method="POST" action="" autocomplete="off">
        <label for="signup-name" >Full Name</label>
        <input id="signup-name" type="text" required placeholder="Your full name" name="fname"/>
        <label for="signup-email">Email</label>
        <input id="signup-email" type="email" required placeholder="Email address" name="email"/>
        <label for="signup-password">Password</label>
        <input id="signup-password" type="password" required placeholder="Choose a password" name="pass"/>
        <button type="submit" name="sub">Sign Up</button>
      </form>
      <div class="switch-text">
        Already have an account? <a id="show-login" href="javascript:void(0);">Log In</a>
      </div>
    </div>
  </div>

<script>
  const showSignupLink = document.getElementById('show-signup');
  const showLoginLink = document.getElementById('show-login');
  const loginForm = document.getElementById('login-form');
  const signupForm = document.getElementById('signup-form');

  showSignupLink.addEventListener('click', () => {
    loginForm.style.display = 'none';
    signupForm.style.display = 'block';
  });

  showLoginLink.addEventListener('click', () => {
    signupForm.style.display = 'none';
    loginForm.style.display = 'block';
  });
</script>








 


</body>
</html>