<!DOCTYPE html>
<html>
    <head>
    </head>    
    <body id=index-main>
@if (Auth::user()->id == $user->id)
                  {!! Form::open(['route' => 'microposts.store']) !!}
                      <div class="form-group" >
                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '5', 'placeholder'=>'暇だったらここに投稿！']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
@endif
<ul class="media-list">
@foreach ($microposts as $micropost)
    <?php $user = $micropost->user; ?>
    <li class="media">
        <div class="media-left">
            <img id="bob" class="center-block media-object img-circle" src="{{asset('img/boy.png')}}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->nickname, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $micropost->created_at }}</span>
            </div>
            <div>
                <p>{!! nl2br (($micropost->content)) !!}</p>
            </div>
            <div>
                @if (Auth::user()->id == $micropost->user_id)
                    {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
                
            </div>
        </div>
    </li>
    
@endforeach
</ul>
{!! $microposts->render() !!}
</body>
</html>