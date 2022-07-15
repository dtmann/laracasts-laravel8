<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {!! $post->title !!}
                </a>
            </h1>

            <p>
                By <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in:
                <a class ="tag" href="/categories/{{ $post->category->slug }}">
                   {{ $post->category->name }}
                </a>
            </p>
            <h3>{{ $post->date }}</h3>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
</x-layout>
