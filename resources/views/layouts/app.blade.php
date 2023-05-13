<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/advertisment.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app" >
        <div style="text-align:center; width:100%; position:fixed; z-index:99">
    
        <nav style=" " class="navbar navbar-expand-md  shadow-sm navbar-dark bg-dark" >
            <div class="container" >
                <a class="navbar-brand" href="/">
                {{__('mylang.advertisment')}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="/categories">Danh muc</a></li>
                        <li class="nav-item"><a class="nav-link" href="/search">Tim kiem</a></li>
                        <li class="nav-item"><a class="nav-link" href="/cart">Gio hang</a></li>
                        <li class="nav-item"><a class="nav-link" href="/lang/vn"><img src="/vn.png" style="width:50px; aspect-ratio:5/3" alt=""></a></li>
                        <li class="nav-item"><a class="nav-link" href="/lang/en"><img src="/en.png" style="width:50px; aspect-ratio:5/3" alt=""></a></li>
                
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('mylang.login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('mylang.register') }}</a>
                                </li>
                            @endif


                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">My pr</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('mylang.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin') }}">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        </div>
        
        <main class="py-4">
            @yield('content')
        </main>
        <footer  style="background-color: black; color:antiquewhite; padding:10px">
			<div class="container">
				<div class="container row">
					<div class="col-md-3">
						<h3>
							MỞ RỘNG
						</h3>
						<ul>
							<li>
								<a href="#">
									Nhãn Hiệu
								</a>
							</li>
							<li>
								<a href="#">
									Phiếu Quà Tặng
								</a>
							</li>
							<li>
								<a href="#">
									CHi Nhánh
								</a>
							</li>
							<li>
								<a href="#">
									Đặc Biệt
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<h3>
							THÔNG TIN
						</h3>
						<ul>
							<li>
								<a href="#">
									Về Chúng Tôi
								</a>
							</li>
							<li>
								<a href="#">
									Chính Sách Bảo Mật
								</a>
							</li>
							<li>
								<a href="#">
									Điều Khoản và Điều Kiện
								</a>
							</li>
							<li>
								<a href="#">
									Liên Hệ
								</a>
							</li>
							<li>
								<a href="#">
									Tìm Chúng Tôi
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<h3>
							TÀI KHOẢN
						</h3>
						<ul>
							<li>
								<a href="#">
									Tài Khoản Của Tôi
								</a>
							</li>
							<li>
								<a href="#">
									Lịch Sử Mua Hàng
								</a>
							</li>
							<li>
								<a href="#">
									Danh Sách Muốn Mua
								</a>
							</li>
							<li>
								<a href="#">
									Bản Tin
								</a>
							</li>
							<li>
								<a href="#">
									Lợi Nhuận
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<h3>
							CONTACT US
						</h3>
						<div style="margin-left: 20px;">
							<span style="text-indent:-20px">
								<i class="fa fa-map-marker">
								</i>
							</span>Hà Nội
						</div>
						<div style="margin-left: 20px;">
							<span style="text-indent:-20px">
								<i class="fa fa-envelope">
								</i>
							</span>
							<a href="mailto:nguyenmanh2002tm@gmail.com">nguyenmanh2002tm@gmail.com</a>
						</div>
						<div style="margin-left: 20px;">
							<span style="text-indent:-20px">
								<i class="fa fa-phone">
								</i>
							</span>
							<a href="tel:0355702761">0355702761</a>
						</div>
						<div class="payment-methods">
							<img src="" alt="">
						</div>
					</div>
				</div>
			</div>
		</footer>
    </div>
	<script src="{{ asset('js/cart.js') }}" defer></script>
</body>
</html>
