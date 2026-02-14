@props(['is' => 'a'])

<{{$is}} {{ $attributes(['class' => 'block border border-border rounded-lg bg-card p-4 md:mt-0']) }}>
    {{ $slot }}
</{{$is}}>
