@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
            <div class="self-intro">
                {{ Form::text('first_name', 'Chuck') }}
               {{--editページ用にコメントアウト <input type="submit" value="保存する"> --}}
            </div>
        </aside>
    </div>
@endsection