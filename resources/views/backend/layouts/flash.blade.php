@if(Session::has('message'))
<div class="form-group row">
    <div class="col-12">
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{
          Session::get('message') }}</p>
    </div>
</div>
@endif

@if(Session::has('success'))
<div class="form-group row">
    <div class="col-12">
        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{
          Session::get('success') }}</p>
    </div>
</div>

@endif
@if(Session::has('error'))
<div class="form-group row">
    <div class="col-12">
        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{
          Session::get('error') }}</p>
    </div>
</div>
@endif

@if(Session::has('warning'))
<div class="form-group row">
    <div class="col-12">
        <p class="alert {{ Session::get('alert-class', 'alert-warning') }}">{{
          Session::get('warning') }}</p>
    </div>
</div>
@endif

@if(Session::has('info'))
<div class="form-group row">
    <div class="col-12">
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{
          Session::get('info') }}</p>
    </div>
</div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul style="list-style-type: none;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif