<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto py-12">
        <p class="bg-red-200 inline-block mb-4">Esta es una etiqueta en bloque</p>
        <p class="bg-red-200 inline">Esta tambien es una etiqueta en bloque</p>
        <blockquote class="bg-red-200 inline">Esta tambien es una etiqueta en bloque</blockquote>

        <span class="bg-blue-300 block">Etiqueta inline</span>
        <a class="bg-green-300 block">Esta tambien es una etiqueta inline</a>
    </div>
</body>
</html>
