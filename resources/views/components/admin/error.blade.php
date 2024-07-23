@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'error_message']) }}>
        @foreach ((array) $messages as $message)
            <li class="text-danger fs-3">{{ $message }}</li>
        @endforeach
    </ul>
@endif
