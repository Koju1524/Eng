@extends('common.top')

@section('content')
<div class="wrapper d-flex w-100">

  @include('common.search')
  <div class="container w-75">
    <div class="category-bar">
    @foreach ($categories as $id => $name)
      <div class="btn border-info mb-3" id="{{ $id }}">{{ $name }}</div>
    @endforeach
    </div>
    <table class="table table-hover">
      <thead class="thead-light">
      <tr>
        <th scope="col">Category</th>
        <th scope="col">Word</th>
        <th scope="col">Familiarity</th>
        <th scope="col">Show</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
      </thead>
      @foreach ($vocabulary as $word)
        <tbody>
          <tr>
            <th scope="row">{{ $word->category->name }}</th>
            <td>{{ $word->word }}</td>
            @if (!empty($word->familiarity_id) && $word->familiarity_id <= count($familiarities))
              <td>{{ $word->familiarity->degree}}</td>
            @else
              <td></td>
            @endif
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
    {{ $vocabulary->appends(request()->input())->links() }}
  </div>
</div>

@endsection