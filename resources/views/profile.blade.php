<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profil Pengguna</title>
</head>

<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-purple-400 to-blue-500">
    

    <div
        class="bg-white p-6 rounded-2xl shadow-2xl w-96 text-center transform hover:scale-105 transition-transform duration-300">

        <div class="flex justify-center mb-5">
            <img src="/img/Gambar WhatsApp 2023-11-09 pukul 19.05.23_a4eee5c4.jpg" alt="Profile"
                class="w-60 h-60 rounded-full border-4 border-purple-500 object-cover hover:rotate-3 transition-transform duration-300">
        </div>

        <div class="space-y-5 text-left px-6 py-3">
            <div class="bg-purple-100 py-3 px-4 rounded-md font-semibold text-purple-800 shadow-md">Nama : <?= $nama ?>
            </div>
            <div class="bg-blue-100 py-4 px-4 rounded-md font-semibold text-blue-800 shadow-md">NPM : <?= $npm ?></div>
            <div class="bg-green-100 py-3 px-4 rounded-md font-semibold text-green-800 shadow-md">Kelas :
                <?= $nama_kelas ?>
            </div>
        </div>
    </div>
</body>

</html>