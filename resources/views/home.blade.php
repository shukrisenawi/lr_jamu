<x-layout>
    <x-slot:idPage>{{ $idPage }}</x-slot:idPage>

@include('home-product1')
@include('home-product1-problem')
@include('home-product1-intro')


  <div class="text-center bg-color1 py-8">
      <div class="max-w-[1000px] m-auto">
        @include('home-product1-herbal')
        @include('home-product1-khasiat')
      </div>
      @include('home-product1-benefit')
  </div>
  @include('home-product2')
  @include('home-package')
  @include('home-faq')


  <div class="text-center bg-green-700 p-8">
    <h1 class="text-[50px] font-yeseva leading-13 text-color5">Jangan tunggu lagi!!<br>Buat pembelian sekarang!!</h1>
    <h2 class="font-agbalumo text-[32px] leading-7 text-amber-200">Beli sekarang untuk kesihatan dalaman yang lebih baik!</h2>
    <a href="" class="btn btn-primary mt-5 rounded-4xl text-xl px-10">Klik untuk buat pembelian sekarang</a>
  </div>
</x-layout>