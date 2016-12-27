@extends('adm.template')
<!-- page content Pagina de Formulario -->
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>  Emitente</h3>
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
          <h2>Novo Emitente<small></small></h2>
          <div class="clearfix"></1div>
          </div>
          @if(!empty($msg))
            @if($msg==="cadastrado")      
              <div class="alert alert-success" role="alert">Usuário cadastrado com sucesso! 
                <a href="{{URL::to('Adm/Listar/Emitente')}}" class="alert-link">Ver a lista de usuários!</a>
              </div>
            @else
              <div class="alert alert-warning" role="alert">Já existe um usuário com o email fornecido!
                <a href="{{URL::to('Adm/Listar/Emitente')}}" class="alert-link">Ver usuário!</a>
              </div>
            @endif
          @else
          
          @endif
          <div class="x_content">

            {!! Form::open(['url'=>'Adm/Store/Emitente']) !!}  
            <div class="form-horizontal form-label-left" novalidate>

            </p>
            <span class="section">Inserir informações</span>
            <div class="item form-group">
              {!! Form::label('nome','Nome:',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}<span class="required">*</span>
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('name', null,['class' =>'form-control col-md-7 col-xs-12','required'=>'required']) !!}
              </div>
            </div>
            <div class="item form-group">
              {!! Form::label('email','Email:',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::email('email', null,['class' =>'form-control col-md-7 col-xs-12','required'=>'required']) !!}
              </div>
              <span class="required">*</span>
            </div>
            @if(!empty($setors))   
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipoDocumento">Setor:</label>
              <div class="chosen-container chosen-container-multi" title="">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select data-placeholder="Digite um documento" name="setor" class="chosen-select" style="width:580px;">
                    @foreach($setors as $setor)
                    <option value="{{$setor->nome}}">{{$setor->nome}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <span class="required">*</span>
              @else
              <div class="item form-group">
                <div class="alert alert-danger" role="alert">Nenhum setor existente!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
                @endif
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <button id="send" type="submit" class="btn btn-primary">Limpar</button>
                  {!! Form::submit('Cadastrar', ['class'=>'btn btn-success'],['accesskey'=>'c']) !!} 
                </div>
              </div>
            </div>
            {!! Form::close() !!} 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--fim de Formulario-->
@endsection