<?php
	session_start();
	/*if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }*/

	/* Connect To Database*/
//	require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
//	require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
	$active_facturas="";
    $active_bookings="active";		
	$title="Bookings | Bookings";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php include("head.php");?>
  </head>
  <body>
 	<?php
	include("navbar.php");
	?> 
    <div class="container">
		<div class="panel panel-info">
		<div class="panel-heading">
		    
			<h4><i class='glyphicon glyphicon-search'></i> Buscar Bookings</h4>
		</div>			
			<div class="panel-body">
			<?php
			include("modal/ver_bookings.php");
			include("modal/editar_bookings.php");
			include("modal/aprobar_bookings.php");
			?>
			<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row" style="margin-bottom: 50px; position: relative; left: 27%;">
							<label for="q" class="col-md-2 control-label">  Nombre:</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre" onkeyup='load(1);'>
							</div>
							
							
							
							<div class="col-md-3">
								<button type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-search" ></span> Buscar</button>
								<span id="loader"></span>
							</div>
							
						</div>
				
				
				
            </form>
            
                <table class="table" id="table-booking">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ruta</th>
                        <th>Cliente</th>
                        <th>Costo Total</th>
												<th>Fecha de Creación</th>
												<th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
											<tr>
												<th>
													<span class="glyphicon glyphicon-warning-sign" style="color:#efd032;" aria-hidden="true"></span>
													654564
												</th>
												<td>Costa Rica - El Salvador - 01/12/2018 - 7:00 am</br>El Salvador - Costa Rica - 03/12/2018 - 6:00 pm</td>
												<td>Sabina Quiroga</br>0414-852-5478</br>sabina@gmail.com</td>
												<td>$750</td>
												<td>28/08/2018</td>
												<td>
													<span class="">
														<a href="#" class="btn btn-default" title="ver booking" onclick="" data-toggle="modal" data-target="#bookingDetail"><i class="glyphicon glyphicon-eye-open"></i></a> 
														<a href="#" class="btn btn-default" title="editar booking" onclick="" data-toggle="modal" data-target="#bookingEdit"><i class="glyphicon glyphicon-edit"></i></a>
														<a href="#" class="btn btn-default" title="aprobar booking" onclick="" data-toggle="modal" data-target="#bookingApprove"><i class="glyphicon glyphicon-ok"></i></a>
													</span>
												</td>
												
											</tr>
                    </tbody>
                </table>
				<!--<div id="resultados"></div><!-- Carga los datos ajax -->
				<!--<div class='outer_div'></div><!-- Carga los datos ajax -->
						
			</div>
		</div>

	</div>
	<hr>
	<?php
	include("footer.php");
	?>
	

  </body>
</html>
<script>
    subtotal_price_cargo = parseFloat($('#price').val()) +  parseFloat($('#price2').val());
    subtotal_price_passenger = parseFloat($('#pasajero1').text().replace(' ',''))+  parseFloat($('#pasajero2').text().replace(' ','')) +  parseFloat($('#pasajero3').text().replace(' ',''));
    console.log('subtotal_price_passenger ', subtotal_price_passenger);
    subtotal_final = subtotal_price_cargo  + subtotal_price_passenger ;
    total_final = subtotal_price_cargo + subtotal_final;
    var subtotal_cargo = '<b>SUB-TOTAL CARGO: </b> $' + subtotal_price_cargo;
    var subtotal_passenger = '<b>SUB-TOTAL PASSENGER: </b> $' + subtotal_price_passenger;
    var subtotal_final = '<b>SUB-TOTAL: </b> $' + subtotal_final;
    var total_final = '<b>TOTAL: </b> $' + total_final;
    $('#cargo_subtotal').html(subtotal_cargo);
    $('#passenger_subtotal').html(subtotal_passenger);
    $('#subtotal_final').html(subtotal_final);
    $('#total_final').html(total_final);


    $('#price, #price2').keyup(function(event){


        subtotal_price_cargo = parseFloat($('#price').val()) +  parseFloat($('#price2').val());
        subtotal_price_passenger = parseFloat($('#pasajero1').text().replace(' ',''))+  parseFloat($('#pasajero2').text().replace(' ','')) +  parseFloat($('#pasajero3').text().replace(' ',''));
        console.log('subtotal_price_passenger ', subtotal_price_passenger);
        subtotal_final = subtotal_price_cargo  + subtotal_price_passenger ;
        total_final = subtotal_price_cargo + subtotal_final;
        var subtotal_cargo = '<b>SUB-TOTAL CARGO: </b> $' + subtotal_price_cargo;
        var subtotal_passenger = '<b>SUB-TOTAL PASSENGER: </b> $' + subtotal_price_passenger;
        var subtotal_final = '<b>SUB-TOTAL: </b> $' + subtotal_final;
        var total_final = '<b>TOTAL: </b> $' + total_final;
        $('#cargo_subtotal').html(subtotal_cargo);
        $('#passenger_subtotal').html(subtotal_passenger);
        $('#subtotal_final').html(subtotal_final);
        $('#total_final').html(total_final);


    });


</script>