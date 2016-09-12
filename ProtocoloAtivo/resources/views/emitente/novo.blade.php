@extends('template')
<!-- page content Pagina de Formulario -->
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Emitente</h3>
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
        <?php 
        if(isset($msg)){
          echo $msg;
        } 
        ?>
        <div class="x_content">

          {!! Form::open(['url'=>'Emitente/Store']) !!}  
          <div class="form-horizontal form-label-left" novalidate>
            
          </p>
          <span class="section">Inserir informações</span>
          <div class="item form-group">
            {!! Form::label('nome','Nome:',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}<span class="required">*</span>
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('nome', null,['class' =>'form-control col-md-7 col-xs-12','required'=>'required']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('email','Email:',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::email('email', null,['class' =>'form-control col-md-7 col-xs-12','required'=>'required']) !!}
            </div>
            <span class="required">*</span>
          </div>

          <div class="item form-group">
            <label for="setor" class="control-label col-md-3 col-sm-3 col-xs-12">Setor:</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="setor" class="form-control col-md-7 col-xs-12" required="required">
                <option active>Selecione um Setor</option>
                <option>Finanças</option>
                <option>RH</option>
                <option>Marketing</option>
                <option>Produção</option>
                <option>Outro</option>
              </select>
            </div>
            <span class="required">*</span>
          </div>
          <div class="item form-group">
            {!! Form::label('inf_adicionais','Informações adicionais:',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::textarea('inf_adicionais', null,['class' =>'form-control col-md-7 col-xs-12']) !!}
          </div>
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