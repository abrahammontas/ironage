@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header xs-centered">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <hr />

    @if($message = session('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- /.row -->
    <div class="row">
        <div class="col-md-6" style="margin-bottom:20px;">
            <div style="border: 1px solid black; background-color:white; padding: 15px; border-radius: 3px;">

                @if(!$post = session('post'))

                    <h4>Create Post</h4>

                    {{ Form::open(['method' => 'post', 'enctype' => 'multipart/form-data']) }}

                        <div class="form-group">
                            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Post Title']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::textarea('content') }}
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            {{ Form::file('image') }}
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label><br />
                            {{ Form::date('date', \Carbon\Carbon::now()) }}
                        </div>

                        {{ Form::submit('Create Post', ['class' => 'btn btn-primary']) }}

                    {{ Form::close() }}

                @else

                    <h4>Update Post</h4>

                    {{ Form::open(['method' => 'put', 'route' => ['post.update', $post->id], 'enctype' => 'multipart/form-data']) }}

                        <div class="form-group">
                            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Post Title']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::textarea('content', $post->content) }}
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            @if($post->image)
                                <img src="{{ Storage::url('post_img/' . $post->image) }}" class="img-responsive" style="margin-bottom:10px;">
                            @endif
                            {{ Form::file('image') }}
                        </div>

                        <div class="form-group">
                            <label for="date">Date</label><br />
                            {{ Form::date('date', $post->date) }}
                        </div>

                        {{ Form::submit('Update Post', ['class' => 'btn btn-primary']) }}

                    {{ Form::close() }}

                @endif

            </div>
        </div>
        <div class="col-md-6">
            <h4 style="margin-top:0px;">All Posts</h4>

            <table class="table table-bordered table-hover">
                <thead bgcolor="whitesmoke">
                    <tr>
                        <th>Post Date</th>
                        <th>Post Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody bgcolor="white">
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ date("m/d/Y", strtotime($post->date)) }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                                {{ Form::open(['method' => 'post', 'route' => ['post.edit', $post->id]]) }}
                                    {{ Form::submit('edit', ['class' => 'submit-no-btn']) }}
                                {{ Form::close() }}
                            </td>
                            <td>
                                {{ Form::open(['method' => 'delete', 'route' => ['post.delete', $post->id]]) }}
                                    {{ Form::submit('delete', ['class' => 'submit-no-btn']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>

    <script>

        tinymce.init({
            selector: 'textarea',
            plugins : 'advlist autolink link lists charmap print preview wordcount emoticons insertdatetime save table',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignjustify | bullist numlist outdent indent | link image media'
        });

        $(document).ready(function() {

            setTimeout(function() {
               $('div.alert').slideUp('slow');
            }, 3000);

        });

    </script>

@endsection
