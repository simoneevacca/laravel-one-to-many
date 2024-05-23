@extends('layouts.admin')

@section('content')
    <div class="container">

        <form action="{{ route('admin.types.update', $type) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="type_name" class="form-label text-white">Type Name</label>
                <input type="text" class="form-control" name="type_name" id="type_name" aria-describedby="helpId"
                    placeholder="" />

            </div>
            <button type="submit" class="btn btn-primary">
                Update
            </button>

        </form>

    </div>
@endsection
