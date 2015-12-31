<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', '/admin', ['icon' => 'clip-home-3']);
});
Breadcrumbs::register('homeguru', function($breadcrumbs) {
    $breadcrumbs->push('Home', '/guru', ['icon' => 'clip-home-3']);
});
Breadcrumbs::register('gurupegawaiedit', function($breadcrumbs) {
    $breadcrumbs->parent('homeguru');
    $breadcrumbs->push('Edit Pegawai', route('guru.pegawai.edit'), ['icon' => '']);
});
Breadcrumbs::register('datastatis', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Data Statis', route('admin.datastatis.index'), ['icon' => '']);
});
Breadcrumbs::register('datastatiscreate', function($breadcrumbs) {
    $breadcrumbs->parent('datastatis');
    $breadcrumbs->push('Tambah Data', route('admin.datastatis.create'), ['icon' => '']);
});
Breadcrumbs::register('datastatisedit', function($breadcrumbs) {
    $breadcrumbs->parent('datastatis');
    $breadcrumbs->push('Edit Data', route('admin.datastatis.edit'), ['icon' => '']);
});

Breadcrumbs::register('lembaga', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('lembaga', route('admin.dashboard.lembaga'), ['icon' => '']);
});
Breadcrumbs::register('jurusan', function($breadcrumbs) {
    $breadcrumbs->parent('lembaga');
    $breadcrumbs->push('jurusan', route('admin.jurusan.index'), ['icon' => '']);
});
Breadcrumbs::register('jurusancreate', function($breadcrumbs) {
    $breadcrumbs->parent('jurusan');
    $breadcrumbs->push('Tambah jurusan', route('admin.jurusan.create'), ['icon' => '']);
});
Breadcrumbs::register('jurusanedit', function($breadcrumbs) {
    $breadcrumbs->parent('jurusan');
    $breadcrumbs->push('Edit jurusan', route('admin.jurusan.edit'), ['icon' => '']);
});
Breadcrumbs::register('mahasiswa', function($breadcrumbs, $id) {
    $breadcrumbs->parent('jurusan');
    $breadcrumbs->push('mahasiswa', route('admin.jurusan.{id}.mahasiswa.index',$id), ['icon' => '']);
});
Breadcrumbs::register('ukuranjas', function($breadcrumbs) {
    $breadcrumbs->parent('lembaga');
    $breadcrumbs->push('ukuranjas', route('admin.ukuranjas.index'), ['icon' => '']);
});
Breadcrumbs::register('ukuranjascreate', function($breadcrumbs) {
    $breadcrumbs->parent('ukuranjas');
    $breadcrumbs->push('Tambah ukuranjas', route('admin.ukuranjas.create'), ['icon' => '']);
});
Breadcrumbs::register('ukuranjasedit', function($breadcrumbs) {
    $breadcrumbs->parent('ukuranjas');
    $breadcrumbs->push('Edit ukuranjas', route('admin.ukuranjas.edit'), ['icon' => '']);
});
Breadcrumbs::register('mahasiswa', function($breadcrumbs, $id) {
    $breadcrumbs->parent('ukuranjas');
    $breadcrumbs->push('mahasiswa', route('admin.ukuranjas.{id}.mahasiswa.index',$id), ['icon' => '']);
});

Breadcrumbs::register('mahasiswacreate', function($breadcrumbs, $id) {
    $breadcrumbs->parent('mahasiswa',$id);
    $breadcrumbs->push('Tambah Data', url('admin.jurusan.{id}.mahasiswa.create', $id), ['icon' => '']);
});
Breadcrumbs::register('mahasiswaedit', function($breadcrumbs,$id) {
    $breadcrumbs->parent('mahasiswa',$id);
    $breadcrumbs->push('Edit Data mahasiswa', route('admin.jurusan.{id}.mahasiswa.edit', $id), ['icon' => '']);
});
Breadcrumbs::register('pegawai', function($breadcrumbs) {
    $breadcrumbs->parent('lembaga');
    $breadcrumbs->push('Data Pegawai', route('admin.pegawai.index'), ['icon' => '']);
});
Breadcrumbs::register('pegawaicreate', function($breadcrumbs) {
    $breadcrumbs->parent('pegawai');
    $breadcrumbs->push('Tambah Pegawai', route('admin.pegawai.create'), ['icon' => '']);
});
Breadcrumbs::register('pegawaiedit', function($breadcrumbs) {
    $breadcrumbs->parent('pegawai');
    $breadcrumbs->push('Edit Pegawai', route('admin.pegawai.edit'), ['icon' => '']);
});