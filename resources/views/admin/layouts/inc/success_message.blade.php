@if (session('success'))
<button type="button" class="btn btn-success toastrDefaultSuccess">
    <strong>{{session('success')}}</strong>
</button>
@endif