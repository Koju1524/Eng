@extends('common.top')

@section('content')
<div class="container">
  <table class="table table-hover">
    <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Word</th>
      <th scope="col">Sentence</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{ $vocabulary->category_id }}</th>
        <td>{{ $vocabulary->word }}</td>
        <td>{{ $vocabulary->sentence }}</td>
        <td>
          <a href="{{ route('vocabulary.edit', $vocabulary->id) }}">
            <button class="btn btn-success">Edit</button>
          </a>
        </td>
        <td>
          {{-- {!! Form::open(['route' => ['vocabulary.destroy', $vocabulary->id], 'method' => 'DELETE']) !!} --}}
            {!! Form::button('Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
          {{-- {!! Form::close() !!} --}}
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection