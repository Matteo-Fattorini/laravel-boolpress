@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route("post.store") }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("POST")
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="title" >
                        
                    </div>
                    <div class="mb-3">
                        <label for="details" class="form-label">Details</label>
                        <input name="details" type="text" class="form-control" id="details" >
                        
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input name="image" type="file" class="form-control" id="image" >
                        
                    </div>

                    
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
