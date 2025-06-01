<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #a8e063, #56ab2f);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-card {
      max-width: 420px;
      padding: 35px;
      border-radius: 20px;
      box-shadow: 0 0 50px rgba(0, 100, 0, 0.15);
      background: #ffffff;
    }

    h3 {
      font-weight: 600;
      color: #2e7d32;
      font-family: 'Georgia', serif;
    }

    .form-label {
      color: #2e7d32;
      font-weight: 500;
    }

    .form-control {
      border: 1px solid #c8e6c9;
      border-radius: 10px;
      transition: 0.3s;
    }

    .form-control:focus {
      box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
      border-color: #66bb6a;
    }

    .form-check-input:checked {
      background-color: #43a047;
      border-color: #388e3c;
    }

    .btn-primary {
      background-color: #43a047;
      border: none;
      border-radius: 10px;
    }

    .btn-primary:hover {
      background-color: #388e3c;
    }

    a {
      color: #2e7d32;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    .small-text {
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <div class="login-card text-center">
    <h3 class="mb-4">Welcome Back</h3>
    <form>
      <div class="mb-3 text-start">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
      </div>
      <div class="mb-3 text-start">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="••••••••" required>
      </div>
      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="remember">
          <label class="form-check-label small-text" for="remember">Remember me</label>
        </div>
        <a href="#" class="small-text">Forgot password?</a>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
    <p class="mt-3 mb-0 small-text">Don't have an account? <a href="#">Sign up</a></p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
