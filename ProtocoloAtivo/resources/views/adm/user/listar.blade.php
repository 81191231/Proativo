@extends('adm.template')
<!-- page content Pagina de Formulario -->
@section('content')
<div class="right_col" role="main" style="min-height: 3162px;">
  <div>
    <div class="page-title">
      <div class="title_left">
        <h3>Usuários</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input class="form-control" type="text" placeholder="Pesquisar por...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Ok</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Lista de Emitente<small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          
          <div class="x_content">
            <p class="text-muted font-13 m-b-30">

            </p>
            <!--INICIO DE TABELA-->
            <div class="table-responsive" id="datatable_wrapper">
              <div class="row"><div class="col-sm-9"><div class="dataTables_length" id="datatable_length">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <table class="table table-striped table-bordered dataTable no-footer" id="datatable" role="grid" aria-describedby="datatable_info">

                <!--Label da Tabela-->
                <thead>
                  <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Tipo</th>
                  <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Nome</th>
                  <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Email</th>
                  <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Setor</th>
                  <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Informações Adicionais</th>
                  <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Ações</th>                  
                </tr>
              </thead>
              <!--final do Label da Tabela-->

              <tbody>

                <!--Inicio de Tabela com Valores-->

                @foreach($users as $user)
                <!--linha da Tabela-->
                <tr class="odd" role="row">
                  <td>{{$user->tipo}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->setor}}</td>
                  <td>{{$user->inf_adicionais}}</td>
                  <td><a href="{{URL::to('Adm/Editar/'.$user->id.'/Emitente')}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar">Editar</a>
                  <a href="{{URL::to('Adm/Editar/'.$user->id.'/Emitente')}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Redefinir Senha">Redefinir Senha</a>
                  </td> 
                </tr>
                <!--Fim linha da Tabela-->
                @endforeach

              </tbody>
            </table>

          </div>
        </div>

        <!-- div do Menu das Proximas Paginas-->
        <div class="row">
          <div class="col-sm-5">
            <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite"> 1 para 10 de 57 Páginas no Total. </div></div>
            <div class="col-sm-7">
              <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                <ul class="pagination"><li class="paginate_button previous disabled" id="datatable_previous">
                  <a tabindex="0" aria-controls="datatable" href="#" data-dt-idx="0">Próxima</a></li>
                  <li class="paginate_button active"><a tabindex="0" aria-controls="datatable" href="#" data-dt-idx="1">1</a></li>
                  <li class="paginate_button "><a tabindex="0" aria-controls="datatable" href="#" data-dt-idx="2">2</a></li>
                  <li class="paginate_button "><a tabindex="0" aria-controls="datatable" href="#" data-dt-idx="3">3</a></li>
                  <li class="paginate_button "><a tabindex="0" aria-controls="datatable" href="#" data-dt-idx="4">4</a></li>
                  <li class="paginate_button "><a tabindex="0" aria-controls="datatable" href="#" data-dt-idx="5">5</a></li>
                  <li class="paginate_button "><a tabindex="0" aria-controls="datatable" href="#" data-dt-idx="6">6</a></li>
                  <li class="paginate_button next" id="datatable_next"><a tabindex="0" aria-controls="datatable" href="#" data-dt-idx="7">Próxima</a></li>
                </ul></div></div></div></div>
              </div>
            </div>
          </div> <!-- fim do Menu das Proximas Paginas-->


        </div><!--Fim da Tabela com Valores-->
        @endsection