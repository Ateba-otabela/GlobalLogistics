<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>404 - Not Found</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>
body{
    height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background: linear-gradient(135deg,#fff7f0,#ffffff);
    font-family: 'Segoe UI', sans-serif;
    padding:20px;
}
.error-box{
    text-align:center;
    max-width:500px;
    width:100%;
}
.error-code{
    font-size: clamp(70px, 15vw, 120px);
    font-weight:800;
    color:#ff6600;
}
.btn-orange{
    background:#ff6600;
    color:#fff;
    border:none;
}
.btn-orange:hover{
    background:#e65c00;
}
</style>
</head>

<body>

<div class="error-box">
    <i class="bi bi-search" style="font-size:40px;color:#ff6600;"></i>
    <div class="error-code">404</div>

    <h3 class="fw-bold">Page Not Found</h3>
    <p class="text-muted">
        The page you are looking for doesn’t exist or may have been moved.
    </p>

    <a href="/" class="btn btn-orange mt-3 px-4 py-2">
        <i class="bi bi-house-door"></i> Go Home
    </a>
</div>

</body>
</html>