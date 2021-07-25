@extends('common.top')

@section('content')
<div class="container">
  <div class="category-bar">
  @foreach ($categories as $id => $name)
    <div class="btn" id="{{ $id }}">{{ $name }}</div>
  @endforeach
  </div>
  <table class="table table-hover">
    <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Word</th>
      <th scope="col">Show</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
    </thead>
    @foreach ($vocabulary as $word)
      <tbody>
        <tr>
          <th scope="row">{{ $word->id }}</th>
          <td>{{ $word->word }}</td>
          <td>
            <a href="{{ route('vocabulary.show', $word->id) }}">
              <button class="btn btn-primary">Show</button>
            </a>
          </td>
          <td>
            <a href="{{ route('vocabulary.edit', $word->id)}}">
              <button class="btn btn-success">Edit</button>
            </a>
          </td>
          <td>
            {!! Form::open(['route' => ['vocabulary.destroy', $word->id], 'method' => 'DELETE']) !!}
              {!! Form::button('Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
      </tbody>
    @endforeach
  </table>
</div>

@endsection