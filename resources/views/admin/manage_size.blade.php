@extends('admin/layout')
@section('page_title','Manage Size')
@section('size_select','active')
@section('container')


  <h1 class="mb10">manage_size</h1>
  
  <a href="{{url('admin/size')}}">
  <button type="button" class="btn btn-success">Back</button>
  </a>
  <br>
  <br>
    <div class="row">
        <div class="table-responsive m-b-40">
            <div class="row">
                <div class="col-lg-12">
                    
                     <div class="card">
                         <div class="card-header"></div>
                           
                     <form action="{{route('size.manage_size_process')}}" method="post">
                        @csrf
                     <div class="form-group">
                     <label for="size" class="control-label mb-1">Size</label>
                     <input id="size" value="{{$size}}" name="size" type="text" class="form-control"   aria-required="true" aria-invalid="false" required>
                     @error('size')
                     <div class="alert alert-danger" role="alert">
                         {{$message}}
                         </div>
                         @enderror
                        </div>

                   
                     <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
               Submit
                 </button>
                 </div>
                 <input type="hidden" name="id" value="{{$id}}"/>
                 </form>
                 </div>
                     </div>
                </div>
                            
            </div>
                        
                  
        </div>
                           
    </div>


@endsection