<!DOCTYPE html>
<html class="html" lang="pt-br">
<head>  
	<meta http-equiv="Content-type" charset="UTF-8"/>
	<title>Home</title>
	<style>
	#page
{
	width: 595px;
	min-height: 842px;
	margin-left: auto;
	margin-right: auto;
}

#u106-4
{
	width: 593px;
	min-height: 35px;
	border-width: 2px;
	border-style: solid;
	border-color: #000000;
	background-color: transparent;
	text-align: center;
	line-height: 35px;
	font-weight: bold;
	position: relative;
	margin-right: -10000px;
}

#u124
{
	width: 54px;
	background-color: transparent;
	position: relative;
	margin-right: -10000px;
}

#pu108-8
{
	margin-top: 15px;
}

#u108-8
{
	width: 593px;
	min-height: 73px;
	border-width: 2px;
	border-style: solid;
	border-color: #000000;
	background-color: transparent;
	font-size: 9px;
	line-height: 23px;
	position: relative;
	margin-right: -10000px;
}

#u109-4
{
	width: 187px;
	min-height: 11px;
	background-color: transparent;
	font-size: 9px;
	line-height: 11px;
	position: relative;
	margin-right: -10000px;
	margin-top: 7px;
	left: 370px;
}

#u110-4
{
	width: 187px;
	min-height: 10px;
	background-color: transparent;
	font-size: 9px;
	line-height: 11px;
	position: relative;
	margin-right: -10000px;
	margin-top: 32px;
	left: 277px;
}

#u111
{
	vertical-align: top;
	width: 599px;
	height: 6px;
	margin-top: 11px;
	position: relative;
	background: url("../images/u111.png") no-repeat 0px 0px;
}

#u113-4
{
	width: 593px;
	min-height: 25px;
	border-width: 2px;
	border-style: solid;
	border-color: #000000;
	background-color: transparent;
	font-size: 9px;
	line-height: 16px;
	margin-top: 10px;
	position: relative;
}

#u115-4
{
	width: 593px;
	min-height: 25px;
	border-width: 2px;
	border-style: solid;
	border-color: #000000;
	background-color: transparent;
	font-size: 9px;
	line-height: 16px;
	margin-top: 11px;
	position: relative;
}

#u113-2,#u115-2
{
	padding-left: 3px;
}

#u116
{
	z-index: 31;
	vertical-align: top;
	width: 599px;
	height: 6px;
	margin-top: 11px;
	position: relative;
	background: url("../images/u116.png") no-repeat 0px 0px;
}

#pu118-8
{
	margin-top: 11px;
}

#u118-8
{
	width: 593px;
	min-height: 73px;
	border-width: 2px;
	border-style: solid;
	border-color: #000000;
	background-color: transparent;
	font-size: 9px;
	line-height: 23px;
	position: relative;
	margin-right: -10000px;
}

#u108-2,#u108-4,#u108-6,#u118-2,#u118-4,#u118-6
{
	padding-left: 10px;
}

#u122-4
{
	z-index: 40;
	width: 300px;
	min-height: 10px;
	background-color: transparent;
	font-size: 9px;
	line-height: 11px;
	position: relative;
	margin-right: -10000px;
	margin-top: 52px;
	left: 286px;
}

body
{
	position: relative;
	min-width: 595px;
	padding-top: 36px;
	padding-bottom: 36px;
}

p
{
	margin: 0;
	padding: 0;
}

body
{
	font-family: Arial;
	font-size: 14px;
}

.colelem /* a child element of a column */
{
	display: inline;
	float: left;
	clear: both;
}

.colelem100 /* a child element of a column that is 100% width */
{
	clear: both;
}

.grpelem /* a child element of a group */
{
	display: inline;
	float: left;
}
	</style>
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
					<p id="u108-4">RESPONSÁVEL PELA EMISSÃO: {{$protocolo->user->name}}</p>
					<p id="u108-6">DESTINO: {{$protocolo->destinatario->razao_social}}</p>
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
				<p id="u113-2">DOCUMENTO(S): {{$protocolo->tipo_documento}}</p>
			</div>
			<!--<div class="clearfix colelem" id="u115-4">
				<p id="u115-2">DESCRIÇÃO ANALÍTICA DO DOCUMENTO: </p>
			</div>-->
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
			<!--<div class="clearfix colelem" id="u113-4">
				<p id="u113-2">EMAIL: contato@proativo.com</p>
				<p id="u113-2">EMAIL: contato@proativo.com</p>
			</div>-->
		</div>
	</div>
</body>
</html>
