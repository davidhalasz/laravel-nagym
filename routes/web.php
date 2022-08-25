<?php
use App\Http\Controllers\HirekController;
use App\Http\Controllers\RendeletController;
use App\Http\Controllers\HatarozatokController;
use App\Http\Controllers\MeghivokController;
use App\Http\Controllers\EloterjesztesController;
use App\Http\Controllers\JegyzokonyvController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('turizmus')->group(function () {
    Route::get('/latnivalok', function () {
        return view('turizmus/latnivalok');
    })->name('latnivalok');

    Route::get('/szallashelyek', function () {
        return view('turizmus/szallashelyek');
    })->name('szallashelyek');

    Route::get('/vendeglatas', function () {
        return view('turizmus/vendeglatas');
    })->name('vendeglatas');

    Route::get('/sport-szabadido', function () {
        return view('turizmus/szabadido');
    })->name('szabadido');

    Route::get('/programlehetosegek', function () {
        return view('turizmus/programlehetosegek');
    })->name('programlehetosegek');

    Route::get('/muveszet', function () {
        return view('turizmus/muveszet');
    })->name('muveszet');
});

Route::prefix('varosunk')->group(function () {
    Route::get('/koszonto', function () {
        return view('varosunk/koszonto');
    })->name('koszonto');
    Route::get('/tortenelem', function () {
        return view('varosunk/tortenelem');
    })->name('tortenelem');
    Route::get('/cimer', function () {
        return view('varosunk/cimer');
    })->name('cimer');
    Route::get('/testvervarosok', function () {
        return view('varosunk/testvervarosok');
    })->name('testvervarosok');
    Route::get('/kituntetettek', function () {
        return view('varosunk/kituntetettek');
    })->name('kituntetettek');
    Route::get('/civil-szervezetek', function () {
        return view('varosunk/civil-szervezetek');
    })->name('civil-szervezetek');
    Route::get('/katolikus', function () {
        return view('varosunk/katolikus');
    })->name('katolikus');
    Route::get('/reformatus', function () {
        return view('varosunk/reformatus');
    })->name('reformatus');
    Route::get('/cegjegyzek', function () {
        return view('varosunk/cegjegyzek');
    })->name('cegjegyzek');
});

Route::prefix('szolgaltatasok')->group(function () {
    Route::get('/egeszsegugy', function () {
        return view('szolgaltatasok/orvos');
    })->name('egeszsegugy');
    Route::get('/posta', function () {
        return view('szolgaltatasok/posta');
    })->name('posta');
    Route::get('/rendorseg', function () {
        return view('szolgaltatasok/rendorseg');
    })->name('rendorseg');
    Route::get('/ovoda', function () {
        return view('szolgaltatasok/ovoda');
    })->name('ovoda');
    Route::get('/iskola', function () {
        return view('szolgaltatasok/iskola');
    })->name('iskola');
    Route::get('/bolcsode', function () {
        return view('szolgaltatasok/bolcsode');
    })->name('bolcsode');
    Route::get('/allatorvos', function () {
        return view('szolgaltatasok/allatorvos');
    })->name('allatorvos');
    Route::get('/gondozasi-kozpont', function () {
        return view('szolgaltatasok/gondozasi-kozpont');
    })->name('gondozasi-kozpont');
    Route::get('/konyvtar', function () {
        return view('szolgaltatasok/konyvtar');
    })->name('konyvtar');
    Route::get('/kommunalis-szolgaltatasok', function () {
        return view('szolgaltatasok/kommunalis-szolgaltatasok');
    })->name('kommunalis-szolgaltatasok');
    Route::get('/szobi-jarasi-hivatal', function () {
        return view('szolgaltatasok/szobi-jarasi-hivatal');
    })->name('szobi-jarasi-hivatal');
    Route::get('/matyas-etkezde', function () {
        return view('szolgaltatasok/matyas-etkezde');
    })->name('matyas-etkezde');
    Route::get('/pest-megyei-pedagogiai-szakszolgalat', function () {
        return view('szolgaltatasok/pedagogiai-szakszolgalat');
    })->name('pedagogiai-szakszolgalat');
});

Route::prefix('onkormanyzat')->group(function () {
    Route::get('/ugyfelfogadas', function () {
        return view('/onkormanyzat/ugyfelfogadas');
    })->name('ugyfelfogadas');
    Route::get('/polgarmesteri-hivatal', function () {
        return view('/onkormanyzat/polgarmesteri-hivatal');
    })->name('polgarmesteri-hivatal');
    Route::get('/szervezeti-felepites', function () {
        return view('/onkormanyzat/szervezeti-felepites');
    })->name('szervezeti-felepites');
    Route::get('/dokumentumtar', function () {
        return view('/onkormanyzat/dokumentumtar');
    })->name('dokumentumtar');
    Route::get('/hatosagi-csoport-dokumentumai', function () {
        return view('/onkormanyzat/hatosagi-csoport-dokumentumai');
    })->name('hatosagi-csoport-dokumentumai');
    Route::get('/helyi-adok', function () {
        return view('/onkormanyzat/helyi-adok');
    })->name('helyi-adok');
    Route::get('/nagymaros-varos-oenkormanyzat-polgarmesteri-hivatalanak-minsegpolitikaja', function () {
        return view('/onkormanyzat/minosegpolitika');
    })->name('minosegpolitika');
    Route::get('/elektronikus-ugyintezes', function () {
        return view('/onkormanyzat/elektronikus-ugyintezes');
    })->name('elektronikus-ugyintezes');
    Route::get('/kepviselo-testulet-tagjai', function () {
        return view('/onkormanyzat/kepviselo-testulet-tagjai');
    })->name('kepviselo-testulet-tagjai');
    Route::get('/kepviselo-testulet-bizottsagai', function () {
        return view('/onkormanyzat/kepviselo-testulet-bizottsagai');
    })->name('kepviselo-testulet-bizottsagai');
    Route::get('/hatarozatok',  [HatarozatokController::class, 'index'])->name('hatarozatok');
    Route::get('/rendeletek',  [RendeletController::class, 'index'])->name('rendeletek');
    Route::get('/meghivok-eloterjesztesek-jegyzokonyvek', function () {
        return view('/onkormanyzat/meghivok-eloterjesztesek-jegyzokonyvek');
    })->name('meghivok-eloterjesztesek-jegyzokonyvek');
    Route::get('/onkormanyzat/meghivok-eloterjesztesek-jegyzokonyvek/rendeletek',  [MeghivokController::class, 'index'])->name('onkormanyzat-meghivok');
    Route::get('/onkormanyzat/meghivok-eloterjesztesek-jegyzokonyvek/eloterjesztesek',  [EloterjesztesController::class, 'index'])->name('onkormanyzat-eloterjesztesek');
    Route::get('/onkormanyzat/meghivok-eloterjesztesek-jegyzokonyvek/jegyzokonyvek',  [JegyzokonyvController::class, 'index'])->name('onkormanyzat-jegyzokonyvek');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin/news', function () {
        return view('vendor/jetstream/hirek-form');
    })->name('hirek-form');
    Route::get('/admin/rendeletek', function () {
        return view('vendor/jetstream/rendeletek');
    })->name('rendeletek');
    Route::get('/admin/hatarozatok', function () {
        return view('vendor/jetstream/hatarozatok');
    })->name('hatarozatok');
    Route::get('/admin/osszes-hatarozat', function () {
        return view('vendor/jetstream/osszes-hatarozat');
    })->name('osszes-hatarozat');
    Route::get('/admin/eloterjesztes-hozzaadas', function () {
        return view('vendor/jetstream/eloterjesztes-hozzaadas');
    })->name('eloterjesztes-hozzaadas');
    Route::get('/admin/osszes-eloterjesztes', function () {
        return view('vendor/jetstream/osszes-eloterjesztes');
    })->name('osszes-eloterjesztes');
    Route::get('/admin/meghivok', function () {
        return view('vendor/jetstream/meghivok');
    })->name('meghivok');
    Route::get('/admin/jegyzokonyvek', function () {
        return view('vendor/jetstream/jegyzokonyvek');
    })->name('jegyzokonyvek');
});
