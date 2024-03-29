<!-- =====================================
    	==== Start Navbar -->

		<nav class="navbar navbar-expand-lg">
			<div class="container">

            <!-- Logo -->
            <a class="logo" href="home">
                <img src="img/logo-light.png" alt="logo">          
            </a> 

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="icon-bar"><i class="fas fa-bars"></i></span>
			  </button>

			  <!-- navbar links -->
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
			      </li>
			      <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="1">About</a>
                  </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="2">Services</a>
			      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="3">Portfolio</a>
                  </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="4">Blog</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#" data-scroll-nav="5">Contact</a>
			      </li>
			    </ul>
			  </div>

{{-- ........................................................................... --}}
					@if(Route::has('login'))
					@auth
						<div class="dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
								{{ Auth::user()->name }}
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
								
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
								<a href="user">profile</a>
							</div>
						</div>
					@else
						<a href="{{ route('login') }}">{{ __('Sign in') }}</a>
					@endauth
				@endif				
				
{{-- .................................................................... --}}

			</div>
		</nav>


    	<!-- End Navbar ====
    	======================================= -->


        <!-- =====================================
    	==== Start Header -->

    	<header class="header valign bg-img position-re" data-scroll-index="0" data-overlay-dark="4" data-background="img/bg.jpg" data-stellar-background-ratio="0.5">

    		<div class="container">
    			<div class="row">
    				<div class="full-width text-center caption mt-50">
    					<h2>Welcome!</h2>
                        <h1 class="cd-headline push">
                            <span class="blc">I am</span>
                            <span class="cd-words-wrapper">
                              <b class="is-visible">Zain Butler</b>
                              <b>Web Designer</b>
                              <b>Photography</b>
                            </span>
                        </h1>

                        <div class="social mt-30">
                            <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                            <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                            <a href="#0"><i class="icofont icofont-social-instagram"></i></a>
                            <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                            <a href="#0"><i class="icofont icofont-social-behance"></i></a>
                        </div>
                        
    				</div>
    			</div>
    		</div>
    	</header>

    	<!-- End Header ====
    	======================================= -->