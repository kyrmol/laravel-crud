{{ html()->form('POST', '/store')->open() }}
<div class="form-group">
    {{ html()->label('E-mailadres')->for('email') }}
    {{ html()->email('email')->class('form-control')->placeholder('Vul je e-mailadres in') }}
</div>
<div class="form-group">
    {{ html()->label('Voorname')->for('name') }}
    {{ html()->text('name')->class('form-control')->placeholder('Vul je voorname in') }}
</div>
<div class="form-group">
    {{ html()->label('Boodschap')->for('boodschap') }}
    {{ html()->textarea('boodschap')->class('form-control')->placeholder('Typ je boodschap') }}
</div>
<div>
    {{ html()->submit('Verstuur') }}
</div>
{{ html()->form()->close() }}