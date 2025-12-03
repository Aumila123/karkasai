@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>{{ __('messages.conferences') }}</h1>
        @auth
            <a href="{{ route('conferences.create') }}" class="btn btn-primary">{{ __('messages.add_new_conference') }}</a>
        @endauth
    </div>

    @if($conferences->count() > 0)
        <div class="row">
            @foreach($conferences as $conference)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $conference->title }}</h5>
                            <p class="card-text">{{ Str::limit($conference->description, 100) }}</p>
                            <p class="text-muted">
                                <strong>{{ __('messages.date') }}:</strong>
                                <strong>{{ __('messages.location') }}:</strong>
                            </p>
                            <div class="btn-group">
                                <a href="{{ route('conferences.show', $conference) }}" class="btn btn-sm btn-info">{{ __('messages.view') }}</a>
                                @auth
                                    <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-sm btn-warning">{{ __('messages.edit') }}</a>
                                <form action="{{ route('conferences.destroy', $conference) }}" method="POST" style="display:inline;" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-danger delete-btn">{{ __('messages.delete') }}</button>
                                </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info">No conferences found.</div>
    @endif
@endsection
