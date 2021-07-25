<div class="container w-25 d-flex flex-column">
  {!! Form::open(['route' => 'vocabulary.index', 'method' => 'GET', 'id' => '']) !!}
    <div class="form-group">
      {{ Form::label('word', 'Spot from word', ['class'=> '']) }}
      {!! Form::text('word', '', ['class'=>'border-warning rounded', 'placeholder' => 'Fill out key word']) !!}
    </div>
    <div class="form-group">
      {{ Form::label('category_id', 'Category', ['class'=>'text-center']) }}
      {!! Form::select('category_id', $categories, false, ['class' => 'text-center', 'placeholder' => 'Choose category']) !!}
    </div>
    <div class="form-group text-center">
      {!! Form::button('<i class="fa fa-search" aria-hidden="true">Search</i>', ['class' => '', 'type' => 'submit']) !!}
    </div>
  {!! Form::close() !!}
</div>