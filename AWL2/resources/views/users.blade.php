<h1>User Login</h1>

<form action="users" method="POST">
    @csrf 
    <input type="text" name="username" id="" placeholder="Enter your id"> 
    <br><br>
    <input type="password" name="userpassword" id="" placeholder="Enter user passworld">
    <br>
    <br>
    <button type="submit">Login</button>
</form>