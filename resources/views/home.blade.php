<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite('resources/css/app.css')
    <style>
        /* Background animation */
        @keyframes space-bg {
            0% { background-position: 0 0; }
            100% { background-position: 100% 100%; }
        }

        /* Star twinkling animation */
        @keyframes twinkle {
            0%, 100% { opacity: 0.2; }
            50% { opacity: 1; }
        }

        /* Glowing border animation */
        @keyframes glowing-border {
            0% { box-shadow: 0 0 5px #4f46e5, 0 0 10px #4f46e5; }
            50% { box-shadow: 0 0 20px #4f46e5, 0 0 40px #4f46e5; }
            100% { box-shadow: 0 0 5px #4f46e5, 0 0 10px #4f46e5; }
        }

        /* Floating animation */
        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        body {
            background: linear-gradient(45deg, #0f172a, #1e1b4b);
            background-size: 400% 400%;
            animation: space-bg 15s ease infinite;
            position: relative;
            overflow: hidden;
        }

        /* Stars */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                radial-gradient(2px 2px at 20px 30px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 40px 70px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 50px 160px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 90px 40px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 130px 80px, #ffffff, rgba(0,0,0,0));
            background-repeat: repeat;
            animation: twinkle 4s ease-in-out infinite;
            z-index: 0;
        }

        .card {
            background: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(79, 70, 229, 0.3);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: rgba(79, 70, 229, 0.8);
            box-shadow: 0 0 20px rgba(79, 70, 229, 0.4);
        }

        .profile-container {
            animation: floating 3s ease-in-out infinite;
        }

        .social-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .social-btn::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(45deg);
            z-index: 0;
            transition: all 0.3s ease;
        }

        .social-btn:hover::before {
            transform: rotate(45deg) translateY(-100%);
        }
    </style>
</head>
<body class="flex flex-col items-center justify-center min-h-screen p-6">
    <!-- Profile Section -->
    <div class="profile-container text-center z-10">
        <div class="relative">
            <div class="absolute inset-0 rounded-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 blur-lg opacity-70"></div>
            <img src="{{ asset('build/assets/Picture1.png') }}" alt="Profile Picture"
            class="relative w-32 h-32 rounded-full border-4 border-indigo-500 shadow-lg mx-auto">
        </div>

        <h1 class="text-4xl font-bold mt-4 bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400 text-transparent bg-clip-text">LKBB NAUTICA 2025</h1>
        <p class="text-indigo-200 mt-2">Paskibra SMK Negeri 1 Purwosari Proudly Present</p>
    </div>

    <!-- Cards Section -->
    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 w-full max-w-2xl z-10">
        <!-- Petunjuk Teknis -->
        <a href="#" class="card p-6 rounded-xl">
            <div class="flex items-center space-x-3">
                <span class="text-2xl">🌟</span>
                <h3 class="text-xl font-semibold text-indigo-300">Petunjuk Teknis</h3>
            </div>
            <p class="mt-2 text-indigo-100">Panduan lengkap untuk peserta.</p>
        </a>

        <!-- Pendaftaran SMP/Mts -->
        <a href="https://wa.me/62xxxxxxxxxx" class="card p-6 rounded-xl">
            <div class="flex items-center space-x-3">
                <span class="text-2xl">🚀</span>
                <h3 class="text-xl font-semibold text-purple-300">Pendaftaran SMP/Mts</h3>
            </div>
            <p class="mt-2 text-purple-100">Klik untuk mendaftar via WhatsApp.</p>
        </a>

        <!-- Pendaftaran SMA/SMK/MA -->
        <a href="https://wa.me/62xxxxxxxxxx" class="card p-6 rounded-xl">
            <div class="flex items-center space-x-3">
                <span class="text-2xl">🌎</span>
                <h3 class="text-xl font-semibold text-blue-300">Pendaftaran SMA/SMK/MA</h3>
            </div>
            <p class="mt-2 text-blue-100">Klik untuk mendaftar via WhatsApp.</p>
        </a>

        <!-- Sponsorship dan Tenant -->
        <a href="https://wa.me/62xxxxxxxxxx" class="card p-6 rounded-xl">
            <div class="flex items-center space-x-3">
                <span class="text-2xl">✨</span>
                <h3 class="text-xl font-semibold text-pink-300">Sponsorship & Tenant</h3>
            </div>
            <p class="mt-2 text-pink-100">Berminat menjadi sponsor? Hubungi kami!</p>
        </a>
    </div>

    <!-- Sosial Media -->
    <div class="mt-8 flex gap-4 z-10">
        <a href="https://instagram.com" class="social-btn bg-gradient-to-r from-purple-600 to-pink-600 text-white px-6 py-3 rounded-full font-semibold">
            📷 Instagram
        </a>
        <a href="https://tiktok.com" class="social-btn bg-gradient-to-r from-gray-800 to-gray-900 text-white px-6 py-3 rounded-full font-semibold">
            🎵 TikTok
        </a>
    </div>
</body>
</html>
