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
        <h2>&#x26a0; All boxes are required</h2>
    </div>
    
    </div>
        <div class="popupModal1">
         <input type="radio" name="modalPop" id="pop11" />
         <label for="pop11"></label>
         <input type="radio" name="modalPop" id="pop12" />
         <label for="pop12">CLOSE</label>
         <input type="radio" name="modalPop" id="pop13" />
         <label for="pop13">×</label>
         <div class="modalPopup2">
          <div class="modalPopup3">
           <h2 class="modalTitle">How to use Yotto Motto</h2>
           <div class="modalMain">
            <p>Step1. Fill up the registration boxes</p>
            <p>Step2. Look up the time line and see what is going on!</p>
            <p>Step3. Press the home botten and edit your calendar when you are "HIMA"</p>
            <p>Step4. Search the other doukis and find out when thay are free!</p>
            <p>Step5. Let's contact them on cisco jabber! </p>
            <p>Step6. Finally you are ready to go out for drinks</p>
            
            <p class="big-intro">
                Let's be part of Yotto Motto NOOOOWWWW!!!
            </p>
           </div>
          </div>
         </div>
        </div>
                <script type="text/javascript">
            var element = document.getElementById("pop11") ;
            element.checked = true ;
        </script>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('nickname', 'Nickname') !!}
                    {!! Form::text('nickname', old('nickname'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('favoritedrink', 'Favorite Drink') !!}
                    {!! Form::text('favoritedrink', old('favoritedrink'), ['class' => 'form-control','placeholder'=>'ex) Beer']) !!}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('wheredoyouusuallydrink', 'Favorite Place to Drink') !!}
                    {!! Form::text('wheredoyouusuallydrink', old('wheredoyouusuallydrink'), ['class' => 'form-control','placeholder'=>'ex) Shibuya']) !!}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('freeintro', 'Free Intro') !!}
                    {!! Form::text('freeintro', old('freeintro'), ['class' => 'form-control','placeholder'=>'ex) Lets go drinking together!']) !!}
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