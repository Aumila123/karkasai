@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>{{ __('messages.conference_details') }}</h4>
                    <a href="{{ route('conferences.index') }}" class="btn btn-secondary btn-sm">{{ __('messages.back_to_list') }}</a>
                </div>
                <div class="card-body">
                    <h2 class="card-title mb-4">{{ $conference->title }}</h2>

                    <div class="mb-4">
                        <h5 class="text-muted">{{ __('messages.description') }}</h5>
                        <p class="lead">{{ $conference->description }}</p>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('messages.date') }}</h6>
                            <p><i class="bi bi-calendar"></i> {{ \Carbon\Carbon::parse($conference->date)->format('F d, Y') }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-muted">{{ __('messages.location') }}</h6>
                            <p><i class="bi bi-geo-alt"></i> {{ $conference->address }}</p>
                        </div>
                    </div>

                    <div class="text-muted small">
                        <p class="mb-1"><strong>Created:</strong> {{ $conference->created_at->format('M d, Y H:i') }}</p>
                        <p class="mb-0"><strong>Last Updated:</strong> {{ $conference->updated_at->format('M d, Y H:i') }}</p>
                    </div>

                    <hr class="my-4">
                    @auth
                    <div class="d-flex gap-2">
                        <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-warning">{{ __('messages.edit') }}</a>
                        <form action="{{ route('conferences.destroy', $conference) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this conference?')">{{ __('messages.delete') }}</button>
                        </form>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
