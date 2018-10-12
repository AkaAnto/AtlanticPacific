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
                        <h4> Pagos</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-12">

                            <form class="form-horizontal" role="form" id="search_booking">
                                <div class="form-group row" style="margin-bottom: 50px; position: relative;">
                                    <div class="col-md-4">
                                        {*Create Button*}
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#pagoAdd">
                                            <span class="glyphicon glyphicon-plus"></span> Nuevo Pago
                                        </button>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="col-md-9">
                                            {*Search Input*}
                                            <input type="text" class="form-control" id="search_booking_input" placeholder="ID DEL PAGO">
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
                <table class="table" id="table-pago">
                    <thead>
                        <tr>
                            <th>Código Booking</th>
                            <th>Ruta del comprobante</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="add_pago_success_table">

                    {foreach  from=$pagos item=pago}
                        <tr id="pago_{$pago.id_booking}" class="{$pago.id_booking}">
                            <td id="codigo_pago_{$pago.id_booking}" >{$pago.id_booking}</td>
                            <td id="pago_ruta_comprobante_{$pago.id_booking}"> <b> {$pago.ruta_comprobante}</b></td>
                            <td id="pago_fecha_{$pago.id_booking}"> <b> {$pago.fecha}</b></td>
                            <td>
                            <span class="">
                                <a href="#" data-id="pago_{$pago.id}" class="btn btn-default" title="editar pago" data-toggle="modal" data-target="#pagoEdit">
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
   {include file="admin/modal/add_pago.tpl"}
   {include file="admin/modal/edit_pago.tpl"}
   
{/block}

{block name="js"}
    <script type="text/javascript" src="{$js}pago.js"></script>
{/block}
