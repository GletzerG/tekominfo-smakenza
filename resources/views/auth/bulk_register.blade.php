


<form method="POST" action="{{ route('bulk.register') }}" enctype="multipart/form-data">
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bulk Register Siswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
  <div class="w-full max-w-lg bg-white shadow-xl rounded-2xl p-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Bulk Register Siswa</h1>

    @if(session('success'))
      <div class="bg-green-100 text-green-800 p-3 rounded-lg mb-4 text-sm">
        {{ session('success') }}
      </div>
    @endif

    @if(session('error'))
      <div class="bg-red-100 text-red-800 p-3 rounded-lg mb-4 text-sm">
        {{ session('error') }}
      </div>
    @endif

    <form method="POST" action="{{ route('bulk.register') }}" enctype="multipart/form-data" class="space-y-5">
      @csrf

      <div>
        <label class="block font-semibold text-gray-700 mb-1">Upload File CSV</label>
        <input type="file" name="file" required class="w-full bg-gray-50 border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-400" />
        <p class="text-xs text-gray-500 mt-1">Format: CSV (comma separated)</p>
      </div>

      <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl shadow-lg transition">
        Upload & Register
      </button>
    </form>
  </div>
</body>
</html>
  