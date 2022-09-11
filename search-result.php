<?php require 'header.php';?>
<?php

$servername = "localhost";
$username = "tianlio1_TL1719";
$password = "T1anliong1719$";
$dbname = "tianlio1_db_inventory";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$kode = isset($_POST['kode'])?$_POST['kode']:'';
$sql = "SELECT  id_tbl_info , barcode, merk, kode_barang, nama_barang, satuan, harga_jakarta, harga_bali,gambar FROM tbl_info where kode_barang='".$kode."' or barcode ='".$kode."' order by nama_barang";
$result = mysqli_query($conn, $sql);


?> 

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Info Produk Tian Liong</title>
		<!-- External Font Google or other -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<!-- End External Font -->
		
		<!-- External Lib -->
		<!-- End External Lib -->

		<!-- Main css or Style.css -->
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
		<!-- End Main css -->

		<!-- Additional Styles -->
		
		<!-- End Additional Styles -->

		<!-- Setup Primary Color -->
		<style>
		  :root { 
			  --primary-default: #615fe6;
			  --primary-mid: #5350eb;
			  --primary-dark: #242168;
			  --secondary-default: #922f34;
			  --secondary-mid: #812429;
			  --mw: calc(100% - 320px);
			  --mwt: calc(100% - 256px);
			  --mwr: calc(100% - 64px);
			}
		</style>
		<!-- End Setup Primary Color -->

	</head>

	<body>

<main>
    <div class="hasil-pencarian">
        <div class="content-area">
            <div class="border-b border-b-gray-200 flex justify-between items-center py-2 px-3 mb-7">
                <div></div>
                <div>
                    <a href="logout.php" class="flex items-center capitalize space-x-1 text-gray-500 hover:text-secondary-default">
                        <span>sign out</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                            </svg>                      
                        </span>
                    </a>
                </div>
            </div>
            <a href="" class="brand" title="Logo">
                <img src="assets/img/logo.png" alt="">
            </a>
            <div>
                <div class="mb-6 text-right">
                    <p class="text-gray-700 inline-block font-poppins text-sm text-center capitalize"><span class="text-gray-500">cabang:</span> <b><em>
					<?php				
					if(isset($_SESSION['cabang'])){
						echo $_SESSION['cabang'];
					}
				?>
					</em></b></p>
                </div>
                <div>
                    <p class="capitalize font-medium text-gray-700 mb-3 underline">hasil pencarian:</p>
					<?php					
						if (mysqli_num_rows($result) > 0) {						
							while($row = mysqli_fetch_assoc($result)) {							
					?>
                    <div>
                        <figure class="max-w-[85%] md:max-w-[80%] mx-auto">
                            <img src="assets/img/products/<?=$row["gambar"];?>" alt="">
                        </figure>
                        <div class="flex justify-between text-gray-700 capitalize mb-6">
                            <strong><?=$row["merk"];?></strong>
                            <span class="italic font-medium"><?=$row["barcode"];?></span>
                        </div>
                        <article class="text-center p-5 mb-10 bg-indigo-100/[.25] border-dashed border border-indigo-500/[.3] rounded-lg mx-auto text-gray-700">
                            <strong class="uppercase block mb-2 text-primary-default"><?=$row["kode_barang"];?></strong>
                            <p class="italic text-gray-800 mb-2"><?=$row["nama_barang"];?></p>
                            <span class="uppercase font-medium italic block text-right mb-2"><?=$row["satuan"];?></span>
                            <p class="capitalize font-medium text-right">rp. <strong class="text-lg">
							<?=$_SESSION['cabang']=="Jakarta"?number_format($row["harga_jakarta"] , 0, ',', '.'):number_format($row["harga_bali"] , 0, ',', '.');?></strong></p>
                        </article>
                        <div class="text-center">
                            <a href="home.php" class="capitalize inline-block bg-secondary-default rounded border border-gray-200 py-2 px-5 min-w-[150px] md:w-full text-white hover:bg-secondary-mid" >cari lagi</a>
                        </div>
                    </div>
					<?php
							}
						}
						if($conn!=null){
						mysqli_close($conn);
						}
					?>
                </div>
            </div>
            <br>
            <br>
            <div class="text-center">
                <p class="text-sm md:text-[12px] leading-relaxed text-gray-600">2022 &copy; <strong>TianLiong</strong>. All right Reserved.</p>
            </div>
        </div>
    </div>
</main>

	<!-- Eksternal Js -->
  <!-- <script src=""></script> -->
	<!-- <script src=""></script> -->
  <!-- End Vendor Js -->

  <!-- CDN Plugin Js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.4.2/cdn.js"></script>
  <!-- End CDN Plugin Js -->

  <!-- Main.Js -->
	<script src="./assets/js/main.js"></script>
  <!-- End Main.Js -->

  <!-- Additional Internal Js -->
  
  <!-- End Additional Internal Js -->
    
  </body>
</html>
<?php

?>