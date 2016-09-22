<!-- page content Pagina de Formulario -->
@extends('template')
@section('content')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Protocolo</h3>
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
          <div class="clearfix"></div>
        </div> 
        <?php
        if(!empty($msg)){
          echo $msg;
        } ?>
        <div class="x_content">
          {!! Form::open(['url'=>'Protocolo/Store'],['name'=>'protocolo'])!!}
          <div class="form-horizontal form-label-left" novalidate>

          </p>
          <span class="section">Inserir informações</span>
          <div class="item form-group" style="font-size:10px; color:red;"><p>* Campos obrigatórios</p></div>

          <div class="item form-group">
            @if(!empty($destinatarios))
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Destinatario">Destinatário:</label>
             <div class="chosen-container chosen-container-multi" title="">
              <div class="col-md-6 col-sm-6 col-xs-12">
              <select data-placeholder="Digite um documento" name="destinatario_id" class="chosen-select" style="width:580px;">
                  @foreach($destinatarios as $destinatario)
                  <option value="{{$destinatario->id}}">{{$destinatario->nome}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <span class="required">*</span>
            @else
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="alert alert-danger" role="alert">Nenhum destinatário existente!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
            </div>
            @endif
          </div>

          <div class="item form-group">
            @if(!empty($emitentes))
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emitente">Emitente:</label>
             <div class="chosen-container chosen-container-multi" title="">
              <div class="col-md-6 col-sm-6 col-xs-12">
              <select data-placeholder="" name="emitente_id" class="chosen-select"style="width:580px;">
                  @foreach($emitentes as $emitente)
                  <option value="{{$emitente->id}}">{{$emitente->nome}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <span class="required">*</span>
            @else
            <div id="modal" class="alert alert-danger" role="alert">Nenhum emitente existente!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
            @endif
          </div>
          <div id="tDocumento" class="item form-group">
          </div>
          <div class="item form-group">
            @if(!empty($setors))
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipoDocumento">Setor:</label>
             <div class="chosen-container chosen-container-multi" title="">
              <div class="col-md-6 col-sm-6 col-xs-12">
              <select data-placeholder="Digite um documento" name="setor_id" class="chosen-select" style="width:580px;">
                  @foreach($setors as $setor)
                  <option value="{{$setor->id}}">{{$setor->nome}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          <span class="required">*</span>
          @else
          <div id="modal" class="alert alert-danger" role="alert">Nenhum setor existente!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
          @endif
        </div>
        <!--Adicionar Documento -->
        <div class="item form-group">
          @if(!empty($tipo_documentos))
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Tipo_documento">Documento:</label> <div class="chosen-container chosen-container-multi" title="">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select data-placeholder="Digite um documento" name="tipo_documento_id" class="chosen-select" multiple style="width:580px;">
              @foreach($tipo_documentos as $tipo_documento)
              <option value="{{$tipo_documento->id}}">{{$tipo_documento->documento}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <span class="required">*</span>
        @else
        <div id="modal" class="alert alert-danger" role="alert">Nenhum tipo de documento existente!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
        @endif
      </div>
      <br>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Complemento:</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <textarea id="textarea"name="inf_adicionais" class="form-control col-md-7 col-xs-12"></textarea>
        </div>
      </div>

      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <button id="send" type="reset" class="btn btn-primary">Limpar</button>
          <button type="submit" class="btn btn-success" id="GerarProtocolo" onclick="HTMLElementObject.disabled=true;">Gerar Protocolo</button>
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
 
@endsection