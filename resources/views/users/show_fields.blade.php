<!-- Email Field -->
<div class="form-group">
    {!! Form::label('title', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('title', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $user->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $user->updated_at }}</p>
</div>

