<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tailwind</title>

        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="container">
            {{-- <div class="grid sm:grid-cols-4 gap-4"> --}}
            {{-- <div class="grid grid-cols-4 grid-rows-2 gap-4"> --}}
                {{-- <div class="bg-blue-200 col-span-2 col-start-2">a</div> --}}
                {{-- <div class="bg-blue-300 col-start-1">b</div> --}}
                {{-- <div class="bg-blue-200">a</div>
                <div class="bg-blue-300">b</div>
                <div class="bg-blue-400 col-span-2 row-span-2">c</div>
                <div class="bg-blue-500">d</div>
                <div class="bg-blue-600">e</div> --}}

                {{-- <div class="container">
                    <div class="grid grid-flow-col grid-rows-3 grid-cols-4">
                        <div class="bg-blue-100">1</div>
                        <div class="bg-blue-200">2</div>
                        <div class="bg-blue-300">3</div>
                        <div class="bg-blue-400">4</div>
                        <div class="bg-blue-500">5</div>
                        <div class="bg-blue-600">6</div>
                        <div class="bg-blue-700">7</div>
                        <div class="bg-blue-800">8</div>
                        <div class="bg-blue-900">9</div>
                    </div>
                </div> --}}

                {{-- !Ascpec radio --}}
                <div class="container mx-auto py-12">
                    <div class=" gird grid-cols-3 gap-6">
                        <div class="col-span-2">
                            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/153OT7X6JMo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                            <div class="bg-red-400 aspect-[2/1]"></div>
                        </div>

                        <div class="col-span-1 bg-blue-200"></div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
