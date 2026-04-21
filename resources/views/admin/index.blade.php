<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TruckFlow Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
:root{
    --primary:#ff6600;
    --dark:#1f1f1f;
    --bg:#f8f9fa;
}

body{
    background:var(--bg);
    font-family:"Segoe UI", sans-serif;
}

/* SIDEBAR */
.sidebar{
    min-height:100vh;
    background:linear-gradient(180deg,var(--primary),#e05500);
    color:#fff;
    padding:20px;
}

.sidebar h4{
    font-weight:700;
    text-align:center;
    margin-bottom:30px;
}

.sidebar .nav-link{
    color:rgba(255,255,255,0.85);
    padding:12px;
    border-radius:10px;
    margin-bottom:8px;
    transition:.3s;
}

.sidebar .nav-link:hover{
    background:rgba(255,255,255,0.15);
    color:#fff;
}

.sidebar .nav-link.active{
    background:rgba(255,255,255,0.25);
}

/* TOP BAR */
.topbar{
    background:#fff;
    padding:15px 20px;
    border-radius:12px;
    box-shadow:0 3px 10px rgba(0,0,0,0.05);
}

/* CARDS */
.card-box{
    background:#fff;
    border-radius:15px;
    padding:20px;
    text-align:center;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
    transition:.3s;
}

.card-box:hover{
    transform:translateY(-5px);
}

.card-icon{
    font-size:2rem;
    color:var(--primary);
}

/* TABLE */
.table thead{
    background:var(--primary);
    color:#fff;
}

.table tbody tr:hover{
    background:#fff3eb;
}

/* BUTTON */
.btn-primary{
    background:var(--primary);
    border:none;
}

.btn-primary:hover{
    background:#e05500;
}

code{
    color:var(--primary);
    font-weight:600;
}
</style>
</head>

<body>

<div class="container-fluid">
<div class="row">

<!-- SIDEBAR -->
<div class="col-md-2 sidebar">
    <h4>TruckFlow</h4>

    <nav class="nav flex-column">
        <a class="nav-link active" href="#"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
        <a class="nav-link" href="/shippment"><i class="bi bi-truck me-2"></i>Shipments</a>
        <a class="nav-link" href="#"><i class="bi bi-people me-2"></i>Users</a>
        <a class="nav-link" href="#"><i class="bi bi-gear me-2"></i>Settings</a>
    </nav>
</div>

<!-- MAIN -->
<div class="col-md-10 p-4">

<!-- TOP BAR -->
<div class="topbar d-flex justify-content-between align-items-center mb-4">
    <h3 class="mb-0">Admin Dashboard</h3>
    <a href="/shippment" class="btn btn-primary">
        <i class="bi bi-plus-circle me-1"></i> Add Shipment
    </a>
</div>

<!-- STATS -->
<div class="row g-4 mb-4">

    <div class="col-md-3">
        <div class="card-box">
            <div class="card-icon"><i class="bi bi-box-seam"></i></div>
            <h6 class="text-muted">Pending Orders</h6>
            <h3>{{ 6 }}</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-box">
            <div class="card-icon"><i class="bi bi-cash-stack"></i></div>
            <h6 class="text-muted">Total Payment</h6>
            <h3 class="text-success">${{ $totalAmount }}</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-box">
            <div class="card-icon"><i class="bi bi-geo-alt"></i></div>
            <h6 class="text-muted">Tracking</h6>
            <h3 class="text-info">{{ 7 }}</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-box">
            <div class="card-icon"><i class="bi bi-people"></i></div>
            <h6 class="text-muted">Users</h6>
            <h3 class="text-warning">{{ 7 }}</h3>
        </div>
    </div>

</div>

<!-- TABLE -->
<div class="card shadow-sm border-0">
    <div class="card-header bg-white">
        <h5 class="mb-0"><i class="bi bi-list me-2"></i>Tracking Information</h5>
    </div>

    <div class="card-body table-responsive">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>Sender</th>
                    <th>Receiver</th>
                    <th>Location</th>
                    <th>Amount</th>
                    <th>Email</th>
                    <th>Destination</th>
                    <th>Tracking</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($shippments as $shippment)
                <tr>
                    <td>{{ $shippment->senders_name }}</td>
                    <td>{{ $shippment->receivers_name }}</td>
                    <td>{{ $shippment->receiver_location }}</td>
                    <td>${{ $shippment->amount }}</td>
                    <td>{{ $shippment->receiver_email }}</td>
                    <td>{{ $shippment->destination }}</td>
                    <td><code>{{ $shippment->tracking_number }}</code></td>
                    <td><span class="badge bg-warning">{{ $shippment->location }}</span></td>
                    <td>
                        <a href="{{ route('showtracking', $shippment->id) }}" class="btn btn-sm btn-outline-primary">
                            Edit
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center text-muted py-4">
                        No shipments found
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

</x-app-layout>