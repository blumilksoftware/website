@props(['type' => 'info', 'position' => 'top-right', 'duration' => 3000])

@php
    $typeClasses = [
        'info' => 'bg-blue-500 border-blue-700',
        'warning' => 'bg-yellow-500 border-yellow-700',
        'error' => 'bg-red-500 border-red-700',
        'success' => 'bg-green-500 border-green-700',
    ][$type];

    $positionClasses = [
        'bottom-right' => 'bottom-4 right-4',
        'bottom-left' => 'bottom-4 left-4',
        'top-right' => 'top-4 right-4',
        'top-left' => 'top-4 left-4',
    ][$position];

    $icons = [
        'info' => 'fa-circle-info',
        'warning' => 'fa-triangle-exclamation',
        'error' => 'fa-circle-xmark',
        'success' => 'fa-circle-check',
    ];
@endphp

<div class="{{$positionClasses}} cursor-pointer absolute z-30"
     x-data="{show:true}"
     x-init="setTimeout(() => show = false, {{$duration}})"
     x-show="show"
     @click="show=false"
     x-transition:enter="transition ease-in duration-300"
     x-transition:enter-start="opacity-0 translate-y-4"
     x-transition:enter-end="opacity-100 translate-y-0"
     x-transition:leave="transition ease-in duration-300"
     x-transition:leave-start="opacity-100 translate-y-0"
     x-transition:leave-end="opacity-0 translate-y-4"
>
    <div class="{{$typeClasses}} max-w-xs text-white rounded-lg px-4 py-4 place-items-center flex gap-2 shadow-xl">
        <div class="place-self-start">
            <i class="fa-solid {{$icons[$type]}} text-white text-lg"></i>
        </div>
        {{$slot}}
    </div>
</div>
