{{-- @if($showText != false)

@elseif($showText === true)
    {{ $text }}
    <br>
    {{ $text2 }}
@else 
    <p>Nothing</p>

@endif --}}
{{-- 
@if(count($fruits) > 0)

    @foreach($fruits as $item)
        <p>{{ $item }}</p>
    @endforeach

@else 
    <p>No Item Found</p>

@endif --}}


@forelse($fruits as $item)
    <p>{{ $item }}</p>
@empty 
    <p>No Item Found</p>
@endforelse

{{-- raw php  --}}

{{-- @php($abc = "ngsikgj") --}}
{{-- @php 
    $abc = "jkdfgnjkf";
@endphp --}}


{{-- {{ $text }} --}}