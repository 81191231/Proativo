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
          <h2>Cancelamento<small></small></h2>
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
        {!! Form::open(['url'=>'Protocolo/'.$protocolo->id.'/update'])!!}
        <div class="form-horizontal form-label-left" novalidate>

        </p>
        <span class="section">Inserir informações</span>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Id">Status:</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="status" value="Cancelado" hidden>
            <input type="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value="{{$protocolo->status}}" required="required" disabled="disabled">
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emitente">Emitente:</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="emitente" value="{{$protocolo->user->name}}" required="required" disabled="disabled">
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Destinatario">Destinatário:</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="destinatario" value="{{$protocolo->destinatario->razao_social}}" required="required" disabled="disabled">
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipoDocumento">Tipo de Documento:</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="tipo_documento" value="{{$protocolo->tipo_documento}}" required="required" disabled="disabled">
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Data_de_emissao">Data de Emissão:</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="created_at" value="{{$protocolo->created_at}}" required="required" disabled="disabled">
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Descrição do Cancelamento:</label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea id="textarea" name="motivo" class="form-control col-md-7 col-xs-12"></textarea>
          </div>
        </div>

          <div class="item form-group">
            @if(!empty($users))
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emitente"><a href="{{URL::asset('Emitente/Novo')}}">Alterador:</a></label>
             <div class="chosen-container chosen-container-multi" title="">
              <div class="col-md-6 col-sm-6 col-xs-12">
              <select data-placeholder="" name="user_id" class="chosen-select"style="width:580px;">
                  @foreach($users as $user)
                  <option value="{{$user->id}}">{{$user->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <span class="required">*</span>
            @else
            <div id="modal" class="alert alert-danger" role="alert">Nenhum emitente existente!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
            @endif
          </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button id="send" type="submit" class="btn btn-primary">Limpar</button>
            <button type="submit" class="btn btn-success" onclick="confirm()">Salvar</button>
            
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

<script type="text/javascript">
  function confirm(){
    
  }
</script>



<!--fim de Formulario-->
@endsection