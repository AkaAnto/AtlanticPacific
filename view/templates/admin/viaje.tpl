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
                        {*Title*}
                        <h4> Viajes</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-12">
                            <form class="form-horizontal" role="form" id="search_booking">
                                <div class="form-group row" style="margin-bottom: 50px; position: relative;">
                                    <div class="col-md-4">
                                        {*Create Button*}
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#viajeAdd">
                                            <span class="glyphicon glyphicon-plus"></span> Nuevo viaje
                                        </button>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="col-md-9">
                                            {*Search Input*}
                                            <input type="text" class="form-control" id="search_viaje_input" placeholder="NOMBRE DEL BARCO">
                                        </div>
                                        <div class="col-md-3">
                                            {*Search Button*}
                                            <button id="search_viaje_button" type="button" class="btn btn-default"style="margin-left: -25px;border:  0px solid transparent;height: 33px;margin-top: 1px;">
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
                <table class="table" id="table-tarifa">
                    <thead>
                        <tr>
                            <th>Barco</th>
                            <th>Fecha</th>
                            <th>Puerto Origen</th>
                            <th>Puerto Destino</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="add_viaje_success_table">
                    {foreach  from=$viajes item=viaje}
                        <tr id="viaje_{$viaje.id_barco}" class="{$viaje.nombre}">
                            <td id="nombre_viaje_{$viaje.id_barco}" >{$viaje.nombre}</td>
                            <td id="viaje_fecha_{$viaje.id_barco}"> <b> {$viaje.fecha}</b></td>
                            <td id="viaje_puerto_origen_{$viaje.id_barco}"> <b> {$viaje.puerto_origen}</b></td>
                            <td id="viaje_puerto_destino_{$viaje.id_barco}"> <b> {$viaje.puerto_destino}</b></td>
                            <td id="viaje_estado_{$viaje.id_barco}"> <b> {$viaje.estado}</b></td>

                            <td>
                            <span class="">
                                {*<a href="#" class="btn btn-default" title="ver tarifa"  data-toggle="modal" data-target="#tarifaDetail">*}
                                    {*<i data-id="tarifa_{$tarifa.id_barco}" class="glyphicon glyphicon-eye-open"></i>*}
                                {*</a>*}
                                <a href="#" data-id="tarifa_{$tarifa.id_barco}" class="btn btn-default" title="editar tarifa" data-toggle="modal" data-target="#tarifaEdit">
                                    <i class="glyphicon glyphicon-edit"></i>
                                </a>
                            </span>
                            </td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
            </div>
            <hr>
        </div>
    </div>
    {include file="admin/modal/add_viaje.tpl"}
{/block}

{block name="js"}
     <script type="text/javascript" src="{$js}viaje.js"></script>
{/block}
