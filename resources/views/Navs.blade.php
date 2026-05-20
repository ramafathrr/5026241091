<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navs</title>

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <style>
      .work-sans-nav {
        font-family: "Work Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
      }

      .bg-section {
        background-image: url("https://png.pngtree.com/thumb_back/fh260/background/20220731/pngtree-blue-pattern-fabric-batik-background-symbol-square-texture-photo-image_22535312.jpg");
        background-position: center;
        background-size: cover;
        position: fixed;
      }

      .bg-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 51, 102, 0.1);
      }

      .bg-section .container {
        position: relative;
        z-index: 2;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img
          src="https://www.its.ac.id/wp-content/uploads/2026/01/LOGO-ITS-BLUE.svg"
          alt="logo ITS"
        />
      </a>
      <button
        class="navbar-toggler d-lg-none"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
              >Tentang<span class="sr-only">(current)</span></a
            >
            <div class="dropdown-menu">
              <a href="" class="dropdown-item">Profil ITS</a>
              <a href="" class="dropdown-item">Visi & Misi</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pendaftaran</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#">Kuliah di ITS</a>
            <div class="dropdown-menu">
              <a href="" class="dropdown-item">Fakultas & Sekolah</a>
              <a href="" class="dropdown-item"></a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Riset</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Berita</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id=""
              data-toggle="dropdown"
              >Lainnya</a
            >
            <div class="dropdown-menu">
              <a href="#" class="dropdown-item">Layanan Publik</a>
              <a href="#" class="dropdown-item">Layanan Digital</a>
            </div>
          </li>
          <!-- <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="dropdownId"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              >Dropdown</a
            >
            <div class="dropdown-menu" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="#">Action 1</a>
              <a class="dropdown-item" href="#">Action 2</a>
            </div>
          </li>
          <li class="nav-link" href="#"></li> -->
        </ul>
      </div>
      <div>
        <form class="form-inline my-2 my-lg-0">
          <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search"> -->
          <p class="work-sans-nav mt-3 mr-3 mr-lg-1">Login to</p>
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
            MyITS
          </button>
        </form>
      </div>
    </nav>

    <!-- nav tabs start -->
    <div class="bg-section py-5">
      <div class="container m-5" style="max-width: 1550px">
        <ul class="nav nav-tabs nav-justified">
          <li class="nav-item">
            <a href="#beasiswa" class="nav-link active" data-toggle="tab"
              >Beasiswa Garuda Fasilitasi Double Degree IUP ITS</a
            >
          </li>
          <li class="nav-item">
            <a href="#gedung" class="nav-link" data-toggle="tab"
              >ITS Resmikan Gedung CWI-02</a
            >
          </li>
          <li class="nav-item">
            <a href="#nawasena" class="nav-link" data-toggle="tab"
              >Tim Nawasena Raih Juara Dunia</a
            >
          </li>
          <li class="nav-item">
            <a href="#robodog" class="nav-link" data-toggle="tab"
              >ITS Kembangkan Robodog Jarak Jauh</a
            >
          </li>
        </ul>

        <!-- tab panes start -->
        <div class="tab-content mt-4">
          <div class="tab-pane px-4 active" id="beasiswa">
            <div class="row align-items-center">
              <div class="col-6">
                <p>
                  Peluang menempuh pendidikan sarjana bertaraf internasional
                  kini semakin terbuka lebar. Melalui Program Beasiswa Garuda
                  Sarjana 2026 dari Kemendiktisaintek, siswa berprestasi
                  berkesempatan dibiayai penuh untuk menempuh studi S1 di
                  perguruan tinggi terbaik dunia, termasuk melalui skema double
                  degree di ITS
                </p>
              </div>
              <div class="col-6">
                <div>
                  <img
                    src="https://asset.kompas.com/crops/NqnFsdM_hKmssDDMGB5AwXl7YLU=/0x0:0x0/1200x800/data/photo/2026/02/16/69930e7cd7102.jpg"
                    alt=""
                    class="rounded"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane px-3 fade" id="gedung">
            <div class="row align-items-center">
              <div class="col-6">
                <p>
                  ITS meresmikan Gedung CWI-02 sebagai bagian dari pengembangan
                  kawasan Science Techno Park. Peresmian ditandai dengan
                  penandatanganan dokumen serah terima dan penyerahan simbolis
                  kunci gedung kepada pihak ITS. Kehadiran fasilitas ini
                  diharapkan dapat menunjang aktivitas penelitian, kolaborasi
                  industri, serta hilirisasi inovasi yang dikembangkan sivitas
                  akademika ITS.
                </p>
              </div>
              <div class="col-6">
                <div>
                  <img
                    src="https://i.ytimg.com/vi/IJbM42silAw/maxresdefault.jpg"
                    alt=""
                    class="rounded"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane px-3 fade" id="nawasena">
            <div class="row align-items-center">
              <div class="col-6">
                <p>
                  Tim Nawasena ITS meraih Juara 2 pada International Student
                  Design Competition 2026 yang diselenggarakan oleh Worldwide
                  Ferry Safety Association (WFSA). Prestasi ini diraih melalui
                  desain feri inovatif MV Great Idia yang mengusung konsep
                  transportasi air yang aman, efisien, dan ramah lingkungan.
                </p>
              </div>
              <div class="col-6">
                <div>
                  <img
                    src="https://lh4.googleusercontent.com/proxy/QuqWGtTd4Iz9X5akaWmi2--Tb1YrXT03FYUzA1KGsIEVmWuEviN_y7Wr_FuKm2pZAOhuodU2uU5q6f0RjJL4wOpNoj_bcn4yHBw7RSbnXK0"
                    alt=""
                    class="rounded"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane px-3 fade" id="robodog">
            <div class="row align-items-center">
              <div class="col-6">
                <p>
                  ITS bersama Indosat Ooredoo Hutchison, Nokia, dan NVIDIA
                  mengembangkan RoboDog, robot anjing yang dapat dikendalikan
                  dari jarak jauh melalui teknologi AI dan jaringan 5G. Robot
                  ini dilengkapi kamera dan sensor LiDAR untuk memantau
                  lingkungan secara real time serta menerima perintah suara.
                  Inovasi ini ditujukan untuk membantu inspeksi di area berisiko
                  seperti industri energi, pertambangan, dan wilayah bencana.
                </p>
              </div>
              <div class="col-6">
                <div>
                  <img
                    src="https://lh4.googleusercontent.com/proxy/CM1coAtdfNRVRWJQAjHRIGhvGGBkRXJvGVw7aZXIkEGgK0Ql9d4hY7eQJhBRfygOkyqRMU1Rut5mqJXJBDkH7T-5dJNGDudP4VStjr4"
                    alt=""
                    class="rounded"
                    height="400px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
