@extends('layouts.admin')

@section('content')
    <div class="container">

        <form action="{{ route('admin.types.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="type_name" class="form-label text-white">Type Name</label>
                <input type="text" class="form-control" name="type_name" id="type_name" aria-describedby="helpId"
                    placeholder="" />

            </div>
            <button type="submit" class="btn btn-primary">
                Create
            </button>

        </form>

    </div>
@endsection
