@include('header')
		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="{{Route::current()->getName()}}#banner">Home</a></li>
					<li><a href="{{Route::current()->getName()}}#one">Quienes Somos</a></li>
					<li><a href="{{Route::current()->getName()}}#two">Nuestros Trabajos</a></li>
					<li><a href="{{Route::current()->getName()}}#contacto">Contacto</a></li>
				</ul>
			</nav>

		<!-- Banner --> 
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="banner" class="bg-img" data-bg="bannerTecno.jpg">
				<div class="inner">
					<header>
						<h1>Tencomaketas</h1>
					</header>
				</div>
				<a href="#one" class="more">Learn More</a>
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="bannerOne.1.png">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Quienes Somos</h2>
							<p></p>
						</header>
						<div class="content">
							<p>Reciclamos componentes de automóviles para fabricar maquetas y bancos de pruebas para educación técnica profesional.</p>
						</div>
{{-- 						<footer>
							<a href="generic.html" class="button alt">Learn More</a>
						</footer> --}}
					</article>
				</div>
				<a href="#two" class="more">Learn More</a>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper post bg-img" data-bg="bannerTwo.png">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Nuestros Trabajos</h2>
							<p>Revisa nuestras redes sociales</p>
						</header>
						<div class="content">
                            {{-- <p>
                            @include('carrousel')
                            </p> --}}
							<ul class="icons" id="footer" style="background-color: transparent; padding:0px">
								<li><a href="https://www.instagram.com/tecnomaketas/" target="_blank" class="icon round fa-instagram" style=""><span class="label">Instagram</span></a></li>
								<li><a href="https://www.facebook.com/100064129688560" target="__blank" class="icon round fa-facebook" style=""><span class="label">Facebook</span></a></li>
							</ul>
						</div>
{{-- 						<footer>
							<a href="generic.html" class="button alt">Learn More</a>
						</footer> --}}
					</article>
				</div>
				<a href="#three" class="more">Learn More</a>
			</section>

		<!-- Three -->
			{{-- <section id="three" class="wrapper post bg-img" data-bg="banner4.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Varius a cursus aliquet</h2>
							<p>11.11.2016</p>
						</header>
						<div class="content">
							<p>Scelerisque enim mi curae erat ultricies lobortis donec velit in per cum consectetur purus a enim platea vestibulum lacinia et elit ante scelerisque vestibulum. At urna condimentum sed vulputate a duis in senectus ullamcorper lacus cubilia consectetur odio proin sociosqu a parturient nam ac blandit praesent aptent. Eros dignissim mus mauris a natoque ad suspendisse nulla a urna in tincidunt tristique enim arcu litora scelerisque eros suspendisse.</p>
						</div>
						<footer>
							<a href="generic.html" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
				<a href="#four" class="more">Learn More</a>
			</section> --}}

		<!-- Four -->
			{{-- <section id="four" class="wrapper post bg-img" data-bg="banner3.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Luctus blandit mi lectus in nascetur</h2>
							<p>10.30.2016</p>
						</header>
						<div class="content">
							<p>Scelerisque enim mi curae erat ultricies lobortis donec velit in per cum consectetur purus a enim platea vestibulum lacinia et elit ante scelerisque vestibulum. At urna condimentum sed vulputate a duis in senectus ullamcorper lacus cubilia consectetur odio proin sociosqu a parturient nam ac blandit praesent aptent. Eros dignissim mus mauris a natoque ad suspendisse nulla a urna in tincidunt tristique enim arcu litora scelerisque eros suspendisse.</p>
						</div>
						<footer>
							<a href="generic.html" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
			</section> --}}

@include('footer')