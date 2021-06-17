
<div class="form-group">
    {!! Form::label('name','Name:',) !!}
    {!! Form::text('name',null,['class'=> 'form-control', 'placeholder' => 'Enter the post name']) !!}
    @error('name')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug','Slug:',) !!}
    {!! Form::text('slug',null,['class'=> 'form-control', 'placeholder' => 'Enter the post slug', 'readonly']) !!}
    @error('slug')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::select('category_id', $categories,null,['class'=>'form-control']) !!}
    @error('category_id')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Tag:</p>
    @foreach($tags as $tag)
    <label class="mr-2">
        {!! Form::checkbox('tags[]', $tag->id, null,) !!}
        {{$tag->name}}
    </label>
    @endforeach

    @error('tags')
    <br>
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group ">
    <p class="font-weight-bold">Status:</p>
    <label class="mr-2" >
        {!! Form::radio('status',1,true) !!}
        Eraser
    </label>

    <label class="mr-2" >
        {!! Form::radio('status',2) !!}
        Published
    </label>

    @error('status')
    <br>
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div >
    <div class="md:grid md:grid-cols-3 md:gap-4 p-1 m-1">
        <div class=" mt-1 md:mt-0 md:col-span-3">
            <div class="shadow sm:rounded-md sm:overflow-hidden px-4">

                @if(Route::current()->getName() == 'admin.posts.edit' )
                    <label class="block text-sm text-center pt-2 font-medium text-gray-700">
                        Old image
                    </label>
                    @if($post->image)
                        <img class="w-full h-80 object-cover object-center " src="{{Storage::url($post->image->url)}}" alt="{{Storage::url($post->image->url)}}">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2020/04/06/13/37/coffee-5009730_960_720.png" alt="Tasa de cafe">

                    @endif
                @endif


                <label class="block text-sm text-center pt-2 font-medium text-gray-700">
                    Cover photo
                </label>
                <div >
                    {!! Form::file('PostImage',['class'=> 'picture filepond','accept' => 'image/*' ,'id' => 'filepond file', 'value' => '' ]) !!}
                    {{--<x-jet-input  class="picture filepond w-full" type="file"  > </x-jet-input>--}}
                </div>
                @error('status')
                <br>
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
    </div>


</div>

 <div class="form-group">

     {!! Form::label('extract', 'Extract:') !!}
     {!! Form::textarea('extract',null,['class'=>'form-control']) !!}

     @error('extract')
     <small class="text-danger">{{$message}}</small>
     @enderror
 </div>

<div class="form-group">

     {!! Form::label('body', 'Body:') !!}
     {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    @error('body')
    <small class="text-danger">{{$message}}</small>
    @enderror
 </div>





