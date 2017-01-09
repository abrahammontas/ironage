@extends('layouts.admin')

@section('title', 'Category list')

@section('content')

  <div class="col-sm-12 col-md-12 main">
          <h2 class="sub-header">Category list</h2>
          <div class='<?php if(isset($class)){echo $class;}?>'>
            <?php if(isset($message)){echo $message;}?>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Category Name</th>
                  <th>Options</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $c)
                <tr>
                  <td>{{ $c->id }}</td>
                  <td>{{ $c->name }}</td>
                  <td>
                    {!! Form::open(array('method' => 'DELETE', 'route' => array('admin.categories.destroy', $c->id))) !!}
                    <div class="btn-group" role="group" aria-label="...">
                      <a href="{{url('admin/categories/'.$c->id.'/edit')}}" class='btn btn-primary'> Edit </a>
                      {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    </div>
                    {!! Form::close() !!}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

@endsection