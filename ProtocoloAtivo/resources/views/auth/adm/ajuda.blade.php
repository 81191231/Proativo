@extends('template')
@section('content')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ajuda</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Contatando Problema<small></small></h2>

          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          {!! Form::open(['url'=>'Protocolo/Store'],['name'=>'protocolo'])!!}
          <div class="form-horizontal form-label-left" novalidate>

          </p>
          <span class="section">Inserir informações</span>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="destinatario">Email:<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <form method="get" action="">
              <input type="search" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="email" required="required">
              </form>
            </div>
            <a style="float:left;" href="">+</a>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emitente">Assunto:<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="search" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="assunto" required="required" autocomplete="">
            </div>
            <a style="float:left;" href="">+</a>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Descrição breve do problema:
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="textarea"name="inf_problema" class="form-control col-md-7 col-xs-12"></textarea>
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button type="submit" class="btn btn-primary" onclick="">Enviar</button>
              <button id="send" type="submit" class="btn btn-success">Limpar</button>
              
            </div>
          </div>
        </div>
        {!! Form::close()!!}
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script type="text/javascript" src="{{URL::asset('lib/ajax.js')}}"></script>
<!--fim de Formulario-->
@endsection