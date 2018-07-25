<html>
    <bodyid=users>

@if (count($users) > 0)
<ul class="media-list">
    <div class="row">
@foreach ($users as $user)
<div class="col-sm-3">
    <div class="media">
        <div class="media-left">
            <img id="boy" class="center-block media-object img-circle" src="{{asset('img/boy.png')}}" alt="">
        </div>
        <div class="media-body">
            <div class="nickname">
                {{ $user->nickname }}
            </div>
            <div class="View-profile">
                <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>
            </div>
        </div>
    </div>
    </div>
@endforeach
</ul>
{!! $users->render() !!}
@endif

</body>
</html>