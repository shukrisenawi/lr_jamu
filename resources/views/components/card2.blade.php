<div class="card bg-base-100 w-50 shadow m-3 rounded-3xl">
      <span class="card-title justify-center w-[170px] font-poppins -mt-2 m-auto text-[15px] bg-color6 text-[white] px-4 py-2 rounded-xl leading-2">{{ $title }}</span>
    <figure class="px-10 pt-10 -mx-10 -mt-10">
      <img
        src="../img/{{ $img }}" alt="{{ $title }}"
        class="rounded-t-xl" />
    </figure>
    <div class="card-body items-center text-center font-poppins p-3 pt-0 font-bold leading-3.5">
      <p class="text-[13px]">{{ $description }}</p>
    </div>
  </div>