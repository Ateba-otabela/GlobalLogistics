<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TruckFlow | Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body{
  min-height:100vh;
  display:flex;
  align-items:center;
  justify-content:center;
  background: linear-gradient(135deg,#fff7f0,#eef3f8);
  font-family:'Segoe UI', sans-serif;
  padding:20px;
}

/* left panel */
.brand{
  background: linear-gradient(135deg,#ff6600,#ff8c42);
  color:white;
  border-radius:20px;
  padding:40px;
  height:100%;
  display:flex;
  flex-direction:column;
  justify-content:center;
}

.brand h1{
  font-weight:800;
}

.brand p{
  opacity:0.9;
}

/* login card */
.login-card{
  background:white;
  border-radius:20px;
  box-shadow:0 10px 30px rgba(0,0,0,0.1);
  padding:35px;
}

/* inputs */
.form-control:focus{
  border-color:#ff6600;
  box-shadow:none;
}

/* button */
.btn-primary{
  background:#ff6600;
  border:none;
}
.btn-primary:hover{
  background:#e65c00;
}

/* social buttons */
.social{
  display:flex;
  gap:10px;
  flex-wrap:wrap;
}

.social button{
  flex:1;
  border:1px solid #ddd;
  background:#fff;
  padding:10px;
  border-radius:10px;
  font-size:14px;
}

.social button:hover{
  background:#f7f7f7;
}

.icon{
  color:#ff6600;
  margin-right:6px;
  font-size:18px;
}

/* link styling */
a{
  color:#ff6600;
  text-decoration:none;
}
a:hover{
  text-decoration:underline;
}
</style>
</head>

<body>

<div class="container">
<div class="row g-4 align-items-center">

<!-- LEFT BRAND PANEL -->
<div class="col-lg-6 d-none d-lg-block">
  <div class="brand">
    <h1>TruckFlow Logistics</h1>
    <p>
      Welcome back to your logistics control center. Manage shipments, track deliveries,
      and monitor global transportation in real time.
    </p>

    <ul class="mt-3">
      <li>✔ Real-time shipment tracking</li>
      <li>✔ Secure logistics dashboard</li>
      <li>✔ Global delivery network</li>
      <li>✔ Fast business operations</li>
    </ul>
  </div>
</div>

<!-- LOGIN FORM -->
<div class="col-lg-6">
  <div class="login-card">

    <h3 class="text-center fw-bold mb-2">Welcome Back</h3>
    <p class="text-center text-muted mb-4">Sign in to continue to TruckFlow</p>

    <!-- SOCIAL LOGIN -->
    <div class="social mb-3">
      <button><i class="bi bi-google icon"></i> Google</button>
      <button><i class="bi bi-facebook icon"></i> Facebook</button>
      <button><i class="bi bi-twitter-x icon"></i> Twitter</button>
    </div>

    <hr>

    <!-- FORM -->
    <form action="/login" method="POST">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="mb-3">
        <label class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="********" required>
      </div>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
          <input type="checkbox" id="remember">
          <label class="small">Remember me</label>
        </div>
        <a href="/password/reset" class="small">Forgot password?</a>
      </div>

      <button type="submit" class="btn btn-primary w-100 py-2">
        Login
      </button>

      <p class="text-center mt-3 small">
        
      </p>

    </form>
  </div>
</div>

</div>
</div>

</body>
</html>