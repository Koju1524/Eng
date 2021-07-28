<div class="container w-25 ml-3 d-flex flex-column bg-info">
  {!! Form::open(['route' => 'vocabulary.index', 'method' => 'GET', 'id' => '']) !!}
    <div class="form-group">
      {{ Form::label('word', 'Search Engine', ['class'=> 'mt-3 font-weight-bold']) }}
      {!! Form::text('word', null, ['class'=>'border-warning rounded', 'placeholder' => 'Fill out key word']) !!}
    </div>
    <div class="form-group">
      {{ Form::label('category_id', 'Category', ['class'=>'font-weight-bold']) }}
      {!! Form::select('category_id', $categories, false, ['class' => 'mb-4', 'placeholder' => 'Choose category']) !!}
    </div>
    <div class="form-group">
      {{ Form::label('familiarity_id', 'Familiarity', ['class'=>'font-weight-bold']) }}
      {!! Form::select('familiarity_id', $familiarities, false, ['class' => 'mb-4', 'placeholder' => 'Choose familiarity']) !!}
    </div>
      <div class="form-group text-center">
        {!! Form::button('<i class="fa fa-search" aria-hidden="true">Search</i>', ['class' => '', 'type' => 'submit']) !!}
      </div>
  {!! Form::close() !!}
</div>