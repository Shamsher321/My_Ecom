@extends('admin/layout')
@section('page_title','Coupon')
@section('coupon_select','active')
@section('container')

@if(session()->has('message'))
<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
{{session('message')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
</button>
</div>
@endif

  <h1>Coupon</h1><br>

  <a href="{{url('admin/coupon/manage_coupon')}}">
    <button type="button" class="btn btn-success">
    Add Coupon
</button>
</a>
  <br>
  <br>
    <div class="row">
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>title</th>
                        <th>Code</th>
                        <th>Value</th>
                        <th>Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->title}}</td>
                        <td>{{$list->code}}</td>
                        <td>{{$list->value}}</td>
                        <td>
                           
                            <a href="{{url('admin/coupon/manage_coupon/')}}/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>
                            
                              @if($list->status==1)
                            <a href="{{url('admin/coupon/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-primary">Active</button></a>
                            
                            @elseif($list->status==0)
                            <a href="{{url('admin/coupon/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Deactive</button></a>
                            @endif

                             <a href="{{url('admin/coupon/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Danger</button></a>
                        </td>
                    </tr>
                   @endforeach
              </tbody>
     </table>
    </div>
                           
                           

    </div>


@endsection