@if (session()->get('message'))
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
@endif