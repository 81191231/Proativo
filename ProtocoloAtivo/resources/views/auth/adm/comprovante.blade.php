<!DOCTYPE html>
<html class="html" lang="pt-br">
<head>  
	<meta http-equiv="Content-type" charset="UTF-8"/>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('lib/comprovante.css')}}" id="pagesheet"/>
</head>
<body>
	<div class="clearfix" id="page">
		<div class="position_content" id="page_position_content">
			<div class="clearfix colelem" id="pu106-4">
				<div class="clearfix grpelem" id="u106-4">
					<p>SISTEMA DE PROTOCOLO ÚNICO - PROATIVO CONTABILIDADE</p>
				</div>
				<div class="clip_frame grpelem" id="u124">
					<img class="block" id="u124_img" src="{{URL::asset('img/logo.png')}}" alt="" width="54" height="39"/>
				</div>
			</div>
			<div class="clearfix colelem" id="pu108-8">
				<div class="clearfix grpelem" id="u108-8">
					<p id="u108-2">NÚMERO DO PROTOCOLO: {{$protocolo->id}}</p>
					<p id="u108-4">SETOR DE EMISSÃO: {{$protocolo->setor}}</p>
					<p id="u108-6">DESTINO: {{$protocolo->destinatario}}</p>
				</div>
				<div class="clearfix grpelem" id="u109-4">
					<p>DATA EMISSÃO: {{$protocolo->created_at}}</p>
				</div>
				<div class="clearfix grpelem" id="u110-4">
					<p>RESPONSÁVEL DO SETOR:</p>
				</div>
			</div>
			<div class="colelem" id="u111"></div>
			<div class="clearfix colelem" id="u113-4">
				<p id="u113-2">TIPO DE DOCUMENTO: {{$protocolo->tipo_documento}}</p>
			</div>
			<div class="clearfix colelem" id="u115-4">
				<p id="u115-2">DESCRIÇÃO ANALÍTICA DO DOCUMENTO:</p>
			</div>
			<div class="colelem" id="u116"></div>
			<div class="clearfix colelem" id="pu118-8">
				<div class="clearfix grpelem" id="u118-8">
					<p id="u118-2">NOME DO RECEBEDOR:_______________________________________________________________________________</p>
					<p id="u118-4">ASSINATURA DO RECEBEDOR:_________________________________________________________________________</p>
					<p id="u118-6">DATA DE RECEBIMENTO:________________________________</p>
				</div>
				<div class="clearfix grpelem" id="u122-4">
					<p>HORA DE RECEBIMENTO:______________________________________</p>
				</div>
			</div>
			<div class="verticalspacer"></div>
		</div>
	</div>
</body>
</html>
