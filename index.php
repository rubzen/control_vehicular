<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Rubén Rodríguez Chávaro">
    <title>D.G.O.P.</title>
    <link rel="stylesheet" type="text/css" href="css.css" media="all">
	  <link rel="icon" type="image/ico" href="img/favicon.ico">
</head>
<body>
	<?php
		include 'include/config.php';
		include 'include/config.php';
    ?>
    <table width="753" align="center">
        <tr>
            <td><span class="pa"><img src="img/envia_01-dgop.jpg" /></span></td>
        </tr>
        <tr>
            <td background="img/envia_index.jpg">
            <ul id="nav">
              <?php
                if (in_array( $ip, $ip_tic)) {
              ?>
                <li><a href="#"><img src="img/home.png" /> Inicio</a></li>
                <li><a href="#"><span><img src="img/top4.png" /> Menú de Catálogos</span></a>
                    <div class="subs">
                            <ul>
                                <li><a href="agregararea"><img src="img/bub.png" /> Agregar Áreas</a></li>
                                <li><a href="agregarfuncionario"><img src="img/bub.png" /> Agregar Funcionarios</a></li>
                                <li><a href="agregarpersonal"><img src="img/bub.png" /> Agregar Resguardantes</a></li>
                                <li><a href="agregarusuario"><img src="img/bub.png" /> Agregar Usuarios</a></li>
                                <li><a href="agregarmarca"><img src="img/bub.png" /> Agregar Marcas de Vehículos</a></li>
                                <li><a href="agregartaller"><img src="img/bub.png" /> Agregar Taller y/o Servicio</a></li>
                            </ul>
                    </div>
                </li>
              <?php
                }
					    ?>
              <?php
                if (in_array( $ip, $ip_admin) || in_array($ip, $ip_tic)) {
              ?>
                <li><a href="#"><span><img src="img/top5.png" /> Menú de Capturas</span></a>
                    <div class="subs">
                            <ul>
                                <li><a href="format_nuevo.php"><img src="img/bub.png" /> Formato de Resguardos</a></li>
                                <li><a href="ordenrepara"><img src="img/bub.png" /> Orden de Reparación</a></li>
                            </ul>
                    </div>
                </li>
              <?php
                }
					    ?>
              <?php
                if (in_array( $ip, $ip_admin) || in_array($ip, $ip_tic)) {
              ?>
                <li><a href="#"><span><img src="img/top3.png" /> Menú de Reportes</span></a>
                    <div class="subs">
                            <ul>
                                <li><a href="vista"><img src="img/bub.png" /> Resguardo de Vehículos</a></li>
                                <li><a href="vista/indexorden.php"><img src="img/bub.png" /> Ordenes de Reparación</a></li>
                                <li><a href="vista/historeps.php"><img src="img/bub.png" /> Historial de Reparaciones</a></li>
                                <li><a href="vista/vehics_area.php"><img src="img/bub.png" /> Vehículos por Área</a></li>
                            </ul>
                    </div>
                </li>
              <?php
                }
              ?>
            </ul>
            </td>
        </tr>
        <tr align="left">
          <td background="img/envia_index.jpg" class="opciones">
            <span class="pa"><img src="img/colash.png" width=100% height=400px /></span>
          </td>
        </tr>
        <tr>
            <td ><img src="img/pie_pagina-dgop.jpg" alt="2" width="753" height="104" /></td>
        </tr>
    </table>
</body>
</html>
