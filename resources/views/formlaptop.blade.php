<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    <form action="{{ route('savelaptop') }}" method="POST" class="max-w-md mx-auto mt-10 bg-white p-8 rounded-xl shadow-lg border border-gray-100">
    @csrf <!-- Jangan lupa tambahkan ini jika menggunakan Laravel  x9x9-->

    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tambah Data Laptop</h2>

    <div class="space-y-5">
        <!-- Input Brand -->
        <div>
            <label for="brand" class="block text-sm font-medium text-gray-700 mb-1">Brand</label>
            <input 
                type="text" 
                id="brand" 
                name="brand" 
                placeholder="Contoh: Asus, Lenovo, Apple"
                required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
            >
        </div>

        <!-- Input Model -->
        <div>
            <label for="model" class="block text-sm font-medium text-gray-700 mb-1">Model</label>
            <input 
                type="text" 
                id="model" 
                name="model" 
                placeholder="Contoh: ROG Zephyrus G14"
                required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
            >
        </div>

        <!-- Input Processor -->
        <div>
            <label for="processor" class="block text-sm font-medium text-gray-700 mb-1">Processor</label>
            <input 
                type="text" 
                id="processor" 
                name="processor" 
                placeholder="Contoh: Intel Core i7-13700H"
                required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
            >
        </div>

        <!-- Input RAM -->
        <div>
            <label for="ram" class="block text-sm font-medium text-gray-700 mb-1">RAM (GB)</label>
            <input 
                type="number" 
                id="ram" 
                name="ram" 
                min="1"
                placeholder="Contoh: 16"
                required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
            >
        </div>

        <!-- Tombol Submit -->
        <div class="pt-2">
            <button 
                type="submit" 
                value="laptop"
                class="w-full bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-semibold py-2.5 px-4 rounded-lg shadow-md hover:shadow-lg transition duration-200 cursor-pointer"
            >
                Simpan Data Laptop
            </button>
        </div>
    </div>
</form>
</body>
</html>