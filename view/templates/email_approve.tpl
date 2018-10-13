<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Cotización Aprobada</title>
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
        <h1 class="title-contact" align="center" style="color:#005292; ">Booking {$codigo_booking}</h1>

        <div class="alert alert-dismissible alert-info">
            Su cotización ha sido aprobada, a cotinuación la información para realizar su pago. Tiene 72 horas para reportar su pago:
            <a class="btn btn-lg btn-success btn-block btn-signin" href="http://www.atpashipping.com/paybooking.php?booking={$codigo_booking}" target="_blank">
                Click Aquí para reportar el pago
            </a>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th> <span class="label label-success text-uppercase"> Moneda</span> </th>
                    <th> <span class="label label-success text-uppercase"> Información Bancaria  </span> </th>
                    <th> <span class="label label-success text-uppercase"> Transfrencias a nombre de </span> </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <span class="label label-value text-uppercase">US$ (Dólares Americanos)</span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            CITIBANK NEW YORK, N.Y. <br>
	                        SWIFT CITIUS33 <br>
	                        ABA 021000089 <br>
                            BANCO GENERAL, S.A. - PANAMA <br>
	                        SWIFT BAGEPAPA <br>
                            CTA # 10951934
                        </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            Smart logistics cargo, S.A. <br>
                            cta. 03-74-01-110990-4 <br>
                            Panamá, Panamá
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="label label-value text-uppercase">US$ (Dólares Americanos)</span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            WELLS FARGO BANK, N.A. <br>
	                        Swift PNBPUS3NNYC  <br>
	                        AABA: 026005092 <br>
                            BANCO GENERAL, S.A. - PANAMA <br>
	                        SWIFT BAGEPAPA <br>
                            CTA 2000192000534
                        </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            Smart logistics cargo, S.A. <br>
                            cta. 03-74-01-110990-4  <br>
                            Panamá, Panamá
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="label label-value text-uppercase">MXN (Pesos mexicanos)</span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            BANCO SANTANDER (MEXICO), S.A. MEXICO, F.D. <br>
	                        SWIFT CODE: BMSXMXMM  <br>
                            N/O BANCO GENERAL, S.A. - PANAMA <br>
	                        SWIFT BAGEPAPA <br>
                            ACCOUNT: 2498
                        </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            Smart logistics cargo, S.A. <br>
                            cta. 03-74-01-110990-4 <br>
                            Panamá, Panamá
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="label label-value text-uppercase">CAD (Dólares canadienses)</span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            OMMERZBANK AG<br>
	                        SWIFT CODE: COBADEFF  <br>
                            BANCO GENERAL, S.A.<br>
	                        SWIFT CODE BAGEPAPA <br>
                        </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            Smart logistics cargo, S.A. <br>
                            cta. 03-74-01-110990-4 <br>
                            Panamá, Panamá
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="label label-value text-uppercase">CHF (Francos suizos)</span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            OMMERZBANK AG<br>
	                        SWIFT CODE: COBADEFF  <br>
                            BANCO GENERAL, S.A.<br>
	                        SWIFT CODE BAGEPAPA <br>
                        </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            Smart logistics cargo, S.A. <br>
                            cta. 03-74-01-110990-4 <br>
                            Panamá, Panamá
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="label label-value text-uppercase">EUR (Euros)</span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            OMMERZBANK AG<br>
	                        SWIFT CODE: COBADEFF  <br>
                            BANCO GENERAL, S.A.<br>
	                        SWIFT CODE BAGEPAPA <br>
                        </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            Smart logistics cargo, S.A. <br>
                            cta. 03-74-01-110990-4 <br>
                            Panamá, Panamá
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="label label-value text-uppercase">GBP (Libras esterlinas)</span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            OMMERZBANK AG<br>
	                        SWIFT CODE: COBADEFF  <br>
                            BANCO GENERAL, S.A.<br>
	                        SWIFT CODE BAGEPAPA <br>
                        </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            Smart logistics cargo, S.A. <br>
                            cta. 03-74-01-110990-4 <br>
                            Panamá, Panamá
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="label label-value text-uppercase">JPY (Yenes)</span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            OMMERZBANK AG<br>
	                        SWIFT CODE: COBADEFF  <br>
                            BANCO GENERAL, S.A.<br>
	                        SWIFT CODE BAGEPAPA <br>
                        </span>
                    </td>
                    <td>
                        <span class="label label-value text-uppercase">
                            Smart logistics cargo, S.A. <br>
                            cta. 03-74-01-110990-4 <br>
                            Panamá, Panamá
                        </span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
