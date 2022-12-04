
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,500;1,400&display=swap" rel="stylesheet">

    <!-- font awesome icon -->
    <script src="https://kit.fontawesome.com/003603851d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    
    <title>GOSE Bimbel</title>

</head>
<body>
    <section class="header" id="home">
        <nav>
            <a href="index.php"><img src="assets/images/LOGO.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#whyus">WHY US?</a></li>
                    <li><a href="#program">OUR PROGRAM</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <!-- <li><a href="listPendaftar.php">LIST PENDAFTAR</a></li> -->
                    <!-- <li><a href="kbbiAPI.php">KBBI</a></li> -->
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>Pusat Bimbel No.1 di Banten</h1>
            <p>GOSE BIMBEL merupakan lembaga bimbingan belajar terbaik dan terbesar di Banten. <br>Berdiri sejak 2009 di Kota Cilegon.</p>
            <a href="#" id="button" class="hero-btn">Daftar Sekarang</a>
        </div>

    </section>

    <!-- WHY US -->
    <section class="whyUs" id="whyus">
        <h1>Kenapa Harus Pilih Kami?</h1>
        <p>Kami Memiliki Fasilitas Dan Pengajar Terbaik</p>

        <div class="row">
            <div class="whyUs-col">
                <img src="assets/images/classroomResize.png">
                <h3>Ruang Kelas yang Nyaman</h3>
                <p>Kami memiliki ruang kelas ber-ac yang sangat nyaman dan jauh dari kebisingan</p>
            </div>

            <div class="whyUs-col">
                <img src="assets/images/pengajar.png">
                <h3>Pengajar Berkualitas</h3>
                <p>Pengajar GOSE Bimbel terkenal ramah dan seru. Mereka juga merupakan pengajar pilihan</p>
            </div>

            <div class="whyUs-col">
                <img src="assets/images/serviceTime.png">
                <h3>Tutorial Service Time</h3>
                <p>Pendampingan belajar diluar KBM rutin agar kamu berlatih mengerjakan soal-soal. Kamu bingung ngerjain soal? Tenang, pengajar selalu ada buat kamu</p>
            </div>

            <div class="whyUs-col">
                <img src="assets/images/tryout.png">
                <h3>Try Out dan Evaluasi Prestasi Belajar</h3>
                <p>Kami menyiapkan soal Try Out yang dirancang dengan tingkat kesulitan soal ujian kamu dan selalu melakukan evaluasi setelah melaksanakan try out</p>
            </div>

            <div class="whyUs-col">
                <img src="assets/images/brain.png">
                <h3>Belajar Sesuai Cara Kerja Otak</h3>
                <p>Metode dan teknik belajar sesuai cara kerja otak akan mampu meningkatkan kemampuan akademik dan potensi diri siswa, jauh lebih cepat dan lebih baik</p>
            </div>

            <div class="whyUs-col">
                <img src="assets/images/buku.png">
                <h3>Buku Penunjang Belajar</h3>
                <p>Kamu akan mendapatkan buku penunjang belajar lengkap dengan latihan soal dan kumpulan rumus-rumus</p>
            </div>
        </div>
    </section>

    <!-- Our Program -->
    <section class="program" id="program">
        <h1>Program Kami</h1>
        <p>Kami menyediakan berbagai macam kelas yang dapat anda ikuti</p>

        <div class="row">
            <div class="program-col">
                <a href="#sd" id="sd">
                    <img src="assets/images/anaksd.png">
                    <div class="layer">
                        <h3>Selengkapnya</h3>
                    </div>
                </a>
                <h2>Kelas 4, 5, dan 6</h2>
            </div>

            <div class="program-col">
                <a href="#smp" id="smp">
                    <img src="assets/images/anaksmp.png">
                    <div class="layer">
                        <h3>Selengkapnya</h3>
                    </div>
                </a>
                <h2>Kelas 7, 8, dan 9</h2>
            </div>

            <div class="program-col">
                <a href="#sma" id="sma">
                    <img src="assets/images/anaksma.png">
                    <div class="layer">
                        <h3>Selengkapnya</h3>
                    </div>
                </a>
                <h2>Kelas 10, 11, 12, dan alumni</h2>
            </div>
        </div>
    </section>

    

    <!-- Contact -->
    <section class="contact" id="contact">
        <h1>Jika Anda Punya Pertanyaan atau Keluhan, <br>Anda Dapat Sampaikan ke MinGOSE</h1>
        <a href="https://wa.me/62895610769630" class="hero-btn">CONTACT US</a>
    </section>

    <!-- footer -->

    <section class="footer">
        <h2>About Us</h2>
        <h5>Kantor Pusat</h5>
        <p>Jln. Rajawali No.13 <br>Cilegon</p>
        <h5>Follow Us</h5>
        <div class="icons">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-youtube"></i></a>
        </div>
        <div>
            <p>copyright &copy;2021. GOSE BIMBEL by Rivaldy Arief Nugraha</p>
        </div>
    </section>

    <!-- sd -->
    <div class="bg-modal-sd">
        <div class="modal-content-sd">
            <div class="close-sd">+</div>
            <h2>Reguler 4-5-6 SD</h2>
            <hr>
            <h4>Lingkup Materi</h4>
            <p>Persiapan Ketuntasan Belajar Minimal  (KBM), Penilaian Harian (PH), Penilaian Tengah Semester (PTS), Penilaian Akhir Tahun (PAT), Ujian Sekolah Berstandar Nasional  (USBN)</p>
            <h4>Mata Pelajaran</h4>
            <p>Matematika, IPA, IPS, Bahasa Indonesia, dan Bahasa Inggris</p>

        </div>
    </div>

    <!-- smp -->
    <div class="bg-modal-smp">
        <div class="modal-content-smp">
            <div class="close-smp">+</div>
            <h2>Reguler 7-8-9 SMP</h2>
            <hr>
            <h4>Lingkup Materi</h4>
            <p>Persiapan Ketuntasan Belajar Minimal  (KBM), Penilaian Harian (PH), Penilaian Tengah Semester (PTS), Penilaian Akhir Tahun (PAT), UN SMP</p>
            <h4>Mata Pelajaran</h4>
            <p>Matematika, Fisika, Kimia, Biologi, Ekonomi, Geografi, Sosiologi, Sejarah, Bahasa Indonesia, dan Bahasa Inggris</p>

        </div>
    </div>

    <!-- sma & alumni -->
    <div class="bg-modal-sma">
        <div class="modal-content-sma">
            <div class="close-sma">+</div>
            <h2>Reguler 10-11-12 SMA-Alumni</h2>
            <hr>
            <h4>Lingkup Materi</h4>
            <p>Persiapan Ketuntasan Belajar Minimal  (KBM), Penilaian Harian (PH), Penilaian Tengah Semester (PTS), Penilaian Akhir Tahun (PAT), UN SMA, Persiapan SBMPTN</p>
            <h4>Mata Pelajaran</h4>
            <p>Saintek : Matematika, Fisika, Kimia, dan Biologi<br>
            Soshum :  Matematika, Ekonomi, Geografi, Sosiologi, Sejarah, Bahasa Indonesia, Bahasa Inggris
            </p>
        </div>
    </div>

    <!-- register -->
    <div class="bg-modal" id="REGISTER">
        <div class="modal-content">
            <div class="close">+</div>
            <form action="#" method="POST">   
                <div class="container">
                    <h2>Formulir Pendaftaran</h2>

                    <label for="nama"><b>Nama</b></label>
                    <input type="text" placeholder="Nama"  name="nama" id="nama">

                    <label for="noHP"><b>No.Handphone</b></label>
                    <input type="number" placeholder="Nomor Handphone" name="no_hp" id="noHP">

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Email" name="email" id="email">

                    <label for="kelas"><b>Pilih Kelas</b></label>
                    <select name="kelas" placeholder="kelas">
                        <option selected hidden value="">--Pilih--</option>
                        <option value="4SD">4 SD</option>
                        <option value="5SD">5 SD</option>
                        <option value="6SD">6 SD</option>
                        <option value="7SMP">7 SMP</option>
                        <option value="8SMP">8 SMP</option>
                        <option value="9SMP">9 SMP</option>
                        <option value="10SMA">10 SMA</option>
                        <option value="11SMA">11 SMA</option>
                        <option value="12SMA">12 SMA</option>
                        <option value="alumni">Alumni</option>
                    </select>
                    <button type="submit" class="registerbtn" name="submit">Register</button>
                </div>

            </form>
        </div>
    </div>

    <!-- javascript for toogle menu -->
    <script>

        var navLinks = document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right = "0";
        }

        function hideMenu(){
            navLinks.style.right = "-200px";
        }
        
        // register
        document.getElementById('button').addEventListener('click',function() {
            document.querySelector('.bg-modal').style.display = 'flex';
        });

        document.querySelector('.close').addEventListener('click', function() {
            document.querySelector('.bg-modal').style.display = 'none';
        });

        // program sd
        document.getElementById('sd').addEventListener('click',function() {
            document.querySelector('.bg-modal-sd').style.display = 'flex';
        });

        document.querySelector('.close-sd').addEventListener('click', function() {
            document.querySelector('.bg-modal-sd').style.display = 'none';
        });

        // program smp
        document.getElementById('smp').addEventListener('click',function() {
            document.querySelector('.bg-modal-smp').style.display = 'flex';
        });

        document.querySelector('.close-smp').addEventListener('click', function() {
            document.querySelector('.bg-modal-smp').style.display = 'none';
        });

        // program sma
        document.getElementById('sma').addEventListener('click',function() {
            document.querySelector('.bg-modal-sma').style.display = 'flex';
        });

        document.querySelector('.close-sma').addEventListener('click', function() {
            document.querySelector('.bg-modal-sma').style.display = 'none';
        });
        
    </script>
</body>
</html>