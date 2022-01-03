<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $users->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $users->email }}</p>
</div>

<!-- Roles Field -->
<div class="form-group">
    {!! Form::label('roles', 'Roles:') !!}
    <p>{{ $users->roles_name }}</p>
</div>


