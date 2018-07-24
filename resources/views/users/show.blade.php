@extends('layouts.app')

@section('content')

<!-- <!DOCTYPE html>-->
<!--<html>-->
<!--<body id=edit-main>-->

        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->nickname }}</h3>
                </div>
                <div class="panel-body">
                <img class="center-block media-object img-rounded img-responsive" src="{{asset('img/boy.png')}}" alt="">
                </div>
            </div>
            
        </aside>
        
        <style>
        .col-xs-4{
            margin-right: 80px;
        }
        body{
     background: url('{{secure_asset('css/download2.jpg') }}') center center repeat ;
    background-size:cover;
    }

        </style>
        
        
         <div class="self-intro">
             
                 <!--<p>Nickname:</p> <input type="text" size="40" name="text1" > -->
                  <p>Favorite Drink:</p> <input type="text" size="40" name="text2" > 
                  <p>Where do you usually drink:</p> <input type="text" size="40" name="tex3" >
                  <!--<p>What do you usually do on weekends</p><input type="text" size="40" name="text4" >-->
                  <!--<p>Hobby</p><input type="text" size="40" name="text5" >-->
                  <p>Free Intro</p><input type="text" size="40×100" name="text6"  >
              
        </div>
            
          
            
            <!--<div class="button">-->
            <!--    {!! Form::submit('Upload', ['class' => "btn btn-danger btn-block"]) !!}-->
            <!--</div>-->
            
        <style>
            .button {
                width:100px;
                text-align: center;
                float :right;
                        }
        .kuniko{
        display:none;
    }
        </style>
        
       <div class=container4>
         @include('fullcalender.fullcalender', ['calendar' => $calendar])
      </div>
   
   
<div style="margin-top:100px"></div>
@endsection