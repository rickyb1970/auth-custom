<h1>Welcome to the Site</h1>
<br>
<br>
{{-- <a href="{{ route('logout') }}">Logout</a> --}}
<form action="{{ route('logout') }}">
    @csrf
    <button type="submit">
        Logout
    </button>
</form>
