<?php 
session_start();
if(isset($_SESSION["username"])){
}else{
	echo header("location:login.php");
	
}
include('template/top.php');
include('template/navigasi.php');

?>

<div id="main">
	<div class="content">
		<marquee style="background: #1b5725; padding:5px; color: #fff;">Selamat Datang di Website Manajemen Tiket Pesawat Website manajemen Tiket</marquee>
		<div id="profile">
			<img src="foto/tiket.png" alt="" class="animated flipInY">
			<center>
				<h2>TIKET PESAWAT</h2>
				<hr/>
			</center>
			

		</div>
		<hr/>

		<h2 class="center">Website Manajemen Tiket</h2>
		<br />
		<br />
		<br />
	</div>
</div>


<?php include('template/footer.php'); ?>