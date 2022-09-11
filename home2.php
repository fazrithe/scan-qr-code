<?php require 'header.php';?>		

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
    <div class="searching">
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
            <div class="mb-6">
                <p class="text-gray-500 font-poppins text-sm text-center">Silahkan masukan kode barang atau nomor barcode pada form di bawah, untuk melihat detail barang atau produk</p>
            </div>
            <div>
                <form  method="post" x-data="{ open: false, cabang: '' }" action="search-result.php" name="form" id="form">
                    <div>
                        <div class="relative w-full">
                            <div class="space-y-3.5">
                                <div class="bg-gray-100 rounded border border-gray-200 py-2 px-3 w-full flex items-center space-x-2">
                                    <span class="text-secondary-default">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd"/>
                                    </svg>
                                    </span>
                                    <input name="kode" id="kode" type="text" class="w-full bg-transparent focus:outline-none" placeholder="Masukan kode barang.." value="" onkeyup="upChar()">
                                </div>
                                <div class="text-center">
                                    <button type="button" onclick="validate()"  class="capitalize inline-block bg-secondary-default rounded border border-gray-200 py-2 px-5 min-w-[150px] md:w-full text-white hover:bg-secondary-mid">cari</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div align="center">
               Or
            </div>
            <br>
            <div align="center">
                <button onclick="camera()">Klik disini</button>
            </div>
            <div id="display" style="display:none">
                <div class="col-sm-12">
                        <video id="preview" class="p-1 border" style="width:100%;"></video>
                    </div>
                <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
                <label class="btn btn-primary active">
                    <input type="radio" name="options" value="1" autocomplete="off" checked> Front Camera
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" value="2" autocomplete="off"> Back Camera
                </label>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
function upChar() {
    let kode = document.getElementById('kode');
    kode.value = kode.value.toUpperCase();
}
function validate(){
	var kode = $("#kode").val();
	var username = $("#username").val();
	var password = $("#password").val();
	if(kode==""){		
		alert("Kode Barang harus diisi");
		return false;
	}
	
	$('form#form').submit();
}

</script>
<script>
    function camera(){
        var x = document.getElementById("display");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
                    let scanner = new Instascan.Scanner({ 
                        video: document.getElementById('preview'),
                        mirror: true
                    });
                    Instascan.Camera.getCameras().then(function(cameras){
                        if(cameras.length > 0 ){
                            scanner.start(cameras[0]);
                        } else{
                            alert('No cameras found');
                        }

                    }).catch(function(e) {
                        console.error(e);
                    });

                    scanner.addListener('scan',function(c){
                        document.getElementById('kode').value=c;
                    });

                    Instascan.Camera.getCameras().then(function (cameras){
        if(cameras.length>0){
            scanner.start(cameras[0]);
            $('[name="options"]').on('change',function(){
                if($(this).val()==1){
                    if(cameras[0]!=""){
                        scanner.start(cameras[0]);
                    }else{
                        alert('No Front camera found!');
                    }
                }else if($(this).val()==2){
                    if(cameras[1]!=""){
                        scanner.start(cameras[1]);
                    }else{
                        alert('No Back camera found!');
                    }
                }
            });
        }else{
            console.error('No cameras found.');
            alert('No cameras found.');
        }
    }).catch(function(e){
        console.error(e);
        alert(e);
    });
    }
        </script>