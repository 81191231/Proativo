<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login - ProAtivo - Sistema de Protocolo</title>
  <link rel="shortcut icon" href="{{ URL::asset('img/logo2x2.png')}}"/>
  <!-- Bootstrap -->
  <link href="{{URL::asset('lib/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{URL::asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="{{URL::asset('lib/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
         <img src="{{URL::asset('img/logo.png')}}">
         <p>Sistema de Protocolo</p>
         <form action="Log" method="post">
          <h1>Login</h1>
          @if(!empty($msg))
          @if($msg=="ok")
          <div class="alert alert-success" role="alert">Cadastro realizado com sucesso!</div>
          @elseif($msg=="existente")
          <div class="alert alert-warning" role="alert">Já existe um usuário com o email utilizado!</div>
          @elseif($msg=="user_inexistente")
          <div class="alert alert-warning" role="alert">Usuário inexistente!</div>
          @elseif($msg=="email_senha_n_c")
          <div class="alert alert-warning" role="alert">Email e senha não coincidem!</div>
          @elseif($msg=="senha_errada")
          <div class="alert alert-warning" role="alert">Usuário/senha errada!</div>
          @elseif($msg=="Cadastrado")
          <div class="alert alert-warning" role="alert">Cadastrado!</div>
          @endif
          @else
          @endif
          <input type="text" name="_token" value="{!! csrf_token() !!}" hidden>
          <div>
            <input type="email" class="form-control" placeholder="Email" name="email" required="" />
          </div>
          <div>
            <input type="password" class="form-control" placeholder="Password" name="password" required="" />
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-lg btn-block">Entrar</button>
            <a href="#">Esqueceu sua Senha?</a>
          </div>
          <hr>

          <div>

            <p>©2016 Todos os Direitos Reservados. <ProAtivo></ProAtivo> </p>
          </div>


        </form>
      </section>
    </div>

  </div>
</div>
</body>
</html>