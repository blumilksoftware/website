@if(isset($reference->position))
    {{ $reference->position }}
@endif

@if(isset($reference->position) && isset($reference->company))
    {{ __('at') }}
@endif

@if(isset($reference->company))
    {{ $reference->company }}
@endif
