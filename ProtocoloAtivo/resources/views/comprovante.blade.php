<html>
<head>
	<meta charset="utf-8">
	<title>Comprovante</title>
	<link href="{{URL::asset('lib/comprovante.css')}}" rel="stylesheet">
	<script language="JavaScript"> 
        window.open("comprovante.pdf");
	</script>
</head>
<body>
<section>
	<div class="box">
	<p><img src="{{ URL::asset('img/logo2x2.png')}}" class="img-responsive" height="85" width="125"></img><b>SISTEMA DE PROTOCOLO PRO-ATIVO CONTABILIDADE</b></p>

		<p>NÚMERO DO PROTOCOLO: {{$protocolo->id}}</p>

		<p>DATA DE EMISSÃO: {{$protocolo->created_at}}</p>

		<p>SETOR DE EMISSÃO: </p>

		<p>RESPONSÁVEL DO SETOR: </p>

		<p>DESTINO: {{$protocolo->destinatario}}</p>
		<hr>

			<p>TIPO DE DOCUMENTO: {{$protocolo->tipo_documento}}</p><br>
		<hr>
		<p>DESCRIÇÃO ANALÍTICA DO DOCUMENTO: {{$protocolo->inf_adicionais}}</p><br>
		<hr>
			<p>NOME DO RECEBEDOR: </p><br>
			<p>ASSINATURA DO RECEBEDOR: </p><br>

			<p>DATA E HORA DE RECEBIMENTO: </p><br>

	</div>
</section>
</body>
<html>