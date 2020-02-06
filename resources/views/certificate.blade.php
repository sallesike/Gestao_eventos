<!DOCTYPE html>
<html>
<head>
	<title>{{$certificate->user->name ."-". $certificate->event->name}}</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/system.css')}}">
</head>
<body>
	<div class="container-fluid">
		<div>
			<div class="border border-primary mt-5 mb-1">
				<div class="title mt-5">
					<h1 class="text-center" id="title-certificate">CERTIFICADO</h1>
				</div>
				<div class="col-sm-12">
					<h4 class="text-justify ml-5 mr-5 mt-3">Certificamos que {{$certificate->user->name}}  concluiu o
					Curso Curso PHP PSRs (Boas Práticas) com carga horária total de 02:00:00 horas.
					Certificado nº XrOIJ76O para verificar se é um certificado válido: academy.especializati.com.br/verificar-certificado</h4>
				</div>
				<div class="col-sm-4 offset-sm-4 mt-5 mb-5 pb-5">	
					<div class="row ml-5">
						<img src="{{url('signature/012900202001045e0fea5c18de8.jpeg')}}">
					</div>				
					<div class="text-center">					
						MARIA APARECIDA DE OLIVEIRA SANTOS
						SECRETÁRIA MUNICIPAL DE EDUCAÇÃO E CULTURA
						DEC. N° 030/2017 
					</div>
				</div>				
				<div class="row col-sm-9 ml-5 mb-5 pb-2">
					Para verificar a validade desse documento: localhost/valida_certificado/{{$certificate->code_certificate}}
				</div>
			</div>
		</div>
	</div>

	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
