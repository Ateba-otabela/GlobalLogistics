<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TruckFlow | Shipment Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body{
      background: #f4f6f9;
      font-family: "Segoe UI", sans-serif;
    }

    .page-title{
      font-weight: 800;
      color: #ff6600;
    }

    .card-form{
      background: #fff;
      border-radius: 16px;
      padding: 25px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    }

    .section-title{
      font-weight: 700;
      font-size: 14px;
      color: #ff6600;
      margin-top: 20px;
      margin-bottom: 10px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .form-control:focus{
      border-color: #ff6600;
      box-shadow: none;
    }

    .btn-orange{
      background: #ff6600;
      color: white;
      border: none;
      padding: 10px 25px;
      border-radius: 10px;
      font-weight: 600;
    }

    .btn-orange:hover{
      background: #e55a00;
    }

    .alert-custom{
      border-left: 5px solid #ff6600;
      background: #fff7f0;
    }
  </style>
</head>

<body>

<div class="container py-4">

  <!-- TITLE -->
  <h2 class="text-center page-title mb-3">Shipment Management</h2>

  <!-- WARNING -->
  <div class="alert alert-custom d-flex align-items-center mb-4">
    <i class="bi bi-exclamation-triangle-fill text-warning me-2 fs-5"></i>
    <div>
      <strong>Important:</strong> Ensure all shipment details are correct before submission. Incorrect data may delay delivery.
    </div>
  </div>

  <!-- FORM CARD -->
  <form method="post" action="{{ route('shipp') }}" class="card-form">
    @csrf

    <!-- SENDER -->
    <div class="section-title">Sender Information</div>
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Sender's Name</label>
        <input type="text" class="form-control" name="senders_name">
      </div>

      <div class="col-md-6">
        <label class="form-label">Code</label>
        <input type="text" class="form-control" name="code">
      </div>

      <div class="col-md-6">
        <label class="form-label">Company Email</label>
        <input type="email" class="form-control" name="company_email">
      </div>

      <div class="col-md-6">
        <label class="form-label">Company Location</label>
        <input type="text" class="form-control" name="company_location">
      </div>
    </div>

    <!-- RECEIVER -->
    <div class="section-title">Receiver Information</div>
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Receiver Name</label>
        <input type="text" class="form-control" name="receivers_name" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">Receiver Email</label>
        <input type="email" class="form-control" name="receiver_email" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">Receiver Location</label>
        <input type="text" class="form-control" name="receiver_location" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">ZIP Code</label>
        <input type="text" class="form-control" name="zip_code" required>
      </div>
    </div>

    <!-- SHIPMENT -->
    <div class="section-title">Shipment Details</div>
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Package</label>
        <input type="text" class="form-control" name="package" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">Destination</label>
        <input type="text" class="form-control" name="destination" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">Shipment Type</label>
        <input type="text" class="form-control" name="type_of_shippment" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">Shipment Mode</label>
        <input type="text" class="form-control" name="shipment_mode" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">Weight</label>
        <input type="number" class="form-control" name="weight" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">Amount</label>
        <input type="text" class="form-control" name="amount" required>
      </div>
    </div>

    <!-- TRACKING -->
    <div class="section-title">Tracking Information</div>
    <div class="row g-3">
      <div class="col-md-4">
        <label class="form-label">Pick Up Date</label>
        <input type="date" class="form-control" name="pick_up_date" required>
      </div>

      <div class="col-md-4">
        <label class="form-label">Date</label>
        <input type="date" class="form-control" name="date" required>
      </div>

      <div class="col-md-4">
        <label class="form-label">Time</label>
        <input type="time" class="form-control" name="time" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">Current Location</label>
        <input type="text" class="form-control" name="location" required>
      </div>

      <div class="col-md-6">
        <label class="form-label">Tracking Number</label>
        <input type="text" class="form-control" name="trackingNumber" required>
      </div>
    </div>

    <!-- SUBMIT -->
    <div class="mt-4 text-end">
      <button type="submit" class="btn btn-orange">
        <i class="bi bi-send"></i> Submit Shipment
      </button>
    </div>

  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
@if(session('shipping'))
  Swal.fire({
    icon: 'success',
    title: 'Shipment Created Successfully',
    text: 'Your shipment has been recorded. Use the tracking number to monitor progress.',
    confirmButtonColor: '#ff6600'
  });
@endif
</script>

</body>
</html>

</x-app-layout>