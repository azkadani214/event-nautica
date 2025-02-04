<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite('resources/css/app.css')
    <style>
        /* Animasi border bercahaya */
        @keyframes glowing-border {
            0% { box-shadow: 0 0 5px #00c3ff, 0 0 10px #00c3ff; }
            50% { box-shadow: 0 0 20px #00c3ff, 0 0 40px #00c3ff; }
            100% { box-shadow: 0 0 5px #00c3ff, 0 0 10px #00c3ff; }
        }
    </style>
</head>
<body class="bg-gradient-to-r from-gray-950 to-gray-800 text-white flex flex-col items-center justify-center min-h-screen p-6">



    <!-- Profile Section -->
    <div class="text-center">
        <img src="https://via.placeholder.com/150" alt="Profile Picture"
            class="w-32 h-32 rounded-full border-4 border-blue-500 shadow-lg mx-auto">
        <h1 class="text-3xl font-bold mt-4 text-blue-400">Nama Anda</h1>
        <p class="text-gray-400 mt-2">Deskripsi singkat yang lebih menarik dan profesional.</p>
    </div>

    <!-- Cards Section -->
    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 w-full max-w-2xl">

        <!-- Petunjuk Teknis -->
        <a href="#" class="block bg-gray-800 p-6 rounded-xl shadow-lg hover:scale-105 transition duration-300 border-2 border-cyan-400"
           style="animation: glowing-border 2s infinite alternate;">
            <h3 class="text-xl font-semibold text-cyan-300">📌 Petunjuk Teknis</h3>
            <p class="mt-2 text-gray-300">Panduan lengkap untuk peserta.</p>
        </a>

        <!-- Pendaftaran SMP/Mts -->
        <a href="https://wa.me/62xxxxxxxxxx" class="block bg-gray-800 p-6 rounded-xl shadow-lg hover:scale-105 transition duration-300">
            <h3 class="text-xl font-semibold text-green-300">📞 Pendaftaran SMP/Mts</h3>
            <p class="mt-2 text-gray-300">Klik untuk mendaftar via WhatsApp.</p>
        </a>

        <!-- Pendaftaran SMA/SMK/MA -->
        <a href="https://wa.me/62xxxxxxxxxx" class="block bg-gray-800 p-6 rounded-xl shadow-lg hover:scale-105 transition duration-300">
            <h3 class="text-xl font-semibold text-purple-300">📞 Pendaftaran SMA/SMK/MA</h3>
            <p class="mt-2 text-gray-300">Klik untuk mendaftar via WhatsApp.</p>
        </a>

        <!-- Sponsorship dan Tenant -->
        <a href="https://wa.me/62xxxxxxxxxx" class="block bg-gray-800 p-6 rounded-xl shadow-lg hover:scale-105 transition duration-300">
            <h3 class="text-xl font-semibold text-yellow-300">💼 Sponsorship & Tenant</h3>
            <p class="mt-2 text-gray-300">Berminat menjadi sponsor? Hubungi kami!</p>
        </a>

    </div>

    <!-- Sosial Media -->
    <div class="mt-8 flex gap-4">
        <a href="https://instagram.com" class="bg-pink-600 text-white p-4 rounded-full shadow-lg hover:scale-110 transition duration-300">
            📷 Instagram
        </a>
        <a href="https://tiktok.com" class="bg-gray-900 text-white p-4 rounded-full shadow-lg hover:scale-110 transition duration-300">
            🎵 TikTok
        </a>
    </div>

</body>
</html>
