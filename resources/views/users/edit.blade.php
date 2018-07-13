@extends('layouts.app')

@section('content')
   
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
            
        </aside>
        
        <style>
        .col-xs-4{
            margin-right: 80px;
        }
        </style>
        
        
         <div class="self-intro">
             
                 <p>Nickname:</p> <input type="text" size="40" name="text1" > 
                  <p>Favorite Drink:</p> <input type="text" size="40" name="text2" > 
                  <p>Where you usually drink:</p> <input type="text" size="40" name="tex3" >
                  <p>What do you usually do on weekends</p><input type="text" size="40" name="text4" >
                  <p>Hobby</p><input type="text" size="40" name="text5" >
                  <p>Free Intro</p><input type="text" size="40" name="text6" >
              
        </div>
            
          
            
            <div class="button">
                {!! Form::submit('Upload', ['class' => "btn btn-danger btn-block"]) !!}
            </div>
            
        <style>
            .button {
                width:100px;
                text-align: center;
                float :right;
                        }
    
        </style>
    
   
    <style>
        .p{
            margin-right: 20px;
        }
    </style>
    <!DOCTYPE html>
<html>
<head>

<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
    margin-top: 100px;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}

}
</style>
</head>
<body>



<div class="month">      
  <ul>

    <li>
      July<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Sun</li>
  <li>Mon</li>
  <li>Tue</li>
  <li>Wed</li>
  <li>Thu</li>
  <li>Fri</li>
  <li>Sat</li>
</ul>

<ul class="days">  
  <li>1
  <select name="pref_id">
  <option selected="selected" value=""> </option>
    <value="701">HIMA</option>
　</select>
  </li>
  <li>2
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="702">HIMA</option>
　</select></li>
  <li>3
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="703">HIMA</option>
　</select></li>
  <li>4
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="704">HIMA</option>
　</select></li>
  <li>5
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="705">HIMA</option>
　</select></li>
  <li>6
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="706">HIMA</option>
　</select></li>
  <li>7
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="707">HIMA</option>
　</select></li>
  <li>8
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="708">HIMA</option>
　</select></li>
  <li>9
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="709">HIMA</option>
　</select></li>
  <li>10
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="710">HIMA</option>
　</select></li>
  <li>11
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="711">HIMA</option>
　</select></li>
  <li>12
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="712">HIMA</option>
　</select></li>
  <li>13
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="713">HIMA</option>
　</select></li>
  <li>14
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="714">HIMA</option>
　</select></li>
  <li>15
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="715">HIMA</option>
　</select></li>
  <li>16
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="716">HIMA</option>
　</select></li>
  <li>17
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="717">HIMA</option>
　</select></li>
  <li>18
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="718">HIMA</option>
　</select></li>
  <li>19
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="719">HIMA</option>
　</select></li>
  <li>20
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="720">HIMA</option>
　</select></li>
  <li>21
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="721">HIMA</option>
　</select></li>
  <li>22
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="722">HIMA</option>
　</select></li>
  <li>23
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="723">HIMA</option>
　</select></li>
  <li>24
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="724">HIMA</option>
　</select></li>
  <li>25
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="725">HIMA</option>
　</select></li>
  <li>26
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="726">HIMA</option>
　</select></li>
  <li>27
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="727">HIMA</option>
　</select></li>
  <li>28
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="728">HIMA</option>
　</select></li>
  <li>29
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="729">HIMA</option>
　</select></li>
  <li>30
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="730">HIMA</option>
　</select></li>
  <li>31
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="731">HIMA</option>
　</select></li>
</ul>
<div style="margin-bottom:50px"></div>




<!DOCTYPE html>
<html>
<head>

<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
}
</style>
</head>
<body>



<div class="month">      
  <ul>
  
    <li>
      August<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Sun</li>
  <li>Mon</li>
  <li>Tue</li>
  <li>Wed</li>
  <li>Thu</li>
  <li>Fri</li>
  <li>Sat</li>
</ul>

<ul class="days">  
  <li class="dropdown">
      
  </li>
  <li>
      
  </li>
  <li>
  
  </li>
  
  <li>1
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="801">HIMA</option>
　</select></li>
  <li>2
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="802">HIMA</option>
　</select></li>
  <li>3
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="803">HIMA</option>
　</select></li>
  <li>4
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="804">HIMA</option>
　</select></li>
  <li>5
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="805">HIMA</option>
　</select></li>
  <li>6
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="806">HIMA</option>
　</select></li>
  <li>7
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="807">HIMA</option>
　</select></li>
  <li>8
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="808">HIMA</option>
　</select></li>
  <li>9
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="809">HIMA</option>
　</select></li>
  <li>10
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="810">HIMA</option>
　</select></li>
  <li>11
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="811">HIMA</option>
　</select></li>
  <li>12
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="812">HIMA</option>
　</select></li>
  <li>13
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="813">HIMA</option>
　</select></li>
  <li>14
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="814">HIMA</option>
　</select></li>
  <li>15
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="815">HIMA</option>
　</select></li>
  <li>16
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="816">HIMA</option>
　</select></li>
  <li>17
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="817">HIMA</option>
　</select></li>
  <li>18
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="818">HIMA</option>
　</select></li>
  <li>19
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="819">HIMA</option>
　</select></li>
  <li>20
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="820">HIMA</option>
　</select></li>
  <li>21
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="821">HIMA</option>
　</select></li>
  <li>22
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="822">HIMA</option>
　</select></li>
  <li>23
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="823">HIMA</option>
　</select></li>
  <li>24
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="824">HIMA</option>
　</select></li>
  <li>25
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="825">HIMA</option>
　</select></li>
  <li>26
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="826">HIMA</option>
　</select></li>
  <li>27
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="827">HIMA</option>
　</select></li>
  <li>28
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="828">HIMA</option>
　</select></li>
  <li>29
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="829">HIMA</option>
　</select></li>
  <li>30
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="830">HIMA</option>
　</select></li>
  <li>31
   <select name="pref_id">
  <option selected="selected" value=""> </option>
    <option value="831">HIMA</option>
　</select></li>
</ul>

</body>
</html>
</body>
</html>
<div style="margin-bottom:100px"></div>

<div class="button">
 <a href="{{route('profiles.store', ['id'=> Auth::User()->id] )}}"{!! Form::submit('Upload', ['class' => "btn btn-danger btn-block"]) !!}Upload</a>
</div>
<style>
.button {
    width:100px;
    text-align: center;
    float :right;
    }
    
</style>
<footer>
© 卍Olive卍
</footer>
<style>
.footer {
    clear: both;
}
</style>
<div style="margin-top:100px"></div>
@endsection

