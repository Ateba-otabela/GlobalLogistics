<x-app-layout>

<section class="container my-5">

  <div class="text-center mb-5">
    <h2 class="fw-bold">Frequently Asked Questions</h2>
    <p class="text-muted">Everything you need to know about shipping and tracking</p>
  </div>

  <div class="row g-4">

  <div class="col-lg-6">

  <div class="accordion shadow-sm" id="faqAccordion">

    <!-- 1 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
          How long does delivery take?
        </button>
      </h2>
      <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
        <div class="accordion-body text-muted">
          Delivery time depends on destination. Local shipments take 1–3 days while international shipping may take 3–7 days.
        </div>
      </div>
    </div>

    <!-- 2 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">
          How can I track my shipment?
        </button>
      </h2>
      <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body text-muted">
          Enter your tracking number on the tracking page or mobile app to get real-time updates.
        </div>
      </div>
    </div>

    <!-- 3 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">
          What if my package is delayed?
        </button>
      </h2>
      <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body text-muted">
          Delays may occur due to weather, customs, or logistics issues. You will always receive notifications.
        </div>
      </div>
    </div>

    <!-- 4 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">
          Can I change my delivery address after shipping?
        </button>
      </h2>
      <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body text-muted">
          Address changes are possible only before dispatch. Contact support immediately for assistance.
        </div>
      </div>
    </div>

    <!-- 5 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">
          Is my shipment insured?
        </button>
      </h2>
      <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body text-muted">
          Yes, all shipments include basic insurance. Extra coverage is available for high-value items.
        </div>
      </div>
    </div>

    <!-- 6 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">
          What happens if I miss my delivery?
        </button>
      </h2>
      <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body text-muted">
          A second delivery attempt will be made or your package will be held at the nearest facility for pickup.
        </div>
      </div>
    </div>

    <!-- 7 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">
          Do you offer international shipping?
        </button>
      </h2>
      <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body text-muted">
          Yes, we provide global shipping services with customs support in multiple countries.
        </div>
      </div>
    </div>

    <!-- 8 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq8">
          How do I contact customer support?
        </button>
      </h2>
      <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body text-muted">
          You can contact support via email, phone, or live chat available on our website.
        </div>
      </div>
    </div>

    <!-- 9 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq9">
          Can I cancel my shipment?
        </button>
      </h2>
      <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body text-muted">
          Yes, cancellations are allowed before the package is dispatched from the warehouse.
        </div>
      </div>
    </div>

    <!-- 10 -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq10">
          How do I know my package is safe?
        </button>
      </h2>
      <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body text-muted">
          Every shipment is tracked, monitored, and handled with secure logistics procedures from pickup to delivery.
        </div>
      </div>
    </div>
<div class="mb-4">
        <img src="{{ asset('trackflow/young-man-experienced-shipping-manager-checking-parcel-tracking-post-service-store-assistant-in-warehouse-logistics-transportation-holding-cargo-delivery-order-shipment-online-store-shelf-free-video.jpg') }}"
             class="img-fluid rounded shadow-sm"
             alt="Logistics support"
             style="width:100%; height:250px; object-fit:cover;">
      </div>
  </div>
</div>


    <!-- Notifications Column -->
    <div class="col-lg-6">

      <!-- IMAGE ADDED HERE -->
      <div class="mb-4">
        <img src="{{ asset('trackflow/russia-moscow-february-24-2022-warehouse-with-cardboard-boxes-inside-on-pallets-racks-logistic-center-creative-huge-large-modern-warehouse-filled-with-cardboard-boxes-on-shelves-free-video.jpg') }}"
             class="img-fluid rounded shadow-sm"
             alt="Logistics support"
             style="width:100%; height:250px; object-fit:cover;">
      </div>

      <div class="p-4 bg-light rounded shadow-sm h-100">

        <h5 class="fw-bold mb-3">
          Enable shipping and delivery notifications
        </h5>

        <p class="text-muted">
          To receive updates for a shipment, you can enable notifications via SMS, email, or app push notifications.
          This helps you stay informed at every step of your delivery.
        </p>

        <hr>

        <h6 class="fw-bold">Notification Types</h6>

        <ul class="list-group list-group-flush mb-3">

          <li class="list-group-item bg-transparent">
            <strong>Picked Up</strong><br>
            <small class="text-muted">Package has been picked up from the merchant.</small>
          </li>

          <li class="list-group-item bg-transparent">
            <strong>Delivery Exception</strong><br>
            <small class="text-muted">Issues such as weather delays or customs problems.</small>
          </li>

          <li class="list-group-item bg-transparent">
            <strong>Delivery Update</strong><br>
            <small class="text-muted">Estimated delivery date and time window.</small>
          </li>

          <li class="list-group-item bg-transparent">
            <strong>Delivery Confirmation</strong><br>
            <small class="text-muted">Confirmation that your package has been delivered.</small>
          </li>

        </ul>

        <h6 class="fw-bold">Mobile App Push Notifications</h6>
        <p class="text-muted small">
          Enable notifications by downloading our mobile app from App Store or Google Play.
        </p>

        <h6 class="fw-bold">Email & SMS Notifications</h6>
        <p class="text-muted small">
          Enter your tracking number in the tracking system to receive updates.
        </p>

        <h6 class="fw-bold">Direct Text Alerts</h6>
        <p class="text-muted small">
          Activate SMS tracking alerts directly from your shipment settings.
        </p>

      </div>
    </div>

  </div>
</section>

</x-app-layout>