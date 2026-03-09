<h2>Login</h2>

<form method="POST" action="/login">
    @csrf

    <label>Usuario</label>
    <input type="text" name="usuario">

    <br><br>

    <label>Password</label>
    <input type="password" name="password">

    <br><br>

    <button type="submit">Ingresar</button>

</form>