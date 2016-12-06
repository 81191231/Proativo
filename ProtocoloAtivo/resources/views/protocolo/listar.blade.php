<!-- page content Pagina de Formulario -->
@extends('template')
@section('content')
<div class="right_col" role="main" style="min-height: 3162px;">
    <div class="page-title">
      <div class="title_left">
        <h3>Protocolo</h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <form action="">
            <div >
            <select name="status" class="form-control" >
            <option value="todos">Todos</option>
            <option value="Emitente">Últimos Emitidos</option>
            <option value="Cancelado">Últimos Cancelados</option>
            <option value="Entregue">Últimos Entregues</option>
            </select>
            <input type="submit" class="btn btn-default btn-sm" value="OK">
            </div>
            </form>
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
                    <tr>
                      <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Status</th>
                      <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Destinatário</th>
                      <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Emitente</th>
                      <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Tipo do Documento</th>
                      <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Recebedor</th>
                      <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Data e hora de Emissão</th>
                      <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Data de Recebimento</th>
                      <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="1">Anexo</th>
                      <th tabindex="0" class="sorting" aria-controls="datatable" style="width: 23,9%;"  rowspan="1" colspan="3">Ações</th>
                    </tr>
                  </thead>
                  <!--final do Label da Tabela-->

                  <tbody>
                    @if(empty($msg))
                    <!--Inicio de Tabela com Valores-->

                    @foreach($protocolos as $protocolo)
                    <!--linha da Tabela-->
                    @if($protocolo->status=="Emitido")
                    <tr role="row" class="active">
                    @elseif($protocolo->status=="Entregue")
                    <tr role="row" class="success">
                    @else
                    <tr role="row" class="danger">
                    @endif
                      <td>
                        @if($protocolo->status=="Emitido")
                        <span class="glyphicon glyphicon-comment" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Emitido"></span>
                        @elseif($protocolo->status=="Entregue")
                        <span class="glyphicon glyphicon-check" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Entregue"></span>
                        @else
                        <span class="glyphicon glyphicon-remove-sign" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Cancelado:{{$protocolo->motivo}}"></span>
                        @endif
                      </td>
                      <td>{{$protocolo->destinatario->razao_social}}</td>
                      <td>{{$protocolo->user->name}}</td>
                      <td>{{$protocolo->tipo_documento}}</td>
                      <td>{{$protocolo->recebedor}}</td>
                      <td>{{$protocolo->created_at}}</td>
                      <td>{{$protocolo->data_hora_recebimento}}</td>
                      @if($protocolo->status=="Entregue")
                      <td><a href="{{URL::to('Protocolo/'.$protocolo->id.'/Anexo')}}">Ver Anexo</a></td>
                      @else
                      <td>{{$protocolo->anexo_comprovante}}</td>
                      @endif
                      <td>
                       <!-- <a class="btn btn-danger" href="{{URL::to('Protocolo/'.$protocolo->id.'/Cancelamento')}}" data-toggle="tooltip" data-placement="top" title="Cancelar">Cancelar</a> -->
                       <a href="{{URL::to('Protocolo/'.$protocolo->id.'/comprovante')}}" type="submit" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="top" title="Ver Documento"><span class="glyphicon glyphicon-folder-open"></span></a>
                       @if($protocolo->status=="Emitido")
                       <a href="{{URL::to('Protocolo/'.$protocolo->id.'/Baixa')}}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Dar Baixa"><span class="glyphicon glyphicon-folder-close"></span></a>
                       <a href="{{URL::to('Protocolo/'.$protocolo->id.'/Cancelar')}}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Cancelar"><span class="glyphicon glyphicon-remove-sign"></span></a>
                       @endif
                     </td>
                   </tr>
                   <!--Fim linha da Tabela-->
                   @endforeach
                   @else
                   <tr class="odd" role="row">
                   <td>
                   <div id="modal" class="alert alert-danger" role="alert">Nenhum protocolo existente!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
                   </td>
                   </tr>
                   @endif
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
            </div>
            </div> <!-- fim do Menu das Proximas Paginas-->


          </div><!--Fim da Tabela com Valores-->

        </div>
        <!-- /page content fim da Pagina -->
        @endsection