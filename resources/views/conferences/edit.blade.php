@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('messages.edit') }} {{ __('messages.conference_details') }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('conferences.update', $conference) }}" method="POST">
                        @csrf
                        @method('PUT')

                        @include('conferences._form')

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">{{ __('messages.update_conference') }}</button>
                            <a href="{{ route('conferences.index') }}" class="btn btn-secondary">{{ __('messages.cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
