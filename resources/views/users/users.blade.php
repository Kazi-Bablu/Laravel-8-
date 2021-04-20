<h1>User Login</h1>

{{--<form action="{{url('users')}}" method="Post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="userName" placeholder="Enter user id"/>--}}
{{--    <br><br>--}}
{{--    <input type="password" name="password" placeholder="Enter user password"/>--}}
{{--    <br><br>--}}
{{--    <button type="submit">Login</button>--}}
{{--</form>--}}

<h1>User List</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile PHoto</td>
    </tr>
    @foreach($collection as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['first_name']}}</td>
            <td>{{$user['email']}}</td>
            <td><img src="{{$user['avatar']}}" alt=""/></td>
        </tr>
    @endforeach
</table>
