<x-layout>
    <x-slot name="title">
        <title>Home</title>
    </x-slot>
    @foreach($blogs as $blog)
    <h1 class="{{ $loop->odd ? 'bg-red' : '' }}">
        <a href="/blogs/{{ $blog->slug }}">
            {{ $blog->title }}
        </a>
    </h1>
    <p>
        {!! $blog->description !!}
    </p>
    <div>
        category -
        <a href="/categories/{{$blog->category->slug}}/posts">{{$blog->category->name}}</a>
    </div>
    <div>
        user -
        <a href="/users/{{$blog->author->username}}/posts">{{$blog->author->name}}</a>
    </div>
    <div>
        Published at - {{$blog->created_at->diffForHumans()}}
    </div>
    @endforeach
</x-layout>