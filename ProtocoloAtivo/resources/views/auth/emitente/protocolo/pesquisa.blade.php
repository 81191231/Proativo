<!-- page content Pagina de Formulario -->
@extends('template')
@section('content')
<div class="right_col" role="main" style="min-height: 3162px;">
  <div>
    <div class="page-title">
      <div class="title_left">
        <h3>Protocolo</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            {!! Form::open(['url'=>'Protocolo/pesquisa'],['name'=>'protocolo'])!!}
            <input class="form-control" type="text" placeholder="Pesquisar por ...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Ok</button>
            </span>
            {!! Form::close()!!}
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Lista de Protocolos<small></small></h2>
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
                    <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Status</th>
                    <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Código</th>
                    <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Destinatário</th>
                    <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Emitente</th>
                    <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Tipo do Documento</th>
                    <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Recebedor</th>
                    <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Data de Emissão</th>
                    <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Data de Recebimento</th>
                    <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Informações Adicionais</th>
                    <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="3">Ações</th>
                  </tr>
                </thead>
                <!--final do Label da Tabela-->

                <tbody>

                  <!--Inicio de Tabela com Valores-->

                  @foreach($protocolos as $protocolo)
                  <!--linha da Tabela-->
                  <tr class="odd" role="row">
                    <td>{{$protocolo->status}}</td>
                    <td>{{$protocolo->id}}</td>
                    <td>{{$protocolo->destinatario}}</td>
                    <td>{{$protocolo->emitente}}</td>
                    <td>{{$protocolo->tipo_documento}}</td>
                    <td>{{$protocolo->recebedor}}</td>
                    <td>{{$protocolo->created_at}}</td>
                    <td>{{$protocolo->data_hora_recebimento}}</td>
                    <td>{{$protocolo->inf_adicionais}}</td>
                    <td><a href="{{URL::to('Protocolo/'.$protocolo->id.'/Editar')}}" class="btn btn-primary">Editar</a></td> 
                    <td><a href="{{URL::to('Protocolo/'.$protocolo->id.'/Arquivar')}}" class="btn btn-primary">Arquivar</a>
                    </td><td><a href="{{URL::to('Protocolo/'.$protocolo->id.'/comprovante')}}" type="submit" class="btn btn-success">Ver Documento</a></td>
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
              <!--<div class="dataTables_info" id="datatable_info" role="status" aria-live="polite"> 1 para 10 de 57 Páginas no Total. </div></div>-->
              <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                  <ul class="pagination"><li class="paginate_button previous disabled" id="datatable_previous">
                    <a tabindex="0" aria-controls="datatable" href="#" data-dt-idx="0">Próxima</a></li>
                    <li class="paginate_button active"><a tabindex="0" aria-controls="datatable" href="#" data-dt-idx="1">1</a></li>
                    <li class="paginate_button next" id="datatable_next"><a tabindex="0" aria-controls="datatable" href="#" data-dt-idx="7">Próxima</a></li>
                  </ul></div></div></div></div>
                </div>
              </div>
            </div> <!-- fim do Menu das Proximas Paginas-->


          </div><!--Fim da Tabela com Valores-->


          <!-- /page content fim da Pagina -->
          @endsection