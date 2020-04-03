<?php

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
// Route::get('/', function () {
//     return view('');})->name('');

Route::get('/', function () {
    return view('trang chu');})->name('trang chu');

Route::get('/lien-he', function () {
    return view('lien he');})->name('lien he');

Route::get('/ve-chung-toi', function () {
    return view('ve chung toi');})->name('ve chung toi');

Route::get('/blog', function () {
    return view('blog');})->name('blog');

Route::get('/dich-vu', function () {
    return view('dich vu');})->name('dich-vu');

Route::get('/gioi-thieu', function () {
    return view('gioi thieu');})->name('gioi-thieu');

Route::get('/blog-chi-tiet', function () {
    return view('blog chi tiet');})->name('blog-chi-tiet');

Route::get('/du-an', function () {
    return view('du an');})->name('du-an');

Route::get('/chi-tiet-du-an', function () {
    return view('chi tiet du an');})->name('chi-tiet-du-an');

Route::get('/y-kien-khach-hang', function () {
    return view('y kien khach hang');})->name('y-kien-khach-hang');

Route::get('/dat-cau-hoi', function () {
    return view('dat cau hoi');})->name('dat-cau-hoi');

Route::get('/thu-vien', function () {
    return view('thu vien');})->name('thu-vien');

Route::get('/van-chuyen-thanh-toan', function () {
    return view('thanh toan');})->name('thanh toan');