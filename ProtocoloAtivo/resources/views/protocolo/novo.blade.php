<!-- page content Pagina de Formulario -->
@extends('template')
@section('content')
<script type="text/javascript">
function disableElement() {
  document.getElementById("GerarProtocolo").disabled = true;
}
function disableElement() {
  document.getElementById("confirm").disabled = true;
}
function addDocumento(){
  
}
</script>
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
        if(isset($msg)){
          echo $msg;
        } 
        ?>
        
        <div class="x_content">
          {!! Form::open(['url'=>'Protocolo/Store'],['name'=>'protocolo'])!!}
          <div class="form-horizontal form-label-left" novalidate>

          </p>
          <span class="section">Inserir informações</span>
          <div class="item form-group" style="font-size:10px; color:red;"><p>* Campos obrigatórios</p></div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="destinatario">Destinatário:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="destinatario" required="required">
                <option value="">Selecione o destinatário</option>
                @foreach($destinatarios as $destinatario)
                <option value="{{$destinatario->nome}}">{{$destinatario->nome}}</option>
                @endforeach
              </select>
            </div>
            <span class="required">*</span>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emitente">Emitente:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="emitente" required="required" placeholder="Escolha um emitente">
                <option value="">Selecione o emitente</option>
                @foreach($emitentes as $emitente)
                <option value="{{$emitente->nome}}">{{$emitente->nome}}</option>
                @endforeach
              </select>
            </div>
            <span class="required">*</span>
          </div>
          <div id="tDocumento" class="item form-group">
          </div>
          <!--Adicionar Documento -->
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Tipo_documento">Documento:</label>
              <div class="col-md-6 col-sm-6 col-xs-12" id="DocumentoAdd">
                <select class="form-control col-md-7 col-xs-12" name="tipo_documento">
                  <option value="">Selectione um documento</option>
                  @foreach($tipo_documentos as $tipo_documento)
                  <option value="{{$tipo_documento->documento}}">{{$tipo_documento->documento}}</option>
                  @endforeach
                </select><br>
              </div>
              <span class="required">*</span>
            </div>
            <br>
          <div class="item form-group">
            <button class="btn btn-default" onclick="addDocumento()">Adicionar outro documento</button>
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