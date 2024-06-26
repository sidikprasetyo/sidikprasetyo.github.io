<?php 
function get_CURL($url){
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);
  
  return json_decode($result, true);
}

$result = get_CURL('YOUR_API');

$youtubeProfilePicture = $result['items'][0]['snippet']['thumbnails']['default']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriberCount = $result['items'][0]['statistics']['subscriberCount'];

// most view video
$urlMostViewVideo = 'YOUR_API';
$result = get_CURL($urlMostViewVideo);
$mostViewVideo = $result['items'][0]['id']['videoId'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Portofolio | Sidik Prasetyo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  </head>

  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: rgb(107, 114, 255)">
      <div class="container">
        <a class="navbar-brand" href="#">Sidik Prasetyo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img class="rounded-circle img-thumbnail" src="img/foto.jpg" alt="Sidik Prasetyo" width="200" />
      <h1 class="display-4">Sidik Prasetyo</h1>
      <p class="lead"></p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,192L48,170.7C96,149,192,107,288,122.7C384,139,480,213,576,213.3C672,213,768,139,864,128C960,117,1056,171,1152,186.7C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4" data-aos="fade-right" data-aos-duration="1000">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium animi sit provident soluta vitae porro asperiores tenetur accusantium laborum non?</p>
          </div>
          <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, voluptate similique maxime officiis fuga, sed molestiae ut perferendis ipsa ad veniam iusto impedit nostrum non.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#a7c9ff"
          fill-opacity="1"
          d="M0,64L40,64C80,64,160,64,240,96C320,128,400,192,480,197.3C560,203,640,149,720,117.3C800,85,880,75,960,85.3C1040,96,1120,128,1200,138.7C1280,149,1360,139,1400,133.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Youtube  -->
        <section class="sosial" id="sosial">
          <div class="container mb-5">
            <div class="row text-center mb-3">
              <div class="col">
                <h2>Sosial Media</h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-4">
                <div class="row mt-5">
                  <div class="col-md-3">
                    <img src="<?= $youtubeProfilePicture;?>" width="200" class="rounded-circle img-thumbnail">
                  </div>
                  <div class="col-md-9">
                    <h5><?= $channelName;?></h5>
                    <p><?= $subscriberCount;?> Subscriber.</p>
                    <div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-count="default"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row mt-3 pb-3">
                  <div class="col">
                  <iframe width="350" height="200" src="https://www.youtube.com/embed/<?= $mostViewVideo;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


    <!-- Project -->
    <section id="project">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Project</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-left" data-aos-duration="1500">
              <img src="img/1.png" class="card-img-top" alt="Project Web 1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="100">
              <img src="img/2.png" class="card-img-top" alt="Project Web 2" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="200">
              <img src="img/3.png" class="card-img-top" alt="Project Aplikasi Mobile" height="202" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="300">
              <img src="img/4.png" class="card-img-top" alt="Project Python 1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="400">
              <img src="img/5.png" class="card-img-top" alt="Project Python 2" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section id="my-laptop">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>My Laptop</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4 mb-3">
              <div class="laptop-box">
                <h4 class="laptop-name">Ideapad Gaming 3</h4>
                <img src="img/laptop/1.webp" class="laptop-img" alt="Ideapad Gaming 3">
                <a href="#" class="btn btn-light laptop-detail-button">Show Details</a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
              <div class="laptop-box">
                <h4 class="laptop-name">Mackbook Pro</h4>
                <img src="img/laptop/2.png" class="laptop-img" alt="Mackbook Pro">
                <a href="#" class="btn btn-light laptop-detail-button">Show Details</a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
              <div class="laptop-box">
                <h4 class="laptop-name">Acer</h4>
                <img src="img/laptop/3.png" class="laptop-img" alt="Laptop Acer">
                <a href="#" class="btn btn-light laptop-detail-button">Show Details</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,64L48,85.3C96,107,192,149,288,149.3C384,149,480,107,576,117.3C672,128,768,192,864,192C960,192,1056,128,1152,133.3C1248,139,1344,213,1392,250.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Project -->

    <!-- Gallery -->
    <section id="gallery">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Gallery</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-3">
            <a href="">
              <img src="img/thumbs/1.jpg" alt="Gambar 1" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img src="img/thumbs/2.jpg" alt="Gambar 2" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img src="img/thumbs/3.jpg" alt="Gambar 3" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img src="img/thumbs/4.jpg" alt="Gambar 4" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img src="img/thumbs/5.jpg" alt="Gambar 5" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img src="img/thumbs/6.jpg" alt="Gambar 6" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img src="img/thumbs/7.jpg" alt="Gambar 7" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img src="img/thumbs/8.jpg" alt="Gambar 8" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img src="img/thumbs/9.jpg" alt="Gambar 9" class="img-fluid gallery-img" />
            </a>
          </div>
          <div class="col-md-3">
            <a href="">
              <img src="img/thumbs/10.jpg" alt="Gambar 10" class="img-fluid gallery-img" />
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Gallery -->

    <!-- Contact -->
    <section id="contact">
      <div class="container" data-aos="flip-left" data-aos-duration="2000">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
              <strong>Terima Kasih!</strong> Pesan Anda sudah kami terima.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form name="sidikprasetyo-contact-form">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" aria-describedby="name" name="nama" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>
              <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                <span role="status">Loading...</span>
              </button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#6b72ff"
          fill-opacity="1"
          d="M0,96L48,112C96,128,192,160,288,181.3C384,203,480,213,576,213.3C672,213,768,203,864,186.7C960,171,1056,149,1152,160C1248,171,1344,213,1392,234.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="text-white text-center pb-5" style="background-color: rgb(107, 114, 255)">
      <p>Created with <i class="bi bi-star-fill"></i> by <a href="https://www.instagram.com/sidik_prst/" class="text-white fw-bold">Sidik Praetyo</a></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/vanilla-tilt.min.js"></script>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelectorAll(".laptop-box"), {
        max: 25,
        speed: 400,
        glare: true,
      });
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      const galleryImage = document.querySelectorAll(`.gallery-img`);

      galleryImage.forEach((img, i) => {
        img.dataset.aos = `fade-down`;
        img.dataset.aosDelay = i * 100;
        img.dataset.aosDuration = 1000;
      });

      AOS.init({
        once: true,
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
    <script>
      gsap.registerPlugin(TextPlugin);
      gsap.to(`.lead`, {
        duration: 1,
        delay: 1.5,
        text: `Student`,
      });
      gsap.from(".jumbotron img", {
        rotateY: 360,
        duration: 1.5,
        opacity: 0,
      });
      gsap.from(".display-4", {
        duration: 1,
        x: -50,
        opacity: 0,
        ease: `back`,
      });
      gsap.from(".navbar", {
        duration: 1.5,
        y: `-100%`,
        opacity: 0,
        ease: `bounce`,
      });
    </script>

    <script>
      const scriptURL = "https://script.google.com/macros/s/AKfycbwtgOhMxwPOcNtkE8NWl3fbK_p49gOWL5Rzk6DFx3s2PWHKxqpmCxW6EqSrm7PWVTY/exec";
      const form = document.forms["sidikprasetyo-contact-form"];
      const btnKirim = document.querySelector(`.btn-kirim`);
      const btnLoading = document.querySelector(`.btn-loading`);
      const myAlert = document.querySelector(`.my-alert`);

      form.addEventListener("submit", (e) => {
        e.preventDefault();
        // Ketika tombol submit di klik
        // tampilkan tombol loading hilangkan tombol kirim
        btnLoading.classList.toggle(`d-none`);
        btnKirim.classList.toggle(`d-none`);
        fetch(scriptURL, { method: "POST", body: new FormData(form) })
          .then((response) => {
            // tampilkan tombol kirim hilangkan tombol login
            btnLoading.classList.toggle(`d-none`);
            btnKirim.classList.toggle(`d-none`);
            // tampilkan alert
            myAlert.classList.toggle(`d-none`);
            // reset form
            form.reset();
            console.log("Success!", response);
          })
          .catch((error) => console.error("Error!", error.message));
      });
    </script>
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
</html>
