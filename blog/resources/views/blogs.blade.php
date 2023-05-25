<x-layout>
    @foreach($blogs as $blog)
    <h1 class="{{ $loop->odd ? 'bg-red' : '' }}">
        <a href="/blogs/{{ $blog->id }}">
            {{ $blog->title }}
        </a>
    </h1>
    <p>
        {!! $blog->body !!}
    </p>
    @endforeach
</x-layout>