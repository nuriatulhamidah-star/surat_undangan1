<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan - Farhan & Salsa</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@300;400;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <style>
        :root {
            --primary: #bfa05f;
            --dark: #2c2c2c;
            --light: #fdfbf7;
            --gold: #d4af37;
            --soft-gold: #e5d5b0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--light);
            color: var(--dark);
            overflow: hidden;
            scroll-behavior: smooth;
        }

        h1,
        h2,
        h3 {
            font-family: 'Great Vibes', cursive;
            color: var(--primary);
        }

        .serif {
            font-family: 'Playfair Display', serif;
        }

        /* --- WELCOME SCREEN --- */
        #welcome-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('https://images.unsplash.com/photo-1519741497674-611481863552?w=1200') center/cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            color: white;
            text-align: center;
            transition: 1s ease-in-out;
        }

        #welcome-screen.fade-out {
            opacity: 0;
            pointer-events: none;
            transform: scale(1.1);
        }

        .welcome-content {
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 40px 20px;
            backdrop-filter: blur(3px);
            border-radius: 100px 100px 0 0;
            animation: fadeInDown 1.5s ease-out;
        }

        .btn-open {
            padding: 15px 35px;
            background: var(--gold);
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 600;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            margin-top: 20px;
        }

        .btn-open:hover {
            transform: translateY(-3px);
            background: var(--primary);
        }

        /* --- FLOATING MUSIC & NAV --- */
        .music-btn {
            position: fixed;
            bottom: 80px;
            right: 20px;
            width: 45px;
            height: 45px;
            background: var(--primary);
            border-radius: 50%;
            display: none;
            justify-content: center;
            align-items: center;
            color: white;
            z-index: 1000;
            cursor: pointer;
            animation: pulse 2s infinite;
        }

        .nav-bottom {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.9);
            padding: 10px 20px;
            border-radius: 40px;
            display: none;
            gap: 20px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            border: 1px solid var(--soft-gold);
        }

        .nav-bottom i {
            color: var(--primary);
            font-size: 1.2rem;
            cursor: pointer;
        }

        /* --- SECTIONS GENERAL --- */
        section {
            padding: 80px 20px;
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
            position: relative;
        }

        .ornament {
            width: 100px;
            margin-bottom: 20px;
            opacity: 0.7;
        }

        /* --- COVER --- */
        #cover {
            height: 100vh;
            background: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)),
                url('https://www.transparenttextures.com/patterns/cream-paper.png');
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        #cover h1 {
            font-size: 4.5rem;
            margin: 10px 0;
        }

        .date-badge {
            border-top: 2px solid var(--primary);
            border-bottom: 2px solid var(--primary);
            padding: 10px 0;
            margin: 20px auto;
            width: 200px;
            font-weight: 600;
            letter-spacing: 2px;
        }

        /* --- COUPLE --- */
        .profile-frame {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }

        .profile-frame img {
            width: 180px;
            height: 240px;
            object-fit: cover;
            border-radius: 100px;
            border: 5px solid white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .profile-frame::after {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border: 1px solid var(--primary);
            border-radius: 110px;
            z-index: -1;
        }

        /* --- CARD STYLE --- */
        .event-card {
            background: white;
            padding: 40px 20px;
            border-radius: 30px;
            margin: 30px 0;
            border: 1px solid var(--soft-gold);
            box-shadow: 0 15px 35px rgba(191, 160, 95, 0.1);
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            background: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            margin-top: 15px;
            transition: 0.3s;
            font-size: 0.9rem;
        }

        /* --- COUNTDOWN --- */
        #countdown {
            background: var(--dark);
            color: white;
            border-radius: 50px 50px 0 0;
            margin-top: 50px;
        }

        .countdown-box {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .countdown-item {
            background: rgba(255, 255, 255, 0.1);
            width: 70px;
            height: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 10px;
            border: 1px solid var(--primary);
        }

        .countdown-item span {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--gold);
        }

        /* --- RSVP & GIFT --- */
        input,
        select,
        textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #eee;
            border-radius: 12px;
            background: #fdfdfd;
        }

        .bank-card {
            background: linear-gradient(135deg, #fdfbf7 0%, #eee5d3 100%);
            padding: 25px;
            border-radius: 20px;
            margin-bottom: 20px;
            border-left: 5px solid var(--gold);
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        @media (max-width: 480px) {
            #cover h1 {
                font-size: 3.5rem;
            }

            section {
                padding: 60px 15px;
            }
        }
    </style>
</head>

<body>

    <div id="welcome-screen">
        <div class="welcome-content">
            <p class="serif" style="letter-spacing: 3px; text-transform: uppercase;">The Wedding of</p>
            <h1>Farhan & Salsa</h1>
            <div style="margin: 20px 0;">
                <p>Kepada Bapak/Ibu/Saudara/i:</p>
                <h3 style="color: white; font-family: 'Poppins'; margin-top: 10px; font-size: 1.2rem;">Nama Tamu
                    Undangan</h3>
            </div>
            <button class="btn-open" onclick="openInvitation()">
                <i class="fas fa-envelope-open-text"></i> Buka Undangan
            </button>
        </div>
    </div>

    <div class="music-btn" id="musicBtn" onclick="toggleMusic()">
        <i class="fas fa-pause" id="musicIcon"></i>
    </div>
    <div class="nav-bottom" id="navBottom">
        <i class="fas fa-home" onclick="scrollToSection('cover')"></i>
        <i class="fas fa-heart" onclick="scrollToSection('couple')"></i>
        <i class="fas fa-calendar-alt" onclick="scrollToSection('event')"></i>
        <i class="fas fa-map-marker-alt" onclick="scrollToSection('location')"></i>
        <i class="fas fa-comment-dots" onclick="scrollToSection('rsvp')"></i>
    </div>

    <audio id="musik" loop>
        <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
    </audio>

    <section id="cover">
        <div data-aos="fade-up">
            <img src="https://cdn-icons-png.flaticon.com/512/2913/2913520.png" class="ornament" alt="ornament">
            <p class="serif">UNDANGAN PERNIKAHAN</p>
            <h1>Farhan & Salsa</h1>
            <div class="date-badge serif">20 JUNI 2026</div>
            <p>"Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu
                sendiri..."</p>
        </div>
    </section>

    <section id="opening">
        <div data-aos="zoom-in">
            <h2>Assalamu'alaikum Wr. Wb.</h2>
            <p style="margin-top: 20px;">Dengan memohon rahmat Allah SWT, kami bermaksud mengundang Anda dalam momen
                bahagia kami.</p>
        </div>
    </section>

    <section id="couple">
        <div data-aos="fade-up">
            <h2 style="font-size: 3rem;">Mempelai</h2>
            <div style="margin-top: 40px;">
                <div class="profile-frame">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400" alt="Farhan">
                </div>
                <h3>Farhan Akbar, S.Kom</h3>
                <p>Putra dari Bpk. Ahmad & Ibu Siti</p>
            </div>
            <div class="serif" style="font-size: 2rem; margin: 20px 0; color: var(--gold);">dengan</div>
            <div data-aos="fade-up">
                <div class="profile-frame">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400" alt="Salsa">
                </div>
                <h3>Salsa Ayu, S.Psi</h3>
                <p>Putri dari Bpk. Budi & Ibu Dewi</p>
            </div>
        </div>
    </section>

    <section id="event">
        <div data-aos="fade-up">
            <h2 style="font-size: 3rem;">Waktu & Tempat</h2>
            <div class="event-card">
                <i class="fas fa-ring" style="font-size: 2rem; color: var(--gold); margin-bottom: 15px;"></i>
                <h3>Akad Nikah</h3>
                <p class="serif" style="font-weight: bold; margin: 10px 0;">SABTU, 20 JUNI 2026</p>
                <p>08:00 - 10:00 WIB</p>
                <p>Masjid Al-Hidayah, Jakarta</p>
                <a href="https://maps.google.com" target="_blank" class="btn"><i class="fas fa-map-marked-alt"></i>
                    Google Maps</a>
            </div>
            <div class="event-card" data-aos="fade-up">
                <i class="fas fa-glass-cheers" style="font-size: 2rem; color: var(--gold); margin-bottom: 15px;"></i>
                <h3>Resepsi Pernikahan</h3>
                <p class="serif" style="font-weight: bold; margin: 10px 0;">SABTU, 20 JUNI 2026</p>
                <p>11:00 - 14:00 WIB</p>
                <p>Gedung Serbaguna Annisa, Jakarta</p>
                <a href="https://maps.google.com" target="_blank" class="btn"><i class="fas fa-map-marked-alt"></i>
                    Google Maps</a>
            </div>
        </div>
    </section>

    <section id="countdown">
        <div data-aos="zoom-in">
            <h2 style="color: white; margin-bottom: 30px;">Menuju Hari Bahagia</h2>
            <div class="countdown-box">
                <div class="countdown-item"><span id="days">00</span><small>Hari</small></div>
                <div class="countdown-item"><span id="hours">00</span><small>Jam</small></div>
                <div class="countdown-item"><span id="minutes">00</span><small>Menit</small></div>
                <div class="countdown-item"><span id="seconds">00</span><small>Detik</small></div>
            </div>
        </div>
    </section>

    <section id="location">
        <div data-aos="fade-up">
            <h2>Lokasi Acara</h2>
            <p style="margin-bottom: 20px;">Gedung Serbaguna Annisa<br>Jl. Sudirman No. 123, Jakarta</p>
            <div style="border-radius: 20px; overflow: hidden; border: 2px solid var(--soft-gold); height: 300px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.273!2d106.827!3d-6.229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTMnNDQuNCJTIDEwNsKwNDknMzcuMiJF!5e0!3m2!1sid!2sid!4v1625000000000"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <section id="rsvp">
        <div data-aos="fade-up">
            <h2>Konfirmasi Kehadiran</h2>
            <div class="event-card" style="text-align: left;">
                <form onsubmit="event.preventDefault(); alert('Terima kasih! Konfirmasi Anda telah kami terima.');">
                    <label>Nama Lengkap</label>
                    <input type="text" placeholder="Contoh: Budi Santoso" required>
                    <label>Status Kehadiran</label>
                    <select required>
                        <option value="">Pilih Kehadiran</option>
                        <option value="Hadir">Saya Akan Hadir</option>
                        <option value="Ragu">Masih Ragu</option>
                        <option value="Tidak Hadir">Maaf, Tidak Bisa Hadir</option>
                    </select>
                    <label>Jumlah Tamu</label>
                    <input type="number" value="1" min="1" max="5">
                    <button type="submit" class="btn" style="width: 100%;">Kirim RSVP</button>
                </form>
            </div>
        </div>
    </section>

    <section id="gift">
        <div data-aos="fade-up">
            <h2>Kado Pernikahan</h2>
            <p style="margin-bottom: 30px;">Doa restu Anda merupakan hadiah terindah bagi kami. Namun jika ingin memberi
                lebih, kami sediakan fitur di bawah ini:</p>
            <div class="bank-card">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Bank_Central_Asia.svg" width="80"
                        alt="BCA">
                    <i class="fas fa-university" style="color: var(--gold);"></i>
                </div>
                <p style="font-size: 1.3rem; font-weight: bold; margin: 15px 0;" id="norek1">1234 5678 9010</p>
                <p>a.n Farhan Akbar</p>
                <button class="btn" onclick="salinRekening('123456789010')" style="background: var(--dark);"><i
                        class="fas fa-copy"></i> Salin Nomor</button>
            </div>
            <div class="bank-card">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h3 style="font-family: 'Poppins'; font-weight: bold;">E-Wallet</h3>
                    <i class="fas fa-wallet" style="color: var(--gold);"></i>
                </div>
                <p style="font-size: 1.3rem; font-weight: bold; margin: 15px 0;" id="norek2">0812 3456 7890</p>
                <p>DANA/OVO a.n Salsa Ayu</p>
                <button class="btn" onclick="salinRekening('081234567890')" style="background: var(--dark);"><i
                        class="fas fa-copy"></i> Salin Nomor</button>
            </div>
        </div>
    </section>

    <footer style="background: var(--dark); color: white; padding: 60px 20px; text-align: center;">
        <h2 style="color: white; font-size: 3rem;">Farhan & Salsa</h2>
        <p class="serif" style="margin-top: 10px;">Sampai Jumpa di Hari Bahagia Kami</p>
        <div style="margin-top: 30px; opacity: 0.5;">
            <small>© 2026 Exclusive Wedding Invite</small>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Inisialisasi AOS (Animate on Scroll)
        AOS.init({ duration: 1000, once: true });

        const musik = document.getElementById("musik");
        const musicIcon = document.getElementById("musicIcon");
        const musicBtn = document.getElementById("musicBtn");
        const navBottom = document.getElementById("navBottom");
        let isPlaying = false;

        function openInvitation() {
            document.getElementById("welcome-screen").classList.add("fade-out");
            document.body.style.overflow = "auto";
            musicBtn.style.display = "flex";
            navBottom.style.display = "flex";
            playMusic();
        }

        function playMusic() {
            musik.play();
            isPlaying = true;
            musicIcon.className = "fas fa-pause";
        }

        function toggleMusic() {
            if (isPlaying) {
                musik.pause();
                musicIcon.className = "fas fa-music";
            } else {
                musik.play();
                musicIcon.className = "fas fa-pause";
            }
            isPlaying = !isPlaying;
        }

        // Countdown Timer
        const eventDate = new Date("June 20, 2026 08:00:00").getTime();
        setInterval(function () {
            const now = new Date().getTime();
            const distance = eventDate - now;
            document.getElementById("days").innerText = Math.floor(distance / (1000 * 60 * 60 * 24));
            document.getElementById("hours").innerText = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            document.getElementById("minutes").innerText = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            document.getElementById("seconds").innerText = Math.floor((distance % (1000 * 60)) / 1000);
        }, 1000);

        function scrollToSection(id) {
            document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
        }

        function salinRekening(nomor) {
            navigator.clipboard.writeText(nomor);
            alert("Nomor rekening berhasil disalin!");
        }
    </script>
</body>

</html>