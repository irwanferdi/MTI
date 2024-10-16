<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Arsip Dokumen Mubaligh Teknologi Indonesia</title>
    <meta name="description" content="Solusi penyimpanan dokumen yang aman dan terkelola">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,700,900" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style type="text/css">
        body, html {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .navbar-brand img {
            height: 50px;
        }

        .btn-no-outline {
            background-color: transparent;
            color: black;
        }

        .btn-no-outline:hover {
            background-color: black;
            color: white;
            transition: background-color 0.3s ease;
        }

        .button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-left: 5px;
            outline: none;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .image-container {
            position: relative;
            width: 100%;
            height: 600px;
            margin: 0 auto;
            background: url('gambar/depan/foto2.jpg') center center/cover no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text-overlay {
            color: white;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px 40px;
            border-radius: 5px;
        }

        .text-overlay h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .text-overlay p {
            font-size: 1.2rem;
            font-weight: 300;
        }

        .info-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .info-container h2, .info-container h3 {
            text-align: center;
            font-weight: 700;
            color: #333;
            margin-bottom: 30px;
        }

        .info-container p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            text-align: justify;
        }

        /* About Us Styling */
        .about-us-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 50px 0;
        }

        .about-us-container .about-us-image {
            flex: 1;
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-us-container .about-us-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .about-us-container .about-us-text {
            flex: 1;
            padding-left: 30px;
        }

        .about-us-container h1 {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .about-us-container p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #555;
        }

        /* Visi Misi Styling */
        .visi-misi-container {
            display: flex;
            justify-content: space-between;
            margin: 50px 0;
        }

        .visi-misi-container div {
            flex: 1;
            margin-right: 20px;
        }

        .visi-misi-container div:last-child {
            margin-right: 0;
        }

        .visi-misi-container h3 {
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .visi-misi-container p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #555;
        }

        /* Footer styling */
        footer {
            background-color: black;
            color: white;
            padding: 40px 0;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            flex-wrap: wrap;
        }

        .footer-logo img {
            max-width: 150px;
            margin-bottom: 20px;
        }

        .footer-column {
            flex: 1;
            padding: 20px;
            min-width: 200px;
        }

        .footer-column h4 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-column ul li a:hover {
            color: #007bff;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="#">
                <img src="gambar/depan/Logoo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a href="#" class="btn btn-no-outline ml-2">Beranda</a>
                    <a href="user_login.php" class="btn btn-no-outline ml-2">Login User</a>
                    <a href="login.php" class="btn btn-outline-primary ml-2">Login Admin / Petugas</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- Hero Image with Text Overlay -->
    <div class="image-container">
        <div class="text-overlay">
            <h1>Pengarsipan Dokumen Mubaligh Teknologi Indonesia</h1>
            <p>Solusi Penyimpanan Dokumen Yang Aman dan Terkelola</p>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="container-fluid py-5 bg-light">
        <div class="about-us-container row align-items-center justify-content-center px-4">
            <div class="col-lg-5 pr-4 text-center mb-4 mb-lg-6">
                <img src="gambar/depan/aboutus.jpg" alt="About Us Image" class="img-fluid shadow">
            </div>
            <div class="col-lg-7">
                <h1 class="font-weight-light mb-3" style="font-size: 1rem;">ABOUT US</h1>
                <h1 class="font-weight-bold mb-3" style="font-size: 1.5rem;">Mubaligh Teknologi Indonesia</h1>
                <p class="text-dark" style="font-size: 0.98rem;">
                    PT. Mubaligh Teknologi Indonesia adalah sebuah perusahaan yang bergerak dibidang ICT
                    (Information and Communication Technology) serta konsultansi dibidang Manajemen Teknologi.
                    Mubaligh Teknologi Indonesia (MTI) memberikan pelayanan dan pemecahan berbagai masalah
                    teknologi berdasarkan best practices, baik didalamnya pemecahan masalah Bisnis dan Tata Kelola IT,
                    Sistem Aplikasi, Software Development, Network Management System, IT Infrastructure,
                    System Security dan Profesional Services/Maintenance, pelatihan SDM Talenta Digital baik
                    terkait teknis ICT maupun Manajemen Sistem Perusahaan. Kami siap melayani dan memberikan
                    solusi ICT terbaik untuk anda.
                </p>
                <a href="#" class="btn btn-dark btn-lg mt-3 rounded" style="border-radius: 0;">Selengkapnya →</a>
            </div>
        </div>
    </div>

    <!-- Visi Misi Section -->
    <div class="container-fluid py-5 bg-white">
        <div class="visi-misi-container row justify-content-center text-center px-4">
            <div class="col-lg-4">
                <h3 class="font-weight-bold mb-4" style="font-size: 1.75rem;">Visi</h3>
                <p class="text-muted" style="font-size: 1rem;">
                    Menjadi Perusahaan Penyedia Layanan dan Solusi ICT terbaik yang mampu memberikan
                    kontribusi besar terhadap pembangunan industri Teknologi di Indonesia dengan berpegang
                    pada prinsip inovasi, profesionalisme, dan kepuasan pelanggan.
                </p>
            </div>
            <div class="col-lg-4">
                <h3 class="font-weight-bold mb-4" style="font-size: 1.75rem;">Misi</h3>
                <p class="text-muted text-left" style="font-size: 1rem;">
                    1. Mengembangkan dan menyediakan layanan serta solusi ICT yang berkualitas tinggi dan
                    sesuai dengan kebutuhan pasar.
                    <br>
                    2. Meningkatkan kompetensi sumber daya manusia di bidang Teknologi Informasi dan
                    Komunikasi melalui pendidikan, pelatihan, dan sertifikasi.
                    <br>
                    3. Berkontribusi pada pengembangan industri ICT di Indonesia melalui riset, inovasi,
                    dan implementasi teknologi terbaru.
                    <br>
                    4. Menjalin kerjasama strategis dengan mitra lokal dan internasional untuk memperluas
                    jangkauan layanan dan solusi kami.
                </p>
            </div>
        </div>
    </div>

    <!-- Bagian Card -->
    <div class="container-fluid p-5 bg-light">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 text-center border-0 shadow">
                    <div class="card-body">
                        <!-- hapus komen kalo ada gambar nya -->
                        <!-- <img src="gambar/icon/consulting.svg" alt="Consulting Icon" class="mb-3"> -->
                        <h5 class="card-title font-weight-bold">Konsultansi Tata Kelola TI dan SPBE</h5>
                        <p class="card-text">
                            Penyusunan dan Pemodelan Kerangka Kerja, Kebijakan dan Strategi Teknologi Informasi/Sistem
                            Pemerintahan Berbasis Elektronik (SPBE)/ Transformasi Digital untuk pemerintahan maupun perusahaan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 text-center border-0 shadow">
                    <div class="card-body">
                        <!-- hapus komen kalo ada gambar nya -->
                        <!-- <img src="gambar/icon/blueprint.svg" alt="Blueprint Icon" class="mb-3"> -->
                        <h5 class="card-title font-weight-bold">IT Blue Print & IT Masterplan</h5>
                        <p class="card-text">
                            Manajemen Konsultansi dan Penyusunan dokumen IT Blueprint / IT Masterplan / Enterprise
                            Architecture maupun Arsitektur SPBE dan Peta Rencana SPBE.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 text-center border-0 shadow">
                    <div class="card-body">
                        <!-- hapus komen kalo ada gambar nya -->
                        <!-- <img src="gambar/icon/iso.svg" alt="ISO Icon" class="mb-3"> -->
                        <h5 class="card-title font-weight-bold">Pendampingan Sertifikasi ISO</h5>
                        <p class="card-text">
                            Pendampingan dalam penyiapan sertifikasi ISO 27001 (Information Security Management System)
                            dan ISO 20000 (Service Management System) untuk meningkatkan penerapan Keamanan Informasi
                            organisasi dan manajemen layanan serta meningkatkan kepercayaan pengguna, customer dan masyarakat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100 text-center border-0 shadow">
                    <div class="card-body">
                        <!--<img src="gambar/icon/development.svg" alt="Development Icon" class="mb-3"> -->
                        <h5 class="card-title font-weight-bold">Software Development</h5>
                        <p class="card-text">
                            Pengembangan Sistem Informasi, Dashboard, Website dan Aplikasi Android serta integrasi aplikasi
                            dan analitik Data termasuk maintenance-nya baik untuk Pemerintahan maupun Perusahaan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-column pr-5">
                <div class="footer-logo">
                    <img src="gambar/depan/Logoo.png" alt="Footer Logo">
                </div>
                <p>Arsip Dokumen Mubaligh Teknologi Indonesia</p>
            </div>
            <div class="footer-column pl-5">
                <h4>Tentang Kami</h4>
                <ul>
                    <li><a href="#">Profil Perusahaan</a></li>
                    <li><a href="#">Visi & Misi</a></li>
                    <li><a href="#">Layanan Kami</a></li>
                </ul>
            </div>
            <div class="footer-column ">
                <h4>Kontak Kami</h4>
                <ul>
                    <li><a href="#">Email: admin@mubalighteknologi.co.id</a></li>
                    <li><a href="#">Telepon: +(62)8118903354</a></li>
                    <li><a href="#">Alamat: Jl. H. Kelik No.C 22, Srengseng, Kec. Kembangan, Jakarta</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- jQuery, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>