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
                        <h4> Bookings</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-12">
                            <form class="form-horizontal" role="form" id="search_booking">
                                <div class="form-group row" style="margin-bottom: 50px; position: relative;">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="col-md-9">
                                            {*Search Input*}
                                            <input type="text" class="form-control" id="search_booking_input" placeholder="CÓDIGO BOOKING">
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
                            <th>Código</th>
                            <th>Estatus</th>
                            <th>Ruta</th>
                            <th>Cliente</th>
                            <th>Costo Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="booking_success_table">
                    {foreach  from=$bookings item=booking}
                        <tr id="booking_{$booking.id}" class="{$booking.codigo_booking}">
                            <td id="codigo_booking_{$booking.id}" >{$booking.codigo_booking}</td>
                            <td id="estatus_booking_{$booking.id}" >
                                {foreach  from=$booking.estatus_list item=estatus}
                                    <span style="font-size: 100%" class="label label-warning"> {$estatus.estatus_booking} - {$estatus.fecha_estatus_booking} </span>
                                    <br/>
                                    <br/>
                                {/foreach}
                            </td>

                            <td id="ruta_booking_{$booking.id}"> {$booking.travel.puerto_origen} - {$booking.travel.puerto_destino} <br/> {$booking.travel.fecha} </td>
                            <td id="cliente_booking_{$booking.id}"> {$booking.client.nombre} <br/> {$booking.client.pasaporte} <br/> {$booking.client.telefono} <br/> {$booking.client.email} </td>
                            <td id="costo_booking_{$booking.id}"> ${$booking.precio_booking} </td>
                            <td>
                            <span class="">
                                <a href="#" data-id="booking_{$booking.id}" class="btn btn-default" title="CONSULTAR" onclick="" data-toggle="modal" data-target="#bookingDetail"><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="#" class="btn btn-warning" title="COTIZAR" onclick="" data-toggle="modal" data-target="#bookingEdit"><i class="glyphicon glyphicon-usd"></i></a>
                                <a href="#" data-id="booking_{$booking.id}" class="btn btn-success" title="APROBAR" onclick="" data-toggle="modal" data-target="#bookingApprove"><i class="glyphicon glyphicon-thumbs-up"></i></a>
                                {*<a href="#" class="btn btn-danger" title="RECHAZAR" onclick="" data-toggle="modal" data-target="#bookingApprove"><i class="glyphicon glyphicon-thumbs-down"></i></a>*}
                                {*<a href="#" class="btn btn-success" title="EMBARCAR" onclick="" data-toggle="modal" data-target="#bookingApprove"><i class="glyphicon glyphicon-ok"></i></a>*}
                            </span>
                            </td>
                            <td class="hide" id="dut_number_booking_{$booking.id}">{$booking.client.numero_dut}</td>
                            <td class="hide" id="cargo_booking_{$booking.id}">{json_encode($booking.carga)}</td>
                            <td class="hide" id="cargo_passengers_{$booking.id}">{json_encode($booking.pasajeros)}</td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
            </div>
            <hr>
        </div>
    </div>
    {include file="admin/modal/booking_detail.tpl"}
    {include file="admin/modal/booking_approve.tpl"}
{/block}

{block name="js"}
    <script type="text/javascript" src="{$js}booking_admin.js"></script>
{/block}
