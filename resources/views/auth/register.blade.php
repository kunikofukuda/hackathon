<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yotto Motto</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
        
    </head>
    <body id='register-main'>
        @include('commons.navbar')

        <div class="container">
            @include('commons.error_messages')


    <div class="text-center">
        <h1>Sign up</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('nickname', 'Nickname') !!}
                    {!! Form::text('nickname', old('nickname'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('favoritedrink', 'Favorite Drink') !!}
                    {!! Form::text('favoritedrink', old('favoritedrink'), ['class' => 'form-control']) !!}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('wheredoyouusuallydrink', 'Where Do You Usually Drink') !!}
                    {!! Form::text('wheredoyouusuallydrink', old('wheredoyouusuallydrink'), ['class' => 'form-control']) !!}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('freeintro', 'freeintro') !!}
                    {!! Form::text('freeintro', old('freeintro'), ['class' => 'form-control']) !!}
                </div>
                
                
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirmation') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                
            

                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
</body>
</html>