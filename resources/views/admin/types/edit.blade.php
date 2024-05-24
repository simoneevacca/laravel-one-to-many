@extends('layouts.admin')

@section('content')
    <div class="container">
        @include('admin.partials.validation-errors')

        <form action="{{ route('admin.types.update', $type) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="type_name" class="form-label text-white">Type Name</label>
                <input type="text" class="form-control @error('type_name') is-invalid @enderror" name="type_name"
                    id="type_name" aria-describedby="helpId" placeholder=""  value="{{ old('type_name', $type->type_name) }}"/>

            </div>
            <button type="submit" class="btn btn-primary">
                Update
            </button>

        </form>

    </div>
@endsection
