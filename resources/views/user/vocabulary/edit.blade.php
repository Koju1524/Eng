@extends('common.top')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-6">
    {!! Form::open(['route' => ['vocabulary.update', $vocabulary->id], 'method' => 'PUT']) !!}
      <div class="form-group row">
      {{ Form::label('word', 'Word', ['class'=>'col-sm-3 col-form-label']) }}
      {!! Form::text('word', $vocabulary->word, ['class' => 'col-sm-9 form-control', 'placeholder' => 'word']) !!}
      </div>
      @if ($errors->has('word'))
        @foreach ($errors->get('word') as $message)
          <span>{{ $message }}</span>
        @endforeach
      @endif
      <div class="form-group row">
      {{ Form::label('familiarity_id', 'Familiarity', ['class'=>'col-sm-3 col-form-label']) }}
        @foreach ($familiarities as $id => $degree)
          {!! Form::radio('familiarity_id', $id, $vocabulary->familiarity->$id, ['class' => 'mr-2 radion-btn']) !!}
          {!! Form::label('familiarity_id', $degree, ['class' => 'mr-2']) !!}
        @endforeach
      @if ($errors->has('familiarity_id'))
        @foreach ($errors->get('familiarity_id') as $message)
          <span>{{ $message }}</span>
        @endforeach
      @endif
      </div>
      <div class="form-group row">
        {{ Form::label('category_id', 'Category', ['class'=>'col-sm-3 col-form-label']) }}
        {!! Form::select('category_id', $categories, $vocabulary->category_id, ['class' => 'col-sm-9 form-control', 'placeholder' => 'Choose category']) !!}
      </div>
      @if ($errors->has('category_id'))
        @foreach ($errors->get('category_id') as $message)
          <span>{{ $message }}</span>
        @endforeach
      @endif
      <div class="form-group row">
        {{ Form::label('sentence', 'sentence', ['class'=>'col-sm-3 col-form-label']) }}
        {!! Form::textarea('sentence', $vocabulary->sentence, ['class' => 'col-sm-9 form-control', 'placeholder' => 'example sentece']) !!}
      </div>
      @if ($errors->has('sentence'))
        @foreach ($errors->get('sentence') as $message)
          <span>{{ $message }}</span>
        @endforeach
      @endif
      {{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection