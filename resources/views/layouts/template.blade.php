<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Saung Aden </title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        * {
            font-family: "Urbanist", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
    </style>
</head>

<body>
    <div class="navbar navbar-start fixed z-10 w-full">
        <div class="">
            <a class="btn btn-ghost text-3xl font-bold">Saung Aden</a>
        </div>
        <div class="">
            <ul class="menu menu-horizontal px-1">
                <li><a href="/">Home</a></li>
                <li><a href="{{route('tentang')}}">Tentang</a></li>
                <li><a href="{{route('berita')}}">Berita</a></li>
                <li><a href="{{route('galeri')}}">Galeri</a></li>
                <li><a href="{{route('kontak')}}">Kontak</a></li>
            </ul>
        </div>
    </div>

    <div class="w-full">
        @yield('content')
    </div>

    <div class="footer bg-slate-800 text-neutral-content p-10 flex flex-row gap-5 justify-between">
        <div class="bg-slate-800 ">
            <h6 class="footer-title p-0 m-0 h-fit">Services</h6>
            <a class="link link-hover ">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="flex justify-beetwen">Advertisement</a>
        </div>
        <div class="bg-slate-800">
            <h6 class="footer-title">Services</h6>
            <a class="link link-hover ">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="flex justify-beetwen">Advertisement</a>
        </div>
        <div class="bg-slate-800">
            <h6 class="footer-title">Services</h6>
            <a class="link link-hover ">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="flex justify-beetwen">Advertisement</a>
        </div>
    </div>


</body>

</html>