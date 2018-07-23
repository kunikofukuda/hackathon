<html>
<body id='index-image'>
@extends('layouts.app')


@section('content')
    @include('users.users', ['users' => $users])
@endsection
</body>
</html>