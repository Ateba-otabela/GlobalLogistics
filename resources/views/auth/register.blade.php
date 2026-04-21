<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TruckFlow | Create Account</title>
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
  font-family: 'Segoe UI', sans-serif;
  padding:20px;
}

/* left logistics panel */
.brand-panel{
  background: linear-gradient(135deg,#ff6600,#ff8c42);
  color:white;
  border-radius:20px;
  padding:40px;
  height:100%;
  display:flex;
  flex-direction:column;
  justify-content:center;
}

.brand-panel h1{
  font-weight:800;
}

.brand-panel p{
  opacity:0.9;
}

/* form card */
.register-card{
  background:white;
  border-radius:20px;
  box-shadow:0 10px 30px rgba(0,0,0,0.1);
  padding:35px;
}

.form-control:focus{
  border-color:#ff6600;
  box-shadow:none;
}

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
  font-size:18px;
  margin-right:6px;
  color:#ff6600;
}
</style>
</head>

<body>

<div class="container">
<div class="row g-4 align-items-center">

<!-- LEFT BRAND PANEL -->
<div class="col-lg-5 d-none d-lg-block">
  <div class="brand-panel">
    <h1>TruckFlow Logistics</h1>
    <p>
      Secure. Fast. Reliable delivery system built for modern businesses.
      Manage shipments, track packages in real time, and deliver trust worldwide.
    </p>

    <ul class="mt-3">
      <li>✔ Real-time shipment tracking</li>
      <li>✔ Global logistics coverage</li>
      <li>✔ Secure delivery handling</li>
      <li>✔ Business & customer dashboards</li>
    </ul>
  </div>
</div>

<!-- RIGHT FORM -->
<div class="col-lg-7">
  <div class="register-card">

    <h3 class="mb-3 fw-bold text-center">Create Your Account</h3>
    <p class="text-muted text-center mb-4">Join TruckFlow and start managing your deliveries</p>

    <!-- SOCIAL LOGIN -->
    <div class="social mb-3">
      <button><i class="bi bi-google icon"></i> Google</button>
      <button><i class="bi bi-facebook icon"></i> Facebook</button>
      <button><i class="bi bi-twitter-x icon"></i> Twitter</button>
    </div>

    <hr>

    <!-- FORM -->
    <form action="/register" method="POST">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" name="name" class="form-control" placeholder="John Doe" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="********" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="********" required>
      </div>

      <button type="submit" class="btn btn-primary w-100 py-2">
        Create Account
      </button>

      <p class="text-center mt-3 small">
        Already have an account? <a href="/login">Sign in</a>
      </p>

    </form>
  </div>
</div>

</div>
</div>

</body>
</html>