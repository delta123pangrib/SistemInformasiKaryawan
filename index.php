<?php
/**
 * Aplikasi Pegawai Sederhana
 *
 * @file function.php
 * @author Andrew Hutauruk | http://blizze.wordpress.com
 * @date 17 Aug 2012 23:40
 */

session_start();

/**
 * Panggil file config.php
 */
require( dirname(__FILE__).'/function.php' );

if( $action == 'Simpan Data Pegawai' ) { simpan_data_pegawai();} 
elseif( $action == 'Ubah Data Pegawai' ) { update_data_pegawai(); }
elseif( $option == 'delete-pegawai' ) { hapus_data_pegawai(); }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>
<?php echo NAME; ?>
</title>
<script type="text/javascript">
function hapus(id){
	konfirmasi = confirm('Apakah Anda yakin ingin menghapus data pegawai dengan kode: '+id+' ?' );
	if( konfirmasi == true ) return true;
	else return false;
}
</script>
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/gaya.css" media="all" />
</head>

<body>
<div class="atas">
	<div class="logo">Aplikasi Pegawai</div>
</div>

<div class="bungkus">
	<div class="kiri">
		<div class="box">
			<h1>Menu Utama</h1>
			<ul id="urut">
				<?php
				if($option == '') { echo "<li><a href=\"".URL."/\" class=\"active\">Beranda</a></li>\n"; }
				else { echo "<li><a href=\"".URL."/\">Beranda</a></li>\n"; }
				if($option == 'tambah-pegawai') { echo "<li><a href=\"".URL."/?option=tambah-pegawai\" class=\"active\">Tambah Data Pegawai</a></li>\n"; }
				else{ echo "<li><a href=\"".URL."/?option=tambah-pegawai\">Tambah Data Pegawai</a></li>\n"; }
				if($option == 'data-pegawai' || $option == 'detail-pegawai' || $option == 'edit-pegawai') { echo "<li><a href=\"".URL."/?option=data-pegawai\" class=\"active\">Data Pegawai</a></li>\n"; }
				else{ echo "<li><a href=\"".URL."/?option=data-pegawai\">Data Pegawai</a></li>\n"; }				
				
				?>
			</ul>
		</div>
	</div>	
	
	<div class="kanan">
		<?php
		$kode = isset($_GET['kode']) ? $_GET['kode'] : '';
		if( $option == 'tambah-pegawai' ) { tambah_data_pegawai(); }
		elseif( $option == 'data-pegawai' ) { tampilkan_pegawai(); }
		elseif( $option == 'edit-pegawai' ) { ubah_data_pegawai(); }
		elseif( $option == 'detail-pegawai') { detail_pegawai($kode); }
		else {
			echo "<div class=\"box\">\n";
			echo "<h1>APLIKASI DATABASE PEGAWAI SEDERHANA</h1>";
			echo "<p>Selamat datang di Aplikasi Database Pegawai Sederhana.</p>";
			echo "<p><img src=\"".URL."/gambar.jpg\" align=\"left\" width=\"120\" height=\"150\" class=\"img\">Aplikasi ini sengaja dikembangkan dengan harapan dapat memberikan gambaran dan inspirasi bagi mereka yang ingin membuat aplikasi dinamis dengan menggunakan PHP dan MySQL. Aplikasi ini murni menggunakan pemrograman dasar <b>HTML, CSS, PHP dan MySQL</b> serta sedikit bumbu bahasa <b>JavaScript</b> agar interaksi pengguna dengan aplikasi terasa lebih mantap.</p>";
			echo "<p>Dalam aplikasi telah dikembangkan beberapa fungsi-fungsi buatan yang bertujuan untuk membantu proses pengolahan data dan juga untuk mempercepat proses penulisan kode program.</p>";
			echo "<p>Secara umum, applikasi ini masih tergolong sangat sederhana dan tidak membutuhkan tenaga ekstra untuk mempelajarinya. Anda hanya perlu memahami sedikit tentang HTML dan CSS untuk mengatur layout maupun tata letak dari setiap komponen website serta pemahaman mendasar tentang PHP dan MySQL.</p>";
			echo "<p>Akhirnya, segala kritik dan saran yang membangun sangat dibutuhkan agar ke depannya dapat lebih bermamfaat dan semakin antusias dalam mengembangkan aplikasi berbasis PHP dan MySQL.</p>";
			echo "<p class=\"footer\">All Rights Reserved | Copyrights &trade; - ".date("Y")." | View more on: <a href=\"http://blizze.wordpress.com\">Blizze@Wordpress</a></p>";
			echo "</div>\n";
		}
	
	
		?>
	</div>
	<div class="clear"></div>

</div>

</body>
</html>
