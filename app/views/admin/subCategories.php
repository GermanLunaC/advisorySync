<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../app/styles/admin/config.css">
	<link rel="stylesheet" href="../app/styles/admin/categories.css">
	<title>Categorias</title>
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js">	</script>
    <script type='module' src="../app/utils/admin/lenguage.js">	</script>
</head>
<body>

    <?php
        include('app/views/templates/admin/sidebar.php')
    ?>

	<!-- CONTENT -->
	<section id="content">

        <?php
            include('app/views/templates/admin/navbar.php')
        ?>

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1 data-title>Panel</h1>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<button class='btn-create'>Nueva Sub Categoria</button>
				</li>
			</ul>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3 data-recent>Sub Categorias</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th data-user >Nombre</th>
								<th data-date >Categoria</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>Diferencial</p>
								</td>
								<td>
									Matematicas
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
		
	</section>
	<!-- CONTENT -->
	

	<script src="../app/utils/admin/script.js"></script>
	<script src="../app/utils/admin/counter.js"></script>
</body>
</html>