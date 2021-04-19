<x-header componentName="Users"/>
<h1>User Page</h1>

@if($users=='Test')
    <h2>Hello, {{$users}}</h2>
@elseif($users == 'Sam')
    <h2>Hi, Unknown</h2>
@endif

@foreach($users as $user)
    <h2>{{$user}}</h2>
@endforeach
