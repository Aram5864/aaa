@if ($errors->any())
<ul>
    @foreach ($errors->all() as $error)
        <li style="list-style:none" class="alert alert-danger">
            {{ $error }}
        </li>
    @endforeach

</ul>
@endif


@if (session('success'))
<ul>
    <li style="list-style:none" class="alert alert-success">
        {{ session('success') }}
    </li>
</ul>
@endif


