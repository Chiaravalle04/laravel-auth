@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">{{ __('Modifica progetto') }}</div>

                <div class="card">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>

                <form class="p-4" action="{{ route('admin.projects.update', $project->id) }}" method="post">
                    @csrf

                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo*</label>
                        <input type="text" 
                            class="form-control" 
                            id="title" 
                            name="title"
                            value="{{ old('title', $project->title) }}"
                            placeholder="Inserisci il titolo..."
                            required
                            maxlength="120"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione*</label>
                        <textarea 
                            class="form-control" 
                            id="description" 
                            name="description"
                            rows="3" 
                            placeholder="Inserisci la descrizione..."
                            required
                        >{{ old('description', $project->description) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Framework utilizzato</label>                     
                        <input type="text" 
                            class="form-control" 
                            id="tags" 
                            name="tags"
                            value="{{ old('tags', $project->tags) }}"
                            placeholder="Inserisci il framework..."
                        >
                    </div>

                    <button class="btn btn-warning" type="submit">Modifica</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection