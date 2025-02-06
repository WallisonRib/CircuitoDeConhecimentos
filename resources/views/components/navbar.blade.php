<div>
    <nav class="bg-white  fixed w-full z-20 top-0 start-0 border-b-4  border-circuit_green">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/circuito-logo-with-text.png') }}" class="h-16 object-contain" alt="Descrição da imagem">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-circuit_green hover:bg-lime-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">
                    Entre em contato
                </button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Abrir menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 
                    md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 
                    md:dark:bg-gray-900 dark:border-gray-700 gap-32" >
                    
                    <li>
                        <a href="{{ url('/') }}"
                            class="block py-2 px-3 rounded-sm md:p-0 hover:text-lime-600 
                            {{ request()->is('/') ? 'text-circuit_green ' : 'text-gray-900 hover:text-blue-700' }}">
                            Ínicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/laboratorios') }}"
                            class="block py-2 px-3 rounded-sm md:p-0 hover:text-lime-600 
                            {{ request()->is('/laboratorios') ? 'text-circuit_green ' : 'text-gray-900 hover:text-blue-700' }}">
                            Laboratórios
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/portifolio') }}"
                        class="block py-2 px-3 rounded-sm md:p-0 hover:text-lime-600 
                        {{ request()->is('/portifolio') ? 'text-circuit_green ' : 'text-gray-900 hover:text-blue-700' }}">
                        Portifólio
                    </a>
                    </li>
                    <li>
                        <a href="{{ url('/Eventos') }}"
                            class="block py-2 px-3 rounded-sm md:p-0 hover:text-lime-600 
                            {{ request()->is('/Eventos') ? 'text-circuit_green ' : 'text-gray-900 hover:text-blue-700' }}">
                            Eventos
                        </a>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</div>
