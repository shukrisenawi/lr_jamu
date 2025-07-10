<x-layout>
    <x-slot:idPage>{{ $idPage }}</x-slot:idPage>

  <div class="block text-neutral-content p-1 text-center bg-color1">
    <span class="block align-content-center font-bold tracking-widest">JAMU ASLI TRADISIONAL</span>
  </div>
  <div class="text-center bg-color2 p-8">
      <h1 class="text-[50px] md:text-[60px] text-color3 font-yeseva leading-[1]">JAMU ASLI<br>
        & AURORA TERAPI</h1>
      <br class="mt-1">
      <h2 class="text-[50px] md:text-[60px] leading-[1] font-bold font-satisfy text-color4">Tradisional</h2>

      <br class="mt-5">
      <div class="text-center">
          <img class="m-auto max-w-[800px] w-[100%]" src="../img/produk utama.png"/>
      </div>
  </div>

  <div class="text-center bg-color3 py-5">
    <h1 class="text-[30px] md:text-[50px] text-color5 font-yeseva leading-[1] px-8">Dah lama anda hadapi<br>masalah seperti di bawah?</h1>
    <div class="flex flex-wrap justify-center mt-5 max-w-[1000px] m-auto">
        <x-card1>
        <x-slot:title>Selalu letih walaupun cukup tidur</x-slot:title>
        <x-slot:description>Ramai wanita alami badan lesu, tak bertenaga, mudah stress – terutamanya lepas bersalin atau bila umur makin meningkat.</x-slot:description>
        <x-slot:img>gambar/1.png</x-slot:img>
        </x-card1>

        <x-card1>
          <x-slot:title>Masalah period saya tak menentu</x-slot:title>
          <x-slot:description>Haid yang tak teratur, senggugut teruk, keputihan berlebihan – ini tanda hormon tak stabil.</x-slot:description>
          <x-slot:img>gambar/2.png</x-slot:img>
          </x-card1>

        <x-card1>
          <x-slot:title>Saya rasa hubungan suami isteri makin hambar</x-slot:title>
          <x-slot:description>Ramai isteri rasa malu nak cerita, tapi bila badan tak sihat dalam, keinginan pun makin kurang.</x-slot:description>
          <x-slot:img>gambar/3.png</x-slot:img>
          </x-card1>

        <x-card1>
          <x-slot:title>Perut makin ke depan dan badan rasa berangin</x-slot:title>
          <x-slot:description>Masalah angin dalam badan, perut buncit walaupun makan sikit – semua ni gangguan dalaman yang perlukan rawatan tradisional.</x-slot:description>
          <x-slot:img>gambar/4.png</x-slot:img>
          </x-card1>

        <x-card1>
          <x-slot:title>Selalu sakit urat, lenguh badan, sendi rasa berat</x-slot:title>
          <x-slot:description>Badan cepat rasa lenguh walaupun tak buat kerja berat — tanda angin dan toksin dah lama terkumpul dalam badan.</x-slot:description>
          <x-slot:img>gambar/5.png</x-slot:img>
          </x-card1>

        <x-card1>
          <x-slot:title>Miss-V longgar dan rasa tak selesa waktu bersama suami</x-slot:title>
          <x-slot:description>Wanita lepas bersalin atau berumur sering alami masalah otot dalaman longgar dan kurang kepekaan.</x-slot:description>
          <x-slot:img>gambar/6.png</x-slot:img>
          </x-card1>
    </div>
  </div>

  <div class="block text-neutral-content p-1 text-center bg-color7">
    <span class="sm:text-[20px] block align-content-center font-black font-poppins tracking-widest text-color3">MEMPERKENALKAN..</span>
  </div>

  <div class="text-center bg-color5 text-color3">
      <h1 class="text-[50px] sm:text-[61px] font-yeseva leading-20">JAMU ASLI</h1>
      <h2 class="font-agbalumo text-[22px] sm:text-[32px] leading-5 sm:leading-7">Warisan Tradisi, Rahsia Awet Muda<br>Mengandungi 41 Herba terpilih!!</h2>
      <h2 class=" font-agbalumo text-[25px] sm:text-[37px] leading-8">Khas untuk para wanita!!</h2>
      <div class="flex justify-center mt-10 w-[400px] m-auto">
        <img class="m-auto max-w-[300px] sm:max-w-[400px] -mt-5 z-2" src="../img/produk 2.png"/>
          <div class="w-[500px] h-[400px] -ml-5 -mr-10 rounded-[50px] hidden z-0 bg-color8 text-color5 p-10 font-akaya text-[22px] leading-5">
            Jamu Asli ini diformulasikan khas mengikut ramuan tradisi turun-temurun. Dirumus daripada herba asli yang terkenal dengan khasiat luar biasa untuk kesihatan dalaman wanita.
          </div>
          <img class="m-auto max-w-[300px] z-1 -mb-8" hidden src="../img/model.png"/>
      </div>
  </div>

  <div class="text-center bg-color1 py-8">
      <div class="max-w-[1000px] m-auto">
        <h1 class="text-[40px] md:text-[56px] font-yeseva leading-13 sm:leading-20 text-color2">41 HERBA TERPILIH</h1>
        <div class="text-center mt-5 m-auto">
            {{-- <img class="h-[400px] m-auto" src="../img/produk2.png"/> --}}
            <div class="flex justify-center flex-wrap m-auto">
              <x-card2>
              <x-slot:title>Kacip Fatimah</x-slot:title>
              <x-slot:description>Menjaga kesihatan rahim, tingkat tenaga dan stabilkan hormon wanita.</x-slot:description>
              <x-slot:img>gambar/h-1.png</x-slot:img>
              </x-card2>

              <x-card2>
                <x-slot:title>Manjakani</x-slot:title>
                <x-slot:description>Ketatkan faraj, cegah keputihan dan lawan bakteria kawasan intim.</x-slot:description>
                <x-slot:img>gambar/h-2.png</x-slot:img>
                </x-card2>

              <x-card2>
                <x-slot:title>Bunga Pakma</x-slot:title>
                <x-slot:description>Kecutkan rahim, buang angin dan pulihkan dalaman wanita lepas bersalin.</x-slot:description>
                <x-slot:img>gambar/h-3.png</x-slot:img>
                </x-card2>

              <x-card2>
                <x-slot:title>Halia Bara</x-slot:title>
                <x-slot:description>Buang angin, lancar darah dan bantu masalah penghadaman.</x-slot:description>
                <x-slot:img>gambar/h-4.png</x-slot:img>
                </x-card2>

              <x-card2>
                <x-slot:title>Kunyit Hidup</x-slot:title>
                <x-slot:description>Sembuhkan luka dalaman, lancar haid dan cegah radang.</x-slot:description>
                <x-slot:img>gambar/h-5.png</x-slot:img>
                </x-card2>

              <x-card2>
                <x-slot:title>Lada Hitam</x-slot:title>
                <x-slot:description>Hangatkan badan, tingkat metabolisma dan bantu penghadaman.</x-slot:description>
                <x-slot:img>gambar/h-6.png</x-slot:img>
                </x-card2>

              <x-card2>
                <x-slot:title>Kulit Kayu Manis</x-slot:title>
                <x-slot:description>Stabilkan gula darah, lancar darah dan tingkat kesuburan.</x-slot:description>
                <x-slot:img>gambar/h-7.png</x-slot:img>
                </x-card2>

              <x-card2>
                <x-slot:title>Cengkih</x-slot:title>
                <x-slot:description>Cegah jangkitan, buang angin dan segarkan nafas.</x-slot:description>
                <x-slot:img>gambar/h-8.png</x-slot:img>
                </x-card2>


            </div>   <span class="text-color5 font-poppins mt-4 text-[20px]">Serta 31 herba terpilih yang lain...</span>
        </div>


        <div class="max-w-[1000px] m-auto text-center py-8">
          <h1 class="text-[40px] md:text-[56px] font-yeseva leading-13 sm:leading-20 text-color2">KHASIAT JAMU ASLI</h1>
            <div class="flex justify-center mt-5 m-auto flex-wrap">

              <x-card3>
                <x-slot:title>Menghilangkan keletihan dan sakit-sakit sendi</x-slot:title>
                <x-slot:img>gambar/k-1.png</x-slot:img>
              </x-card3>

              <x-card3>
                <x-slot:title>Merawat masalah keputihan</x-slot:title>
                <x-slot:img>gambar/k-2.png</x-slot:img>
              </x-card3>

              <x-card3>
                <x-slot:title>Melawaskan pembuangan air besar dan air kecil</x-slot:title>
                <x-slot:img>gambar/k-3.png</x-slot:img>
              </x-card3>

              <x-card3>
                <x-slot:title>Menguatkan otot peranakan dan tenaga batin wanita</x-slot:title>
                <x-slot:img>gambar/k-4.png</x-slot:img>
              </x-card3>

              <x-card3>
                <x-slot:title>Melambatkan proses penuaan dan mengatasi otot kendur</x-slot:title>
                <x-slot:img>gambar/k-5.png</x-slot:img>
              </x-card3>

              <x-card3>
                <x-slot:title>Menceria & menghangatkan hubungan suami isteri</x-slot:title>
                <x-slot:img>gambar/k-6.png</x-slot:img>
              </x-card3>
            </div>
        </div>


      </div>

      <div class="max-w-[1000px] m-auto text-center px-8">
        <h1 class="text-[35px] md:text-[50px] font-yeseva leading-[1] text-color2">Kenapa Anda Perlu Dapatkan Jamu Ini?</h1>
        <div class="mt-10 m-auto max-w-[800px]">
          <x-card4>Resepi tradisi warisan nenek moyang.</x-card4>
          <x-card4>Khasiat menyeluruh untuk dalaman wanita</x-card4>
          <x-card4>Bantu atasi masalah keputihan, senggugut & lesu</x-card4>
          <x-card4>Rahsia awet muda secara semulajadi</x-card4>
          <x-card4>Harga mampu milik</x-card4>
          <x-card4>Mudah diamalkan & selamat digunakan</x-card4>
          <x-card4>Produk muslim & buatan malaysia</x-card4>
        </div>
      </div>
  </div>

  <div class=" bg-color9 text-color10">
    <div class="max-w-[1000px] m-auto text-center justify-center py-8">
      <p class="text-[30px] font-poppins leading-15 font-bold">Tunggguuuu..</p>
      <p class="text-[20px] sm:text-[30px] font-poppins leading-5 sm:leading-15">Kami ada produk istimewa untuk anda..</p>
      <p class="text-[30px] font-poppins font-bold italic leading-15">Memperkenalkan....</p><br>
      <h1 class="text-[42px] sm:text-[61px] font-yeseva leading-13 sm:leading-20">MINYAK PANAS AURORA TERAPI</h1>
      <div class="px-10">
            <img class="w-[100%] sm:max-w-[500px] m-auto my-5" src="../img/produk3.png"/>
      </div>
      <div class="flex justify-center mt-10 m-auto flex-wrap">
        <x-card5>
          <x-slot:title>Minyak panas jenis roll menjadikan ia mudah digunakan</x-slot:title>
          <x-slot:img>gambar/a-1.png</x-slot:img>
        </x-card5>

        <x-card5>
          <x-slot:title>Mudah dibawa kemana sahaja</x-slot:title>
          <x-slot:img>gambar/a-2.png</x-slot:img>
        </x-card5>

        <x-card5>
          <x-slot:title>Mempunyai pelbagai wangian</x-slot:title>
          <x-slot:img>gambar/a-3.png</x-slot:img>
        </x-card5>
      </div>
    </div>

    <div class="max-w-[1000px] m-auto text-center px-5 pb-8">
      <h1 class="text-[38px] md:text-[56px] font-yeseva leading-10 sm:leading-20 text-color10">Sesuai digunakan untuk:</h1>
      <div class="mt-10 m-auto max-w-[800px]">
        <x-card4>Mengurangkan sakit kepala.</x-card4>
        <x-card4>Mabuk perjalanan</x-card4>
        <x-card4>Buang angin sembelit</x-card4>
        <x-card4>Batuk</x-card4>
        <x-card4>Kejang otot</x-card4>
        <x-card4>Sakit lutut/sendi</x-card4>
      </div>
    </div>
  </div>

  <div class=" bg-color1 text-[white]">
    <div class="max-w-[1000px] m-auto text-center justify-center p-8">
      <h1 class="text-[40px] font-yeseva leading-15 text-[white]">Kami sediakan pakej untuk anda supaya anda boleh berjimat..</h1>

      <div class="overflow-x-auto mt-10">
        <table class="table bg-white text-black max-w-[700px] m-auto text-xl font-bold">
          <!-- head -->
          <thead>
            <tr>
              <th class="w-[50px]">No</th>
              <th class="w-[50px]"></th>
              <th>Pakej</th>
              <th class="w-[50px]">Harga</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            <tr>
              <td>
                1.
              </td>
              <td>
                <div class="flex items-center gap-3">
                  <div class="avatar">
                    <div class="mask mask-squircle h-12 w-12">
                      <img
                        src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                        alt="pakej 1" />
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div class="font-bold">1 Jamu Asli</div>
              </td>
              <td>RM18</td>
            </tr>


            <tr>
              <td>
                2.
              </td>
              <td>
                <div class="flex items-center gap-3">
                  <div class="avatar">
                    <div class="mask mask-squircle h-12 w-12">
                      <img
                        src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                        alt="pakej 1" />
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div class="font-bold">5 Jamu Asli (percuma 1 Jamu Asli)</div>
              </td>
              <td>RM90</td>
            </tr>

            <tr>
              <td>
                3.
              </td>
              <td>
                <div class="flex items-center gap-3">
                  <div class="avatar">
                    <div class="mask mask-squircle h-12 w-12">
                      <img
                        src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                        alt="pakej 1" />
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div class="font-bold">1 Aurora Terapi</div>
              </td>
              <td>RM10</td>
            </tr>

            <tr>
              <td>
                4.
              </td>
              <td>
                <div class="flex items-center gap-3">
                  <div class="avatar">
                    <div class="mask mask-squircle h-12 w-12">
                      <img
                        src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                        alt="pakej 1" />
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div class="font-bold">5 Aurora Terapi (percuma 1 Aurora Terapi)</div>
              </td>
              <td>RM50</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>

  <div class="text-center bg-green-700 p-8">
    <h1 class="text-[50px] font-yeseva leading-13 text-color5">Jangan tunggu lagi!!<br>Buat pembelian sekarang!!</h1>
    <h2 class="font-agbalumo text-[32px] leading-7 text-amber-200">Beli sekarang untuk kesihatan dalaman yang lebih baik!</h2>
    <a href="" class="btn btn-primary mt-5 rounded-4xl text-xl px-10">Klik untuk buat pembelian sekarang</a>
  </div>
</x-layout>