<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TJ Hotel - Rooms</title>

  <?php require('inc/links.php') ?>

  <style>
    .pop:hover {
      border-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
</head>

<body class="bg-light">

  <?php require('inc/header.php') ?>



  <!-- Our Faciilities  -->
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR Rooms</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12 mb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2" href="#">FILTERS</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
              <div class="border rounded bg-light p-3 mb-3">
                <div class="mb-3" style="font-size: 18PX;"> CHECK AVALIABILITY </div>
                <label class="form-label">Check-in</label>
                <input type="date" class=" mb-3 form-control shadow-none" />

                <label class="form-label ">Check-Out</label>
                <input type="date" class="form-control shadow-none" />
              </div>

              <div class="border rounded bg-light p-3 mb-3">
                <div class="mb-3" style="font-size: 18PX;"> FACILITIES </div>
                <label class="form-label me-1 " id="1">facility one</label>
                <input type="checkbox" for="1" class="mb-3 form-control " />

                <label class="form-label ">Check-Out</label>
                <input type="date" class="form-control shadow-none" />
              </div>

              <div class="border rounded bg-light p-3 mb-3">
                <div class="mb-3" style="font-size: 18PX;"> GUESTS </div>
                <div class="d-flex">
                  <div class="me-3">
                    <label class="form-label ">Adults</label>
                    <input type="number" class="form-control shadow-none" />
                  </div>
                  <div>
                    <label class="form-label ">Childeren</label>
                    <input type="number" class="form-control shadow-none" />
                  </div>
                </div>

              </div>
            </div>



          </div>
        </nav>
      </div>

      <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/rooms/1.jpg" class="img-fluid rounded">
            </div>

            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple Room Name</h5>

              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Sofa
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
              </div>

              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room Heater
                </span>
              </div>

              <div class="facilities mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Childrens
                </span>
              </div>

            </div>

            <div class="col-md-2">
              <h6 class="mb-4 text-center">₹2000 per night</h6>
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2 text-align-center w-100">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none text-align-center w-100">More Details</a>
            </div>
          </div>
        </div>

        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/rooms/1.jpg" class="img-fluid rounded">
            </div>

            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple Room Name</h5>

              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Sofa
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
              </div>

              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room Heater
                </span>
              </div>

              <div class="facilities mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Childrens
                </span>
              </div>

            </div>

            <div class="col-md-2">
              <h6 class="mb-4 text-center">₹2000 per night</h6>
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2 text-align-center w-100">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none text-align-center w-100">More Details</a>
            </div>
          </div>
        </div>

        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="images/rooms/1.jpg" class="img-fluid rounded">
            </div>

            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple Room Name</h5>

              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Sofa
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
              </div>

              <div class="facilities mb-3">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Room Heater
                </span>
              </div>

              <div class="facilities mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Childrens
                </span>
              </div>

            </div>

            <div class="col-md-2">
              <h6 class="mb-4 text-center">₹2000 per night</h6>
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none mb-2 text-align-center w-100">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none text-align-center w-100">More Details</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>



  <!-- footer -->
  <?php require('inc/footer.php') ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</body>

</html>