<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\doc_normativo\categoria;
use App\Http\Controllers\Admin\doc_gestion\documentos;
use App\Http\Controllers\Admin\doc_normativo\index;
use App\Http\Controllers\Admin\slider\sliderAdmin;
use App\Http\Controllers\Admin\video\videoAdmin;
use App\Http\Controllers\Admin\publicaciones\tagaAdmin;
use App\Http\Controllers\Admin\publicaciones\categoriaAdmin;
use App\Http\Controllers\Admin\publicaciones\publicacionesAdmin;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

Route::get('', [HomeController::class , 'index'])->middleware('can:Ver dashboard-Home')->name('admin.home');

Route::resource('documentos-normativos/categorias',categoria::class)->names('admin.documentos-normativos');

Route::resource('documentos-normativos',index::class)->except('show')->names('admin.documentos-normativos.listado');

Route::resource('documentos-gestion',documentos::class)->except('show')->names('admin.documentos-gestion');


Route::resource('slider',sliderAdmin::class)->except('show')->names('admin.slider');
Route::resource('videos',videoAdmin::class)->except('show')->names('admin.video');
Route::resource('publicaciones/categoria',categoriaAdmin::class)->except('show')->names('admin.publicaciones.categoria');
Route::resource('publicaciones/etiquetas',tagaAdmin::class)->except('show')->names('admin.publicaciones.etiqueta');

Route::resource('publicaciones',publicacionesAdmin::class)->except('show')->names('admin.publicaciones.inicio');

Route::resource('users',UserController::class)->except('show')->names('admin.users');

Route::resource('roles',RoleController::class)->except('show')->names('admin.roles');

