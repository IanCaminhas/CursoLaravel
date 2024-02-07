<form method="post" action="{{ route('login.store') }}" enctype="multipart/form-data">
    @csrf()
    <input type="text" name="email" value="messi@example.com" />
    <input type="text" name="password" value="123" />
    <input type="file" name="file">

    <button type="submit">Login</button>
</form>
