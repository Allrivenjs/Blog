@props(['post'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    @if($post->image)
        <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="{{$post->image->url}}">
    @else
        <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/04/06/13/37/coffee-5009730_960_720.png" alt="Tasa de cafe">
    @endif
    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2 ">
            <a href="{{route('posts.show',$post)}}">{{$post->name}}</a>
        </h1>
        <div class="text-gray-700 text-base">
            {!! $post->extract !!}
        </div>
    </div>

    <div class="px-6 pt-2 pb-4">
        @foreach($post->tags as $tag)
            <a href="{{route('posts.tag',$tag)}}" class="inline-block bg-gray-200 bg-{{$tag->color}}-600 rounded-full px-3 py-1 text-sm text-white mr-2 " >{{$tag->name}}</a>
        @endforeach
    </div>
</article>
