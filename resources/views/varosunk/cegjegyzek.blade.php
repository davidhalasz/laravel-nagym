<x-varosunk>
    <div class="max-w-4xl mx-auto mb-6 font-extrabold">
        <h1 class="text-3xl py-6 font-bold">Cégjegyzék</h1>

        <h2 class="mt-6 mb-2 col-span-2 text-xl">
            Szűrési feltételek
        </h2>
        <div id="myBtnContainer">
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full active" onclick="filterSelection('all')">Mutasd mindet</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('elelmiszer')">Élelmiszer, ital boltok</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('muszaki')">Műszaki kereskedelem</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('bank')"> Bank, biztosítás</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('egyeb')"> Egyéb Szolgáltatás</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('epitoipar')">Építőipar</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('vendeglatas')"> Vendéglátás</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('autoszerelo')"> Autószerelők, autósboltok,
                autómosók, hajók</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('fodrasz')">Fodrász – kozmetika</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('gyogyszertar')"> Gyógyszertár</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('kiskereskedelem')"> Egyéb kiskereskedelem</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('virag')">Virág - Ajándék</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('sport')"> Sport – szabadidő</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('ruhazat')"> Ruházat, textil</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('utazas')"> Utazási irodák</button>
            <button class="btn btn-filter bg-slate-700 hover:bg-slate-900 text-white font-bold py-2 px-4 my-1 rounded-full" onclick="filterSelection('ingatlan')"> Ingatlan</button>
        </div>

        <div class="filterElements elelmiszer">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Élelmiszer, ital boltok
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Kóka Bt.</div>
                    <div class="col-span-2">Élelmiszer, Virág</div>
                    <div class="text-base">Váci út<br /><span class="text-green-400">Cím</span></div>
                    <div class="col-span-2">H-V: 6:00-19:00<br /><span class="text-green-400">Nyitva tartás</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Tokaji Bortár</div>
                    <div class="col-span-2">Fitomark 94 Kft.<br /><span class="text-green-400">Pontos név</span></div>
                    <div class="text-base col-span-2">Mainzi u. 12<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base ">27/354-154<br /><span class="text-green-400">Telefon</span></div>
                    <div class="">kisinoc@invitel.hu<br /><span class="text-green-400">email</span></div>
                    <div class="col-span-2">H-P: 10:00-18:00<br />
                        Sz-V: 9:00-12:00<br /><span class="text-green-400">Nyitva tartás</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Zöldség-Gyümölcs-Kiskereskedés</div>
                    <div class="col-span-2">Balázs Róbertné<br /><span class="text-green-400">Pontos név</span></div>
                    <div class="text-base col-span-2">Váci út 80.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base col-span-2">H-P: 6:00-20:00<br />
                        Sz: 6:00-17:00<br />
                        V: 6:00-14:00<br /><span class="text-green-400">Nyitva tartás nyáron</span></div>
                    <div class="text-base col-span-2">H-P: 7:00-19:00<br /><span class="text-green-400">Nyitva tartás
                            télen</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Juli zöldséges</div>
                    <div class="col-span-2">Magyar u. 26.<br /><span class="text-green-400">Cím</span></div>
                    <div class="col-span-2">30-476-48-43<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">H-P: 7:00-19:00<br />
                        Sz: 7:00-13:00<br />
                        V: 7:00-12:00<br /><span class="text-green-400">Nyitva tartás</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Élelmiszer bolt – Manyi</div>
                    <div class="col-span-2">Fő tér 22.<br /><span class="text-green-400">Cím</span></div>
                    <div class="col-span-2">30-437-72-05<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">H-P: 6:30-18:00<br />
                        Sz: 6:30-13:00<br />
                        V: 7:00-12:00<br /><span class="text-green-400">Nyitva tartás</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">CBA Nagymaros Trade Kft.</div>
                    <div class="col-span-2">Magyar u. 21.<br /><span class="text-green-400">Cím</span></div>
                    <div class="">27/595-510<br /><span class="text-green-400">Telefon</span></div>
                    <div class="">cbanagymaros@invitel.hu<br /><span class="text-green-400">Email</span></div>
                    <div class="col-span-2"><a href="https://www.cba.hu">cba.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                    <div class="col-span-2">H-P: 6:30-18:00<br />
                        Sz: 6:30-13:00<br />
                        V: 7:00-12:00<br /><span class="text-green-400">Nyitva tartás</span></div>
                </div>
            </div>
        </div>

        <div class="filterElements muszaki">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Műszaki kereskedelem
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">KSTIHL Márkaszervíz</div>
                    <div class="col-span-2">Kerti gépek javítása, forgalmazása.</div>
                    <div class="col-span-2">PIDOMA Kft.<br /><span class="text-green-400">Pontos név</span></div>
                    <div class="text-base">Halász u. 14.<br /><span class="text-green-400">Cím</span></div>
                    <div class="">fureszgep@pidoma.hu<br /><span class="text-green-400">Email</span></div>
                    <div class="">30-625-31-15<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">H: Zárva<br />
                        K-P: 7:30-16:30<br />
                        Sz: 8:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="filterElements bank">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Bank, biztosítás
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Veresegyház és Vidéke Takarékszövetkezet Nagymarosi
                        Kirendeltsége</div>
                    <div class="text-base col-span-2">2626 Nagymaros, Király utca 1/a. <br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="col-span-2">nagymaros@veresegyhaz.tksz.hu<br /><span
                            class="text-green-400">Email</span>
                    </div>
                    <div class="">327/355-415<br /><span class="text-green-400">Telefon</span></div>
                    <div class="">27/594-360<br /><span class="text-green-400">Fax</span></div>
                    <div class="col-span-2">H: 8:00-17:30<br />
                        K-Cs: 8:00-15:30<br />
                        P: 8:00-12:30<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Dunakanyar Első Hitel és Biztosító Iroda</div>
                    <div class="text-base">Váci út 13.<br /><span class="text-green-400">Cím</span></div>
                    <div class="col-span-2">nemethheringildiko@invitel.hu<br /><span
                            class="text-green-400">Email</span>
                    </div>
                    <div class="col-span-2">20-973-07-90<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">H-P: 15:00-19:00<br />
                        Sz: 10:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="filterElements egyeb">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Egyéb Szolgáltatás
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Kutyakanyar Állatorvosi Rendelő</div>
                    <div class="text-base">Nagymaros, Radnóti u. 1.<br /><span class="text-green-400">Cím</span></div>
                    <div class="col-span-2">0620/468-2846<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">H: 8:00-10:00, 16:00-18:00<br />
                        K: 8:00-10:00, 16:00-18:00<br />
                        Sze: 8:00-10:00<br />
                        Cs: 8:00-10:00, 16:00-18:00<br />
                        P: 8:00-10:00, 16:00-18:00<br />
                        Szo: 10:00-12:00
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">CsG és Társa Mezőgazdasági és Szolgáltató Bt.</div>
                    <div class="col-span-2">Veszélyes fák kivágása alpintechnikával, fakivágás, gallyazás, fűkaszálás,
                        fűnyírás, bozótírás, parlagfű irtás, telektisztítás, ág darálás, tűzifa értékesítés, fuvarozás
                    </div>
                    <div class="text-base col-span-2">2626, Nagymaros, Tamási Áron. u. 10.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">0630/279-1051<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">0620/400-3346<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">csgbt@t-online.hu<br /><span class="text-green-400">Email</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Földmérő</div>
                    <div class="text-base col-span-2">Nagy János Zoltán<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="col-span-2">0620/468-7133<br /><span class="text-green-400">Telefon</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">MAURER-MORVAI ÜGYVÉDI IRODA</div>
                    <div class="text-base col-span-2">Millenium sor 2. I/4.<br /><span
                            class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">06-20-326-1834<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">06-27-354-647<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">iroda@maurermorvai.hu<br /><span class="text-green-400">Email</span></div>
                    <div class="col-span-2">Ügyfélfogadási idő: előzetes egyeztetés alapján.</div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Zoller és Társa Kft.</div>
                    <div class="col-span-2">Fő tevékenysége: fémszerkezetek gyártása és szerelése, gépek és
                        berendezések
                        szerelése és javítása.</div>
                    <div class="text-base col-span-2">2626 Nagymaros, Német u. 2.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">+36 30/941-0279<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">+36 27/511-732<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">info@zoller.hu<br /><span class="text-green-400">Email</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">VIA VARIA Kft.</div>
                    <div class="col-span-2">Komplex (műszaki, gazdasági, kereskedelmi) cégátvilágítás, cég működésének
                        kontrollingja, jelentések értékelése, üzleti modellezés, csődmenedzselés, végelszámolás,
                        bankbiztosi
                        tevékenység, menedzsment biztosításával cégvezetés.</div>
                    <div class="text-base col-span-2">2626 Nagymaros, Rákóczi u. 82.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">+36/20/33-34-113<br /><span class="text-green-400">Telefon</span></div>
                    <div class="">peter@namenyi.hu<br /><span class="text-green-400">Email</span></div>
                    <div class="col-span-2"><a href="http://www.viavaria.hu/">www.viavaria.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Hűtőgép és klímaszerelés</div>
                    <div class="col-span-2">Tömör József</div>
                    <div class="text-base col-span-2">2626 Nagymaros, Vasút u. 36.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">27/996-755<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">30/472-3735<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">tomorjozsef1962@gmail.com<br /><span class="text-green-400">Email</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Tharan Trieb Marianne</div>
                    <div class="col-span-2">Fordítás alábbi nyelvekről és nyelvekre, valamint lektorálás, tolmácsolás:
                        magyar-német-angol-francia-holland-maláj/indonéz</div>
                    <div class="text-base col-span-2">2626 Nagymaros, Bokréta u. 3.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">06 27 354 137<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">06 27 354 137<br /><span class="text-green-400">Fax</span></div>
                    <div class="col-span-2">tharan.marianne@vnet.hu<br /><span class="text-green-400">Email</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">MarosVill FiberContact Kft</div>
                    <div class="col-span-2">Fordítás alábbi nyelvekről és nyelvekre, valamint lektorálás, tolmácsolás:
                        magyar-német-angol-francia-holland-maláj/indonéz</div>
                    <div class="text-base col-span-2">Nagymaros, Kossuth sor 30.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">20/919-5050<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">info@marosvill.hu<br /><span class="text-green-400">Email</span></div>
                    <div class="col-span-2"><a href="https://www.marosvill.hu">www.marosvill.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Börzsöny-Ker Kft.</div>
                    <div class="col-span-2">Ipari takarítás, irodatakarítás, takarítás, tisztítás. Vállalatunk
                        elsősorban
                        irodaházak, ipari területek és önkormányzatok napi- és időszakos takarítási feladatait végzi.
                    </div>
                    <div class="text-base col-span-2">2626 Nagymaros, Radnóti u. 4.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base col-span-2">2600 Vác, Naszály u. 18.<br /><span
                            class="text-green-400">Telephely</span></div>
                    <div class="text-base">20/9-742072<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">20/9-742072<br /><span class="text-green-400">Telefon</span></div>
                    <div class="">06-27-502-086<br /><span class="text-green-400">Fax</span></div>
                    <div class="">borzsonyker@invitel.hu<br /><span class="text-green-400">Email</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Birgit Köblitz-Glass Artist</div>
                    <div class="col-span-2">Építészekkel és kézművesekkel együttműködve elsősorban az igényes
                        nagyformátumú
                        építészeti üvegprojektek azok, amelyek gyümölcsözően hatnak művészeti munkámra, mivel ott az
                        irányelv az építménnyel és funkcióval való kontextus külön izgalmas.</div>
                    <div class="text-base col-span-2">2626 Nagymaros, Nap u. 4.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">06 30 558 7211<br /><span class="text-green-400">Telefon</span></div>
                    <div class="">06 27 354 357<br /><span class="text-green-400">Fax</span></div>
                    <div class="">koeblitzb@yahoo.com<br /><span class="text-green-400">Email</span></div>
                    <div class=""><a
                            href="http://www.birgit-koeblitz.hu/">www.birgit-koeblitz.hu/</a><br /><span
                            class="text-green-400">Honlap</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Kutyakanyar-Kutyakozmetika</div>
                    <div class="text-base col-span-2">Radnóti M. u. 1.<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">20-584-80-20 <br /><span class="text-green-400">Telefon</span></div>
                    <div class="">Nyitva tartás: Rugalmas.</div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Maros Alpin Bt.</div>
                    <div class="col-span-2">Szolgáltatás megnevezése: Ipari alpinizmus, fakivágás, stb.</div>
                    <div class="text-base col-span-2">Selmecbánya u. 3. <br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">30-921-96-61<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">30-932-21-73<br /><span class="text-green-400">Telefon</span></div>
                    <div class="">Nyitva tartás: igény szerint</div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">KSTIHL Márkaszervíz</div>
                    <div class="col-span-2">Kerti gépek javítása, forgalmazása.</div>
                    <div class="col-span-2">PIDOMA Kft.<br /><span class="text-green-400">Pontos név</span></div>
                    <div class="text-base">Halász u. 14.<br /><span class="text-green-400">Cím</span></div>
                    <div class="">fureszgep@pidoma.hu<br /><span class="text-green-400">Email</span></div>
                    <div class="">30-625-31-15<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">H: Zárva<br />
                        K-P: 7:30-16:30<br />
                        Sz: 8:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">David Balazic cipészműhely</div>
                    <div class="text-base col-span-2">Vasút u. 3.<br /><span class="text-green-400">Cím</span></div>
                    <div class="">20-350-36-05<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">david@luxuscipo.hu<br /><span class="text-green-400">Email</span></div>
                    <div class=""><a
                            href="http://davidbalazic.com/site/index.php/en/">luxuscipo.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                    <div class="col-span-2">
                        K-P: 8:00-12:00, 13:00-17:00<br />
                        Sz: 8:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Dunakanyar Fotóstudió</div>
                    <div class="col-span-2">Németh Zoltán Pál</div>
                    <div class="col-span-2">Szolgáltatás megnevezése: Esküvők, rendezvények fotózása, video felvétele.
                    </div>
                    <div class="text-base col-span-2">Váci út 13.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">nemethzoltanpal@invitel.hu<br /><span class="text-green-400">E-mail</span>
                    </div>
                    <div class="text-base mx-2">20-971-31-52<br /><span class="text-green-400">Telefon</span></div>
                    <div class="">Nyitva tartás: igény szerint</div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Bútorlapszabászat, Bútorkészítés</div>
                    <div class="col-span-1">Maros Span Kft.<br /><span class="text-green-400">Pontos név</span></div>
                    <div class="col-span-2">Szolgáltatás: bútorlap méretre vágása, egyedi bútorkészítése, konyhabútor,
                        szobabútor, fürdőszoba bútor készítése, irodabútor készítése. Bútorlap, MDF lapok, rétegelt
                        lemez,
                        OSB lapok forgalmazása, bútorkellékek árusítása. Fa burkolás (lambéria, hajópadló, szalag
                        parketta
                        lerakása).</div>

                    <div class="text-base col-span-2">Váci út 96.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">06-27-356-345<br /><span class="text-green-400">Telefon</span></div>
                </div>
            </div>
        </div>

        <div class="filterElements epitoipar">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Építőipar
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Zoller és Társa Kft.</div>
                    <div class="col-span-2">Fő tevékenysége: fémszerkezetek gyártása és szerelése, gépek és
                        berendezések
                        szerelése és javítása.</div>
                    <div class="text-base col-span-2">2626 Nagymaros, Német u. 2.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">+36 30/941-0279<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">+36 27/511-732<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">info@zoller.hu<br /><span class="text-green-400">Email</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Fények Háza</div>
                    <div class="col-span-2">Minőségi műanyag nyílászárók, párkányok és árnyékolástechnikai termékek
                        értékesítése és beépítése.</div>
                    <div class="text-base col-span-2">Nagymaros, Magyar utca 8.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">70/382-1265<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">fenyekhaza@gmail.com<br /><span class="text-green-400">Email</span></div>
                    <div class=""><a
                            href="http://www.fenyekhaza.hupont.hu/">www.fenyekhaza.hupont.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                    <div class="col-span-2">
                        H-Szo.: 8:00-17:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">HÓD Kft.</div>
                    <div class="col-span-2">Építőipari generál kivitelezés közintézmények, családi házak építése
                        műemléképületek felújítása lakásfelújítás</div>
                    <div class="text-base col-span-2">Nagymaros, Tégla u. 6.<br /><span
                            class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">27/354-195<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">20/584-9677<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">hod@hodcsoport.hu<br /><span class="text-green-400">Email</span></div>
                    <div class=""><a href="https://www.hod.hu/">www.hod.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Heier és Társa Bt.</div>
                    <div class="col-span-2">Ács, tetőfedő és gipszkarton munkák tetőszerkezet készítése és fedése,
                        faszerkezetes házak készítése, tetőtér beépítés, szaletlik, pergolák, kerti kiülők készítése.
                    </div>
                    <div class="text-base col-span-2">Nagymaros Mező utca 8.<br /><span
                            class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">0630/289-0112<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">heier.laszlo@freemail.hu<br /><span class="text-green-400">Email</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Együd József – Gáz-Víz-Központi fűtés szerelés</div>
                    <div class="col-span-2">Víz, fűtés szerelés, csatornázás, kőműves és ács munkák, hideg-meleg
                        burkolás,
                        hőszigetelés, új házak építése komplett, régi házak felújítása
                    </div>
                    <div class="text-base col-span-2">Molnár utca 16.<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">0670/414-1392<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">egyudjozsef@gmail.com.<br /><span class="text-green-400">Email</span>
                    </div>
                    <div class=""><a
                            href="https://www.5mp.eu/web.php?a=main">viz-gaz-fütes-együd.5mp.eu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Maros Ács Kft.</div>
                    <div class="text-base col-span-2">Maros Ács Építőipari és Szolgáltató Kft<br /><span
                            class="text-green-400">Pontos név</span></div>
                    <div class="text-base col-span-2">Komárom u. 3/b<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">30-258-74-71<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">marosacs@gmail.com<br /><span class="text-green-400">Email</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Marosi Fain Bt.</div>
                    <div class="text-base col-span-2">Egyedi fa külső és belső nyílászárók gyártása, belsőépítészet.
                    </div>
                    <div class="text-base col-span-2">Kassák u. 14.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">20-957-78-56<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">0620/323-9391<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">fainablak@gmail.com<br /><span class="text-green-400">Email</span></div>
                    <div class=""><a href="https://fainablak.hu/">www.fainablak.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                    <div class="col-span-2">
                        7:00-15:30<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Piramis Építőház Kft.</div>
                    <div class="text-base col-span-2">Minden, ami egy építkezéshez, felújításához szükséges, nálunk
                        megtalálható.</div>
                    <div class="text-base col-span-2">Váci út 58.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">27/354-204<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">354-699<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">nagymaros@piramisepitohaz.hu<br /><span
                            class="text-green-400">Email</span>
                    </div>
                    <div class=""><a href="https://www.piramisepitohaz.hu/">piramisepitohaz.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                    <div class="col-span-2">
                        március 15-október 31<br />
                        H-P 7:00-16.30<br />
                        Sz 7:00-13:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                    <div class="col-span-2">
                        november 1-március 14.<br />
                        H-P 7:30-16.00<br />
                        Sz 7:30-13:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Házépítők Boltja</div>
                    <div class="text-base col-span-2">Nagymarosi Eptü Kft.<br /><span class="text-green-400">Pontos
                            név</span></div>
                    <div class="text-base col-span-2">Millenium sor<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">27/356-020<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">nagymarosieptu@invitel.hu<br /><span class="text-green-400">Email</span>
                    </div>
                    <div class=""><a href="https://www.gepdepo.hu">www.gepdepo.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                    <div class="col-span-2">

                        H-P 7:00-17.00<br />
                        Sz 7:00-13:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="filterElements vendeglatas">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Vendéglátás
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Sakura Cukrászda</div>
                    <div class="col-span-2">Minőségi alapanyagokból készülő cukrászsütemények, fagylaltok,
                        kávékülönlegességek, reggeli.</div>
                    <div class="text-base col-span-2">Magyar utca 11.<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">27/630-442<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        H-V: 8:00-20:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Nokedli Önkiszolgáló Étterem</div>
                    <div class="col-span-2">Minőségi műanyag nyílászárók, párkányok és árnyékolástechnikai termékek
                        értékesítése és beépítése.</div>
                    <div class="text-base col-span-2">Király utca 2.<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">0630/687-4223<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">nokedlinagymaros@gmail.com<br /><span class="text-green-400">Email</span>
                    </div>
                    <div class="col-span-2">
                        H-K-Sze-Cs-V: 11:00-21:00<br />
                        P-Szo: 11:00-22:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Mátyás Étkezde</div>
                    <div class="col-span-2">
                        Mátyás Étkezde Nonprofit Kft.<br /><span class="text-green-400">Pontos név</span>
                    </div>
                    <div class="col-span-2">Gyermek és szociális étkeztetést ellátó intézmény. Rendezvények szervezése.
                    </div>
                    <div class="text-base col-span-2">Magyar utca 24.<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">27/354-354<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">0620/297-4332<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">konyha@nagymaros.hu<br /><span class="text-green-400">Email</span></div>
                    <div class="col-span-2">
                        H-P: reggeli: 6:30-9:00, ebéd: 12:00-14:00
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Piknik Manufaktúra</div>
                    <div class="col-span-2">Duna-parton, kerékpár út mellett található ételbár és terasz. Kézműves
                        sörök,
                        házi szörpök, hazai pálinkák, hamburgerek, szendvicsek</div>
                    <div class="text-base col-span-2">Duna-parti sétány<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">27/305-231<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">toth.sztella@gmail.com<br /><span class="text-green-400">Email</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Sigil Galéria és Kávézó</div>
                    <div class="col-span-2">Kávékülönlegességek, kulturális rendezvények, mozgáskultúra programok.
                    </div>
                    <div class="text-base col-span-2">Váci út 21. (Magyar utca felől bejárat)<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">0620/493-4707<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">sigil@sigil.hu<br /><span class="text-green-400">Email</span></div>
                    <div class=""><a href="http://www.sigil.hu/">www.sigil.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Maros Yacht Kikötő</div>
                    <div class="text-base col-span-2">Váci út 149. alatt Duna-part<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">27/594-040<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">0670/940-3381<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">nagymarosikft@gmail.com<br /><span class="text-green-400">Email</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Édeske Cukrászműhely, Édeske Szabad Konyha</div>
                    <div class="text-base col-span-2">Cukrászműhely: Helyben sütött 40 féle süteménnyel, 30 féle
                        kézműves
                        fagylalttal, különleges tortákkal, Édeske kávéval és Belga csokoládé különlegességekkel várjuk
                        kedves vendégeinket. Érdeklődjön Facebookon is!<br /><br />

                        Szabad Konyha: Bográcsban, kemencében és tárcsán készített ételek. Menü a hét minden napján
                        változatok kínálattal.</div>
                    <div class="text-base col-span-2">Dózsa György út. 21.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">27/641-627<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        9:00-21:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Bor-só Streetfood</div>
                    <div class="text-base col-span-2">Streetfood, ahogy a mamám szereti. </div>
                    <div class="text-base col-span-2">Fő tér 20.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">0630/618-5771<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        K-V: 11:30-21:30<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Bor-Piac</div>
                    <div class="text-base col-span-2">Bár, italkereskedés, bor szaküzlet, helyi termékek.</div>
                    <div class="text-base col-span-2">Fő tér 16.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">0670/290-2707<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">borpiac2017@gmail.com<br /><span class="text-green-400">Email</span></div>
                    <div class="col-span-2">
                        H-Szo: 8:00-20:00<br />
                        V: 9:00-18:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Kis Francia pékség, reggeliző és ínyenc bolt</div>
                    <div class="text-base col-span-2">2626 Nagymaros, Magyar u 18.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">0620/550-2046<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">kisfrancia1932@gmail.com<br /><span class="text-green-400">Email</span>
                    </div>
                    <div class="col-span-2">
                        SZ-V 8:00-14:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Sólyom Kemping Étterem</div>
                    <div class="text-base col-span-2">Sólyom-szigeti út 67.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">27/355-575<br /><span class="text-green-400">Telefon/Fax</span></div>
                    <div class="col-span-2">info@solyomyacht.hu<br /><span class="text-green-400">Email</span></div>
                    <div class="col-span-2">
                        SZ-V 8:00-22:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Maros Étterem</div>
                    <div class="text-base col-span-2">Béla sétány 1. Hajóállomás<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">27/354-576<br /><span class="text-green-400">Telefon/Fax</span></div>
                    <div class="col-span-2">marosetterem@invitel.hu<br /><span class="text-green-400">Email</span>
                    </div>
                    <div class="col-span-2">
                        H-Cs: 11:00-22:00<br />
                        P-Sz: 11:00-23:00<br />
                        V: 11:00-22:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Diófa büfé</div>
                    <div class="text-base col-span-2">István tér 2. <br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="col-span-2">
                        H-V 9:00-21:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">toBORzó Borpince</div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Rév büfé</div>
                    <div class="col-span-2">Hamburger, melegszendvics, gyros, gofri, hot-dog, hideg üdítők, forró
                        italok, játék, ajándék, bizsu.</div>
                    <div class="text-base col-span-2">Kurczbacher Mihályné<br /><span class="text-green-400">Pontos
                            név</span></div>
                    <div class="text-base col-span-2">Molnár u. 8.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">27/355-575<br /><span class="text-green-400">Telefon/Fax</span></div>
                    <div class="col-span-2">info@solyomyacht.hu<br /><span class="text-green-400">Email</span></div>
                    <div class="col-span-2">
                        <span class="font-bold">Nyáron</span> H-V: 6:00-21:00<br />
                        <span class="font-bold">Télen</span> H-V: 6:00-19:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="filterElements autoszerelok">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Autószerelők, autósboltok, autómosók, hajók
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Autómentés éjjel-nappal</div>
                    <div class="col-span-2">Autómentés éjjel és nappal, külföldön és belföldön egyaránt. Karosszéria
                        javítás.</div>
                    <div class="col-span-2">Melts Miklós Norbert egyéni vállalkozó</div>
                    <div class="text-base col-span-2">2626 Nagymaros, Váci út 20.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">30/9322 213<br /><span class="text-green-400">Telefon</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Gumiszervíz</div>
                    <div class="col-span-2">MarosGumi</div>
                    <div class="text-base col-span-2">2626 Nagymaros, Váci út 96. (benzinkúttal szemben)<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">0620/919-50-45<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">szerviz@marosgumi.hu<br /><span class="text-green-400">Email</span></div>
                    <div class=""><a href="http://marosgumi.hu/">marosgumi.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                    <div class="col-span-2">
                        H-P: 8:00-16:00<br />
                        Szo: 8:00-12:00<br />
                        illetve igény szerint.<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Nagymarosi Autójavító és Hajózási Kft.</div>
                    <div class="text-base col-span-2">Yacht Kikötő Nagymaros, Váci út 149.<br /><span
                            class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">27/594-040<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">70-940-33-57<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">kocsi@citromail.hu<br /><span class="text-green-400">Email</span></div>
                    <div class=""><a href="http://www.dunyakanyarkikoto.hu">dunyakanyarkikoto.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                    <div class="col-span-2">
                        H-V 10:00-22:00 szezonban 05.01-09.30-ig.<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">PLÉH-BOYS 2000 Bt.</div>
                    <div class="col-span-2">Karosszéria javítás, autómentés.</div>
                    <div class="text-base col-span-2">Nagymaros, Aranyos u. 2/a.<br /><span
                            class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">20-933-2747<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        H-P 8:00-16:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Kézi Autómosó és Kozmetika</div>
                    <div class="col-span-2">Maros-Wax Kft.</div>
                    <div class="text-base col-span-2">Váci út 96. (benzinkúttal szemben)<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">30-343-88-67<br /><span class="text-green-400">Telefon</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Zoller László autószerelő mester</div>
                    <div class="text-base col-span-2">Nagymaros, Villa sor 2.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">27/354-420<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">zoller.l@invitel.hu<br /><span class="text-green-400">Email</span></div>
                    <div class="col-span-2">
                        H-P 7:00-16:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Szűcs Géza autószerelő mester</div>
                    <div class="col-span-2">
                        Autóvillamosság, autószerelés, futómű vizsgáztatás, gumiszerelés, diagnosztika
                    </div>
                    <div class="text-base col-span-2">GÉ-CAR Kft.</div>
                    <div class="text-base col-span-2">Nagymaros, Váci út 60.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">27/355-203<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">20/519 86 30<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">monti3000@invitel.hu<br /><span class="text-green-400">Email</span></div>
                    <div class="col-span-2">
                        H-P:8:00-16:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="filterElements fodrasz">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Fodrász – kozmetika
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Fodrászat Gabi</div>
                    <div class="col-span-2">Női, Férfi, Gyermek fodrászat</div>
                    <div class="col-span-2">Alimánné Fazekas Gabriella</div>
                    <div class="text-base col-span-2">Fő tér 3.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">0620/421-3363<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        H, Sze., P: 12:00-20:00 <br />
                        K, Cs: 8:00-13:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Slim & Beauty Salon</div>
                    <div class="col-span-2">
                        Szolgáltatások: kozmetika, alakformálás, IPL kezelések, szolárium, infrakabin.
                    </div>
                    <div class="col-span-2">Csajka Andrea kozmetikus</div>
                    <div class="text-base col-span-2">Nagymaros, Kossuth sor 19.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">(30) 996 4445<br /><span class="text-green-400">Telefon</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Szőke Szalon</div>
                    <div class="col-span-2">
                        Szolgáltatás megnevezése: Szolárium, szauna, fodrászat, kozmetika.
                    </div>
                    <div class="text-base col-span-2">Rákóczi út 1.<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">30-213-89-87 (Emese-kozmet.)<br /><span
                            class="text-green-400">Telefon</span></div>
                    <div class="text-base">30-976-67-91 (Kriszta-kozmet.)<br /><span
                            class="text-green-400">Telefon</span></div>
                    <div class="text-base">20-959-48-57 (Barbi-fodrász)<br /><span
                            class="text-green-400">Telefon</span></div>

                    <div class="col-span-2">
                        H-Sz-P délután<br />
                        K-Cs délelőtt<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Szépség Kuckó</div>
                    <div class="text-base col-span-2">Magyar u. 27.<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">Szalai Tünde kozmetikus<br />
                        20/346-17-01<br />
                        <span class="text-green-400">Telefon</span>
                    </div>
                    <div class="text-base">Gatyel Mónika fodrász<br />
                        70/429 0060<br />
                        <span class="text-green-400">Telefon</span>
                    </div>
                    <div class="text-base">Raszler Orsi fodrász<br />
                        06/207784522<br />
                        <span class="text-green-400">Telefon</span>
                    </div>
                    <div class="text-base">Keresztély Katalin műkörmös<br />
                        30/731 32 61<br />
                        <span class="text-green-400">Telefon</span>
                    </div>
                    <div class="col-span-2">
                        igény szerint<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Cleo Studió</div>
                    <div class="col-span-2">Szolgáltatás megnevezése: fodrászat, kozmetika, műköröm, manikűr</div>
                    <div class="text-base col-span-2">Tamási Áron u.2.<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">355-486<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">
                        Fodrász – Patrik Angéla
                    </div>
                    <div class="text-base">Kozmetikus – Heincz Zoltánné Györgyi<br />
                        0620/233-1738<br />
                        <span class="text-green-400">Telefon</span>
                    </div>
                    <div class="text-base">Kozmetikus – Heincz Lilla<br />
                        0670/368-5482<br />
                        <span class="text-green-400">Telefon</span>
                    </div>
                    <div class="text-base">Körmös: – Solti Zsuzsanna<br />
                        0620/932-0801<br />
                        <span class="text-green-400">Telefon</span>
                    </div>
                    <div class="col-span-2">
                        H-P 8:00-20:00<br />
                        SZ 8:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="filterElements gyogyszertar">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Gyógyszertár
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Aranykorona Gyógyszertár</div>
                    <div class="text-base col-span-2">Fő tér 10.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">27/594-340<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        H-P: 8:00-18:00<br />
                        Sz: 8:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="filterElements kiskereskedelem">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Egyéb kiskereskedelem
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Hesztia Lakásvarázs</div>
                    <div class="text-base col-span-2">Magyar utca 26.<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">0670/ 376 8895<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        H-P: 9:00-17:00<br />
                        Szo.-V: 9:00-13:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Karsán-Exkluzív Lakberendezési Üzlet</div>
                    <div class="col-span-2">Lakberendezés, szőnyegtisztítás, Olasz matracok. Ruha, bőr szőrmetisztítás,
                        ékszerjavítás és készítés.</div>
                    <div class="text-base col-span-2">Váci út 18.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">0620/482-0705<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">0630/854-0006<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">info@karsan.hu <br /><span class="text-green-400">Email</span></div>
                    <div class=""><a href="https://www.karsan.hu/">www.karsan.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Nemzeti Dohánybolt és Lottózó</div>
                    <div class="col-span-2">
                        Újság, üdítő, alkohol, cigaretta, Lottó
                    </div>
                    <div class="text-base col-span-2">Gesztenye sor 4.<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">0620/545-3790<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        H-P: 7:00-20:00<br />
                        Szo.: 7:00-18:30<br />
                        V: 8:00-14:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">BIOBOLT</div>
                    <div class="col-span-2">Reform élelmiszerek, öko tisztítószerek, vitaminok, gyógyteák, glutén
                        mentes készítmények.</div>
                    <div class="text-base col-span-2">Magyar utca 5.<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">27/354-570<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">0620/471-0737<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">vitalitas@biobolt.hu<br /><span class="text-green-400">Email</span></div>
                    <div class="col-span-2">
                        H-P: 8:00-12:00, 14:00-17:30<br />
                        Szo.: 8:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Horgászbolt</div>
                    <div class="col-span-2">Csillag László</div>
                    <div class="col-span-2">csillag@laszlo61@gmail.com<br /><span class="text-green-400">Email</span>
                    </div>
                    <div class="col-span-2">
                        H-P:8:00-17:00<br />
                        Szo.: 8:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Pesti és Lendvai Látszerész Bt.</div>
                    <div class="col-span-2">
                        Szemüveg készítés, javítás, optikai cikkek árusítása.
                    </div>
                    <div class="text-base col-span-2">Fő tér 16.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">27/355-654<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        K 14:00-17:00<br />
                        Sz 9:00-12:00, 14:00-17:00<br />
                        Cs 9:00-12:00<br />
                        P 14:00-17:00<br />
                        páros hét szombatján orvosi látásvizsgálat<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Gyógynövény és Drogéria</div>
                    <div class="col-span-2">
                        Gyógyhatású készítmények, gyógyteák, babaápolási termékek.
                    </div>
                    <div class="text-base col-span-2">Fő tér 18.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">30-576-71-50<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">nagymarosgyogynoveny@gmail.com<br /><span
                            class="text-green-400">Email</span></div>
                    <div class="col-span-2">
                        K-P 8:00-12:00, 14:00-17:00<br />
                        Sz 8:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Lorac Gazdabolt</div>
                    <div class="col-span-2">
                        Gazdabolt profiljába tartozó áruk mellett, Lottó árusítás.
                    </div>
                    <div class="text-base col-span-2">Váci út 32.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">27-355-309<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        H-P 8:00-17:00<br />
                        Sz 8:00-12:00<br />
                        V 8:00-12:00 szezonban<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Adi Papír-Írószer-Ajándék</div>
                    <div class="col-span-2">
                        Hollósi Gézáné
                    </div>
                    <div class="text-base col-span-2">Rákóczi út 5.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">27/354-019<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        H 7:30-12:00 ,14:00-16:00<br />
                        K-P 7:30-12:00, 14:00-17:00<br />
                        Sz 8:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="filterElements virag">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Virág - Ajándék
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">La Fleur by Nora Virágbolt</div>
                    <div class="text-base col-span-2">Dózsa György u. 1.<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">0620/385-0835<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        H-P: 9:00-17:00<br />
                        Szo.-V: 8:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Ildi Virág-Ajándék</div>
                    <div class="col-span-2">Palásti Ildikó</div>
                    <div class="text-base col-span-2">Váci út 31.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">30-984-11-18<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        H 12:00-17:00<br />
                        K-P 8:00-17:00<br />
                        Sz 8:00-13:00<br />
                        V 9:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="filterElements sport">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Sport – szabadidő
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">BTZ kajak kenu csónak kölcsönzés</div>
                    <div class="col-span-2">
                        Kajak-kenu-csónak kölcsönző a Dunakanyar szívében, Nagymaroson. Túrák szervezése a Duna, Ipoly
                        és Garam folyóra.
                    </div>
                    <div class=""><a href="https://btz.hu/">www.btz.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">aCélkecske Bringa és info Pont</div>
                    <div class="col-span-2">Kerékpár kölcsönző, bringabolt és szerviz, pihenő és frissítő pont</div>
                    <div class="text-base col-span-2">2626, Nagymaros Fő tér 1. (Erdészet alsó szintje)<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">+36303351380<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">gyorgysteh@gmail.com<br /><span class="text-green-400">Email</span></div>
                    <div class="col-span-2">
                        H-K ZÁRVA<br />
                        Sze.-V 10:00-18:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Napkereki Küküllő</div>
                    <div class="col-span-2">Kerékpár javítás, kiegészítők, alkatrészek árusítása.</div>
                    <div class="text-base col-span-2">Német u. 28.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">30-450-93-36<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">napkereki@windowslive.com<br /><span class="text-green-400">Email</span>
                    </div>
                    <div class="col-span-2">
                        H-K-Sz-P 10:00-18:00<br />
                        Cs zárva<br />
                        Sz 9:00-13:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Paduc Horgászbolt</div>
                    <div class="text-base col-span-2">Váci út 26.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">20-512-17-06<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        H-P 8:00-17:00<br />
                        Sz 8:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="filterElements ruhazat">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Ruházat, textil
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Angol Használt ruha</div>
                    <div class="col-span-2">
                        Használt női, férfi, gyermek ruha
                    </div>
                    <div class="text-base col-span-2">Dózsa György út 12.<br /><span class="text-green-400">Cím</span>
                    </div>
                    <div class="text-base">0620/511-8148<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        K-P: 9:00-12:00, 13:00-17:00<br />
                        Szo.: 9:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Lakás Textil</div>
                    <div class="col-span-2">Lakás textil, bútor, memóriamatracok, biomatracok, szőnyegtisztítás
                        ingyenes szállítással, paplanok, párnák.</div>
                    <div class="text-base col-span-2"> Váci út 18.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">0620/567-2700<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">
                        K-P: 9:00-17:00<br />
                        Szo.: 9:00-12:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="filterElements utazasi">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Utazási irodák
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="col-span-2 text-xl font-bold">Dunakanyar Utazási Iroda</div>
                    <div class="col-span-2">
                        Külföldi, belföldi nyaralások, körutazások, városlátogatások, síutak. Tengeri és folyami
                        hajóutak. Wellness ajánlatok, repülőjegy értékesítés, utasbiztosítás, Szép kártya elfogadóhely.
                    </div>
                    <div class="text-base col-span-2">Fő tér 7.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">27/354-430<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">info@dunakanyarutazas.hu<br /><span class="text-green-400">Email</span>
                    </div>
                    <div class=""><a
                            href="http://www.dunakanyarutazas.hu/">www.dunakanyarutazas.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                    <div class="col-span-2">
                        H-Cs: 9:00-17:00<br />
                        P: 9:00-16:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="filterElements ingatlan">
            <div class="grid grid-cols-2 gap-2">
                <h2 class="mt-6 mb-2 col-span-2 text-2xl">
                    Ingatlan
                </h2>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="text-xl font-bold">Dunakanyar Kincse Ingatlaniroda</div>
                    <div>
                        <img class="mx-auto max-h-24"
                            src="{{ asset('images/varosunk/Dunakanyar-kincse-ingatlan.jpeg') }}"
                            alt="Dunakanyar Kincse Ingatlaniroda">
                    </div>
                    <div class="col-span-2">
                        Ingatlanközvetítés – Értékbecslés / Családi ház, Nyaraló, Termőföld, Műemlék/ – Ingatlankezelés
                    </div>
                    <div class="col-span-2">
                        Grécs Gábor
                    </div>
                    <div class="text-base col-span-2">2626.Nagymaros, Tégla u. 17.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">+3630/953-2008<br /><span class="text-green-400">Telefon</span></div>
                    <div class="text-base">+3630/241-7215<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">grecsgabor@gmail.com<br /><span class="text-green-400">Email</span></div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="text-xl font-bold">ILDIKÓ Ingatlan Iroda</div>
                    <div class="col-span-2">
                        Ingatlaneladás, értékbecslés, épületenergetika tanúsítvány készítés.
                    </div>
                    <div class="col-span-2">
                        Haraminé Papp Ildikó irodavezető
                    </div>
                    <div class="text-base col-span-2">Nagymaros Váci út 111.<br /><span
                            class="text-green-400">Cím</span></div>
                    <div class="text-base">0620/46-43-429<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">ildiingatlan@invitel.hu<br /><span class="text-green-400">Email</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 bg-slate-900 text-white p-4 rounded-xl">
                    <div class="text-xl font-bold">G-Inveszt Bt.</div>
                    <div class="col-span-2">
                        Értékbecslés, ingatlan közvetítés.
                    </div>
                    <div class="col-span-2">
                        Grécs László
                    </div>
                    <div class="text-base col-span-2">Tégla u. 19.<br /><span class="text-green-400">Cím</span></div>
                    <div class="text-base">30-334-25-99<br /><span class="text-green-400">Telefon</span></div>
                    <div class="col-span-2">g-inveszt@t-online.hu<br /><span class="text-green-400">Email</span></div>
                    <div class=""><a
                            href="https://g-inveszt.ingatlantajolo.hu/">g-inveszt.ingatlantajolo.hu</a><br /><span
                            class="text-green-400">Honlap</span></div>
                    <div class="col-span-2">
                        H-P 9:00-17:00<br />
                        Sz 9:00-13:00<br />
                        <span class="text-green-400">Nyitva tartás</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        filterSelection("all");

        function filterSelection(c) {
            var x, i;
            x = document.querySelectorAll(".filterElements");
            if (c == "all") c = "";
            Array.from(x).forEach(item => {
                removeActiveClass(item, "show");
                if (item.className.indexOf(c) > -1) addActiveClass(item, "show");
            });
        }

        function addActiveClass(ele, name) {
            var i, arr1, arr2;
            arr1 = ele.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    ele.className += " " + arr2[i];
                }
            }
        }

        function removeActiveClass(ele, name) {
            var i, arr1, arr2;
            arr1 = ele.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            ele.className = arr1.join(" ");
        }
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
</x-varosunk>
