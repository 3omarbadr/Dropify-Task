@if ($errors->any())
<button type="button" class="btn btn-danger toastrDefaultError">
@foreach ($errors->all() as $error)
    <p>{{$error}}</p>
@endforeach
</button>
@endif