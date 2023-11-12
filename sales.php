<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ventas</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')
	</script>
	<script src="js/material.min.js"></script>
	<script src="js/sweetalert2.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/main.js"></script>
</head>

<body>
	<!-- Notifications area -->
	<section class="full-width container-notifications">
		<div class="full-width container-notifications-bg btn-Notification"></div>
		<section class="NotificationArea">
			<div class="full-width text-center NotificationArea-title tittles">Notificaciones <i class="zmdi zmdi-close btn-Notification"></i></div>
			<a href="#" class="Notification" id="notifation-unread-1">
				<div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle"></i>
						<strong>Registro de nuevo usuario</strong>
						<br>
						<small>Hoy</small>
					</p>
				</div>

			</a>
			<a href="#" class="Notification" id="notifation-read-1">
				<div class="Notification-icon"><i class="zmdi zmdi-cloud-download bg-primary"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle-o"></i>
						<strong>Nuevas actualizaciones</strong>
						<br>
						<small>18/10/2023</small>
					</p>
				</div>

			</a>
			<a href="#" class="Notification" id="notifation-unread-2">
				<div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle"></i>
						<strong>Archivo subido</strong>
						<br>
						<small>23/09/2023</small>
					</p>
				</div>

			</a>
			<a href="#" class="Notification" id="notifation-read-2">
				<div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle-o"></i>
						<strong>Nuevo correo</strong>
						<br>
						<small>20/09/2023</small>
					</p>
				</div>

			</a>
			<a href="#" class="Notification" id="notifation-read-3">
				<div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
				<div class="Notification-text">
					<p>
						<i class="zmdi zmdi-circle-o"></i>
						<strong>Carpeta eliminada</strong>
						<br>
						<small>16/09/2023o</small>
					</p>
				</div>

			</a>
		</section>
	</section>
	<!-- navBar -->
	<div class="full-width navBar">
		<div class="full-width navBar-options">
			<i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>
			<div class="mdl-tooltip" for="btn-menu">Menu</div>
			<nav class="navBar-options-list">
				<ul class="list-unstyle">
					<li class="btn-Notification" id="notifications">
						<i class="zmdi zmdi-notifications"></i>
						<!-- <i class="zmdi zmdi-notifications-active btn-Notification" id="notifications"></i> -->
						<div class="mdl-tooltip" for="notifications">Notificaciones</div>
					</li>
					<li class="btn-exit" id="btn-exit">
						<i class="zmdi zmdi-power"></i>
						<div class="mdl-tooltip" for="btn-exit">Salir</div>
					</li>
					<li class="text-condensedLight noLink"><small>Nombre de Usuario</small></li>
					<li class="noLink">
						<figure>
							<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
						</figure>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- navLateral -->
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> Inventario
			</div>
			<figure class="full-width" style="height: 77px;">
				<div class="navLateral-body-cl">
					<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
				</div>
				<figcaption class="navLateral-body-cr hide-on-tablet">
					<span>
						Nombre Completo<br>
						<small>Admin</small>
					</span>
				</figcaption>
			</figure>

			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="home.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-dashboard"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Inicio
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-case"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Administracion
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">

							<li class="full-width">
								<a href="providers.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-truck"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										PROVEEDORES
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="payments.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-card"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										PAGOS
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="categories.html" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-label"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										CATEGORÍAS
									</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-face"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Usuarios
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="admin.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-account"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										ADMINISTRADORES
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="client.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-accounts"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										CLIENTES
									</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="products.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-washing-machine"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Productos
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="sales.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Ventas
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="inventory.php" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-store"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Inventario
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-wrench"></i>
							</div>
							<div class="navLateral-body-cr hide-on-tablet">
								Configuracion
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="#!" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-widgets"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										OPTION
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="#!" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-widgets"></i>
									</div>
									<div class="navLateral-body-cr hide-on-tablet">
										OPTION
									</div>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</section>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-shopping-cart"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					En la sección de Ventas, podrás visualizar todas las ventas realizadas de manera fácil y conveniente.
				</p>
			</div>
		</section>
		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
				<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
					<?php
					// Datos de conexión a la base de datos
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "inventario";

					// Crear conexión
					$conn = new mysqli($servername, $username, $password, $dbname);

					// Verificar la conexión
					if ($conn->connect_error) {
						die("Error de conexión: " . $conn->connect_error);
					}

					// Obtener datos de la tabla de productos
					$sql = "SELECT * FROM ventas";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					?>
						<tr>
						<th class="mdl-data-table__cell--non-numeric">Id_Venta</th>
						<th>Id_produ</th>
						<th>Producto</th>
						<th>Cantidad</th>
						<th>Precio</th>
						<th>Total</th>
						<th>Descuento</th>
						<th>Fecha</th>
						<th>Acciones</th>
					</tr>
					<?php
					while ($row = $result->fetch_assoc()) {
					?>
						<tr>
							<td class="mdl-data-table__cell--non-numeric">
								<?php echo $row['Id_Venta']?>
							</td>
							<td>
								<?php echo $row['Id_Produ']?>
							</td>
							<td>
								<?php echo$row['Producto']?>
							</td>
							<td>
								<?php echo$row['Cantidad']?>
							</td>
							<td>
								<?php echo$row['Precio']?>
							</td>
							<td>
								<?php echo $row['Total']?>
							</td>
							<td>
								<?php echo$row['Descuento']?>
							</td>
							<td>
								<?php echo$row['Fecha']?>
							</td>
							<td>
								<a href='editar_producto.php?id=<?php echo $row['Id_Venta']?>'>Editar</a> |
								<a href='borrar_producto.php?id=<?php echo $row['Id_Venta']?>'>Borrar</a>
							</td>
						</tr>
						<?php
						}
						?>
					<?php
					}
					else {
						echo "No hay productos en la base de datos.";
					}

					// Cerrar la conexión
					$conn->close();
					?>
				</table>
			</div>
		</div>
	</section>
</body>

</html>