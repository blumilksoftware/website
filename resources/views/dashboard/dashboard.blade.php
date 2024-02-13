@extends("layout.dashboard")

@section("content")
    <form action="{{ route("logout") }}" method="post">
        @csrf
        <input type="submit" value="Wyloguj">
    </form>
@endsection
