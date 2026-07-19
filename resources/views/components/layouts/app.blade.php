<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Masjid Al-Ikhlas' }}</title>
    <!-- Kita pasang Tailwind CSS via CDN untuk proses slicing cepat -->
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>

<body class="bg-gray-50 text-gray-800 font-sans">

    {{ $slot }}

    @livewireScripts
</body>

</html>