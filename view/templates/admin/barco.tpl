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
                        <h4> Barcos</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-12">

                            <form class="form-horizontal" role="form" id="search_booking">
                                <div class="form-group row" style="margin-bottom: 50px; position: relative;">
                                    <div class="col-md-4">
                                        {*Create Button*}
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#barcoAdd">
                                            <span class="glyphicon glyphicon-plus"></span> Nuevo Barco
                                        </button>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="col-md-9">
                                            {*Search Input*}
                                            <input type="text" class="form-control" id="search_booking_input" placeholder="NOMBRE DEL BARCO">
                                        </div>
                                        <div class="col-md-3">
                                            {*Search Button*}
                                            <button id="search_booking_button" type="button" class="btn btn-default"style="margin-left: -25px;border:  0px solid transparent;height: 33px;margin-top: 1px;">
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
                    <tbody id="add_barco_success_table">

                    {foreach  from=$barcos item=barco}
                        <tr id="barco_{$barco.id}" class="{$barco.nombre}">
                            <td id="nombre_barco_{$barco.id}" >{$barco.nombre}</td>
                            <td id="ancho_barco_{$barco.id}">{intval($barco.ancho)} Mts</td>
                            <td id="alto_barco_{$barco.id}">{intval($barco.alto)} Mts</td>
                            <td id="largo_barco_{$barco.id}">{intval($barco.largo)} Mts</td>
                            <td id="capacidad_barco_{$barco.id}">{intval($barco.capacidad)} Ton</td>
                            <td>
                            <span class="">
                                <a href="#" data-id="barco_{$barco.id}" class="btn btn-default" title="editar barco" data-toggle="modal" data-target="#barcoEdit">
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
    {include file="admin/modal/add_barco.tpl"}
    {include file="admin/modal/edit_barco.tpl"}
{/block}

{block name="js"}
    <script type="text/javascript" src="{$js}barco.js"></script>
{/block}
