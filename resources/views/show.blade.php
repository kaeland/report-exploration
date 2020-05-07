@extends('layout')
@section('content')
<table class="table is-bordered is-striped">
    <thead>
      <tr>
        <td><b>Show Name</b></td>
        <td><b>Series</b></td>
        <td><b>Lead Actor</b></td>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          {{  $show->show_name ?? '' }}
        </td>
        <td>
          {{  $show->series ?? '' }}
        </td>
        <td>
          {{  $show->lead_actor ?? '' }}
        </td>
      </tr>
      </tbody>
    </table>
@endsection
