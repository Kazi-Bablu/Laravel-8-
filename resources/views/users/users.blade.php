<h1>User Login</h1>

<form action="{{url('users')}}" method="Post">
    @csrf
    <input type="text" name="userName" placeholder="Enter user id"/>
    <br><br>
    <input type="password" name="password" placeholder="Enter user password"/>
    <br><br>
    <button type="submit">Login</button>
</form>
