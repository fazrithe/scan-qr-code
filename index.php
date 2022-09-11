<?php
session_start();
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
    <div class="login">
        <div class="content-area">
            <a href="" class="brand" title="Logo">
                <img src="assets/img/logo.png" alt="">
            </a>
            <div class="mb-6">
                <h1 class="text-2xl font-bold font-poppins text-secondary-default leading-loose capitalize">selamat datang!
                </h1>
                <p class="text-gray-500 font-poppins text-sm">Silahkan login terlebih dahulu untuk dapat melanjutkan</p>
            </div>
            <div>
                <form  method="post" x-data="{ open: false, cabang: '' }" action="loginService.php" name="form" id="form">
                    <div>
                        <div class="relative w-full">
                            <!-- Select Cabang -->
                            <div class="mb-7">
                                <input type="hidden" :value="cabang" name="cabang" id="cabang">
                                <button type="button" class="flex justify-between items-center hover:shadow-lg bg-gray-100 rounded border border-gray-200 py-2 px-3 w-full text-left text-gray-900 hover:bg-secondary-default hover:text-white hover:border-secondary-default" @click="open=true">
                                    <template x-if="cabang">
                                        <span x-text="cabang">...</span>
                                    </template>
                                    <template x-if="!cabang">
                                        <span>Pilih Cabang..</span>
                                    </template>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </button>
                                <ul class="absolute top-11 shadow-lg bg-gray-100 w-full" x-show="open" @click.away="open=false">
                                    <li class="py-1.5 px-3 text-md hover:bg-gray-200 hover:font-semibold hover:cursor-pointer text-gray-600 hover:text-secondary-default" @click="open=false;cabang='Jakarta'">Jakarta</li>
                                    <li class="py-1.5 px-3 text-md hover:bg-gray-200 hover:font-semibold hover:cursor-pointer text-gray-600 hover:text-secondary-default" @click="open=false;cabang='Bali'">Bali</li>
                                </ul>
                            </div>
                            <!-- End Select Cabang -->
                            <div class="space-y-3.5">
                                <div class="bg-gray-100 rounded border border-gray-200 py-2 px-3 w-full flex items-center space-x-2">
                                    <span class="text-secondary-default">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd"/>
                                        </svg>
                                    </span>
                                    <input type="text" name="username" id="username" class="w-full bg-transparent focus:outline-none" placeholder="Username" value="">
                                </div>

                                <div class="bg-gray-100 rounded border border-gray-200 py-2 px-3 w-full flex items-center space-x-2">
                                    <span class="text-secondary-default">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                            <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z" clip-rule="evenodd"/>
                                        </svg>
                                    </span>
                                    <input type="password" name="password" id="password" class="w-full bg-transparent focus:outline-none" placeholder="Password" value="">
                                </div>
                                <div class="text-center">
									<input type="button" onclick="validate()" class="capitalize inline-block bg-secondary-default rounded border border-gray-200 py-2 px-5 min-w-[150px] md:w-full text-white hover:bg-secondary-mid" value="log in" />
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
function validate(){
	var cabang = $("#cabang").val();
	var username = $("#username").val();
	var password = $("#password").val();
	if(cabang==""){		
		alert("Cabang harus dipilih");
		return false;
	}
	if(username==""){		
		alert("Username harus diisi");
		return false;
	}
	if(password==""){		
		alert("Password harus diisi");
		return false;
	}
	$('form#form').submit();
}
var msg='<?=isset($_GET['msg'])?$_GET['msg']:'';?>';
if(msg!=""){
	alert(msg);
}
</script>