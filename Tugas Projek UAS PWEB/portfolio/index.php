<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>My Portfolio</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

</head>

<body>
    <!-- Navbar -->
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="#">Portfolio</a>
            </div>
            <ul class="links">
                <li><a href="#banner">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#akademik">Akademik</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
            <a href="login-form.php" class="action_btn">Login</a>
            <div class="toggle">
                <i class="fa-solid fa-bars"></i>
            </div>

            <!-- Dropdown Menu -->
            <div class="dropdown-menu">
                <ul>
                    <li><a href="#banner">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#akademik">Akademik</a></li>
                    <li><a href="#contact">Kontak</a></li>
                    <li><a href="login-form.php" class="action_btn-drop">Login</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Content -->
    <main>
        <!-- Banner -->
        <section id="banner">
            <h1>
                Selamat datang di website portfolio<br />
                <span>Yusliza Imas Hidayu</span>
            </h1>
            <p></p>
        </section>

        <!-- About -->
        <section id="about">
            <h1 class="heading">Tentang <span>Saya</span></h1>
            <div class="row">
                <div class="foto-container">
                    <img src="assets/img/about.jpg" alt="" />
                </div>
                <div class="content">
                    <h3>Tentang Saya</h3>
                    <p>
                        Hi, saya adalah mahasiswa semester dua informatika. Saat ini sedang belajar HTML, Javascript, CSS. Saya memang masih baru dalam pemrograman Web, karena itu saya tidak akan pernah berhenti belajar. Saya ingin menguasai bahasa HTML, CSS, dan Javascript. Maka dari itu saya masih terus akan belajar sampai saya bisa membuat Web yang menarik. Selain itu, pada semester satu saya mendapatkan bahasa C dan C++ pada Dasar-Dasar Pemrograman. Masih banyak hal yang saya pelajari dan dapatkan. Saya berharap suatu saat nanti dengan ilmu yang saya dapatkan selama 4 tahun nantinya akan bermanfaat di setiap perjalanan karier saya nantinya.
                    </p>
                </div>
            </div>
        </section>

        <!-- Akademik -->
        <section id="akademik">
            <h1 class="heading">Riwayat <span>Akademik</span></h1>
            <div class="akademik-container">
                <div class="pendidikan-formal">
                    <h2>Pendidikan Formal</h2>
                    <ul>
                        <li>SDN Grantung, 2017</li>
                        <li>SMPN 31 Purworejo, 2020</li>
                        <li>SMAN 6 Purworejo, 2023</li>
                        <li>Universitas Ahmad Dahlan, Informatika, Semester dua</li>
                    </ul>
                </div>
                <div class="prestasi-akademik">
                    <h2>Prestasi Akademik</h2>
                    <ul>
                        <li>Lomba LCC, 2015</li>
                        <li>Lomba pesta siaga, 2014</li>
                        <li>Lomba Ceramah, 2022</li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- Contact -->
        <section id="contact">
            <h1 class="heading">Kontak <span>Saya</span></h1>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Hubungi Saya</h3>
                    <p>Jika Anda memiliki pertanyaan atau ingin memberikan masukan, jangan ragu untuk menghubungi saya!</p>
                    <ul>
                        <li><i class="fa-solid fa-envelope"></i>yuslizaimashidayu@gmail.com</li>
                        <li><i class="fa-solid fa-phone"></i>+62 123 4567 890</li>
                        <li><i class="fa-solid fa-map-marker-alt"></i> Indonesia</li>
                    </ul>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <input type="text" name="name" placeholder="Nama" required />
                        <input type="email" name="email" placeholder="Email" required />
                        <input type="text" name="subject" placeholder="Subjek" required />
                        <input type="tel" name="phone" placeholder="Nomor Telepon" required />
                        <textarea name="message" rows="5" placeholder="Pesan" required></textarea>
                        <button type="submit" class="action_btn">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </section>

    </main>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/contact.js"></script>
</body>

</html>