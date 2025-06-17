 @extends('layouts.app')
@section('content')
	@if(count($boodschappen) > 0)
		@foreach($boodschappen as $boodschap)
			<ul class="list-group">
				<li class="list-group-item">name: {{$boodschap->name}}</li>
				<li class="list-group-item">E-mail: {{$boodschap->email}}</li>
				<li class="list-group-item">Boodschap: {{$boodschap->boodschap}}</li>
				<li class="list-group-item">Straat: {{$boodschap->straat}}</li>
				<li class="list-group-item">Huisnummer: {{$boodschap->huisnummer}}</li>
			</ul>
            {{ html()->form('DELETE', 'destroy/'. $boodschap->id)->open()}}
			{{ html()->submit('Delete') }}
			{{ html()->form()->close() }}

			{{ html()->form('GET', 'edit/'. $boodschap->id)->open() }}
			{{ html()->submit('Edit') }}
			{{ html()->form()->close() }}

			<br>
		@endforeach
	@endif
@endsection 