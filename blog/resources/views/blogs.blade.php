<x-layout>
    <x-slot name="title">
        <title>Home</title>
    </x-slot>
    @foreach($blogs as $blog)
    <h1 class="{{ $loop->odd ? 'bg-red' : '' }}">
        <a href="/blogs/{{ $blog->id }}">
            {{ $blog->title }}
        </a>
    </h1>
    <p>
        {!! $blog->description !!}
    </p>
    @endforeach
</x-layout>