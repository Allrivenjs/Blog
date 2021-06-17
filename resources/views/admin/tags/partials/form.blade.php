<div class="form-group">
    {!! Form::label('name','Name:',) !!}
    {!! Form::text('name',null,['class'=> 'form-control', 'placeholder' => 'Enter the tag name']) !!}
    @error('name')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug','Slug:',) !!}
    {!! Form::text('slug',null,['class'=> 'form-control', 'placeholder' => 'Enter the tag slug', 'readonly']) !!}
    @error('slug')
    <small class="text-danger">{{$message}}</small>
    @enderror

</div>

<div class="form-group">
    {{--<label for="">Color:</label>
    <select name="color" id="" class="form-control">
        <option value="red">Color Red</option>
        <option value="blue" selected>Color Blue</option>
        <option value="green">Color Green</option>

    </select>--}}
    {!! Form::label('color','Color:') !!}
    {!! Form::select('color',$colors, null, ['class' => 'form-control']) !!}
</div>
