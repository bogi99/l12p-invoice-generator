<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>L12P</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>

        </style>
    @endif
</head>

<body style="font-family: 'Instrument Sans', sans-serif;" class="font-black">
    <div class="flex flex-col h-screen">
        <div class="bg-amber-500">
            <div class="flex flex-row ">
                <div class="w-28 flex-none border border-red-500 h-28">Logo</div>
                <div class="flex-grow content-center "><x-normalmenu></x-normalmenu></div>
                <div class="flex-none content-center ">login menu section</div>
            </div>
        </div>
        {{-- <div class="flex bg-amber-500 py-1 px-2 ">
            
            <div class="flex content-center flex-row"><x-breadcrumbs></x-breadcrumbs></div>
        </div> --}}

        <div class="flex bg-blue-400 py-1 px-2 ">
            
            <div class="flex content-center flex-row"><x-breadcrumbs></x-breadcrumbs></div>
        </div>
        

        <div class="flex flex-grow">
            {{ $slot }}
        </div>
        <div class="bg-amber-200">
            Footer
        </div>
    </div>

</body>

</html>
