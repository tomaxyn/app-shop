<div class="form-group">
	{!! Form::label('name', 'Título del boletín') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('content', 'contenido del boletín') !!}
	{!! Form::textarea('content', null, ['class' => 'form-control my-editor']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}	
</div>