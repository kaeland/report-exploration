@extends('layout')

@section('content')
<div class="content">
    <h1 class="is-size-5">
        Create a show below...
    </h1>
    <div class="card">
        <div class="card-content">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('disneyplus.store') }}">
                @csrf
                <div class="field">
                    <label class="label" for="name">Show Name:</label>
                    <div class="control">
                        <input type="text" class="input" name="show_name" />
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="price">Series :</label>
                    <div class="control">
                        <input type="text" class="input" name="series" />
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="quantity">Show Lead Actor :</label>
                    <div class="control">
                        <input type="text" class="input" name="lead_actor" />
                    </div>
                </div>
                <button type="submit" class="button is-link">Create Show</button>
            </form>
        </div>
    </div>
</div>
@endsection
