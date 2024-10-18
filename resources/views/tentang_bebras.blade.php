<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebras Indonesia</title>
    <link rel="stylesheet" href="tentang_bebras.css">
    <script>
        // JavaScript untuk menampilkan konten sesuai menu yang diklik
        function showSection(sectionId) {
            // Sembunyikan semua section konten
            const sections = document.querySelectorAll('.section-content');
            sections.forEach(section => section.style.display = 'none');

            // Tampilkan section yang sesuai dengan id
            const sectionToShow = document.getElementById(sectionId);
            if (sectionToShow) {
                sectionToShow.style.display = 'block';
            }
        }

        // Event listener untuk menjalankan JavaScript saat DOM siap
        document.addEventListener('DOMContentLoaded', function() {
            // Default menampilkan konten "Apa Itu Berpikir Komputasional?"
            showSection('berpikir-komputasional');

            // Event listener untuk setiap menu klik
            const links = document.querySelectorAll('.dropdown-content a');
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();  // Mencegah reload halaman
                    const sectionId = this.getAttribute('data-section');
                    showSection(sectionId);  // Panggil fungsi untuk menampilkan konten
                });
            });
        });
    </script>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="img/logo-bebras.png" alt="Bebras Indonesia Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#">Tentang Bebras</a>
                    <ul class="dropdown-content">
                        <li><a href="#" data-section="berpikir-komputasional">Apa Itu Berpikir Komputasional?</a></li>
                        <li><a href="#" data-section="apa-itu-bebras">Apa Itu Bebras</a></li>
                        <li><a href="#" data-section="tujuan-kami">Tujuan Kami</a></li>
                        <li><a href="#" data-section="ruang-lingkup">Ruang Lingkup</a></li>
                        <li><a href="#" data-section="kegiatan-bebras">Kegiatan Bebras</a></li>
                        <li><a href="#" data-section="sejarah-bebras">Sejarah Bebras Indonesia</a></li>
                        <li><a href="#" data-section="bebras-biro">Bebras Biro</a></li>
                    </ul>
                </li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Section Apa Itu Berpikir Komputasional -->
        <section id="berpikir-komputasional" class="section-content">
            <h1><span class="highlight">Apa itu</span> Berpikir Komputasional?</h1>
            <div class="content">
                <img src="img/computational-thinking.jpg" alt="Berpikir Komputasional">
                <p>Berpikir komputasional (Computational Thinking) adalah metode menyelesaikan persoalan dengan menerapkan teknik ilmu komputer (informatika). Tantangan Bebras menyajikan soal-soal yang mendorong siswa untuk berpikir kreatif dan kritis dalam menyelesaikan persoalan dengan menerapkan konsep-konsep berpikir komputasional.</p>
            </div>
        </section>

        <!-- Section Apa Itu Bebras -->
        <section id="apa-itu-bebras" class="section-content" style="display:none;">
            <h2>Apa Itu Bebras?</h2>
            <p>Secara harfiah, “Bebras” adalah kata dalam bahasa Lithuania, yang berarti “berang-berang” dalam bahasa Indonesia. Prof. Valentina Dagiene dari Universitas Vilnius, Lithuania adalah yang mencetuskan gagasan Bebras Computational Thinking Challenge, yang saat ini diikuti oleh lebih dari 55 negara di dunia.</p>
            <p>Bebras adalah sebuah inisiatif internasional yang tujuannya adalah untuk mempromosikan Computational Thinking (Berpikir dengan landasan Komputasi atau Informatika), di kalangan guru dan murid mulai tingkat SD, serta untuk masyarakat luas.</p>
            <p>Cara untuk promosi adalah dengan menyelenggarakan kegiatan kompetisi secara daring (online), yang disebut sebagai “Tantangan Bebras”. Tantangan Bebras bukan hanya sekedar untuk menang. Selain untuk berlomba, tantangan Bebras juga bertujuan agar siswa belajar Computational Thinking selama maupun setelah lomba.</p>
            <p>Di Indonesia, kompetisi dapat dilaksanakan di sekolah yang mempunyai cukup komputer, atau di universitas pembina.</p>
            <p>Setiap soal Bebras mengandung aspek komputasi atau informatika dan dimaksudkan untuk menguji bakat peserta untuk berpikir komputasi atau informatika.</p>
        </section>

        <!-- Tambahkan section lainnya dengan konten sesuai -->
        <!-- Misalnya, section Tujuan Kami -->
        <section id="tujuan-kami" class="section-content" style="display:none;">
            <h2>Tujuan Kami</h2>
            <p>Ini adalah penjelasan tentang tujuan Bebras.</p>
        </section>

        <!-- Section untuk Ruang Lingkup -->
        <section id="ruang-lingkup" class="section-content" style="display:none;">
            <h2>Ruang Lingkup</h2>
            <p>Ini adalah penjelasan tentang ruang lingkup kegiatan Bebras.</p>
        </section>

        <!-- Section lainnya juga bisa ditambahkan di sini... -->
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="kontak">
                <h3>Kontak</h3>
                <p>Email: mail@bebras.or.id</p>
                <p>URL: <a href="http://bebras.or.id">http://bebras.or.id</a></p>
            </div>

            <div class="tautan">
                <h3>Tautan</h3>
                <ul>
                    <li><a href="#">Bebras Internasional</a></li>
                    <li><a href="#">Kementerian Pendidikan dan Kebudayaan</a></li>
                    <li><a href="#">Tim Olimpiade Komputer Indonesia (TOKI)</a></li>
                    <li><a href="#">STEI Institut Teknologi Bandung</a></li>
                    <li><a href="#">Fasilkom Universitas Indonesia</a></li>
                </ul>
            </div>

            <div class="arsip">
                <h3>Arsip</h3>
                <ul>
                    <li><a href="#">Workshop 2017</a></li>
                    <li><a href="#">Workshop 2016</a></li>
                    <li><a href="#">Bebras News</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>