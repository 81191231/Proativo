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
                <h2>Editando Setor: {{$setor->id}} <small></small></h2>

                <div class="clearfix"></div>
              </div>
              <div class="x_content">

               {!! Form::open(['url'=>'Adm/Update/'.$setor->id.'/Setor'], ['name'=>'Setor'])  !!}
                <div class="form-horizontal form-label-left" novalidate>
                
                <p></p>
                <span class="section">Editar informações</span>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Nome: </label>
                  <span class="required">*</span>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control col-md-7 col-xs-12" name="nome" value="{{$setor->nome}}"> 
                  </div>
                </div>
                
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                     
                    <button id="send" type="submit" class="btn btn-primary">Limpar</button>
                    <input type="submit" value="Cadastrar" class="btn btn-success">
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
          @endsection