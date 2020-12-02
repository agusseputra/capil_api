<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-17 08:38:29 --> Query error: Table 'simrsdb_2019.ref_jurusan' doesn't exist - Invalid query: SELECT *
FROM `ref_jurusan`
ERROR - 2019-11-17 08:39:48 --> Query error: Table 'simrsdb_2019.ref_jurusan' doesn't exist - Invalid query: SELECT *
FROM `ref_jurusan`
ERROR - 2019-11-17 08:39:49 --> Query error: Table 'simrsdb_2019.ref_jurusan' doesn't exist - Invalid query: SELECT *
FROM `ref_jurusan`
ERROR - 2019-11-17 08:39:49 --> Query error: Table 'simrsdb_2019.ref_jurusan' doesn't exist - Invalid query: SELECT *
FROM `ref_jurusan`
ERROR - 2019-11-17 08:39:49 --> Query error: Table 'simrsdb_2019.ref_jurusan' doesn't exist - Invalid query: SELECT *
FROM `ref_jurusan`
ERROR - 2019-11-17 08:39:50 --> Query error: Table 'simrsdb_2019.ref_jurusan' doesn't exist - Invalid query: SELECT *
FROM `ref_jurusan`
ERROR - 2019-11-17 08:39:50 --> Query error: Table 'simrsdb_2019.ref_jurusan' doesn't exist - Invalid query: SELECT *
FROM `ref_jurusan`
ERROR - 2019-11-17 08:40:13 --> Query error: Table 'simrsdb_2019.ref_jurusan' doesn't exist - Invalid query: SELECT *
FROM `ref_jurusan`
ERROR - 2019-11-17 08:40:14 --> Query error: Table 'simrsdb_2019.ref_jurusan' doesn't exist - Invalid query: SELECT *
FROM `ref_jurusan`
ERROR - 2019-11-17 08:40:15 --> Query error: Table 'simrsdb_2019.ref_jurusan' doesn't exist - Invalid query: SELECT *
FROM `ref_jurusan`
ERROR - 2019-11-17 08:42:16 --> Query error: Table 'simrsdb_2019.data_mahasiswa' doesn't exist - Invalid query: SELECT `data_dosen`.`nama` as `nama_dosen`, `ref_kecamatan`.`kecamatan`, `ref_kabupaten`.`kabupaten`, `ref_provinsi`.`provinsi`, `ref_jurusan`.`id_fakultas`, `ref_jurusan`.`nama_jurusan`, `data_mahasiswa`.*, `ref_agama`.`agama`, `ref_sekolah`.`nama_sekolah`
FROM (select * from data_mahasiswa where nim='loginsss' or permalink='loginsss' limit 1) as data_mahasiswa
JOIN `ref_jurusan` ON `ref_jurusan`.`id_jurusan`=`data_mahasiswa`.`id_jurusan`
LEFT JOIN `ref_agama` ON `ref_agama`.`id_agama`=`data_mahasiswa`.`id_agama`
LEFT JOIN `data_dosen` ON `data_dosen`.`id_dosen`=`data_mahasiswa`.`id_pa`
LEFT JOIN `ref_kecamatan` ON `ref_kecamatan`.`kode_kecamatan`=`data_mahasiswa`.`kode_kecamatan`
LEFT JOIN `ref_kabupaten` ON `ref_kabupaten`.`kode_kabupaten`=`ref_kecamatan`.`kode_kabupaten`
LEFT JOIN `ref_provinsi` ON `ref_provinsi`.`kode_provinsi`=`ref_kabupaten`.`kode_provinsi`
LEFT JOIN `ref_sekolah` ON `ref_sekolah`.`npsn`=`data_mahasiswa`.`npsn_sekolah`
ERROR - 2019-11-17 08:44:01 --> Query error: Table 'simrsdb_2019.data_mahasiswa' doesn't exist - Invalid query: SELECT `data_dosen`.`nama` as `nama_dosen`, `ref_kecamatan`.`kecamatan`, `ref_kabupaten`.`kabupaten`, `ref_provinsi`.`provinsi`, `ref_jurusan`.`id_fakultas`, `ref_jurusan`.`nama_jurusan`, `data_mahasiswa`.*, `ref_agama`.`agama`, `ref_sekolah`.`nama_sekolah`
FROM (select * from data_mahasiswa where nim='home' or permalink='home' limit 1) as data_mahasiswa
JOIN `ref_jurusan` ON `ref_jurusan`.`id_jurusan`=`data_mahasiswa`.`id_jurusan`
LEFT JOIN `ref_agama` ON `ref_agama`.`id_agama`=`data_mahasiswa`.`id_agama`
LEFT JOIN `data_dosen` ON `data_dosen`.`id_dosen`=`data_mahasiswa`.`id_pa`
LEFT JOIN `ref_kecamatan` ON `ref_kecamatan`.`kode_kecamatan`=`data_mahasiswa`.`kode_kecamatan`
LEFT JOIN `ref_kabupaten` ON `ref_kabupaten`.`kode_kabupaten`=`ref_kecamatan`.`kode_kabupaten`
LEFT JOIN `ref_provinsi` ON `ref_provinsi`.`kode_provinsi`=`ref_kabupaten`.`kode_provinsi`
LEFT JOIN `ref_sekolah` ON `ref_sekolah`.`npsn`=`data_mahasiswa`.`npsn_sekolah`
ERROR - 2019-11-17 08:44:04 --> Query error: Table 'simrsdb_2019.data_mahasiswa' doesn't exist - Invalid query: SELECT `data_dosen`.`nama` as `nama_dosen`, `ref_kecamatan`.`kecamatan`, `ref_kabupaten`.`kabupaten`, `ref_provinsi`.`provinsi`, `ref_jurusan`.`id_fakultas`, `ref_jurusan`.`nama_jurusan`, `data_mahasiswa`.*, `ref_agama`.`agama`, `ref_sekolah`.`nama_sekolah`
FROM (select * from data_mahasiswa where nim='home' or permalink='home' limit 1) as data_mahasiswa
JOIN `ref_jurusan` ON `ref_jurusan`.`id_jurusan`=`data_mahasiswa`.`id_jurusan`
LEFT JOIN `ref_agama` ON `ref_agama`.`id_agama`=`data_mahasiswa`.`id_agama`
LEFT JOIN `data_dosen` ON `data_dosen`.`id_dosen`=`data_mahasiswa`.`id_pa`
LEFT JOIN `ref_kecamatan` ON `ref_kecamatan`.`kode_kecamatan`=`data_mahasiswa`.`kode_kecamatan`
LEFT JOIN `ref_kabupaten` ON `ref_kabupaten`.`kode_kabupaten`=`ref_kecamatan`.`kode_kabupaten`
LEFT JOIN `ref_provinsi` ON `ref_provinsi`.`kode_provinsi`=`ref_kabupaten`.`kode_provinsi`
LEFT JOIN `ref_sekolah` ON `ref_sekolah`.`npsn`=`data_mahasiswa`.`npsn_sekolah`
ERROR - 2019-11-17 08:44:19 --> Query error: Table 'simrsdb_2019.data_mahasiswa' doesn't exist - Invalid query: SELECT `data_dosen`.`nama` as `nama_dosen`, `ref_kecamatan`.`kecamatan`, `ref_kabupaten`.`kabupaten`, `ref_provinsi`.`provinsi`, `ref_jurusan`.`id_fakultas`, `ref_jurusan`.`nama_jurusan`, `data_mahasiswa`.*, `ref_agama`.`agama`, `ref_sekolah`.`nama_sekolah`
FROM (select * from data_mahasiswa where nim='home' or permalink='home' limit 1) as data_mahasiswa
JOIN `ref_jurusan` ON `ref_jurusan`.`id_jurusan`=`data_mahasiswa`.`id_jurusan`
LEFT JOIN `ref_agama` ON `ref_agama`.`id_agama`=`data_mahasiswa`.`id_agama`
LEFT JOIN `data_dosen` ON `data_dosen`.`id_dosen`=`data_mahasiswa`.`id_pa`
LEFT JOIN `ref_kecamatan` ON `ref_kecamatan`.`kode_kecamatan`=`data_mahasiswa`.`kode_kecamatan`
LEFT JOIN `ref_kabupaten` ON `ref_kabupaten`.`kode_kabupaten`=`ref_kecamatan`.`kode_kabupaten`
LEFT JOIN `ref_provinsi` ON `ref_provinsi`.`kode_provinsi`=`ref_kabupaten`.`kode_provinsi`
LEFT JOIN `ref_sekolah` ON `ref_sekolah`.`npsn`=`data_mahasiswa`.`npsn_sekolah`
ERROR - 2019-11-17 08:44:22 --> Query error: Table 'simrsdb_2019.data_mahasiswa' doesn't exist - Invalid query: SELECT `data_dosen`.`nama` as `nama_dosen`, `ref_kecamatan`.`kecamatan`, `ref_kabupaten`.`kabupaten`, `ref_provinsi`.`provinsi`, `ref_jurusan`.`id_fakultas`, `ref_jurusan`.`nama_jurusan`, `data_mahasiswa`.*, `ref_agama`.`agama`, `ref_sekolah`.`nama_sekolah`
FROM (select * from data_mahasiswa where nim='home' or permalink='home' limit 1) as data_mahasiswa
JOIN `ref_jurusan` ON `ref_jurusan`.`id_jurusan`=`data_mahasiswa`.`id_jurusan`
LEFT JOIN `ref_agama` ON `ref_agama`.`id_agama`=`data_mahasiswa`.`id_agama`
LEFT JOIN `data_dosen` ON `data_dosen`.`id_dosen`=`data_mahasiswa`.`id_pa`
LEFT JOIN `ref_kecamatan` ON `ref_kecamatan`.`kode_kecamatan`=`data_mahasiswa`.`kode_kecamatan`
LEFT JOIN `ref_kabupaten` ON `ref_kabupaten`.`kode_kabupaten`=`ref_kecamatan`.`kode_kabupaten`
LEFT JOIN `ref_provinsi` ON `ref_provinsi`.`kode_provinsi`=`ref_kabupaten`.`kode_provinsi`
LEFT JOIN `ref_sekolah` ON `ref_sekolah`.`npsn`=`data_mahasiswa`.`npsn_sekolah`
ERROR - 2019-11-17 08:44:23 --> Query error: Table 'simrsdb_2019.data_mahasiswa' doesn't exist - Invalid query: SELECT `data_dosen`.`nama` as `nama_dosen`, `ref_kecamatan`.`kecamatan`, `ref_kabupaten`.`kabupaten`, `ref_provinsi`.`provinsi`, `ref_jurusan`.`id_fakultas`, `ref_jurusan`.`nama_jurusan`, `data_mahasiswa`.*, `ref_agama`.`agama`, `ref_sekolah`.`nama_sekolah`
FROM (select * from data_mahasiswa where nim='home' or permalink='home' limit 1) as data_mahasiswa
JOIN `ref_jurusan` ON `ref_jurusan`.`id_jurusan`=`data_mahasiswa`.`id_jurusan`
LEFT JOIN `ref_agama` ON `ref_agama`.`id_agama`=`data_mahasiswa`.`id_agama`
LEFT JOIN `data_dosen` ON `data_dosen`.`id_dosen`=`data_mahasiswa`.`id_pa`
LEFT JOIN `ref_kecamatan` ON `ref_kecamatan`.`kode_kecamatan`=`data_mahasiswa`.`kode_kecamatan`
LEFT JOIN `ref_kabupaten` ON `ref_kabupaten`.`kode_kabupaten`=`ref_kecamatan`.`kode_kabupaten`
LEFT JOIN `ref_provinsi` ON `ref_provinsi`.`kode_provinsi`=`ref_kabupaten`.`kode_provinsi`
LEFT JOIN `ref_sekolah` ON `ref_sekolah`.`npsn`=`data_mahasiswa`.`npsn_sekolah`
ERROR - 2019-11-17 08:44:23 --> Query error: Table 'simrsdb_2019.data_mahasiswa' doesn't exist - Invalid query: SELECT `data_dosen`.`nama` as `nama_dosen`, `ref_kecamatan`.`kecamatan`, `ref_kabupaten`.`kabupaten`, `ref_provinsi`.`provinsi`, `ref_jurusan`.`id_fakultas`, `ref_jurusan`.`nama_jurusan`, `data_mahasiswa`.*, `ref_agama`.`agama`, `ref_sekolah`.`nama_sekolah`
FROM (select * from data_mahasiswa where nim='home' or permalink='home' limit 1) as data_mahasiswa
JOIN `ref_jurusan` ON `ref_jurusan`.`id_jurusan`=`data_mahasiswa`.`id_jurusan`
LEFT JOIN `ref_agama` ON `ref_agama`.`id_agama`=`data_mahasiswa`.`id_agama`
LEFT JOIN `data_dosen` ON `data_dosen`.`id_dosen`=`data_mahasiswa`.`id_pa`
LEFT JOIN `ref_kecamatan` ON `ref_kecamatan`.`kode_kecamatan`=`data_mahasiswa`.`kode_kecamatan`
LEFT JOIN `ref_kabupaten` ON `ref_kabupaten`.`kode_kabupaten`=`ref_kecamatan`.`kode_kabupaten`
LEFT JOIN `ref_provinsi` ON `ref_provinsi`.`kode_provinsi`=`ref_kabupaten`.`kode_provinsi`
LEFT JOIN `ref_sekolah` ON `ref_sekolah`.`npsn`=`data_mahasiswa`.`npsn_sekolah`
ERROR - 2019-11-17 08:44:24 --> Query error: Table 'simrsdb_2019.data_mahasiswa' doesn't exist - Invalid query: SELECT `data_dosen`.`nama` as `nama_dosen`, `ref_kecamatan`.`kecamatan`, `ref_kabupaten`.`kabupaten`, `ref_provinsi`.`provinsi`, `ref_jurusan`.`id_fakultas`, `ref_jurusan`.`nama_jurusan`, `data_mahasiswa`.*, `ref_agama`.`agama`, `ref_sekolah`.`nama_sekolah`
FROM (select * from data_mahasiswa where nim='home' or permalink='home' limit 1) as data_mahasiswa
JOIN `ref_jurusan` ON `ref_jurusan`.`id_jurusan`=`data_mahasiswa`.`id_jurusan`
LEFT JOIN `ref_agama` ON `ref_agama`.`id_agama`=`data_mahasiswa`.`id_agama`
LEFT JOIN `data_dosen` ON `data_dosen`.`id_dosen`=`data_mahasiswa`.`id_pa`
LEFT JOIN `ref_kecamatan` ON `ref_kecamatan`.`kode_kecamatan`=`data_mahasiswa`.`kode_kecamatan`
LEFT JOIN `ref_kabupaten` ON `ref_kabupaten`.`kode_kabupaten`=`ref_kecamatan`.`kode_kabupaten`
LEFT JOIN `ref_provinsi` ON `ref_provinsi`.`kode_provinsi`=`ref_kabupaten`.`kode_provinsi`
LEFT JOIN `ref_sekolah` ON `ref_sekolah`.`npsn`=`data_mahasiswa`.`npsn_sekolah`
ERROR - 2019-11-17 08:46:05 --> Query error: Table 'simrsdb_2019.data_mahasiswa' doesn't exist - Invalid query: SELECT `data_dosen`.`nama` as `nama_dosen`, `ref_kecamatan`.`kecamatan`, `ref_kabupaten`.`kabupaten`, `ref_provinsi`.`provinsi`, `ref_jurusan`.`id_fakultas`, `ref_jurusan`.`nama_jurusan`, `data_mahasiswa`.*, `ref_agama`.`agama`, `ref_sekolah`.`nama_sekolah`
FROM (select * from data_mahasiswa where nim='home' or permalink='home' limit 1) as data_mahasiswa
JOIN `ref_jurusan` ON `ref_jurusan`.`id_jurusan`=`data_mahasiswa`.`id_jurusan`
LEFT JOIN `ref_agama` ON `ref_agama`.`id_agama`=`data_mahasiswa`.`id_agama`
LEFT JOIN `data_dosen` ON `data_dosen`.`id_dosen`=`data_mahasiswa`.`id_pa`
LEFT JOIN `ref_kecamatan` ON `ref_kecamatan`.`kode_kecamatan`=`data_mahasiswa`.`kode_kecamatan`
LEFT JOIN `ref_kabupaten` ON `ref_kabupaten`.`kode_kabupaten`=`ref_kecamatan`.`kode_kabupaten`
LEFT JOIN `ref_provinsi` ON `ref_provinsi`.`kode_provinsi`=`ref_kabupaten`.`kode_provinsi`
LEFT JOIN `ref_sekolah` ON `ref_sekolah`.`npsn`=`data_mahasiswa`.`npsn_sekolah`
ERROR - 2019-11-17 08:46:05 --> Query error: Table 'simrsdb_2019.data_mahasiswa' doesn't exist - Invalid query: SELECT `data_dosen`.`nama` as `nama_dosen`, `ref_kecamatan`.`kecamatan`, `ref_kabupaten`.`kabupaten`, `ref_provinsi`.`provinsi`, `ref_jurusan`.`id_fakultas`, `ref_jurusan`.`nama_jurusan`, `data_mahasiswa`.*, `ref_agama`.`agama`, `ref_sekolah`.`nama_sekolah`
FROM (select * from data_mahasiswa where nim='home' or permalink='home' limit 1) as data_mahasiswa
JOIN `ref_jurusan` ON `ref_jurusan`.`id_jurusan`=`data_mahasiswa`.`id_jurusan`
LEFT JOIN `ref_agama` ON `ref_agama`.`id_agama`=`data_mahasiswa`.`id_agama`
LEFT JOIN `data_dosen` ON `data_dosen`.`id_dosen`=`data_mahasiswa`.`id_pa`
LEFT JOIN `ref_kecamatan` ON `ref_kecamatan`.`kode_kecamatan`=`data_mahasiswa`.`kode_kecamatan`
LEFT JOIN `ref_kabupaten` ON `ref_kabupaten`.`kode_kabupaten`=`ref_kecamatan`.`kode_kabupaten`
LEFT JOIN `ref_provinsi` ON `ref_provinsi`.`kode_provinsi`=`ref_kabupaten`.`kode_provinsi`
LEFT JOIN `ref_sekolah` ON `ref_sekolah`.`npsn`=`data_mahasiswa`.`npsn_sekolah`
ERROR - 2019-11-17 08:46:12 --> Query error: Table 'simrsdb_2019.data_mahasiswa' doesn't exist - Invalid query: SELECT `data_dosen`.`nama` as `nama_dosen`, `ref_kecamatan`.`kecamatan`, `ref_kabupaten`.`kabupaten`, `ref_provinsi`.`provinsi`, `ref_jurusan`.`id_fakultas`, `ref_jurusan`.`nama_jurusan`, `data_mahasiswa`.*, `ref_agama`.`agama`, `ref_sekolah`.`nama_sekolah`
FROM (select * from data_mahasiswa where nim='home' or permalink='home' limit 1) as data_mahasiswa
JOIN `ref_jurusan` ON `ref_jurusan`.`id_jurusan`=`data_mahasiswa`.`id_jurusan`
LEFT JOIN `ref_agama` ON `ref_agama`.`id_agama`=`data_mahasiswa`.`id_agama`
LEFT JOIN `data_dosen` ON `data_dosen`.`id_dosen`=`data_mahasiswa`.`id_pa`
LEFT JOIN `ref_kecamatan` ON `ref_kecamatan`.`kode_kecamatan`=`data_mahasiswa`.`kode_kecamatan`
LEFT JOIN `ref_kabupaten` ON `ref_kabupaten`.`kode_kabupaten`=`ref_kecamatan`.`kode_kabupaten`
LEFT JOIN `ref_provinsi` ON `ref_provinsi`.`kode_provinsi`=`ref_kabupaten`.`kode_provinsi`
LEFT JOIN `ref_sekolah` ON `ref_sekolah`.`npsn`=`data_mahasiswa`.`npsn_sekolah`
ERROR - 2019-11-17 08:53:41 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\rs\application\controllers\Home.php 10
ERROR - 2019-11-17 08:53:43 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\rs\application\controllers\Home.php 10
ERROR - 2019-11-17 08:53:48 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\rs\application\controllers\Home.php 10
ERROR - 2019-11-17 08:54:54 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\rs\application\controllers\Home.php 10
ERROR - 2019-11-17 08:54:55 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\rs\application\controllers\Home.php 10
ERROR - 2019-11-17 13:58:52 --> 404 Page Not Found: Assets/js
ERROR - 2019-11-17 13:59:34 --> 404 Page Not Found: Penduduk/get_nik
ERROR - 2019-11-17 13:59:49 --> 404 Page Not Found: Assets/js
ERROR - 2019-11-17 13:59:53 --> 404 Page Not Found: Pasien/get_penduduk
ERROR - 2019-11-17 14:00:11 --> 404 Page Not Found: Pasien/get_penduduk
ERROR - 2019-11-17 15:28:46 --> Session: session.auto_start is enabled in php.ini. Aborting.
ERROR - 2019-11-17 15:28:46 --> Session: session.auto_start is enabled in php.ini. Aborting.
ERROR - 2019-11-17 15:28:47 --> Session: session.auto_start is enabled in php.ini. Aborting.
ERROR - 2019-11-17 15:28:47 --> Session: session.auto_start is enabled in php.ini. Aborting.
ERROR - 2019-11-17 15:28:49 --> Session: session.auto_start is enabled in php.ini. Aborting.
ERROR - 2019-11-17 15:28:49 --> Session: session.auto_start is enabled in php.ini. Aborting.
ERROR - 2019-11-17 15:28:50 --> Session: session.auto_start is enabled in php.ini. Aborting.
ERROR - 2019-11-17 15:28:50 --> Session: session.auto_start is enabled in php.ini. Aborting.
ERROR - 2019-11-17 15:30:30 --> Session: session.auto_start is enabled in php.ini. Aborting.
ERROR - 2019-11-17 15:30:30 --> Session: session.auto_start is enabled in php.ini. Aborting.
ERROR - 2019-11-17 15:30:30 --> Session: session.auto_start is enabled in php.ini. Aborting.
ERROR - 2019-11-17 15:30:31 --> Session: session.auto_start is enabled in php.ini. Aborting.
