<div class="">
<div>



<nav class="px-[15px] md:px-[50px] w-full rounded-md text-sm">
        <ol class="list-reset flex ">
            <li class="group">
                <a
                    wire:navigate href="{{ route('page.home') }}"
                    class="text-[#E3BF46] group-hover:text-[#F8F1E5] transition duration-300 ease-in-out">Главная
                    <span class="mx-2 text-[#E3BF46] group-hover:text-[#F8F1E5] transition duration-300 ease-in-out">/</span>
                </a>
            </li>
            <li class="text-[#F8F1E5]">О нас</li>
        </ol>
    </nav>






    <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 pt-[15px] pb-[100px]">
        <div class="col-span-10 flex flex-col gap-[30px]">
            <h1>Свяжитесь со мной</h1>
            <h2>Я всегда готова помочь вам разобраться в любых вопросах, связанных с налоговым законодательством и оптимизацией налогообложения. </h2>
        </div>
    </div>













</div>



@if($contact)















<div data-aos="fade-up" class="px-[15px] md:px-[50px]">
    <a target="_blank" href="tel:{{ $contact->tel_link }}">
    <div class="flex items-start flex-col xl:grid xl:grid-cols-12 gap-5 xl:items-center h-[150px] xl:h-[250px] rounded-[15px] justify-center transition duration-300 ease-in-out transform hover:scale-95">
        <div class="col-span-6">
            <p class="text-lg  text-[#F8F1E5] flex gap-2">Номер телефона</p>
        </div>
        <div class="col-span-6 flex justify-end">
            <p class="text-2xl lg:text-3xl 2xl:text-4xl text-[#F8F1E5]">{{ $contact->tel }}</p>
        </div>
    </div>
    <hr class="w-full border-[1px] border-[#F8F1E5]">
    </a>
</div>
<div data-aos="fade-up" class="px-[15px] md:px-[50px]">
    <a target="_blank" href="mailto:{{ $contact->mail }}">
    <div class="flex items-start flex-col xl:grid xl:grid-cols-12 gap-5 xl:items-center h-[150px] xl:h-[250px] rounded-[15px] justify-center transition duration-300 ease-in-out transform hover:scale-95">
        <div class="col-span-6">
            <p class="text-lg  text-[#F8F1E5] flex gap-2">Почта</p>
        </div>
        <div class="col-span-6 flex justify-end">
            <p class="text-2xl lg:text-3xl 2xl:text-4xl text-[#F8F1E5]">{{ $contact->mail }}</p>
        </div>
    </div>
    <hr class="w-full border-[1px] border-[#F8F1E5]">
    </a>
</div>
<div data-aos="fade-up" class="px-[15px] md:px-[50px]">
    <a target="_blank" href="{{ $contact->tg_link }}">
    <div class="flex items-start flex-col xl:grid xl:grid-cols-12 gap-5 xl:items-center h-[150px] xl:h-[250px] rounded-[15px] justify-center transition duration-300 ease-in-out transform hover:scale-95">
        <div class="col-span-6">
            <p class="text-lg  text-[#F8F1E5] flex gap-2">Телеграм</p>
        </div>
        <div class="col-span-6 flex justify-end">
            <p class="text-2xl lg:text-3xl 2xl:text-4xl text-[#F8F1E5]">{{ $contact->tg }}</p>
        </div>
    </div>
    <hr class="w-full border-[1px] border-[#F8F1E5]">
    </a>
</div>


<div class="px-[15px] md:px-[50px] pt-[50px]">
    <div class="bg-[#F8F1E5] rounded-2xl p-[50px] w-max h-[700px] text-black">
        <p class="text-2xl lg:text-3xl 2xl:text-4xl font-medium">Обратная связь</p>


        <div class="px-[15px] md:px-[50px] pt-[50px]">
    <div class="bg-[#F8F1E5] rounded-2xl p-[50px] w-max h-[700px] text-black">
        <p class="text-2xl lg:text-3xl 2xl:text-4xl font-medium">Обратная связь</p>



        <form action="{{ route('contact.send') }}" method="POST">
    @csrf



    <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-[#E3BF46] peer" placeholder=" " required />
      <label for="name" class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#E3BF46] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ваше имя</label>
  </div>


  <div class="relative z-0 w-full mb-5 group">
      <input type="text" name="phone" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-[#E3BF46] peer" placeholder=" " required />
      <label for="phone" class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#E3BF46] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ваш номер телефона</label>
  </div>

  <div class="relative z-0 w-full mb-5 group">
      <textarea  name="message" id="message" class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-[#E3BF46] peer" placeholder=" " required ></textarea>
      <label for="message" class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#E3BF46] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Cообщение</label>
  </div>


    <button class="text-lg/6 font-semibold text-[#00343A] bg-[#EEBF37] px-5 py-3 rounded-full hover:scale-105 transition duration-300 ease-in-out" type="submit">Отправить</button>
</form>




<form action="{{ route('contact.send') }}" method="POST">
    @csrf
    <div>

        <input type="text" id="name" name="name" required>
        <label for="name">Ваше имя</label>
    </div>
    <div>

        <input type="text" name="phone" placeholder="Введите ваш номер телефона" required>
        <label for="phone">Номер телефона</label>
    </div>
    <div>

        <textarea id="message" name="message" required></textarea>
        <label for="message">Сообщение</label>
    </div>
    <button type="submit">Отправить</button>
</form>












    </div>




</div>


    </div>




</div>




@else
@endif



</div>
