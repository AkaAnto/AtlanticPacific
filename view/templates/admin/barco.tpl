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
                    <h4> Barcos</h4>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12">
                        <form class="form-horizontal" role="form" id="search_booking">
                            <div class="form-group row" style="margin-bottom: 50px; position: relative;">
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#barcoAdd">
                                        <span class="glyphicon glyphicon-plus"></span> Nuevo Barco
                                    </button>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="search_booking_input" placeholder="NOMBRE DEL BARCO" onkeyup='load(1);'>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-default" onclick="load(1);" style="margin-left: -25px;border:  0px solid transparent;height: 33px;margin-top: 1px;">
                                            <span class="glyphicon glyphicon-search"></span> Buscar
                                        </button>
                                    </div>
                                    <span id="loader"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br/>
                <br/>
            </div>
            <div class="panel-body">
                <table class="table" id="table-booking">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Ancho Plataforma</th>
                        <th>Alto Plataforma</th>
                        <th>Largo Plataforma</th>
                        <th>Peso Máx</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach  from=$barcos item=barco}
                        <tr id="barco_{$barco.id}">
                            <td>{$barco.nombre}</td>
                            <td>{$barco.ancho} Mts</td>
                            <td>{$barco.alto} Mts</td>
                            <td>{$barco.largo} Mts</td>
                            <td>{$barco.capacidad} Ton</td>
                            <td>
                            <span class="">
                                <a href="#" data-id="barco_{$barco.id}" class="btn btn-default" title="ver booking" onclick="" data-toggle="modal" data-target="#bookingDetail"><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="#" data-id="barco_{$barco.id}" class="btn btn-default" title="editar booking" onclick="" data-toggle="modal" data-target="#bookingEdit"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="#" data-id="barco_{$barco.id}" class="btn btn-default" title="aprobar booking" onclick="" data-toggle="modal" data-target="#bookingApprove"><i class="glyphicon glyphicon-ok"></i></a>
                            </span>
                            </td>
                        </tr>
                    {/foreach}
                    <div id="resultados"></div>
                    </tbody>
                </table>
                <!--<div id="resultados"></div><!-- Carga los datos ajax -->
                <!--<div class='outer_div'></div><!-- Carga los datos ajax -->
            </div>
        </div>
            <hr>
        </div>
    </div>

    {include file="admin/modal/add_barco.tpl"}
{/block}

{block name="js"}
    <script type="text/javascript" src="{$js}barco.js"></script>
{/block}
