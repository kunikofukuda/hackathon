<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yotto Motto</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
        
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
         <link rel="stylesheet" type="text/css" href="welcome.css">
         <!--<link rel="stylesheet" href="animate.min.css">-->
         
    </head>
    <body id='welcome'>
        @include('commons.navbar')

        <div class="container">
            @include('commons.error_messages')
            
            

    @if (Auth::check())
    
        <div class="row">
            <aside class="col-xs-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $user->nickname }}</h3>
                    </div>
                    <div class="panel-body">
                        <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->nickname, 500) }}" alt="">
                    </div>
                </div>
            </aside>
            <div class="col-xs-8">
                @if (count($microposts) >= 0)
                    @include('microposts.microposts', ['microposts' => $microposts])
                @endif
            </div>
        </div>
    @else
    
        <div class="title">
            <!--<div class="text-center">-->
       <p id="ym" class="animated zoomIn">Yotto Motto</p>
                <!--{!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}-->
            <!--</div>-->
         </div>
         
         <div class="mission">
             <p id="mi">From "maybe" To "WILL" go to have some drinks</p>
             <p id="mi">So let's start your journey to find your doukis☺</p>
        </div>
@endif
</div>
</body>
</html>
