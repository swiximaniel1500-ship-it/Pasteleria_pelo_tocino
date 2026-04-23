<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Pasteleria Pelo Tocino</title>
        <link rel="stylesheet" href="pasteles.css">
         <link rel="icon" type="image/x-icon" href="Imgs/pelo tocino.png">
    </head>
    <body>
        <header>
            <table class="Logo">
                <tr>
                    <td><img src="Imgs/noFilter.png" alt="foto" width="150" title="Panchito"></td>
                    <td><h1><i>Pasteleria Pelo Tocino</i></h1></td>
                </tr>

            </table>
            <nav>
                <ul>
                    <li><a href="#Pasteles">Pasteles |</a></li>
                    <li><a href="#Pedido">| Pedido |</a></li>
                    <li><a href="#Contactanos">| Contactanos |</a></li>
                    <li><a href="#Sobrenosotros">| Sobre Nosotros</a></li>
                </ul>
            </nav>
        </header>
        <section id="Pasteles" class="Pasteles">
             <h2>Nuestros Pasteles 🎂</h2>
            <table class="Tippast">
		<tr >
			<td class="Tippast2"><img src="Imgs/R.jpg" alt="foto" width="150"><br>Pay de queso con zarzamora <br> $250 <br> Disponibilidad: 9 <br> </td>
			<td class="Tippast2"><img src="Imgs/Zanahoria.jpg" alt="foto" width="110"><br>Pastel de zanahoria <br> $345 <br> Disponibilidad: 4 </td>
            <td class="Tippast2"><img src="Imgs/Tarta.png" alt="foto" width="150"><br>Tarta de mermelada y frutas <br> $65 <br> Disponibilidad: 15</td>
            <td class="Tippast2"><img src="Imgs/jengibre.jpg" alt="foto" width="110"><br>Galletas de jengibre(pack 10)<br> $50 <br> Disponibilidad: 58</td>
</tr>
	</table>
        </section>
         
        <section id="Pedido" class="Pedido">
            <h2>Pedido 📦</h2>
            <h3> Promociones<h3>
                <h4> A continuación nuestras promociones</h4>
                <?php
	$_prod1="Pay de queso con zarzamora";   $_prod2="Pastel de zanahoria"; $_prod3="Tarta de mermelada y frutas"; $_prod4="Galletas de jengibre";  //nombre del producto
	$_precio1=250; $_precio2=345;$_precio3=65;$_precio4=50;//Precio unitario
	$_stock1=9;  $_stock2=4; $_stock3=15; $_stock4=58; //Cantidad en existencia


	print "<hr> PROMOCIONES PASTEL DE ".$_prod1."<br>";
	$_desc; $_porc=0.05;
	for($_i=2; $_i<6; $_i++){
		print "Día: ".$_i." $".$_desc=($_precio1-($_precio1*$_porc))."<br>";
		$_porc=($_porc+0.01);
	}

    print "<hr> PROMOCIONES PASTEL DE ".$_prod2."<br>";
	$_desc; $_porc=0.05;
	for($_i=2; $_i<6; $_i++){
		print "Día: ".$_i." $".$_desc=($_precio2-($_precio2*$_porc))."<br>";
		$_porc=($_porc+0.01);
	}
    print "<hr> PROMOCIONES PASTEL DE ".$_prod3."<br>";
	$_desc; $_porc=0.05;
	for($_i=2; $_i<6; $_i++){
		print "Día: ".$_i." $".$_desc=($_precio3-($_precio3*$_porc))."<br>";
		$_porc=($_porc+0.01);
	}
    print "<hr> PROMOCIONES PASTEL DE ".$_prod4."<br>";
	$_desc; $_porc=0.05;
	for($_i=2; $_i<6; $_i++){
		print "Día: ".$_i." $".$_desc=($_precio4-($_precio4*$_porc))."<br>";
		$_porc=($_porc+0.01);
	}

	?>
                
<form action="#Pedido" method="POST"> 
    <br>
    <br>
                    <label> Nombre completo: </label>
                        <input type="text" name="Nombre" class="requerimiento" placeholder="Escribe tu nombre completo" required>
                   
                    <label>Telefono/Celular</label>
                    <input type="text" name="telefono" class="requerimiento" placeholder="228..." required>

                    <br>
                    <br>
                    <label> Seleccione su postre: </label>
                     <select name="Pastel">
                        <option value="1"> Pay de queso con zarzamora</option>
                        <option value="2"> Pastel de zanahoria</option>
                        <option value="3"> Tarta de mermelada y frutas</option>
                        <option value="4"> Galletas de jengibre</option>
                    </select>

                    <label> Seleccione promocion del dia: </label>
                     <select name="Dia">
                        <option value="1"> 1</option>
                        <option value="2"> 2</option>
                        <option value="3"> 3</option>
                        <option value="4"> 4</option>
                        <option value="5"> 5</option>

                    </select>
                    <br><br>
                    <button type="submit" name="Comprar" id="btn-enviar"> Comprar</button>
                    <br><br>
                </form>
                <?php
                include("Conexion.php");
                
                if(isset($_POST['Comprar']));

                $Nombre=mysqli_real_escape_string($conexion,$_POST['Nombre']);
                $telefono=mysqli_real_escape_string($conexion,$_POST['telefono']);
                $pastel=mysqli_real_escape_string($conexion,$_POST['Pastel']);
                $dia=mysqli_real_escape_string($conexion,$_POST['Dia']);

                $insertar="INSERT INTO cakes (nombre,telefono,pastel,dia) VALUES ('$Nombre','$telefono','$pastel','$dia')";

                if(mysqli_query($conexion,$insertar)){
                    echo"<script>alert('¡Compra exitosa!');</script";
                }else{
                    "Error al guardar:".mysqli_error($conexion);
                }
                ?>
        </section>
        <section id="Contactanos" class="Contactanos">
            <table class="Contactanostab">
                <tr class="Cnt">
                <td>
            <h2><strong>¡¡Contactanos!!📞</strong></h2>
            <p>Ubicación: Calle Ignacio de la llave No. 23</p>
            <p>Por el cinepolis, que no se te olvide pasar<br>
            Telefono: 2537891243 <br>
        Siguenos en nuestras redes sociales: @Chonita_pasteleria</p></td>
        <td><img src="Imgs/hq720.jpg" alt="foto" width="150"> <img src="Imgs/pasteldenose.jpg" alt="foto" width="150"></td>
        </tr>
        </table>
        </section>
        <section id="Sobrenosotros" class="Sobrenosotros">
            <table class="SNtros">
                <tr>
                    <td><img src="Imgs/hq2.jpg" width="150"><img src="Imgs/hqdefault.jpg" width="150"></td>
                    <td>
            <h2><i>Sobre Nosotros...😉</i></h2>
            <p> Somos una empresa socialmente responsable<br>
            ofreciendo productos de calidad a todos nuestros<br>
            consumidores. Cocinamos y preparamos con procesos<br>
            artesanales, aparte los ingredientes ocupados<br>
            son 100% naturales.
            </td>
            </tr>
            </table>
        </section>
         <footer>
        <p><small>Empresa 100% socialmente reponsable.
            Lee nuestras politicas de privacidad</small></p>
        </footer>
    </body>
</html>