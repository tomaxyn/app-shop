<div class="form-group">
	{!! Form::label('name', 'Nombre del Afiliado') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('image', 'Foto del Afiliado') !!}
	{!! Form::text('image', null, ['class' => 'form-control']) !!}	
</div>

<div class="form-group">
	{!! Form::label('biography', 'Biografia del Afiliado') !!}
	{!! Form::textarea('biography', null, ['class' => 'form-control my-editor']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}	
</div>