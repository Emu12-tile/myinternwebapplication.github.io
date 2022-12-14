@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <h6 class='alert alert-success'>{{session('status')}}</h6>
                @endif
               
            <div class="card-header">
                <h4> update home
                    <a href="{{url('about')}}" class="btn btn-danger float-end">back</a></h4>
            </div> 
            <div class="card-body">
                <form action="{{url('update-about/'.$about->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="form-group mb-3">
                    <label for="">about_title</label>
                    <input type="text" name="about_title"  value="{{$about->about_title}}" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">description</label>
                        <input type="text" name="description" value="{{$about->description}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">quote</label>
                            <input type="text" name="quote" value="{{$about->quote}}" class="form-control">
                            </div>
                          
                            <div class="form-group mb-3">
                                <label for="">image1</label>
                                <input type="file"  name="image1" class="form-control">
                                <img src="{{asset('uploads/abouts/' .$about->image1)}}"  width="70px" height="70px" alt="image">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">image2</label>
                                    <input type="file"  name="image2" class="form-control">
                                    <img src="{{asset('uploads/abouts/' .$about->image2)}}"  width="70px" height="70px" alt="image">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">image3</label>
                                        <input type="file"  name="image3" class="form-control">
                                        <img src="{{asset('uploads/abouts/' .$about->image3)}}"  width="70px" height="70px" alt="image">
                                        </div>
                        <div class="form-group mb-3">
                            
                     <div class="row  "  >
                       Status
                  
                    <div>
                     <label for="" class="mr-3 ml-3 text-xs" >Active</label>
                    <input type="radio" name="status" class="form-control " id="1" value="1">
                    </div>
                    <div>
                        <label for=""class="text-xs" >Deactive</label>
                    <input type="radio" name="status" class="form-control" id="0" value="0">
                    </div>
                   </div>
                                <div class="form-group mb-4 mt-4">
                                    <button type="submit" class="btn btn-primary">update </button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection