@extends('adm.template')
<!-- page content Pagina de Formulario -->
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Setor</h3>
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
          <h2>Novo Setor<small></small></h2>
          <div class="clearfix"></div>
        </div>
        @if(!empty($msg))
        @if($msg=="cadastrado")
        <div class="alert alert-success" role="alert">Setor cadastrado com sucesso!
          <a href="{{URL::to('Adm/Listar/Setor')}}" class="alert-link">Ver lista de setores!</a>
        </div>
        @else
        
        <div class="alert alert-warning" role="alert">Já existe um setor cadastrado com esse nome!
          <a href="{{URL::to('Adm/Listar/Setor')}}" class="alert-link">Ver setor!</a>
        </div>
        @endif
        @else
        @endif
        <div class="x_content">

          {!! Form::open(['url'=>'Adm/Store/Setor'],['name'=>'setor']) !!}  
          <div class="form-horizontal form-label-left" novalidate>
            
          </p>
          <span class="section">Inserir informações</span>
          <div class="item form-group">
            {!! Form::label('documento','Nome:',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}<span class="required">*</span>
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('nome', null,['class' =>'form-control col-md-7 col-xs-12','required'=>'required']) !!}
            </div>
          </div>

          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
             <button id="send" type="submit" class="btn btn-primary">Limpar</button>
             {!! Form::submit('Cadastrar', ['class'=>'btn btn-success']) !!} 
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