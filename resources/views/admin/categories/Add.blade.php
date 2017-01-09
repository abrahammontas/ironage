@extends('layouts.admin')

@section('title', 'Create a category')

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
          <h2 class="sub-header">Add a new Category</h2>
          {!! Form::open(array('url' => 'admin/categories')) !!}
          	<div class="form-group">
			    {!! Form::label('Name') !!}
			    {!! Form::text('name', null,
			        array('class'=>'form-control',
			              'placeholder'=>'Desk')) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
			</div>

        		<button class="btn btn-primary btn-block" type="submit">Add</button>
		  {!! Form::close() !!}
			<br>
		</div>			
</div>

@endsection
