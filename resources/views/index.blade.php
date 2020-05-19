@extends('layout')
@section('content')
<div class="card">
    <table class="table is-striped is-bordered">
      <thead>
        <th>ID</th>
        <th>Show Name</th>
        <th>Series</th>
        <th>Lead Actor</th>
        <th>Action</th>
      </thead>
      <tbody>
        @foreach($shows as $show)
        <tr>
          <td>{{$show->id}}</td>
          <td>{{$show->show_name}}</td>
          <td>{{$show->series}}</td>
          <td>{{$show->lead_actor}}</td>
          <td><a href="{{action('DisneyplusController@downloadPDF', $show->id)}}">Download PDF</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection
