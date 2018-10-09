<!DOCTYPE html>
<html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Border Guardian | Lista de Usuarios</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/bootstrap/dist/css/bootstrap.min.css"?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/font-awesome/css/font-awesome.min.css"?>">

    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/Ionicons/css/ionicons.min.css"?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/AdminLTE.min.css"?>">

    <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/skins/skin-blue.min.css"?>">

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
      .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
      }

      .example-modal .modal {
        background: transparent !important;
      }
    </style>
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo base_url()."admin"?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>B</b>G</span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>Border </b>Guardian</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU ADMIN</li>
            <!-- Optionally, you can add icons to the links -->
			      <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-home"></i> <span>Início</span></a></li>
			      <li class="active"><a href="<?php echo base_url('order_list');?>"><i class="fa fa-list"></i> <span>Lista de Usuarios</span></a></li>
            <li><a href="<?php echo base_url('order_insert');?>"><i class="fa fa-plus-square"></i> <span>Inserir Cadastro</span></a></li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Bem vindo ao Border Guardian!
            <small>Sistema de monitorameto de traslados!</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-list"></i>Lista de Usuarios</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

          <!--------------------------
            | Your Page Content Here |
            -------------------------->

          <!-- Hover Data Table -->
          <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lista de Usuarios</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Foto</th>
                        <th>Data de Nascimento</th>
                        <th>País</th>
                        <th>Passaporte</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                          $i = 1;
                          foreach($listOrder->result() as $row){
                        ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $row->identificador ?></td>
                            <td><?= $row->nome ?></td>
                            <td><?= $row->foto ?></td>
                            <td><?= $row->data_nascimento ?></td>
                            <td><?= $row->pais ?></td>
                            <td><?= $row->passaporte ?></td>
                        <?php
                          if($row->status == 0)
                            echo '<td><span class="label label-primary">Legalizado</span></td>';
							              elseif($row->status == 1)
                            echo '<td><span class="label label-warning">Desaparecido</span></td>';
							              elseif($row->status == 2)
                            echo '<td><span class="label label-danger">Foragido</span></td>';
							              else
                            echo '<td><span class="label label-primary"">Desconhecido</span></td>';
                        ?>
                            <td>
                              <div class="btn-group">
							  	              <a><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-pic" data-content="<?= $row->identificador?>"><i class="fa fa-image"></i></button></a>
                                <a><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-update" data-content="<?= $row->identificador?>"><i class="fa fa-edit"></i></button></a>
                                <a><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-delete"data-content="<?= $row->identificador?>"><i class="fa fa-trash-o"></i></button></a>
                              </div>
                            </td>
                        </tr>
                        <?php
                            $i++;
                          }
                        ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Foto</th>
                        <th>Data de Nascimento</th>
                        <th>País</th>
                        <th>Passaporte</th>
                        <th>Status</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
		   <!-- Pic Modal -->
          <div class="modal fade" id="modal-pic">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form method="POST" action="<?= base_url('order_list/picOrder') ?>">
                    <div class="modal-header">
                      <input type="hidden" id="id_order_modal_pic" name="id_order_pic"/>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Alterar Foto</h4>
                    </div>
                    <div class="modal-body">
                      Tem certeza de que deseja atualizar a foto?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">Alterar</button>
                    </div>
                  </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

          <!-- Update Modal -->
          <div class="modal fade" id="modal-update">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Atualizar Status</h4>
                  </div>
                  <form method="POST" action="<?= base_url('order_list/updateStatus')?>">
                    <div class="modal-body">
                      <div class="form-group">
                          <input type="hidden" id="id_order_modal_update" name="id_order_update"/>
                          <label>Status</label>
                          <select class="form-control" placeholder="Defina o status do Usuário." name="status_modal_update">
                            <option value= 0>Legalizado</option>
                            <option value= 1>Desaparecido</option>
                            <option value= 2>Foragido</option>
                          </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">Alterar</button>
                    </div>
                  </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

          <!-- Delete Modal-->
          <div class="modal fade" id="modal-delete">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form method="POST" action="<?= base_url('order_list/deleteOrder') ?>">
                    <div class="modal-header">
                      <input type="hidden" id="id_order_modal_delete" name="id_order_delete"/>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Excluir Registro</h4>
                    </div>
                    <div class="modal-body">
                      Tem certeza de que deseja excluir este registro?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-danger">Excluir</button>
                    </div>
                  </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

          </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          09/10/2018
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2018 <a href="#">Los Potatoes</a>.</strong> All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url()."assets/bower_components/jquery/dist/jquery.min.js"?>"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url()."assets/bower_components/bootstrap/dist/js/bootstrap.min.js"?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()."assets/dist/js/adminlte.min.js"?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url()."assets/bower_components/datatables.net/js/jquery.dataTables.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url()."assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()."assets/bower_components/fastclick/lib/fastclick.js"?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()."assets/dist/js/demo.js"?>"></script>
    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
			"language": {
				"sEmptyTable": "Nenhum registro encontrado",
				"sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
				"sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
				"sInfoFiltered": "(Filtrados de _MAX_ registros)",
				"sInfoPostFix": "",
				"sInfoThousands": ".",
				"sLengthMenu": "_MENU_ resultados por página",
				"sLoadingRecords": "Carregando...",
				"sProcessing": "Processando...",
				"sZeroRecords": "Nenhum registro encontrado",
				"sSearch": "Pesquisar",
				"oPaginate": {
					"sNext": "Próximo",
					"sPrevious": "Anterior",
					"sFirst": "Primeiro",
					"sLast": "Último"
				},
				"oAria": {
					"sSortAscending": ": Ordenar colunas de forma ascendente",
					"sSortDescending": ": Ordenar colunas de forma descendente"
				}
		  },
		  'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
	  $(document).ready(function(){
        $('#modal-pic').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var dataId = button.data('content');
          $('#id_order_modal_pic').val(dataId);
        })
      })
      $(document).ready(function(){
        $('#modal-update').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var dataId = button.data('content');
          $('#id_order_modal_update').val(dataId);
        })
      })
      $(document).ready(function(){
          $('#modal-delete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var dataId = button.data('content');
            $('#id_order_modal_delete').val(dataId);
          })
      })
    </script>
  </body>
</html>
