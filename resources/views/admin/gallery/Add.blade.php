@extends('layouts.admin')

@section('title', 'Add a image to the Gallery')

@section('content')


    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="col-lg-4">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="col-lg-4">
          <h2 class="sub-header">Add a new Image</h2>
          {!! Form::open(array('url' => 'admin/gallery' , 'files' => true)) !!}
            <div class="form-group">
                {!! Form::label('Image', 'File') !!}
                {!! Form::file('image',null, ['class' => 'form-control']) !!}
                @if ($errors->has('image'))
                    <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                {!! Form::label('Category') !!}
                {!! Form::select('category', $categories, old('category'), ['class'=> 'form-control', 'required']) !!}
                @if ($errors->has('category'))
                    <span class="help-block">
                        <strong>{{ $errors->first('category') }}</strong>
                    </span>
                @endif
            </div>
                <button class="btn btn-primary btn-block" type="submit">Add</button>
		  {!! Form::close() !!}
			<br>
		</div>			
</div>

@endsection
