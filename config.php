<?php
/**
 * Aplikasi Pegawai Sederhana
 *
 * @file config.php
 * @author Andrew Hutauruk | http://blizze.wordpress.com
 * @date 17 Aug 2012 23:40
 */

/**
 * Koneksi ke server dan memilih database
 */
mysql_connect( 'localhost', 'root', '' );
mysql_select_db( 'pegawai' );

/**
 * Fungsi sederhana untuk mempersingkat penulisan kdoe program
 * Bersifat opsional, tetap bisa menggunakan fungsi PHP pada umumnya
 */
function hajar_coy( $query ) { return mysql_query( $query ); }
function itung_jumlahnya( $query ) { return mysql_num_rows( $query ); }
function uraikan( $query ) { return mysql_fetch_array( $query ); }
function bersihkan( $query ) { return mysql_real_escape_string( $query ); }

define( 'URL', 'http://localhost/pegawai' );
define( 'NAME', 'Aplikasi Data Pegawai Sederhana' );
$option = isset( $_GET['option'] ) ? $_GET['option'] : '';
$action = isset( $_POST['action'] ) ? $_POST['action'] : '';

?>