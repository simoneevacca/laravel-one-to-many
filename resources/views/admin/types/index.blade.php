@extends('layouts.admin')

@section('content')
<div class="container">
    <a href="{{ route('admin.types.create') }}" class="btn btn-primary my-4">Add new project</a>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Type Name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($types as $type)
                    <tr class="">
                        <td scope="row">{{ $type->id }}</td>
                        <td>{{ $type->type_name }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('admin.types.edit', $type) }}"><i
                                class="fa-solid fa-pen-to-square fa-fw"></i> Edit</a>
                        </td>
                    </tr>
                    
                @empty
                    
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
