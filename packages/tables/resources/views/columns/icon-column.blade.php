@php
    $stateColor = match ($getStateColor()) {
        'danger' => 'text-danger-500',
        'primary' => 'text-primary-500',
        'success' => 'text-success-500',
        'warning' => 'text-warning-500',
        default => \Illuminate\Support\Arr::toCssClasses(['text-gray-700', 'dark:text-gray-200' => config('tables.dark_mode'),]),
    };
@endphp

<div {{ $attributes->merge($getExtraAttributes())->class(['px-4 py-3 filament-tables-icon-column']) }}>
    @if ($getStateIcon())
        <x-dynamic-component
            :component="$getStateIcon()"
            :class="'w-6 h-6' . ($stateColor ? ' ' . $stateColor : '')"
        />
    @endif
</div>
