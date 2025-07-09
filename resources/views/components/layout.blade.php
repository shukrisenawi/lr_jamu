<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100 scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>JamuAsli.com</title>
</head>
<body class="h-full">
<div class="min-h-full">

{{-- <x-navbar>
    <x-slot:id>{{ $id ?? 'home' }}</x-slot:id>
    <x-slot:idPage>{{ $idPage }}</x-slot:idPage>
</x-navbar> --}}
    <main>
{{ $slot }}
    </main>
  </div>
<x-footer></x-footer>
</body>
</html>