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
                        <h4> Tarifas de Pasajero</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-12">
                            <form class="form-horizontal" role="form" id="search_booking">
                                <div class="form-group row" style="margin-bottom: 50px; position: relative;">
                                    <div class="col-md-4">
                                        {*Create Button*}
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tarifaAdd">
                                            <span class="glyphicon glyphicon-plus"></span> Nueva Tarifa de Pasajero
                                        </button>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="col-md-9">
                                            {*Search Input*}
                                            <input type="text" class="form-control" id="search_tarifa_input" placeholder="NOMBRE DEL BARCO">
                                        </div>
                                        <div class="col-md-3">
                                            {*Search Button*}
                                            <button id="search_tarifa_button" type="button" class="btn btn-default"style="margin-left: -25px;border:  0px solid transparent;height: 33px;margin-top: 1px;">
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
                            <th>Particular</th>
                            <th>En auto a bordo</th>
                            <th>En autobus a bordo</th>
                            <th>Ayudante de gandola</th>
                            <th>Conductor de gandola</th>
                            <th>Conductor de autobus</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="add_tarifa_success_table">
                    {foreach  from=$tarifa_pasajeros item=tarifa}
                        <tr id="tarifa_{$tarifa.id_barco}" class="{$tarifa.nombre}">
                            <td id="nombre_tarifa_{$tarifa.id_barco}" >{$tarifa.nombre}</td>
                            <td id="tarifa_particular_{$tarifa.id_barco}"> <b> {intval($tarifa.particular)}$</b></td>
                            <td id="tarifa_en_auto_{$tarifa.id_barco}"> <b> {intval($tarifa.en_auto)}$</b></td>
                            <td id="tarifa_en_autobus_{$tarifa.id_barco}"> <b> {intval($tarifa.en_autobus)}$</b></td>
                            <td id="tarifa_ayudante_gandola_{$tarifa.id_barco}"> <b> {intval($tarifa.ayudante_gandola)}$</b></td>
                            <td id="tarifa_conductor_gandola_{$tarifa.id_barco}"> <b> {intval($tarifa.conductor_gandola)}$</b></td>
                            <td id="tarifa_conductor_autobus_{$tarifa.id_barco}"> <b> {intval($tarifa.conductor_autobus)}$</b></td>
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
    {include file="admin/modal/add_tarifa_pasajero.tpl"}
    {include file="admin/modal/edit_tarifa_pasajero.tpl"}
{/block}

{block name="js"}
    <script type="text/javascript" src="{$js}tarifa_pasajero.js"></script>
{/block}
