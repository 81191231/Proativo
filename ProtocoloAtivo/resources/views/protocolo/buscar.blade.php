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
            <p><a href="#">Ajuda</a></p>
          </div>
        </div>
      </div>
    </div>
    <div>

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

              <div class="x_content">
                {!! Form::open(['url'=>'Protocolo/Store'],['name'=>'protocolo'])!!}
                <div class="form-horizontal form-label-left" novalidate>

                </p>
                <span class="section">Inserir informações</span>
                <div class="item form-group" style="font-size:10px; color:red;"><p>* Campos obrigatórios</p></div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="destinatario">Buscar por:</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="" required="required">
                      <option value="">Id</option>
                      <option value="">Emitente</option>
                      <option value="">Destinatário</option>
                      <option value="">Tipo de documento</option>
                      <option value="">Data de Emissão</option>
                      <option value="">Data de Entrega</option>
                      <option value="">Recebedor</option>
                      <option value="">Id</option>
                    </select>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="" required="required">
                  </div>
                  <span class="required">*</span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="submit">
                </div>

              </div>
              {!! Form::close() !!}
            </div>
          </div> <!-- fim do Menu das Proximas Paginas-->


        </div><!--Fim da Tabela com Valores-->


        <!-- /page content fim da Pagina -->
        @endsection