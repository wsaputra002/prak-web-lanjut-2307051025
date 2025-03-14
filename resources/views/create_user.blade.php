<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md border-t-4 border-yellow-400">
        <h2 class="text-3xl font-extrabold text-center mb-6 text-indigo-600">Tambah User</h2>

        <form action="{{ route('user.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="nama" class="block font-medium text-pink-600">Nama :</label>
                <input type="text" id="nama" name="nama"
                    class="w-full border-2 border-purple-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-yellow-400 focus:outline-none bg-yellow-50">
                @error('nama')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="npm" class="block font-medium text-green-600">NPM :</label>
                <input type="text" id="npm" name="npm"
                    class="w-full border-2 border-green-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-purple-400 focus:outline-none bg-green-50">
                @error('npm')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="kelas_id" class="block font-medium text-blue-600">Kelas :</label>
                <select name="kelas_id" id="kelas_id"
                    class="w-full border-2 border-blue-300 rounded-lg p-2 mt-1 focus:ring-2 focus:ring-pink-400 focus:outline-none bg-blue-50">

                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
                @error('kelas_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full bg-gradient-to-r from-green-400 to-blue-500 text-white font-semibold py-2 rounded-lg hover:from-green-500 hover:to-blue-600 transition transform hover:scale-105">
                Submit
            </button>
        </form>
    </div>

</body>

</html>