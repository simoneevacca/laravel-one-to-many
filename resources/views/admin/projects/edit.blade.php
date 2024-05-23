@extends('layouts.admin')

@section('content')
    <div class="container">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary"><strong>Back</strong></a>
        <h1 class=" text-white">Editing {{ $project->project_name }}</h1>

        @include('admin.partials.validation-errors')
        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="project_name" class="form-label text-white">Project Name</label>
                <input type="text" name="project_name" id="project_name" class="form-control" placeholder=""
                    aria-describedby="project_nameId" value="{{ old('project_name', $project->project_name) }}" />
            </div>
            @error('project_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="description" class="form-label text-white">Description</label>
                <textarea class="form-control" name="description" id="description" rows="6">{{old('description', $project->description) }}</textarea>
            </div>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="preview_image" class="form-label text-white">Image</label>
                <input type="file" name="preview_image" id="preview_image" class="form-control" placeholder=""
                    aria-describedby="preview_imageId" value="{{old('preview_image', $project->preview_image) }}" />
            </div>
            @error('preview_image')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="type_id" class="form-label text-white">Type</label>
                <select class="form-select form-select-lg" name="type_id" id="type_id">
                    @foreach ($types as $type)
                        
                    <option value="{{ $type->id }}" {{ $type->id == old('type_id', $project->type_id) ? 'selected' : '' }}>{{ $type->type_name }}</option>
                    @endforeach
                    
                </select>
            </div>

            <div class="mb-3">
                <label for="link_view" class="form-label text-white">Link view</label>
                <input type="text" name="link_view" id="link_view" class="form-control" placeholder=""
                    aria-describedby="link_viewId" value="{{old('link_view', $project->link_view )}}" />
            </div>
            @error('link_view')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="link_code" class="form-label text-white">Link code</label>
                <input type="text" name="link_code" id="link_code" class="form-control" placeholder=""
                    aria-describedby="link_codeId" value="{{old('link_code', $project->link_code )}}" />
            </div>
            @error('link_code')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">
                Save
            </button>


        </form>

    </div>
@endsection
