<form method="post" action="{{ route('login.store2') }}">
    @csrf()
    <input type="text" name="email" value="{{ old('email') }}" />
    {{ $errors->first('email') }}
    <input type="text" name="password" value="{{ old('password') }}" />
    {{ $errors->first('password') }}
    <button type="submit">Login</button>
</form>

