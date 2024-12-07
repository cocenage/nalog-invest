@push('meta')
<title>{{ 'Nalog Invest | Контакты' }}</title>
<meta name="description" content="{{ 'Свяжитесь с Nalog Invest для получения квалифицированной помощи в налоговом консалтинге. Я предлагаю консультации по налоговым вопросам, поддержку в оптимизации налоговой нагрузки и представительство в налоговых органах. Узнайте, как мы можем помочь вашему бизнесу сейчас!' }}">
<meta name="keywords" content="{{ 'контакты, налоговый консалтинг, консультации по налогам, оптимизация налогов, Nalog Invest, налоговые услуги, юридическая помощь, связь, услуги налогового консультанта' }}">
@endpush
<div class="pt-[20px] md:pt-[100px]">
    <nav class="px-[15px] md:px-[50px] w-full rounded-md text-sm">
        <ol class="list-reset flex ">
            <li class="group">
                <a
                    wire:navigate href="{{ route('page.home') }}"
                    class="text-[#E3BF46] group-hover:text-[#F7F7F7] transition duration-300 ease-in-out">Главная
                    <span class="mx-2 text-[#E3BF46] group-hover:text-[#F7F7F7] transition duration-300 ease-in-out">/</span>
                </a>
            </li>
            <li class="text-[#F7F7F7]">Контакты</li>
        </ol>
    </nav>
    <div class="px-[15px] md:px-[50px] xl:grid grid-cols-12 gap-5 pb-[50px] pt-[15px] xl:pb-[100px]">
        <div class="col-span-10 flex flex-col gap-[30px]">
            <h1>Свяжитесь со мной</h1>
            <h2>Всегда рада помочь разобраться в тонкостях налогообложения для частных инвесторов, оптимизировать и вернуть излишне уплаченные налоги</h2>
        </div>
    </div>
    
    @if($contact)
    <div data-aos="fade-up" class="px-[15px] md:px-[50px]">
        <a target="_blank" href="tel:{{ $contact->tel_link }}">
            <div class="flex items-start flex-col xl:grid xl:grid-cols-12 gap-5 xl:items-center h-[150px] xl:h-[250px] rounded-[15px] justify-center transition duration-300 ease-in-out transform hover:scale-95">
                <div class="col-span-6">
                    <p class="text-lg  text-[#F7F7F7] flex gap-2">Номер телефона</p>
                </div>
                <div class="col-span-6 flex justify-end">
                    <p class="text-2xl lg:text-3xl 2xl:text-4xl text-[#F7F7F7]">{{ $contact->tel }}</p>
                </div>
            </div>
            <hr class="w-full border-[1px] border-[#F7F7F7]">
        </a>
    </div>
    <div data-aos="fade-up" class="px-[15px] md:px-[50px]">
        <a target="_blank" href="mailto:{{ $contact->mail }}">
            <div class="flex items-start flex-col xl:grid xl:grid-cols-12 gap-5 xl:items-center h-[150px] xl:h-[250px] rounded-[15px] justify-center transition duration-300 ease-in-out transform hover:scale-95">
                <div class="col-span-6">
                    <p class="text-lg  text-[#F7F7F7] flex gap-2">Почта</p>
                </div>
                <div class="col-span-6 flex justify-end">
                    <p class="text-2xl lg:text-3xl 2xl:text-4xl text-[#F7F7F7]">{{ $contact->mail }}</p>
                </div>
            </div>
            <hr class="w-full border-[1px] border-[#F7F7F7]">
        </a>
    </div>
    <div data-aos="fade-up" class="px-[15px] md:px-[50px]">
        <a target="_blank" href="{{ $contact->tg_link }}">
            <div class="flex items-start flex-col xl:grid xl:grid-cols-12 gap-5 xl:items-center h-[150px] xl:h-[250px] rounded-[15px] justify-center transition duration-300 ease-in-out transform hover:scale-95">
                <div class="col-span-6">
                    <p class="text-lg  text-[#F7F7F7] flex gap-2">Телеграм</p>
                </div>
                <div class="col-span-6 flex justify-end">
                    <p class="text-2xl lg:text-3xl 2xl:text-4xl text-[#F7F7F7]">{{ $contact->tg }}</p>
                </div>
            </div>
            <hr class="w-full border-[1px] border-[#F7F7F7]">
        </a>
    </div>
    <div class="px-[15px]  md:px-[50px] pt-[50px] lg:grid lg:grid-cols-12 gap-5 pb-[100px] md:pb-[200px]">
        <div class="bg-[#F7F7F7] w-full h-full md:h-max md:w-max gap-[30px] flex flex-col justify-center rounded-2xl p-[15px] md:p-[50px] text-black col-span-5">
            <p class="text-2xl lg:text-3xl 2xl:text-4xl font-medium flex justify-center pb-[50px]">Обратная связь</p>
            <form id="tg" class="flex flex-col gap-[25px] items-center" action="{{ route('contact.send') }}" method="POST">
                @csrf
                <!-- Имя -->
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="name" id="name"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-[#E3BF46] peer"
                        placeholder=" " required />
                    <label for="name" class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]
               peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#E3BF46]
               peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ваше имя</label>
                </div>
                <!-- Телефон -->
                <div class="relative z-0 w-full mb-5 group">
                    <input type="tel" name="phone" id="phone"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-[#E3BF46] peer"
                        placeholder=" "
                        pattern="^\+?[0-9]{10,15}$" title="Введите действительный номер телефона" required />
                    <label for="phone" class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]
               peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#E3BF46]
               peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ваш номер телефона</label>
                </div>
                <!-- Сообщение -->
                <div class="relative z-0 w-full mb-5 group">
                    <textarea name="message" id="message"
                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-black appearance-none focus:outline-none focus:ring-0 focus:border-[#E3BF46] peer"
                        placeholder=" " required></textarea>
                    <label for="message" class="peer-focus:font-medium absolute text-sm text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]
               peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#E3BF46]
               peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Сообщение</label>
                </div>
                <!-- Согласие -->
                <div class="flex items-center space-x-3 ">
                    <input required type="checkbox" class="w-4 h-4 shrink-0 mt-0.5 border-gray-200 rounded text-black focus:ring-black disabled:opacity-50 disabled:pointer-events-none"
                        id="terms-checkbox" checked />
                    <label for="terms-checkbox" class="text-[18px] text-black flex gap-1 flex-col md:flex-row">
                        Я согласен с условиями
                        <livewire:documents.documents-one />
                    </label>
                </div>
                <!-- Кнопка отправки -->
                <button class="text-lg/6 font-semibold text-[#00343A] bg-[#EEBF37] px-5 py-3 rounded-full hover:scale-105 transition duration-300 ease-in-out"
                    type="submit">Отправить заявку</button>
                <div id="loadingIndicator" style="display:none;">Загрузка...</div>
            </form>
            <div id="responseMessage"></div>
        </div>
        @else
        @endif
    </div>
</div>
