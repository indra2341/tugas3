@extends("layouts.application")

@section("content")

  @if (Session::has('notice')) <div class="alert alert-info">{{Session::get('notice')}}</div>       @endif

  @if (Session::has('error')) <div class="alert alert-danger">{{Session::get('error')}}</div>       @endif
  
 {{Form::open(array('url' => 'img', 'files' => true, 'class' => 'form-horizontal', 'role' => 'form'))}}
  
  <div class="form-group">
    {{Form::label('file', 'Image', array('class' => 'col-lg-3 control-label'))}}
    <div class="col-lg-9">
      {{Form::file('file', null, array('class' => 'form-control', 'autofocus' => true))}}
      {{$errors->first('file')}}
    </div>
    <div class="clear"></div>
  </div>
  
  <div class="form-group">
    {{Form::label('title', 'Title', array('class' => 'col-lg-3 control-label'))}}
    <div class="col-lg-9">
      {{Form::text('title', null, array('class' => 'form-control'))}}
      {{$errors->first('title')}}
    </div>
    <div class="clear"></div>
  </div>

  <div class="form-group">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
      {{Form::submit('Save Image', array('class' => 'btn btn-primary'))}}
    </div>
    <div class="clear"></div>
  </div>
  
  {{Form::close()}}


@stop