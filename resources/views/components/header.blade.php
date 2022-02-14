<header>

 @auth
     
    <h1>Auth</h1>
    <a  class="btn btn-danger" href="{{ route('logout') }}">LOGOUT</a>


 @else


    <form action="{{ route('register') }}" method="POST"></form>

    @method('POST')
    @csrf

    <label for="name">Name</label><br>
    <input type="text" name="name"><br>
    <label for="email">Email</label><br>
    <input type="email" name="email"><br>
    <label for="password">Password</label><br>
    <input type="password" name="password"><br>
    <label for="password_confirmation">Password Confirmation</label><br>
    <input type="password" name="password_confirmation"><br>
    <br>
    <input type="submit" value="REGISTER" class="btn btn-success">


    <form action="{{ route('login') }}" method="POST"></form>

    @method('POST')
    @csrf

    <label for="email">Email</label><br>
    <input type="email" name="email"><br>
    <label for="password">Password</label><br>
    <input type="password" name="password"><br>
    <br>
    <input type="submit" value="LOGIN" class="btn btn-success">


 @endauth


</header>