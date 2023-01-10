		<!-- Footer -->
        <footer id="footer">
				<div class="inner">

					<h2>Contacto</h2>

					<form action="{{route('contacto')}}" method="post" id="contacto">
						@csrf
						<div class="field half first">
							<label for="name">Nombre</label>
							<input name="name" id="name" type="text" placeholder="Nombre">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Mensaje</label>
							<textarea name="message" id="message" rows="6" placeholder="Mensaje..."></textarea>
						</div>
						<ul class="actions">
							<li><input value="Enviar Mensaje" class="button alt" type="submit"></li>
						</ul>
					</form>

{{-- 					<ul class="icons">
						<li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul> --}}

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
			<script src="{{ URL::asset('js/jquery.min.js')}}"></script>
			<script src="{{ URL::asset('js/jquery.scrolly.min.js')}}"></script>
			<script src="{{ URL::asset('js/jquery.scrollex.min.js')}}"></script>
			<script src="{{ URL::asset('js/skel.min.js')}}"></script>
			<script src="{{ URL::asset('js/util.js')}}"></script>
			<script src="{{ URL::asset('js/main.js')}}"></script>

	</body>
</html>