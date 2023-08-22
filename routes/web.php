<?php

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
  $link1 = 'https://wa.me/';
  $link2 = '?text=Kepada%20Yth.%20Bapak%2FIbu%2FSaudara%2Fi%20%0D%0A';
  $link3 = '%0D%0A%0D%0AAssalamu%27alaikum%20Wr.%20Wb.%0D%0ABismillahirahmanirrahim.%0D%0ATanpa%20mengurangi%20rasa%20hormat%2C%20perkenankan%20kami%20mengundang%20Bapak%2FIbu%2FSaudara%2Fi%2C%20teman%20sekaligus%20sahabat%2C%20untuk%20menghadiri%20acara%20pernikahan%20kami%3A%0D%0A%0D%0ALilis%20%26%20David%0D%0A%0D%0ABerikut%20link%20untuk%20info%20lengkap%20dari%20acara%20kami%20%3A%0D%0A';
  $link4 = '%0D%0A%0D%0AMerupakan%20suatu%20kebahagiaan%20bagi%20kami%20apabila%20Bapak%2FIbu%2FSaudara%2Fi%20berkenan%20untuk%20hadir%20dan%20memberikan%20doa%20restu.%0D%0A%0D%0AWassalamu%27alaikum%20Wr.%20Wb.%0D%0A%0D%0ATerima%20Kasih..%0D%0A%0D%0AHormat%20kami%2C%0DLilis%20%26%20David%0D%0A%0D%0A*Jika%20Link%20Tidak%20dapat%20disentuk%2C%20silahkan%20copy%20dan%20paste%20di%20browser%20anda';
  $nama = request()->nama;
  $own = request()->own ?? 0;
  $link = "https://nilamufti.vercel.app/?own=$own&to=";
  $nomor = request()->nomor;
  $namaonUrl = str_replace('%', '%25', rawurlencode($nama));

  $url = $link1 . $nomor . $link2 . $nama . $link3 . $link . $namaonUrl . $link4;
  return redirect()->away($url);
});
