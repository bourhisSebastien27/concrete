<?php $this ->inc('elements/header.php');?>
<div class="slider">
		<div class="slider_cont">
			<div class="separater_hd"></div>
			<div class="slider_image">
<?php
$slider= new Area('contenu');
$slider-> display($c);
?>
		</div>
	</div>
	<div class="container_12">
				<div class="grid_4 1">
				<?php
				$a= new Area('Col1');
				$a -> display($c);
				?>
				<div class="clear"></div>
				</div>

				<div class="grid_4 2">
					<?php
				$a= new Area('Col2');
				$a -> display($c);
				?>
				<div class="clear"></div>
				</div>

			<div class="grid_4 3">
			<?php
				$a= new Area('Col3');
				$a -> display($c);
				?>
			<div class="clear"></div>
			</div>
			<div class="clear"></div>
		<!-- Separater -->
		<div class="sep"></div>
			<div class="grid_4 social">
			<?php
			$a= new Area('Social');
			$a -> display($c);
			?>
			<div class="clear"></div>
			</div>
			
			<div class="grid_4 contact">
				<?php
			$a= new Area('Contact');
			$a -> display($c);
			?>
			<div class="clear"></div>
			</div>

				<div class="grid_4 news">
			<?php
				$a= new Area('news');
				$a -> display($c);
				?>
		</div>
		<div class="clear"></div>
	</div>
<?php $this ->inc('elements/footer.php');?>