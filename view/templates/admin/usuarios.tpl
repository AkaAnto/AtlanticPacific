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
                        <h4> Usuarios</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-12">
                            <form class="form-horizontal" role="form" id="search_usuario">
                                <div class="form-group row" style="margin-bottom: 50px; position: relative;">
                                    <div class="col-md-4">
                                        {*Create Button*}
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#usuarioAdd">
                                            <span class="glyphicon glyphicon-plus"></span> Nuevo Usuario
                                        </button>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="col-md-9">
                                            {*Search Input*}
                                            <input type="text" class="form-control" id="search_usuario_input" placeholder="NOMBRE DE USUARIO">
                                        </div>
                                        <div class="col-md-3">
                                            {*Search Button*}
                                            <button id="search_usuario_button" type="button" class="btn btn-default"style="margin-left: -25px;border:  0px solid transparent;height: 33px;margin-top: 1px;">
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
                <table class="table" id="table-viaje">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="add_user_success_table">
                    {foreach  from=$users item=user}
                        <tr id="user_{$user.user_id}" class="{$user.user_name}">
                            <td id="username_user_{$user.user_id}" ><b>{$user.user_name}</b></td>
                            <td id="nombre_user_{$user.user_id}" >{$user.firstname}</td>
                            <td id="apellido_user_{$user.user_id}"> {$user.lastname}</td>
                            <td id="mail_user_{$user.user_id}">{$user.user_email}</td>
                            <td id="role_user_{$user.user_id}">
                                {if ($user.is_admin === '1')}
                                    <b>Administrador</b>
                                {/if}
                                {if ($user.is_cotizador === '1')}
                                    <b>Cotizador</b>
                                {/if}
                                {if ($user.is_aprobador === '1')}
                                    <b>Aprobador</b>
                                {/if}
                            </td>

                            <td>
                            <span class="">
                                <a href="#" data-id="user_{$user.user_id}" class="btn btn-default" title="editar usuario" data-toggle="modal" data-target="#usuarioEdit">
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
    {include file="admin/modal/add_usuario.tpl"}
    {include file="admin/modal/edit_usuario.tpl"}

{/block}

{block name="js"}
     <script type="text/javascript" src="{$js}usuario.js"></script>
{/block}
