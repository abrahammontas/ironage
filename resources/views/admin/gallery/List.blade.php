@extends('layouts.admin')

@section('title', 'Images list on Gallery')

@section('content')

  <div class="col-sm-12 col-md-12 main">
          <h2 class="sub-header">Images list</h2>
          <div class='<?php if(isset($class)){echo $class;}?>'>
            <?php if(isset($message)){echo $message;}?>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Category</th>
                  <th>Options</th>
                </tr>
              </thead>
              <tbody>
                @foreach($galleries as $g)
                <tr>
                  <td>{{ $g->id }}</td>
                  <td  class="col-lg-8 col-md-8 col-sm-8"><img  class="col-lg-12 col-md-12 col-sm-12" src="{{url('img/gallery/'.$g->name)}}"></td>
                  <td>{{ $g->Category->name }}</td>
                  <td>
                    {!! Form::open(array('method' => 'DELETE', 'route' => array('admin.gallery.destroy', $g->id))) !!}
                    <div class="btn-group" role="group" aria-label="...">
                      <a href="{{url('admin/gallery/'.$g->id.'/edit')}}" class='btn btn-primary'> Edit </a>
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