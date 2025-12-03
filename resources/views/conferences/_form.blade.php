<div class="mb-3">
    <label for="title" class="form-label">{{ __('messages.title') }}</label>
    <input type="text"
           class="form-control @error('title') is-invalid @enderror"
           id="title"
           name="title"
           value="{{ old('title', $conference->title ?? '') }}"
           required>
    @error('title')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">{{ __('messages.description') }}</label>
    <textarea class="form-control @error('description') is-invalid @enderror"
              id="description"
              name="description"
              rows="4"
              required>{{ old('description', $conference->description ?? '') }}</textarea>
    @error('description')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="date" class="form-label">{{ __('messages.date') }}</label>
    <input type="date"
           class="form-control @error('date') is-invalid @enderror"
           id="date"
           name="date"
           value="{{ old('date', $conference->date ?? '') }}"
           required>
    @error('date')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="address" class="form-label">{{ __('messages.address') }}</label>
    <input type="text"
           class="form-control @error('address') is-invalid @enderror"
           id="address"
           name="address"
           value="{{ old('address', $conference->address ?? '') }}"
           required>
    @error('address')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
