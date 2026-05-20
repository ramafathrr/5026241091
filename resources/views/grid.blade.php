<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>document</title>

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />

    <!-- Bootstrap 4 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <style>
      * {
        font-family: "Open Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: 600;
        font-style: normal;
        font-variation-settings: "wdth" 100;
      }

      body {
        min-height: 500vh;
      }

      .desc {
        font-weight: 400;
        font-size: 12px;
      }

      .feat {
        font-size: 15px;
      }

      .desc-feat {
        font-weight: 300;
        font-size: 12px;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="row" style="margin-top: 1.5rem">
        <div class="col-6 my-auto">
          <div class="col-12" style="font-size: 2rem">
            <p>
              Teknologi Semakin Kedepan. Lebih Cepat, Lebih Pintar, Lebih Dekat
              dengan Anda.
            </p>
          </div>
          <div class="col-12">
            <p class="desc pb-4">
              Nikmati pengalaman menggunakan smartphone yang dirancang untuk
              kecepatan, performa, dan kenyamanan. Dengan teknologi terbaru dan
              desain elegan, kami menghadirkan perangkat yang mendukung setiap
              aktivitas Anda mulai dari produktivitas hingga hiburan.
            </p>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-6">
                <div class="row">
                  <div class="col-2 m-auto">
                    <i data-feather="chevrons-up"></i>
                  </div>
                  <div class="col-10 m-auto">
                    <p class="feat pt-3">Performa Super Cepat</p>
                  </div>
                </div>
                <p class="desc-feat">
                  Didukung prosesor generasi terbaru untuk menjalankan berbagai
                  aplikasi tanpa hambatan, bahkan untuk multitasking berat
                  sekalipun.
                </p>
              </div>
              <div class="col-6">
                <div class="row">
                  <div class="col-2 m-auto">
                    <i data-feather="camera"></i>
                  </div>
                  <div class="col-10 m-auto">
                    <p class="feat pt-3">Kamera Profesional</p>
                  </div>
                </div>
                <p class="desc-feat">
                  Abadikan setiap momen dengan kualitas tinggi berkat teknologi
                  kamera canggih yang tajam di segala kondisi cahaya.
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="row">
                  <div class="col-2 m-auto">
                    <i data-feather="battery-charging"></i>
                  </div>
                  <div class="col-10 m-auto">
                    <p class="feat pt-3">Baterai Tahan Lama</p>
                  </div>
                </div>
                <p class="desc-feat">
                  Gunakan smartphone sepanjang hari tanpa khawatir kehabisan
                  daya, dilengkapi fitur pengisian cepat.
                </p>
              </div>
              <div class="col-6">
                <div class="row">
                  <div class="col-2 m-auto">
                    <i data-feather="airplay"></i>

                  </div>
                  <div class="col-10 m-auto">

                    <p class="feat pt-3">Desain Elegan</p>
                  </div>
                </div>
                <p class="desc-feat">
                  Dirancang dengan material premium yang nyaman digenggam dan
                  tampil stylish di setiap kesempatan.
                </p>
              </div>
            </div>
            <div class="col-6"></div>
          </div>
        </div>
        <div class="col-6 p-4 d-flex">
          <img src="../Vert.png" alt="" height="700" class="m-auto" />
        </div>
      </div>
    </div>

    <!-- feather icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>
