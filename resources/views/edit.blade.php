
<h1>Edit</h1>

{{ html()->form('PUT', '/update')->open() }}
{{ html()->input('hidden')->name('id')->value($boodschap->id)}}

<div class="form-group">
    {{ html()->label('E-mailadres')->for('email') }}
    {{ html()->email('email')->class('form-control')->placeholder('Vul je e-mailadres in')->value($boodschap->email)
 }}
	
</div>
<div class="form-group">
    {{ html()->label('Voorname')->for('name') }}
    {{ html()->text('name')->class('form-control')->placeholder('Vul je voorname in')->value($boodschap->name)
 }}
</div>
<div class="form-group">
    {{ html()->label('Boodschap')->for('boodschap') }}
    {{ html()->textarea('boodschap')->class('form-control')->placeholder('Typ je boodschap')->value($boodschap->boodschap)
 }}
</div>

<div class="form-group">
    {{ html()->label('Straat')->for('straat') }}
    {{ html()->textarea('straat')->class('form-control')->placeholder('Typ je straat')->value($boodschap->straat)
 }}
</div>
<div class="form-group">
    {{ html()->label('Huisnummer')->for('huisnummer') }}
    {{ html()->text('huisnummer')->class('form-control')->placeholder('Typ je huisnummer')->value($boodschap->huisnummer)
 }}
<div>
    {{ html()->submit('Verstuur') }}
</div>
{{ html()->form()->close() }}