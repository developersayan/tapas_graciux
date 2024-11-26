@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible" style="text-align: center; margin-top: 10px;">
      <a href="#" class="close" data-dismiss="alert" style="color: green;"><i class="far fa-check-circle"></i></a>
        <strong style="color: black ! IMPORTANT;
    font-weight: 200;">
            {!!Session::get('success')!!}
        </strong>
    </div>
@endif





@if(Session::has('error'))
    <div class="alert alert-danger alert-dismissible" style="text-align: center; margin-top: 10px;">
      <a href="#" class="close" data-dismiss="alert"><i class="far fa-check-circle"></i></a>
        <strong>
            {!!Session::get('error')!!}
        </strong>
    </div>
@endif
@if ($errors->any())
{{-- @dd($errors->all()) --}}
    <div class="alert alert-danger alert-dismissible" style="text-align: center; margin-top: 10px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i class="far fa-check-circle"></i></a>
        <ul>
            @foreach ($errors->all() as $error)
                <li style="list-style: none;">{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif
