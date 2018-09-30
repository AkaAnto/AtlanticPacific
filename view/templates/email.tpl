<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Cotización Realizada</title>
    <style>
        .label {
            display: block;
            padding: .2em .6em .3em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-align: center;
            white-space: pre-line;
            vertical-align: baseline;
            border-radius: .25em;
            margin-top: 10px;
        }

        .label-success {
            font-size: 14px;
            background-color: transparent;
            border: solid darkslategrey 1px;
        }
       .table tbody td{
           border: solid 1px blue;
       }

        .label-value{
            font-size: 14px;
            background-color: transparent;
            border: solid blue 0px;
        }


        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb;
        }
        .alert-dismissible {
            padding-right: 4rem;
        }
        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
            font-size: medium;
        }

    </style>
</head>
<body id="body">
        <h1 class="title-contact" align="center" style="color:#005292; ">Booking 0023933821</h1>

        <div class="alert alert-dismissible alert-info">
            Hemos registrado su cotizacion y la estamos procesando, una vez sea aprobada recibirá un nuevo correo con la
            información para realizar el pago y confirmar su cotización.
        </div>

        <div class="col-md-12">
            <h2 class="title-contact" align="left" style="color:#005292; ">Detalles de Cotización</h2>
            <table class="table">
                <thead>
                <tr>
                    <th> <span class="label label-success text-uppercase"> Nombre</span> </th>
                    <th> <span class="label label-success text-uppercase"> Pasaporte </span> </th>
                    <th> <span class="label label-success text-uppercase"> Teléfono </span> </th>
                    <th> <span class="label label-success text-uppercase"> Email </span> </th>
                    <th> <span class="label label-success text-uppercase"> Fecha</span> </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <span class="label label-value text-uppercase">Cliente Perez </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">7392329 </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">02838392 </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">cliente@cargo.com </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">{date("d-m-y")}</span>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <h2 class="title-contact" align="left" style="color:#005292; ">Detalles de Viaje</h2>
            <table class="table">
                <thead>
                <tr>
                    <th> <span class="label label-success text-uppercase"> Número Booking </span> </th>
                    <th> <span class="label label-success text-uppercase"> Número Dut </span> </th>
                    <th> <span class="label label-success text-uppercase"> Puerto Salida </span> </th>
                    <th> <span class="label label-success text-uppercase"> Puerto Llegada </span> </th>
                    <th> <span class="label label-success text-uppercase"> Fecha/Hora </span> </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <span class="label label-value text-uppercase">0023933821 </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">7392329 </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">El Salvador </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">Costa Rica </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">03-10-2018 - 7:00 AM</span>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <h2 class="title-contact" align="left" style="color:#005292; ">Detalles de la Carga</h2>
            <table class="table">
                <thead>
                <tr>
                    <th> <span class="label label-success text-uppercase"> Detalles Vehículo </span></th>
                    <th> <span class="label label-success text-uppercase"> Dueño de Carga </span> </th>
                    <th> <span class="label label-success text-uppercase"> Detalles Carga </span> </th>
                    <th> <span class="label label-success text-uppercase"> Precio </span></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="label label-value text-uppercase">Furgon sin cabezal </span>
                            <span class="label label-value text-uppercase">993JKKD</span>
                            <span class="label label-value text-uppercase">0 - 4 mts de Altura </span>
                            <span class="label label-value text-uppercase">0 - 2,6 mts de Ancho</span>
                            <span class="label label-value text-uppercase">12 mts LARGO </span>
                            <span class="label label-value text-uppercase">12 TON </span>
                        </td>
                        <td>
                            <span class="label label-value text-uppercase">N/A</span>
                            <span class="label label-value text-uppercase">N/A</span>
                        </td>
                        <td>
                            <span class="label label-value text-uppercase">SIN CARGA </span>
                            <span class="label label-value text-uppercase">NO TRANSPORTA CARGA</span>
                            <span class="label label-value text-uppercase"> TON </span>
                        </td>
                        <td>
                            <span class="label label-value text-uppercase"> <b>400$</b> </span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h2 class="title-contact" align="left" style="color:#005292; ">Detalles de Pasajeros</h2>
            <table class="table">
                <thead>
                <tr>
                    <th> <span class="label label-success text-uppercase"> Tipo Pasajero </span> </th>
                    <th> <span class="label label-success text-uppercase"> Información Pasajero </span> </th>
                    <th> <span class="label label-success text-uppercase"> Precio </span> </th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <span class="label label-value text-uppercase"> Pasajero Particular </span> </td>
                        <td> <span class="label label-value text-uppercase"> Elon Musk  <br> 343344 </span> </td>
                        <td> <span class="label label-value text-uppercase"> <b>1$</b> </span> </td>
                    </tr>
                    <tr>
                        <td> <span class="label label-value text-uppercase"> Pasajero en Auto a bordo (Max 4) </span></td>
                        <td> <span class="label label-value text-uppercase"> Joe Rogan <br> 3433441 </span></td>
                        <td> <span class="label label-value text-uppercase"> <b>2$</b> </span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br/>
        <div class="col-md-12">
            <div class="col-md-4" align="right">
                <hr style="border-top:solid 1px black;">
                <div class="col-md-12" style="display: block">
                    <h3>Sub Total:  <b>403$</b> </h3>
                </div>
                <div class="col-md-12" style="display: block">
                    <h3>Impuestos:  <b> 25$</b> </h3>
                </div>
            </div>
            <div class="col-md-12" align="right">
                <h2>Total:  <b> 428$</b> </h2>
            </div>
        </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
