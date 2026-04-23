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
    min-height:100vh;
    margin:0;
    display:flex;
    align-items:center;
    justify-content:center;
    background: linear-gradient(135deg,#fff7f0,#ffffff);
    font-family:'Segoe UI', sans-serif;
    padding:20px;
}

.error-box{
    text-align:center;
    max-width:520px;
    width:100%;
    padding:30px 20px;
    border-radius:15px;
    background:#fff;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

.error-code{
    font-size: clamp(60px, 18vw, 130px);
    font-weight:900;
    color:#ff6600;
    line-height:1;
}

.error-icon{
    font-size:42px;
    color:#ff6600;
    margin-bottom:10px;
}

h3{
    font-weight:700;
    margin-top:10px;
}

p{
    font-size:15px;
    color:#6c757d;
    margin-top:10px;
}

.btn-orange{
    background:#ff6600;
    color:#fff;
    border:none;
    padding:10px 20px;
    border-radius:8px;
    transition:0.3s ease;
    display:inline-flex;
    align-items:center;
    gap:8px;
}

.btn-orange:hover{
    background:#e65c00;
    transform:translateY(-2px);
}

@media (max-width: 576px){
    .error-box{
        padding:25px 15px;
    }
}
</style>

</head>

<body>

<div class="error-box">

<i class="bi bi-exclamation-triangle-fill error-icon"></i>

<div class="error-code">404</div>

<h3>Page Not Found</h3>

<p>
    The page you are looking for might have been removed,
    had its name changed, or is temporarily unavailable.
</p>

<a href="/" class="btn btn-orange mt-3">
    <i class="bi bi-house-door"></i>
    Back to Home
</a>

</div>

</body>
</html>