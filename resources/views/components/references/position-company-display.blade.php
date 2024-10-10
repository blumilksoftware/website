@if(isset($reference->position))
    {{ $reference->position }}
@endif

@if(isset($reference->position) && isset($reference->company))
    {{ __('content.at') }}
@endif

@if(isset($reference->company))
    {{ $reference->company }}
@endif
