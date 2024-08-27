@extends('layouts.template')

@section('content')
<div class="p-0 m-0">
    <div class="wrapper-hero h-[70vh] flex bg-slate-200">
        <!-- untuk home -->
        <div class="wrapper-title w-1/2 h-full flex justify-center flex-col px-24 gap-3">
            <h2 class="text-5xl">Saung<br><span class="font-bold">Aden</span></h2>
            <p>Staycation penuh ketenangan? Saung Aden solusinya!</p>
            <a href="/Tentang Kami" class="btn btn-neutral bg-slate-900 uppercase font-bold rounded-none w-fit">Tentang Kami</a>
        </div>
        <img src="{{asset('img-4.png')}}" class="w-1/2" />
    </div>

    <div class="flex flex-col items-center justify-center py-8">
        <div class="wrapper-title w-1/2 h-full flex justify-center items-center flex-col px-24 gap-4">
            <h2 class="text-3xl font-bold">Tentang Kami</h2>
            <p>Penginapan yang nyaman dibekali kelengkapan yang nyaman uhuy</p>
            <hr class="border-2 border-slate-900 w-[128px]">
        </div>
        <div class="bg-[url('img-4.png')] bg-cover bg-center h-64 w-full">
            <!-- Konten di sini -->
        </div>
    </div>

        

    <div class="container mx-auto border rounded-lg shadow-lg p-10 mt-20 columns-3 w-100 h-100 overflow-hidden">
        <p>Galeri Kami </p>
        <img src="{{asset('v6.jpg')}}" class="mb-4 w-full h-full object-cover" alt="Image" />
        <img src="{{asset('v6.jpg')}}" class="mb-4 w-full h-full object-cover" alt="Image" />
        <img src="{{asset('v6.jpg')}}" class="mb-4 w-full h-full object-cover" alt="Image" />
        <img src="{{asset('v6.jpg')}}" class="mb-4 w-full h-full object-cover" alt="Image" />
        <img src="{{asset('v6.jpg')}}" class="mb-4 w-full h-full object-cover" alt="Image" />
        <img src="{{asset('v6.jpg')}}" class="mb-4 w-full h-full object-cover" alt="Image" />

        <a href="/Lihat lebih banyak" class="btn btn-neutral bg-slate-900 uppercase font-bold rounded-none text-center">Lihat Lebih Banyak</a>

    </div>
</div>
@endsection