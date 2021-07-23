@extends('common.top')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-6">
    {!! Form::open() !!}
      <div class="form-group row">
      {{ Form::label('word', 'Word', ['class'=>'col-sm-3 col-form-label']) }}
      {!! Form::text('word', null, ['class' => 'col-sm-9 form-control', 'placeholder' => 'word']) !!}
      </div>
      <div class="form-group row">
        {{ Form::label('category', 'Category', ['class'=>'col-sm-3 col-form-label']) }}
        {!! Form::select('category', $categories, 'Choose category', ['class' => 'col-sm-9 form-control', 'placeholder' => 'Choose category']) !!}
        </div>
      <div class="form-group row">
      {{ Form::label('sentence', 'sentence', ['class'=>'col-sm-3 col-form-label']) }}
      {!! Form::textarea('sentence', null, ['class' => 'col-sm-9 form-control', 'placeholder' => 'example sentece']) !!}
      </div>
      {{ Form::submit('Add', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection