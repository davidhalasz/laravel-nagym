<!-- This example requires Tailwind CSS v2.0+ -->
<header>
    <div class="relative bg-slate-900 font-extrabold">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="/">
                        <span class="sr-only">Workflow</span>
                        <img class="h-8 w-auto sm:h-10" src="{{ asset('images/varosunk/logo-1-e1594975686447.png') }}"
                            alt="">
                    </a>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <button type="button"
                        class="bg-slate-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden md:flex space-x-10">

                    <div x-data="{ open: false, isOpen: false }" class="relative">
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <button @click="open = ! open" type="button"
                            class="text-gray-200 group bg-slate-900 rounded-md inline-flex items-center font-extrabold font-medium hover:text-green-500"
                            aria-expanded="false">
                            <span>Városunk</span>

                            <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="open" @click.outside="open = false"
                            class="absolute z-10 -ml-4 mt-3 transform px-2 w-fit max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                    <a href="/varosunk/koszonto"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Köszöntő</p>
                                        </div>
                                    </a>

                                    <a href="/varosunk/tortenelem"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Történelem</p>
                                        </div>
                                    </a>

                                    <a href="/varosunk/cimer"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Címer</p>
                                        </div>
                                    </a>

                                    <a href="/varosunk/testvervarosok"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Testvérvárosok</p>
                                        </div>
                                    </a>

                                    <a href="/varosunk/kituntetettek"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Kitüntetettek</p>
                                        </div>
                                    </a>

                                    <a href="/varosunk/civil-szervezetek"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Civil szervezetek</p>
                                        </div>
                                    </a>

                                    <div @click="isOpen = ! isOpen">
                                        <a href="#"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                            <div class="ml-4">

                                                <p class="font-extrabold font-medium text-gray-900 clear-none">
                                                    Egyházak
                                                    <span class=" ml-2 float-right my-auto">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                                clip-rule="evenodd" />
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>

                                    <a href="/varosunk/cegjegyzek"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Cégjegyzék</p>
                                        </div>
                                    </a>
                                </div>
                            </div>


                        </div>

                        <div x-show="isOpen" @click.outside="isOpen = false"
                            class="absolute z-9 -ml-10 mt-80 transform px-2 w-fit max-w-md sm:px-0 lg:ml-40 lg:left-1/2 lg:-translate-x-1/2">
                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                    <a href="/varosunk/katolikus"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Katolikus</p>
                                        </div>
                                    </a>

                                    <a href="/varosunk/reformatus"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Reformatus</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div x-data="{ open: false }" class="relative">
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <button @click="open = ! open" type="button"
                            class="text-gray-200 group bg-slate-900 rounded-md inline-flex items-center font-extrabold font-medium hover:text-green-500"
                            aria-expanded="false">
                            <span>Intézmények – Szolgáltatások</span>
                            <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" @click.outside="open = false"
                            class="absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                    <a href="/szolgaltatasok/egeszsegugy"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Egészségügy</p>
                                        </div>
                                    </a>

                                    <a href="/szolgaltatasok/posta"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Posta</p>
                                        </div>
                                    </a>

                                    <a href="/szolgaltatasok/rendorseg"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Rendőrség</p>
                                        </div>
                                    </a>

                                    <a href="/szolgaltatasok/ovoda"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Óvoda</p>
                                        </div>
                                    </a>

                                    <a href="/szolgaltatasok/iskola"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Iskola</p>
                                        </div>
                                    </a>

                                    <a href="/szolgaltatasok/bolcsode"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Család- és Gyermekjóléti
                                                Szolgálat, Bölcsőde</p>
                                        </div>
                                    </a>

                                    <a href="/szolgaltatasok/allatorvos"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Állatorvos</p>
                                        </div>
                                    </a>

                                    <a href="/szolgaltatasok/gondozasi-kozpont"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Gondozási Központ</p>
                                        </div>
                                    </a>

                                    <a href="/szolgaltatasok/konyvtar"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Városi Könyvtár és
                                                Művelődési Ház</p>
                                        </div>
                                    </a>

                                    <a href="/szolgaltatasok/kommunalis-szolgaltatasok"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Hulladékkezelés</p>
                                        </div>
                                    </a>

                                    <a href="/szolgaltatasok/szobi-jarasi-hivatal"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Szobi Járási Hivatal
                                                (Okmányiroda)</p>
                                        </div>
                                    </a>

                                    <a href="/szolgaltatasok/matyas-etkezde"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Mátyás Étkezde</p>
                                        </div>
                                    </a>

                                    <a href="/szolgaltatasok/pest-megyei-pedagogiai-szakszolgalat"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Pest Megyei Pedagógiai
                                                Szakszolgálat Szobi Tagintézménye</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div x-data="{ open: false, isOpen: false, isOpenKepv: false }" class="relative">
                        <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                        <button @click="open = ! open" type="button"
                            class="text-gray-200 group bg-slate-900 rounded-md inline-flex items-center font-extrabold font-medium hover:text-green-500"
                            aria-expanded="false">
                            <span>Önkormányzat</span>

                            <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="open" @click.outside="open = false"
                            class="absolute z-10 -ml-4 mt-3 transform px-2 w-fit max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                    <div @click="isOpen = ! isOpen">
                                        <a href="#"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                            <div class="ml-4 float-left">
                                                <p class="font-extrabold font-medium text-gray-900 clear-none whitespace-nowrap align-middle">
                                                    Polgármesteri Hivatal
                                                    <span class=" ml-2 b-0 inline-block align-middle">
                                                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                          viewBox="0 0 20 20" fill="currentColor">
                                                          <path fill-rule="evenodd"
                                                              d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                              clip-rule="evenodd" />
                                                          <path fill-rule="evenodd"
                                                              d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                              clip-rule="evenodd" />
                                                      </svg>
                                                  </span>
                                                </p>
                                                
                                            </div>
                                        </a>
                                    </div>
                                    <div @click="isOpenKepv = ! isOpenKepv">
                                      <a href="#"
                                          class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                          <div class="ml-4 float-left">
                                              <p class="font-extrabold font-medium text-gray-900 clear-none whitespace-nowrap align-middle">
                                                Képviselő-testület
                                                  <span class=" ml-2 b-0 inline-block align-middle">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                            clip-rule="evenodd" />
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                              </p>
                                              
                                          </div>
                                      </a>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div x-show="isOpen" @click.outside="isOpen = false"
                            class="absolute z-9  mt-4 ml-150 transform px-2 w-fit max-w-md sm:px-0 lg:ml-100">
                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                    <a href="/onkormanyzat/ugyfelfogadas"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Ügyfélfogadás</p>
                                        </div>
                                    </a>
                                    <a href="/onkormanyzat/polgarmesteri-hivatal"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Elérhetőség</p>
                                        </div>
                                    </a>
                                    <a href="/onkormanyzat/szervezeti-felepites"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Szervezeti felépítés</p>
                                        </div>
                                    </a>
                                    <a href="/onkormanyzat/dokumentumtar"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Dokumentumtár</p>
                                        </div>
                                    </a>
                                    <a href="/onkormanyzat/helyi-adok"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Helyi adók</p>
                                        </div>
                                    </a>
                                    <a href="/onkormanyzat/nagymaros-varos-oenkormanyzat-polgarmesteri-hivatalanak-minsegpolitikaja"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Nagymarosi Polgármesteri Hivatal minőségpolitikája</p>
                                        </div>
                                    </a>
                                    <a href="/onkormanyzat/elektronikus-ugyintezes"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4">
                                            <p class="font-extrabold font-medium text-gray-900">Elektronikus ügyintézés</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div x-show="isOpenKepv" @click.outside="isOpenKepv = false"
                            class="absolute z-9  mt-4 transform px-2 w-fit max-w-md sm:px-0 lg:ml-80">
                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                    <a href="/onkormanyzat/kepviselo-testulet-tagjai"
                                        class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-100">
                                        <div class="ml-4 whitespace-nowrap">
                                            <p class="font-extrabold font-medium text-gray-900">Képviselő-testület tagjai</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <a href="#"
                        class="text-gray-200 group bg-slate-900 rounded-md inline-flex items-center font-extrabold font-medium hover:text-green-500">
                        Pályázati lehetőségek </a>
                    <a href="#"
                        class="text-gray-200 group bg-slate-900 rounded-md inline-flex items-center font-extrabold font-medium hover:text-green-500">
                        Településrendezés </a>
                    <a href="#"
                        class="text-gray-200 group bg-slate-900 rounded-md inline-flex items-center font-extrabold font-medium hover:text-green-500">
                        Időpontfoglalás </a>
                </nav>
            </div>
        </div>

        <!--
      Mobile menu, show/hide based on mobile menu state.
  
      Entering: "duration-200 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
        <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 px-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600"
                                alt="Workflow">
                        </div>
                        <div class="-mr-2">
                            <button type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-8">
                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/chart-bar -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                                <span class="ml-3 font-extrabold font-medium text-gray-900"> Analytics </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/cursor-click -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                </svg>
                                <span class="ml-3 font-extrabold font-medium text-gray-900"> Engagement </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/shield-check -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="ml-3 font-extrabold font-medium text-gray-900"> Security </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/view-grid -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                                <span class="ml-3 font-extrabold font-medium text-gray-900"> Integrations </span>
                            </a>

                            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
                                <!-- Heroicon name: outline/refresh -->
                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                                <span class="ml-3 font-extrabold font-medium text-gray-900"> Automations </span>
                            </a>
                        </nav>
                    </div>
                </div>
                <div class="py-6 px-5 space-y-6">
                    <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                        <a href="#" class="font-extrabold font-medium text-gray-900 hover:text-gray-700"> Pricing
                        </a>

                        <a href="#" class="font-extrabold font-medium text-gray-900 hover:text-gray-700"> Docs </a>

                        <a href="#" class="font-extrabold font-medium text-gray-900 hover:text-gray-700"> Help Center
                        </a>

                        <a href="#" class="font-extrabold font-medium text-gray-900 hover:text-gray-700"> Guides </a>

                        <a href="#" class="font-extrabold font-medium text-gray-900 hover:text-gray-700"> Events </a>

                        <a href="#" class="font-extrabold font-medium text-gray-900 hover:text-gray-700"> Security
                        </a>
                    </div>
                    <div>
                        <a href="#"
                            class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm font-extrabold font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                            Sign up </a>
                        <p class="mt-6 text-center font-extrabold font-medium text-gray-500">
                            Existing customer?
                            <a href="#" class="text-indigo-600 hover:text-indigo-500"> Sign in </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
