@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('messages.add_new_conference') }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('conferences.store') }}" method="POST">
                        @csrf

                        @include('conferences._form', ['conference' => new App\Models\Conference()])

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">{{ __('messages.add_conference') }}</button>
                            <a href="{{ route('conferences.index') }}" class="btn btn-secondary">{{ __('messages.cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
