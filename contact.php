<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TJ Hotel - Contact Us</title>

  <?php require('inc/links.php') ?>

  <style>

  </style>
</head>

<body class="bg-light">

  <?php require('inc/header.php') ?>



  <!-- Our Faciilities  -->
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Contact Us </h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum possimus, <br> eveniet quia facilis rem quo eius laudantium facere numquam blanditiis!</p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230661.04484231502!2d81.6367733161178!3d25.402171897790073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1722061769219!5m2!1sen!2sin" height="320px" class="w-100 rounded mb-4" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <h5>Address</h5>
          <a href="https://maps.app.goo.gl/XW6jX3vqzk5nLf6E8" target="_blank" class="d-line-block text-decoration-none text-dark mb-2"><i class="bi bi-geo-alt-fill"></i> XYZ, PrayagRaj, India </a>

          <h5 class="mt-4">Call Us</h5>
          <a href="tel:+91 9823768545" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +91 9823768545</a>
          <br>
          <a href="tel:+91 9823768545" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +91 9823768545</a>
          <h5 class="mt-4">Email</h5>
          <a href="mailto:random@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> random@gmail.com</a>

          <h5 class="mt-4">Follow Us</h5>
          <a href="#" class="d-inline-block  text-dark me-2 fs-5">
            <i class="bi bi-twitter me-1"></i>
          </a>
          <a href="#" class="d-inline-block  text-dark me-2 fs-5">
            <i class="bi bi-facebook me-1"></i>
          </a>
          <a href="#" class="d-inline-block  text-dark me-2 fs-5">
            <i class="bi bi-instagram me-1"></i>
          </a>

        </div>
      </div>

      <div class="col-lg-6 col-md-6  px-4">
        <div class="bg-white rounded shadow p-4">
          <form action="">
            <h5 class="text-center">Send a Message</h5>

            <div class="mt-3">
              <label class="form-label fw-500">Name</label>
              <input type="text" class="form-control shadow-none" />
            </div>

            <div class="mt-3">
              <label class="form-label fw-500">Email</label>
              <input type="email" class="form-control shadow-none" />
            </div>

            <div class="mt-3">
              <label class="form-label fw-500">Suject</label>
              <input type="text" class="form-control shadow-none" />
            </div>

            <div class="mt-3">
              <label class="form-label fw-500">Message</label>
              <textarea class="form-control shadow-none" rows="5" style="resize:none"></textarea>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-white custom-bg mt-3">
                Send
              </button>
            </div>

          </form>
        </div>
      </div>


    </div>
  </div>

  <!-- footer -->
  <?php require('inc/footer.php') ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</body>

</html>