<div>
    <div class="container p-2">
        <div class=" mb-2 bg-white rounded flex items-center w-full p-4 shadow-sm border border-gray-200">
            <button class="outline-none focus:outline-none"><svg class=" mr-2 w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
            <input type="search"  wire:model="search" placeholder="search for posts"  class="w-full pl-4 text-sm outline-none focus:outline-none bg-transparent">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6   ">
            @foreach($posts as $post)
                <article class=" w-full h-80 bg-cover bg-center bg-white shadow-lg rounded-lg overflow-hidden @if($loop->first) md:col-span-2 @endif " style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2020/04/06/13/37/coffee-5009730_960_720.png @endif">
                    <div class="bg-gray-500 bg-opacity-30 w-full h-full px-8 flex flex-col justify-center">

                        <div class="pb-2">
                            @foreach($post->tags as $tag)
                                <a  href="{{route('posts.tag',$tag)}}" class="inline-block px-3 h-6 mt-1 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                            @endforeach
                        </div>
                        <h1 class="text-4xl text-white leading-9 font-bold px-1 mr-auto ">
                            <a class=" flex  rounded-full py-2  px-6" href="{{route('posts.show' ,$post)}}">
                                {{$post->name}}
                            </a>
                        </h1>

                        {{-- <div class="text-lg text-white text-reducer mb-2">
                             {{$post->extract}}
                         </div>--}}
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</div>
