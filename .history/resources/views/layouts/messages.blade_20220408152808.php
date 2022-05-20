@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li class="alert alert-danger">
            {{ $error }}
        </li>
    @endforeach

</ul>
@endif


@if (session('success'))
<ul>
    <li class="alert alert-success">
        {{ session('success') }}
    </li>
</ul>
@endif


