@extends('layouts.app')

@section('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Full Calendar Example</div>

                <div class="panel-body">
                     
                      {!! Form::open(['route' => 'events.post']) !!}
                <!--<div class="form-group">-->
                    <!--{!! Form::label('title', 'Title') !!}-->
                    <!--{!! Form::text('title', old('title'), ['class' => 'form-control']) !!}-->
                <!--</div>-->

                <div class="form-group">
                    {!! Form::label('start_date', 'Date') !!}
                    {!! Form::text('start_date', old('start_date'), ['class' => 'form-control']) !!}
                <!--</div>-->

                {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block']) !!}
                </div>
            {!! Form::close() !!}
                </div>
                    {!! $calendar->calendar() !!}
                    {!! $calendar->script() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar->script() !!}
@endsection
