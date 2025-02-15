<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <header class="bg-primary text-white py-3">
      <!--Navbar-->  <nav class="bg-primary container d-flex justify-content-between">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link text-white" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/tentang">Tentang</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

<!--main-->    <main class="container mt-4 border shadow p-3 rounded">
        <div id="content" class="row g-4">
            <h5 class="text-muted">Contact</h5>
            <hr>
            <!--ini isi article 1-->
            <article class="col-md-8 mb-4 ">
                <h1>Kontak Admin</h1>
                <p class="text-muted">Hubungi Saya dengan Mengetuk Ikon Gambar Di Bawah</p>
                <!--agar gambar bisa bersebelahan jadi saya kasi flex-->
                 <div class="d-flex align-items-center mt-4">
                    <a href="mailto:qaisprawirayudha@gmail.com">
                        <img src="gmail.png" alt="Gmail" class="ms-3 me-4" style="width: 50px; border-radius: 10px;">
                    </a>
                    
                    <a href="https://www.instagram.com/invites/contact/?igsh=1qw11oxj1dw1j&utm_content=67yvxvs">
                        <img src="insta.jpg" alt="Instagram" class="ms-3" style="width: 50px; border-radius: 10px;">
                    </a>
                 </div>
                 <hr>
                 <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio necessitatibus alias voluptates exercitationem tempora, vitae placeat at dolor itaque eius!</p>                
            </article>

            <!--ini isi aside ke 1-->
            <aside class="col-md-4 mb-4 text-center p-2 border rounded shadow">
                <img src="ampas.jpg" alt="fixi" class="img-fluid p-3">
                <h5 class="mt-2 font-weight-bold">Lorem.</h5>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, iusto!, Horas!</p>
                <audio controls>
                    <source src="cry.mp3" type="audio/mpeg">
                    Browsermu tidak mendukung tag audio, upgrade donk !
                </audio>
            </aside>
        </div>
    </main>
    

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>&copy;  2025 Yudhappa. All rights reserved.</p>
    </footer>
</body>
</html>
