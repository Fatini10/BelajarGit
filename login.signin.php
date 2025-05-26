
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
  <title>Login & Sign Up - Multi Role</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap');

    * {
      box-sizing: border-box;
    }

    body, html {
      margin: 0;
      height: 100%;
      font-family: 'Poppins', sans-serif;
      background-color: #f5f7fa;
      color: #333;
      overflow: hidden;
    }

    .container {
      display: flex;
      height: 100vh;
      max-height: 600px;
      max-width: 100vw;
      min-width: 350px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      border-radius: 10px;
      overflow: hidden;
      margin: auto;
      max-width: 900px;
      margin-top: 5%;
      margin-bottom: 10%;
    }

    .form-side, .image-side {
      flex: 1;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 30px;
      transition: all 0.5s ease;
    }

    .form-side {
      background: #fff;
      box-shadow: inset -10px 0 15px -10px rgba(0,0,0,0.1);
      flex: 1;
      flex-basis: 50%;
      z-index: 5;
    }

    .form-container {
      width: 100%;
      max-width: 320px;
      margin-bottom: 15%;
      margin-top: 15%;
    }

    h2 {
      font-weight: 600;
      margin-bottom: 20px;
      color: #1a1a1a;
    }

    label {
      display: block;
      font-size: 14px;
      margin-bottom: 6px;
      font-weight: 600;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
      width: 100%;
      padding: 10px 14px;
      margin-bottom: 18px;
      border: 1.8px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
      transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus,
    select:focus {
      outline: none;
      border-color: #3b82f6;
      box-shadow: 0 0 5px #3b82f6;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #3b82f6;
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s;
      margin-bottom: 12px;
    }

    button:hover {
      background-color: #2563eb;
    }

    .switch-form {
      text-align: center;
      font-size: 14px;
      color: #555;
    }

    .switch-form button {
      background: none;
      border: none;
      color: #3b82f6;
      cursor: pointer;
      font-weight: 600;
      padding: 0;
      margin-left: 6px;
      
    }

    .image-side {
      background: url('https://images.pexels.com/photos/3184455/pexels-photo-3184455.jpeg?auto=compress&cs=tinysrgb&w=800') center center/cover no-repeat;
      flex-basis: 50%;
      position: relative;
    }

    /* Overlay for text on image side if needed */
    .image-overlay {
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.3);
      z-index: 1;
      pointer-events: none;
    }

    /* Form heading on image side for bigger screens */
    .image-caption {
      position: absolute;
      bottom: 30px;
      left: 30px;
      color: #fff;
      font-weight: 600;
      font-size: 1.2rem;
      z-index: 5;
      user-select: none;
    }

    /* MOBILE/VERTICAL LAYOUT */
    @media (max-width: 768px), (max-height: 600px) {
      .container {
        flex-direction: column;
        height: 100vh;
        max-width: 350px;
        max-height: 600px;
        border-radius: 0;
        box-shadow: none;
      }

      .form-side {
        position: absolute;
        width: 100%;
        max-width: 350px;
        padding: 20px 25px;
        background-color: rgba(255 255 255 / 0.85);
        border-radius: 10px;
        z-index: 10;
        margin: 0;
      }

      .image-side {
        flex-basis: auto;
        height: 100vh;
        background-position: center;
        filter: brightness(0.5);
        border-radius: 0;
      }

      .image-overlay {
        display: none;
      }

      .image-caption {
        display: none;
        /* color: #000000; */
      }
    }
  </style>
</head>
<body>
  <div class="container" role="main">
    <section class="form-side" aria-label="Authentication form section">
      <div class="form-container" id="form-container">
      <!-- <div class="image-caption">Welcome! Please login or sign up to continue.</div> -->
       <!-- <h1>Welcome! Please login or sign up to continue.</h1> -->
        <h2 id="form-title">LOGIN</h2>
        <form id="auth-form" aria-describedby="form-desc" novalidate>
          <div id="form-desc" class="sr-only">Fill the form to login or sign up</div>
          <div id="signup-extra" style="display:none;">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" placeholder="Your full name" autocomplete="name" />
          </div>

          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="name@example.com" autocomplete="email" required />

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter password" autocomplete="current-password" required minlength="6" />

          <label for="role">Select Role</label>
          <select id="role" name="role" aria-label="Select user role" required>
            <option value="" disabled selected>Choose a role</option>
            <option value="bppl">BPPL</option>
            <option value="kb">Ketua Bahagian</option>
            <option value="pelajar">Pelajar</option>
          </select>

          <label for="bengkel">Select Course</label>
          <select id="bengkel" name="bengkel" aria-label="Select course" required>
            <option value="" disabled selected>Choose Your Course</option>
            <option value="bppl">BPPL</option>
            <option value="kb">Ketua Bahagian</option>
            <option value="pelajar">Pelajar</option>
          </select>

          <button type="submit" id="submit-btn">Login</button>
        </form>
        <div class="switch-form">
          <span id="switch-text">Don't have an account?</span>
          <button id="switch-btn" aria-controls="auth-form" aria-live="polite" aria-pressed="false">Sign Up</button>
        </div>
      </div>
    </section>
    <section class="image-side" aria-label="Visual illustration">
      <div class="image-overlay"></div>
      <!-- <div class="image-caption">Welcome! Please login or sign up to continue.</div> -->
    </section>
  </div>

  <script>
    (function() {
      const formContainer = document.getElementById('form-container');
      const formTitle = document.getElementById('form-title');
      const authForm = document.getElementById('auth-form');
      const submitBtn = document.getElementById('submit-btn');
      const switchBtn = document.getElementById('switch-btn');
      const switchText = document.getElementById('switch-text');
      const signupExtra = document.getElementById('signup-extra');
      const roleSelect = document.getElementById('role');
      let isLogin = true;

      function toggleForm() {
        isLogin = !isLogin;
        if (isLogin) {
          formTitle.textContent = 'Login';
          submitBtn.textContent = 'Login';
          switchText.textContent = "Don't have an account?";
          switchBtn.textContent = 'Sign Up';
          switchBtn.setAttribute('aria-pressed', 'false');
          signupExtra.style.display = 'none';
          authForm.password.placeholder = 'Enter password';
          authForm.password.autocomplete = 'current-password';
          clearForm();
        } else {
          formTitle.textContent = 'Sign Up';
          submitBtn.textContent = 'Sign Up';
          switchText.textContent = 'Already have an account?';
          switchBtn.textContent = 'Login';
          switchBtn.setAttribute('aria-pressed', 'true');
          signupExtra.style.display = 'block';
          authForm.password.placeholder = 'Create a password';
          authForm.password.autocomplete = 'new-password';
          clearForm();
        }
      }

      function clearForm() {
        authForm.reset();
        // Set role to default empty again after reset
        roleSelect.value = "";
      }

      switchBtn.addEventListener('click', (e) => {
        e.preventDefault();
        toggleForm();
      });

      authForm.addEventListener('submit', (e) => {
        e.preventDefault();

        // Basic validation
        if (!roleSelect.value) {
          alert('Please select a role.');
          roleSelect.focus();
          return;
        }

        if (isLogin) {
          // Login logic simulation
          alert(`Logging in as ${roleSelect.value} with email: ${authForm.email.value}`);
        } else {
          if (!authForm.fullname.value.trim()) {
            alert('Please enter your full name.');
            authForm.fullname.focus();
            return;
          }
          if (authForm.password.value.length < 6) {
            alert('Password must be at least 6 characters.');
            authForm.password.focus();
            return;
          }
          // Sign up logic simulation
          alert(`Signing up ${authForm.fullname.value} as ${roleSelect.value} with email: ${authForm.email.value}`);
        }
        clearForm();
      });
    })();
  </script>

  <style>
    /* Utility for screen reader only text */
    .sr-only {
      position: absolute !important;
      width: 1px !important;
      height: 1px !important;
      padding: 0 !important;
      margin: -1px !important;
      overflow: hidden !important;
      clip: rect(0, 0, 0, 0) !important;
      white-space: nowrap !important;
      border: 0 !important;
    }
  </style>
</body>
</html>

```

