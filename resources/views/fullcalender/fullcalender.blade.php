
<div class="container">
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">HIMA Calendar</div>

                <div class="panel-body kuniko">
                     
                      {!! Form::open(['route' => 'events.post']) !!}
                <!--<div class="form-group">-->
                    <!--{!! Form::label('title', 'Title') !!}-->
                    <!--{!! Form::text('title', old('title'), ['class' => 'form-control']) !!}-->


                <div class="form-group">
                    {!! Form::label('start_date', 'Date') !!}
                    {!! Form::text('start_date', old('start_date'), ['class' => 'form-control','placeholder'=>'ex) 2018-07-01']) !!}
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
