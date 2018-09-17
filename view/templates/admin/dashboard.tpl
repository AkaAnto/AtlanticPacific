{extends file="admin/base.tpl"}

{block name="css"}
    <link rel="stylesheet" type="text/css" href="{$css}custom.css" />
{/block}

{block name="content"}
    <div class="container">
        <div class="row">
            <div class="panel panel-info">
            <div class="panel-heading">
                <div class="col-md-4">
                    <h4> Bookings</h4>
                </div>
                <div class="col-md-8">
                    <form class="form-horizontal" role="form" id="search_booking">
                        <div class="form-group row" style="margin-bottom: 50px; position: relative; left: 27%;">
                            <label class="col-md-2 control-label" style="color:#000">  Número:</label>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="search_booking_input" placeholder="03820320" onkeyup='load(1);'>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-default" onclick='load(1);'>
                                    <span class="glyphicon glyphicon-search" ></span> Buscar</button>
                                <span id="loader"></span>
                            </div>
                        </div>
                    </form>
                </div>
                <br/>
                <br/>
            </div>
            <div class="panel-body">
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
            <hr>
        </div>
    </div>
{/block}

