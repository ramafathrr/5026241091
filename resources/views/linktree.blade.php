<!doctype html>
<html lang="en">
  <head>
    <title>Linktree HMTG</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        function showme(){
            alert("Halo selamat siang");
            Swal.fire({
                title:"Hallo!",
                text: "Selamat siang",
                icon:"success"
            });
            console.log("ini baris 18, sudah sampai disini");
            a = 18+10;
            console.log("Hasil penjumlahan : " + a);
            c=1*2*3;
            console.log("Hasil penjumlahan : " + c);
        }

        function changeText(){
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
        }

        function changeStyle(){
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.background = "yellow";
        }
    </script>
    <style>
        body {
            background: linear-gradient(135deg, #b1b1b1, #aaaeaa); 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center; 
            justify-content: center; 
        }

        .main-card {
            background-color: rgba(255, 255, 255, 0.9); 
            border: none;
            border-radius: 24px; 
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 600px;
            padding: 40px 25px;
        }

        .top {
            display: flex;
            justify-content: space-between;
        }

        .profile-img {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid #fff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .linktree-img {
            width: 20px;
            height: 20px;
            color: #000;
        }

        .upload-logo {
            transform: rotate(-90deg);
        }

        .btn-custom {
            background-color: #eceef1;
            color: #000;
            box-shadow: #333;
            border-radius: 12px;
            margin-bottom: 16px;
            padding: 24px;
            font-weight: 600;
            display: block;
            text-decoration: none;
            font-size: 1.2rem;
        }

        .btn-custom:hover {
            background-color: #dbdde0;
            color: #000;
            border-color: #000;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-decoration: none;
        }

        .btn-custom2 {
            background-color: #ffffff;
            color: #000;
            box-shadow:0 2.5px 3px #545454;
            border-radius: 24px;
            padding: 14px;
            font-weight: 600;
            text-decoration: none;
            border: none;
        }
    </style>

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>

  <body>
    <div class="card main-card">
        <div class="top">
            <img src="assetsLinktree/logo-linktree.webp" alt="Logo HMTG" class="linktree-img">
            <i data-feather="log-in" class="upload-logo"></i>
        </div>
        
        
        <div class="header-section text-center">
            <img src="assetsLinktree/linktree.webp" alt="Logo HMTG" class="profile-img">
            <h4 class="font-weight-bold">@HMTG ARSHAKA</h4>
        </div>
        
        <div class="mt-4 text-center">
            <a id ="intro" onclick="changeText();" href="#" class="btn-custom d-flex justify-content-between">
                <div></div>
                <div>Drive Sekben</div>
                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"><path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/></svg></div>
            </a>
            <a id="tombol" href="#" class="btn-custom d-flex justify-content-between">
                <div></div>
                <div>ArshaLetter</div>
                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"><path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/></svg></div>
            </a>
            <a href="#" class="btn-custom d-flex justify-content-between">
                <div></div>
                <div>ITS Logistik</div>
                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"><path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/></svg></div>
            </a>
            <a href="#" class="btn-custom d-flex justify-content-between">
                <div></div>
                <div>ITS Food</div>
                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"><path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/></svg></div>
                
            </a>
            <a href="#" class="btn-custom d-flex justify-content-between">
                <div></div>
                <div>GeoBorrow (Peminjaman Fasilitas DTG)</div>
                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"><path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/></svg></div>
            </a>
            <a href="#" class="btn-custom d-flex justify-content-between">
                <div></div>
                <div>GeoLetter (Pengajuan Surat ke DTG)</div>
                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"><path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/></svg></div>
            </a>
            <a href="#" class="btn-custom d-flex justify-content-between">
                <div></div>
                <div>KALENDER PROKER-AGENDA 2024</div>
                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16"><path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3"/></svg></div>
                
            </a>
            <button class="btn btn-primary" onclick="showme();">Show Me</button>
            <button class="btn btn-primary" onclick="changeText();">change drive sekben</button>
            <button class="btn btn-primary" onclick="changeStyle();">change style drive sekben</button>

        </div>
        
        <div class="mt-4 mx-auto">
            <button type="button" class="px-3 btn-custom2">Join HMTGARSHAKA on Linktree</button>
        </div>
        <div class=" mt-4 text-center small">
            <p>Cookie Preferences • Report • Privacy • Explore</p>
        </div>
    </div>
    <script>
      feather.replace();
    </script>
  </body>
</html>
