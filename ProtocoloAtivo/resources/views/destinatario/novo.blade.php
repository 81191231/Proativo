@extends('template')
<!-- page content Pagina de Formulario -->
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Destinatário</h3>
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
          <h2>Novo Destinatário<small></small></h2>

          <div class="clearfix"></div>
        </div>
        @if(!empty($msg))
        {!! $msg !!}
        @else
        @endif
        <div class="x_content">

          {!! Form::open(['url'=>'Destinatario/Store'])!!}
          <div class="form-horizontal form-label-left" novalidate>

          </p>
          <span class="section">Inserir informações</span>

        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nome:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="nome" class="form-control col-md-7 col-xs-12">
            </div>
        </div>


        <div class="item form-group">
           <label for="razao_social" class="control-label col-md-3 col-sm-3 col-xs-12"> Razão Social:</label><span class="required">*</span>
           <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="razao_social" class="form-control col-md-7 col-xs-12" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-3">CNPJ:</label><span aria-hidden="true">*</span>
          <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" class="form-control" data-inputmask="'mask' : '99-999-999/99999-99'" required="required">
          </div>
        </div>

        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button id="send" type="submit" class="btn btn-primary">Limpar</button>
            {!! Form::submit('Cadastrar',['class'=>'btn btn-success'])!!}
            
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
<!--fim de Formulario-->
@endsection