@extends('template')
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Protocolo : {{$protocolo->id}}</h3>
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
          <h2>Novo Protocolo<small></small></h2>
         @if ($errors->any())
         <ul class="alert alert-warning">
         @foreach($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
         </ul> 
           @endif
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          {!! Form::open(['url'=>'Protocolo/Store'])!!}
          <div class="form-horizontal form-label-left" novalidate>

          </p>
          <span class="section">Inserir informações</span>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Id">Id:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="search" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="id" value="{{$protocolo->id}}" required="required" disabled="disabled">
            </div>
          </div>
          
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Id">Status:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="search" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="id" value="<?php if($protocolo->status==0){echo 'emitido';} ?>" required="required">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emitente">Emitente:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="search" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="emitente" value="{{$protocolo->emitente}}" required="required" disabled="disabled">
            </div>
          </div>
          
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Destinatario">Destinatário:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="search" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="destinatario" value="{{$protocolo->destinatario}}" required="required" disabled="disabled">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipoDocumento">Tipo de Documento:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="search" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="tipo_documento" value="{{$protocolo->tipo_documento}}" required="required">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Data_de_emissao">Data de Emissão:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="search" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="created_at" value="{{$protocolo->created_at}}" required="required" disabled="disabled">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Data_de_entrega">Data de Entrega:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="search" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="data_hora_recebimento" value="{{$protocolo->data_hora_recebimento}}" required="required">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Recebedor">Recebedor:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="search" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="recebedor" value="{{$protocolo->recebedor}}" required="required">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Descrições do Documento:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="textarea" name="inf_adicionais" value="{{$protocolo->inf_adicionais}}" class="form-control col-md-7 col-xs-12"></textarea>
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button id="send" type="submit" class="btn btn-primary">Limpar</button>
              {!! Form::submit('Salvar',['class'=>'btn btn-success']) !!}
              
            </div>
          </div>
        </div>
        {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>
</div>
</div>





<!--fim de Formulario-->
@endsection