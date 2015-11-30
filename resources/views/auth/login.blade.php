@extends('templates.admin')

@section('content')

    @if (count($errors) > 0)
        <div class="errors">
            <strong>There were some problems with your input.</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open() !!}

    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email') !!}

    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password') !!}

    {!! Form::checkbox('remember') !!} Remember me

    {!! Form::submit('Login') !!}

@endsection