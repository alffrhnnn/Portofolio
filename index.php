<?php /* INDEX.PHP – RESPONSIVE + ANIMASI + HAMBURGER */ ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AFR Portfolio – Alif Farhan Romadhani</title>

    <!-- AOS ANIMATION -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap');

        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background: #0a0a0a;
            color: #fff;
            overflow-x: hidden;
        }

        /* HEADER */
        header {
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            padding: 22px 55px;
            background: rgba(255,255,255,0.03);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(255,255,255,0.12);
            z-index: 20;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav a {
            margin-left: 30px;
            text-decoration: none;
            color: #fff;
            opacity: .8;
            transition: .2s;
        }
        header nav a:hover{ opacity:1; }

        /* HAMBURGER */
        .hamburger {
            display: none;
            font-size: 32px;
            cursor: pointer;
            user-select: none;
        }

        /* MOBILE NAV */
        .mobile-nav {
            display: none;
            flex-direction: column;
            background: rgba(20,20,20,0.95);
            position: fixed;
            top: 80px;
            left: 0;
            width: 100%;
            padding: 25px;
            border-top: 1px solid rgba(255,255,255,0.15);
            animation: fadeDown .35s ease;
        }

        .mobile-nav a {
            text-decoration: none;
            font-size: 19px;
            color: #fff;
            padding: 14px 0;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* HERO */
        .hero {
            padding-top: 190px;
            max-width: 1300px;
            margin: auto;
        }

        .big-title {
            font-size: 5.8rem;
            font-weight: 800;
            line-height: .9;
            background: linear-gradient(140deg, #5aff7b, #55c6ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 70px;
        }

        .info-section {
            display: grid;
            grid-template-columns: 1fr 330px 1fr;
            gap: 45px;
        }

        .card {
            background: rgba(255,255,255,0.05);
            padding: 32px;
            border-radius: 18px;
            border: 1px solid rgba(255,255,255,0.12);
            backdrop-filter: blur(14px);
        }

        .section-title {
            font-size: 1.45rem;
            font-weight: 700;
            margin-bottom: 10px;
            background: linear-gradient(135deg,#290fbd,#78d8ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .info-text {
            opacity: .85;
            line-height: 1.8;
            font-size: 15.6px;
        }

        .photo-area img {
            width: 100%;
            border-radius: 22px;
            border: 1px solid rgba(255,255,255,0.15);
            box-shadow: 0 15px 35px rgba(0,0,0,0.6);
            transition: .4s;
        }
        .photo-area img:hover { transform: scale(1.03); }

        /* PRODUK */
        .products-section{
            max-width:1300px;
            margin: 80px auto;
        }

        .product-grid {
            display:grid;
            grid-template-columns:repeat(auto-fill,minmax(280px,1fr));
            gap:25px;
            margin-top:30px;
        }

        .product-card {
            border-radius:18px;
            background:rgba(255,255,255,0.05);
            border:1px solid rgba(255,255,255,0.12);
            overflow:hidden;
            transition:.3s;
        }
        .product-card:hover{ transform:translateY(-6px); }

        footer {
            margin-top: 120px;
            text-align:center;
            opacity:.5;
            padding-bottom:40px;
        }

        /* =================== RESPONSIVE =================== */
        @media(max-width:900px){
            .hamburger { display: block; }

            header nav { display:none; }

            .big-title{ font-size:4rem; }

            .info-section{
                grid-template-columns:1fr;
                gap:25px;
            }

            .product-grid{
                display:flex;
                overflow-x:auto;
                gap:18px;
                scroll-snap-type:x mandatory;
            }
            .product-card{
                min-width:260px;
                scroll-snap-align:center;
            }
        }

        @media(max-width:480px){
            .big-title{ font-size:3rem; }
        }

    </style>
</head>

<body>

<header>
    <h2>AFR PORTFOLIO</h2>

    <nav>
        <a href="#home">Home</a>
        <a href="#about">Tentang</a>
        <a href="#skills">Keahlian</a>
        <a href="#products">Produk</a>
        <a href="#contact">Kontak</a>
    </nav>

    <!-- HAMBURGER ICON -->
    <div class="hamburger" onclick="toggleMenu()">☰</div>
</header>

<!-- MOBILE NAV -->
<div class="mobile-nav" id="mobileNav">
    <a href="#home" onclick="toggleMenu()">Home</a>
    <a href="#about" onclick="toggleMenu()">Tentang</a>
    <a href="#skills" onclick="toggleMenu()">Keahlian</a>
    <a href="#products" onclick="toggleMenu()">Produk</a>
    <a href="#contact" onclick="toggleMenu()">Kontak</a>
</div>

<section class="hero" id="home" data-aos="fade-up">
    <h1 class="big-title" data-aos="fade-up" data-aos-delay="150">
        ALIF <br> FARHAN <br> ROMADHANI
    </h1>

    <div class="info-section">

        <div class="card" id="about" data-aos="fade-right">
            <h3 class="section-title">TENTANG SAYA</h3>
            <p class="info-text">
                Saya adalah Web Developer & Pengusaha dengan fokus pada pembuatan website modern.
            </p>

            <h3 class="section-title" style="margin-top:25px;">ALAMAT</h3>
            <p class="info-text">Desa Panji Lor, Situbondo</p>
        </div>

        <div class="photo-area" data-aos="zoom-in">
            <img src="assets/bg.jpg" alt="Foto Profil">
        </div>

        <div class="card" id="skills" data-aos="fade-left">
            <h3 class="section-title">KEAHLIAN</h3>
            <p class="info-text">
                • Web Design Premium Futuristik <br><br>
                • UI/UX Modern System <br><br>
                • HTML, CSS, JavaScript Development <br><br>
                • Landing Page Marketing
            </p>

            <h3 class="section-title" style="margin-top:25px;" id="contact">KONTAK</h3>
            <p class="info-text">
                <b>Email:</b> alifdeveloper@example.com <br>
                <b>WhatsApp:</b> 08xxxxxxxxxx
            </p>
        </div>

    </div>
</section>

<section class="products-section" id="products">
    <h2 class="section-title" style="font-size:2rem;" data-aos="fade-up">PRODUK & LAYANAN</h2>

    <div class="product-grid">

        <div class="product-card" data-aos="zoom-in">
            <img src="assets/product1.jpg">
            <div class="product-content">
                <h3>Landing Page Premium</h3>
                <p class="info-text">Website cepat & elegan.</p>
            </div>
        </div>

        <div class="product-card" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/product2.jpg">
            <div class="product-content">
                <h3>Website Perusahaan</h3>
                <p class="info-text">Profil profesional.</p>
            </div>
        </div>

        <div class="product-card" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/product3.jpg">
            <div class="product-content">
                <h3>Desain UI/UX</h3>
                <p class="info-text">Tampilan modern.</p>
            </div>
        </div>

        <div class="product-card" data-aos="zoom-in" data-aos-delay="300">
            <img src="assets/product4.jpg">
            <div class="product-content">
                <h3>Web Development</h3>
                <p class="info-text">Custom system.</p>
            </div>
        </div>

    </div>
</section>

<footer data-aos="fade-up">
    © 2025 Alif Farhan Romadhani • Web Developer
</footer>

<!-- AOS SCRIPT -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({ duration: 800, once: true });

    function toggleMenu() {
        const nav = document.getElementById("mobileNav");
        nav.style.display = (nav.style.display === "flex") ? "none" : "flex";
    }
</script>

</body>
</html>
