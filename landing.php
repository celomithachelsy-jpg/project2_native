<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="THT Health — Sumber informasi terpercaya seputar kesehatan Telinga, Hidung, dan Tenggorokan. Temukan tips pencegahan, gejala penyakit, dan panduan hidup sehat.">
    <title>THT Health — Informasi Kesehatan Telinga, Hidung & Tenggorokan</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/style/style.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- ================= BUBBLES ================= -->
    <div class="bubbles">
        <span></span><span></span><span></span><span></span>
        <span></span><span></span><span></span><span></span>
        <span></span><span></span><span></span><span></span>
        <span></span><span></span><span></span><span></span>
    </div>

    <!-- ================= NAVBAR ================= -->
    <nav>

        <h2>THT Health</h2>

        <ul>
            <li><a href="#home">Beranda</a></li>
            <li><a href="#informasi">Informasi</a></li>
            <li><a href="#berita">Berita</a></li>
            <li><a href="#about">Tim Kami</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>

    </nav>

    <!-- ================= HOME ================= -->
    <section id="home">

        <div class="hero-content">

            <!-- HERO: TEKS KIRI -->
            <div class="hero-text">

                <span class="hero-badge">🩺 Platform Kesehatan THT</span>

                <h1>Selamat Datang di<br><span class="hero-highlight">THT Health</span></h1>

                <p>
                    <strong>THT Health</strong> adalah platform informasi kesehatan yang berfokus pada
                    organ <em>Telinga, Hidung, dan Tenggorokan</em>. Kami hadir untuk membantu
                    Anda memahami fungsi, risiko, dan cara menjaga kesehatan ketiga organ vital
                    ini dalam kehidupan sehari-hari.
                </p>

                <div class="hero-tags">
                    <span class="hero-tag">🦻 Telinga</span>
                    <span class="hero-tag">👃 Hidung</span>
                    <span class="hero-tag">🗣️ Tenggorokan</span>
                </div>

            </div>

            <!-- HERO: ILUSTRASI KANAN -->
            <div class="hero-visual">

                <div class="hero-blob hero-blob-1"></div>
                <div class="hero-blob hero-blob-2"></div>

                <div class="hero-illustration">
                    <svg viewBox="0 0 320 320" xmlns="http://www.w3.org/2000/svg" aria-label="Ilustrasi THT Health">

                        <!-- Background circle -->
                        <circle cx="160" cy="160" r="145" fill="#e0f2fe" />

                        <!-- Head shape -->
                        <ellipse cx="160" cy="145" rx="70" ry="85" fill="#fff" stroke="#bae6fd" stroke-width="2" />

                        <!-- Ear (right side visible) -->
                        <path d="M230 135 Q248 135 248 155 Q248 175 230 175 Q238 165 238 155 Q238 145 230 135Z"
                            fill="#7dd3fc" stroke="#38bdf8" stroke-width="1.5" />
                        <path d="M234 148 Q240 148 240 155 Q240 162 234 162" fill="none" stroke="#0284c7"
                            stroke-width="1.5" stroke-linecap="round" />

                        <!-- Nose -->
                        <path d="M153 155 Q148 170 145 175 Q152 178 160 178 Q168 178 175 175 Q172 170 167 155Z"
                            fill="#bae6fd" stroke="#7dd3fc" stroke-width="1" />
                        <!-- Nose nostrils -->
                        <ellipse cx="150" cy="176" rx="5" ry="3" fill="#7dd3fc" />
                        <ellipse cx="170" cy="176" rx="5" ry="3" fill="#7dd3fc" />

                        <!-- Eyes -->
                        <ellipse cx="140" cy="140" rx="9" ry="6" fill="#0284c7" />
                        <circle cx="142" cy="138" r="2" fill="white" />
                        <ellipse cx="180" cy="140" rx="9" ry="6" fill="#0284c7" />
                        <circle cx="182" cy="138" r="2" fill="white" />

                        <!-- Eyebrows -->
                        <path d="M131 131 Q140 127 149 130" fill="none" stroke="#0369a1" stroke-width="2.5"
                            stroke-linecap="round" />
                        <path d="M171 130 Q180 127 189 131" fill="none" stroke="#0369a1" stroke-width="2.5"
                            stroke-linecap="round" />

                        <!-- Mouth/Throat opening -->
                        <path d="M145 195 Q160 205 175 195" fill="none" stroke="#0284c7" stroke-width="2.5"
                            stroke-linecap="round" />

                        <!-- Throat line -->
                        <line x1="160" y1="210" x2="160" y2="225" stroke="#7dd3fc" stroke-width="3"
                            stroke-linecap="round" />

                        <!-- Hair -->
                        <path d="M90 130 Q92 60 160 58 Q228 60 230 130 Q215 90 160 88 Q105 90 90 130Z" fill="#0284c7" />
                        <path d="M91 128 Q88 105 95 92" fill="none" stroke="#0369a1" stroke-width="1" />

                        <!-- Floating icon: Stethoscope (top-left) -->
                        <g transform="translate(40, 50)">
                            <circle cx="18" cy="18" r="16" fill="white" filter="url(#shadow)" />
                            <text x="18" y="23" text-anchor="middle" font-size="16">🩺</text>
                        </g>

                        <!-- Floating icon: Shield (top-right) -->
                        <g transform="translate(242, 48)">
                            <circle cx="18" cy="18" r="16" fill="white" />
                            <text x="18" y="23" text-anchor="middle" font-size="16">🛡️</text>
                        </g>

                        <!-- Floating icon: Heart (bottom-left) -->
                        <g transform="translate(38, 220)">
                            <circle cx="18" cy="18" r="16" fill="white" />
                            <text x="18" y="23" text-anchor="middle" font-size="16">💙</text>
                        </g>

                        <!-- Floating icon: Sparkle (bottom-right) -->
                        <g transform="translate(242, 220)">
                            <circle cx="18" cy="18" r="16" fill="white" />
                            <text x="18" y="23" text-anchor="middle" font-size="16">✨</text>
                        </g>

                        <!-- Dashed ring accent -->
                        <circle cx="160" cy="160" r="145" fill="none" stroke="#bae6fd" stroke-width="2"
                            stroke-dasharray="8 6" opacity="0.7" />

                        <!-- Filter for shadow -->
                        <defs>
                            <filter id="shadow">
                                <feDropShadow dx="0" dy="2" stdDeviation="3" flood-opacity="0.1" />
                            </filter>
                        </defs>

                    </svg>
                </div>

            </div>

        </div>

    </section>
    <div class="wave-divider">
        <svg viewBox="0 0 1440 320">
            <path fill="#dff6ff" fill-opacity="1"
                d="M0,192L60,186.7C120,181,240,171,360,181.3C480,192,600,224,720,224C840,224,960,192,1080,170.7C1200,149,1320,139,1380,133.3L1440,128L1440,320L0,320Z">
            </path>
        </svg>
    </div>

    <!-- ================= INFORMASI ================= -->
    <section id="informasi">

        <h2>Informasi Kesehatan</h2>
        <p class="section-subtitle">Pelajari lebih lanjut tentang kesehatan organ vital Anda</p>

        <div class="card-container">

            <!-- CARD TELINGA -->
            <div class="card">
                <div class="card-img-wrapper">
                    <img src="assets/images/telinga.png" alt="Telinga">
                    <span class="card-badge">🦻</span>
                </div>
                <div class="card-body">
                    <h3>Telinga</h3>
                    <p>
                        Telinga adalah organ pendengaran sekaligus pusat keseimbangan tubuh.
                        Organ ini sangat rentan terhadap infeksi, penumpukan kotoran, dan
                        paparan suara keras. Ketahui cara merawat telinga dengan benar agar
                        fungsi pendengaran tetap optimal sepanjang usia.
                    </p>
                    <a href="telinga.php" class="card-link">Pelajari Lebih Lanjut &rarr;</a>
                </div>
            </div>

            <!-- CARD HIDUNG -->
            <div class="card">
                <div class="card-img-wrapper">
                    <img src="assets/images/hidung.png" alt="Hidung">
                    <span class="card-badge">👃</span>
                </div>
                <div class="card-body">
                    <h3>Hidung</h3>
                    <p>
                        Hidung berperan sebagai filter udara alami tubuh — menyaring debu,
                        kuman, dan polutan sebelum masuk ke paru-paru. Gangguan seperti
                        alergi, sinusitis, dan polip hidung dapat menurunkan kualitas hidup.
                        Pelajari cara menjaga hidung tetap sehat dan berfungsi baik.
                    </p>
                    <a href="hidung.php" class="card-link">Pelajari Lebih Lanjut &rarr;</a>
                </div>
            </div>

            <!-- CARD TENGGOROKAN -->
            <div class="card">
                <div class="card-img-wrapper">
                    <img src="assets/images/tenggorokan.png" alt="Tenggorokan">
                    <span class="card-badge">🗣️</span>
                </div>
                <div class="card-body">
                    <h3>Tenggorokan</h3>
                    <p>
                        Tenggorokan menghubungkan rongga mulut ke saluran napas dan saluran
                        cerna. Radang tenggorokan, amandel, dan infeksi saluran napas atas
                        adalah masalah yang sering dijumpai. Temukan panduan perawatan dan
                        pencegahan yang efektif untuk menjaga tenggorokan tetap sehat.
                    </p>
                    <a href="tenggorokan.php" class="card-link">Pelajari Lebih Lanjut &rarr;</a>
                </div>
            </div>

        </div>

    </section>

    <!-- ================= BERITA ================= -->
    <section id="berita">

        <h2>Berita Kesehatan</h2>
        <p class="section-subtitle">Artikel & tips terkini seputar kesehatan THT</p>

        <div class="news-layout">

            <!-- FEATURED CARD -->
            <div class="news-featured">
                <div class="news-featured-img">
                    <img src="assets/images/telinga.png" alt="Berita Telinga">
                    <!-- <span class="news-badge">⭐ Featured</span> -->
                </div>
                <div class="news-featured-body">
                    <span class="news-meta">📅 Mei 2026 &nbsp;•&nbsp; Kesehatan THT</span>
                    <h3>Tips Menjaga Kesehatan Telinga</h3>
                    <p>
                        Kebiasaan sehari-hari seperti membersihkan telinga secara berlebihan
                        justru bisa membahayakan. Simak panduan lengkap dari para ahli THT
                        tentang cara merawat telinga yang benar dan aman untuk semua usia.
                    </p>
                    <a href="https://share.google/ryVVBRoZUVhG3eAaj" class="btn-primary" target="_blank"
                        rel="noopener noreferrer">
                        Baca Selengkapnya &rarr;
                    </a>
                </div>
            </div>

            <!-- SIDE CARDS -->
            <div class="news-side">

                <div class="news-side-card">
                    <img src="assets/images/hidung.png" alt="Berita Hidung">
                    <div class="news-side-body">
                        <span class="news-meta">📅 Mei 2026</span>
                        <h4>Tips Menjaga Kesehatan Hidung</h4>
                        <p>
                            Hidung tersumbat bukan sekadar gangguan ringan — bisa jadi tanda
                            sinusitis kronis atau alergi yang membutuhkan penanganan tepat.
                        </p>
                        <a href="https://share.google/iL184tXmzvdpJ6SbD" class="berita-link-text" target="_blank"
                            rel="noopener noreferrer">
                            Baca Selengkapnya &rarr;
                        </a>
                    </div>
                </div>

                <div class="news-side-card">
                    <img src="assets/images/tenggorokan.png" alt="Berita Tenggorokan">
                    <div class="news-side-body">
                        <span class="news-meta">📅 Mei 2026</span>
                        <h4>Tips Menjaga Kesehatan Tenggorokan</h4>
                        <p>
                            Sering merasakan tenggorokan gatal atau suara serak? Ini bisa
                            menjadi sinyal bahwa tenggorokan Anda membutuhkan perhatian lebih.
                        </p>
                        <a href="https://share.google/juDwLuete4J4EpxPl" class="berita-link-text" target="_blank"
                            rel="noopener noreferrer">
                            Baca Selengkapnya &rarr;
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- ================= ABOUT ================= -->
    <section id="about">

        <h2>Our Team</h2>
        <p class="section-subtitle">Tim di balik THT Health</p>

        <div class="member-container">

            <!-- MEMBER 1 -->
            <div class="member-card">
                <div class="member-img-ring">
                    <img src="assets/images/celoo.png" alt="Chelsy">
                </div>
                <h4>Chelsy Celomitha A.W</h4>
                <p class="nim">(G43252217)</p>
                <div class="social-links">
                    <a href="https://instagram.com/clchlsy" class="social-btn ig" target="_blank"
                        rel="noopener noreferrer">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/6285334687533" class="social-btn wa" target="_blank"
                        rel="noopener noreferrer">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- MEMBER 2 -->
            <div class="member-card">
                <div class="member-img-ring">
                    <img src="assets/images/ziffa.png" alt="Azza">
                </div>
                <h4>Azza Nayla N.R</h4>
                <p class="nim">(G43251965)</p>
                <div class="social-links">
                    <a href="https://instagram.com/azaanaylanr" class="social-btn ig" target="_blank"
                        rel="noopener noreferrer">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/628819602091" class="social-btn wa" target="_blank"
                        rel="noopener noreferrer">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- MEMBER 3 -->
            <div class="member-card">
                <div class="member-img-ring">
                    <img src="assets/images/inka.png" alt="Inka">
                </div>
                <h4>Inka Julieta P.</h4>
                <p class="nim">(G43251918)</p>
                <div class="social-links">
                    <a href="https://instagram.com/inkk_prxtwi" class="social-btn ig" target="_blank"
                        rel="noopener noreferrer">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/6285745438499" class="social-btn wa" target="_blank"
                        rel="noopener noreferrer">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- MEMBER 4 -->
            <div class="member-card">
                <div class="member-img-ring">
                    <img src="assets/images/rara.png" alt="Maharani">
                </div>
                <h4>Maharani A.A</h4>
                <p class="nim">(G43252053)</p>
                <div class="social-links">
                    <a href="https://instagram.com/raramhrnzh" class="social-btn ig" target="_blank"
                        rel="noopener noreferrer">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/6281358968399" class="social-btn wa" target="_blank"
                        rel="noopener noreferrer">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

        </div>

    </section>

    <!-- ================= CONTACT ================= -->
    <section id="contact">

        <h2>Hubungi Kami</h2>
        <p class="section-subtitle">Kami siap menjawab pertanyaan Anda</p>

        <div class="contact-info-only">
            <h3>THT Health</h3>
            <p>Punya pertanyaan seputar kesehatan THT atau ingin berkolaborasi? Jangan ragu menghubungi kami!</p>

            <ul class="contact-list">
                <li>
                    <span class="contact-icon">📧</span>
                    <div>
                        <strong>Email</strong>
                        <span>tim@ththealth.com</span>
                    </div>
                </li>
                <li>
                    <span class="contact-icon">📱</span>
                    <div>
                        <strong>WhatsApp</strong>
                        <span>+62 812-3456-7890</span>
                    </div>
                </li>
                <li>
                    <span class="contact-icon">📍</span>
                    <div>
                        <strong>Lokasi</strong>
                        <span>Jember, Jawa Timur, Indonesia</span>
                    </div>
                </li>
                <li>
                    <span class="contact-icon">🎓</span>
                    <div>
                        <strong>Program</strong>
                        <span>Promosi Kesehatan — Kelas C, Politeknik Negeri Jember</span>
                    </div>
                </li>
            </ul>
        </div>

    </section>

    <!-- ================= FOOTER ================= -->
    <footer>

        <div class="footer-content">

            <img src="https://ui-avatars.com/api/?name=P+J&background=fff&color=0284c7&size=150" class="footer-logo"
                alt="Logo THT Health">

            <div class="footer-text">
                <h3>THT Health</h3>

                <p>
                    <a href="auth/login.php" style="color: inherit; text-decoration: none;"
                        title="Staff Login">©</a>
                    2026 THT Health — Platform Informasi Kesehatan Telinga, Hidung, dan Tenggorokan.
                    Dibuat oleh Mahasiswa Promosi Kesehatan, Politeknik Negeri Jember.
                </p>
            </div>

        </div>

    </footer>

</body>

</html>