@if($responsive)
    <div class="table-responsive">
@endif

<table {{ $attributes->merge()->class($tableClasses) }}>
    {{ $slot }}
</table>

@if($responsive)
    </div>
@endif
