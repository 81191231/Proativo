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
          <h2>Edição de Protocolo<small></small></h2>
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
             <div class="chosen-container chosen-container-multi" title="">
              <div class="col-md-6 col-sm-6 col-xs-12">
              <select data-placeholder="" name="emitente_id" class="chosen-select"style="width:580px;">
                  @foreach($emitentes as $emitente)
                  @if($emitente->id===$protocolo->emitente_id)
                  <option value="{{$protocolo->emitente_id}}" active>{{$emitente->nome}}</option>
                  @else
                  <option value="{{$emitente->id}}">{{$emitente->nome}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
            </div>
          
          </div>
          
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Destinatario">Destinatário:</label>
             <div class="chosen-container chosen-container-multi" title="">
              <div class="col-md-6 col-sm-6 col-xs-12">
              <select data-placeholder="Digite um documento" name="destinatario_id" class="chosen-select" style="width:580px;">
                  @foreach($destinatarios as $destinatario)
                  @if($destinatario->id===$protocolo->destinatario_id)
                  <option value="{{$protocolo->destinatario_id}}" active>{{$destinatario->nome}}</option>
                  @else
                  <option value="{{$destinatario->id}}">{{$destinatario->nome}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipoDocumento">Tipo de Documento:</label>
             <div class="chosen-container chosen-container-multi" title="">
              <div class="col-md-6 col-sm-6 col-xs-12">
              <select data-placeholder="Digite um documento" name="tipo_documento_id" class="chosen-select" multiple style="width:580px;">
                  @foreach($tipo_documentos as $tipo_documento)
                  @if($tipo_documento->id===$protocolo->tipo_documento_id)
                  <option value="{{$protocolo->tipo_documento_id}}" active>{{$tipo_documento->documento}}</option>
                  @else
                  <option value="{{$tipo_documento->id}}">{{$tipo_documento->documento}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
            </div>
          
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipoDocumento">Setor:</label>
             <div class="chosen-container chosen-container-multi" title="">
              <div class="col-md-6 col-sm-6 col-xs-12">
              <select data-placeholder="Digite um documento" name="setor_id" class="chosen-select" style="width:580px;">
                  @foreach($setors as $setor)
                  @if($setor->id===$protocolo->setor_id)
                  <option value="{{$protocolo->setor_id}}" active>{{$setor->nome}}</option>
                  @else
                  <option value="{{$setor->id}}">{{$setor->nome}}</option>
                  @endif
                  @endforeach
                </select>
              </div>
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
<script src="{{URL::asset('lib/chosen.jquery.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('lib/prism.js')}}" type="text/javascript" charset="utf-8"></script>
 <link href="{{URL::asset('lib/css.css')}}" rel="stylesheet"><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="{{URL::asset('lib/chosen.css')}}">
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
<!--fim de Formulario-->
@endsection