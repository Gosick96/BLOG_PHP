<?php require 'header.php'; ?>
	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo"><a href="">Titulo del articulo</a></h2>
				<p class="fecha"> 4 de octube de 2018</p>
				<div class="thumb">
					<a href="#">
						<img src="<?php echo RUTA; ?>/images/01.jpg" alt="">
					</a>
				</div>
				<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, fugit, minima. Delectus magni, vitae eveniet sunt iste blanditiis, sapiente optio nihil minima distinctio omnis iure labore inventore vero quo aperiam velit iusto atque ab molestiae assumenda commodi vel dolorem. In fuga commodi aliquam, earum minus dolore nobis ex, adipisci reiciendis.</p>
				<a href="" class="continuar">Leer mas</a>
			</article>
		</div>
		<div class="post">
			<article>
				<h2 class="titulo"><a href="">Titulo del articulo</a></h2>
				<p class="fecha"> 5 de octube de 2018</p>
				<div class="thumb">
					<a href="#">
						<img src="<?php echo RUTA; ?>/images/02.jpg" alt="">
					</a>
				</div>
				<p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magni cumque sit id, eos veritatis cum. Dolor animi rem, cupiditate sed atque sit voluptates molestias, quibusdam est sunt odio unde, placeat fugiat! Ab assumenda blanditiis expedita! Voluptatum iste doloribus maiores, rem, officia itaque quia tenetur neque cumque laudantium architecto molestias!</p>
				<a href="" class="continuar">Leer mas</a>
			</article>
		</div>

		<?php require 'paginacion.php' ?>
	</div>
	<?php require 'footer.php' ?>
</body>
</html>