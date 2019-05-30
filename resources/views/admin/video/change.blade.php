@extends('layouts.admin')
@section('content')
    <div>
        <h1>Chỉnh sửa</h1>
        <form action="{{url('/admin/video/'.$data->id)}}" method="post">
            @csrf
            @method('put')
            
            <div class="form-group">
                <label>Tên video</label>
                <input type="text" class="form-control" name="TenVideo" value="{{ $data->TenVideo }}"/>
            </div>
            <div class="form-group">
                <label>Tên ca sĩ</label>
                <input type="text" class="form-control" name="TenCS" value="{{ $data->TenCS }}"/>
            </div>
            <div class="form-group">
                <label>Ngày phát hành</label>
                <input type="date" class="form-control" name="NgayPH" value="{{ $data->NgayPH }}"/>
            </div>
            
            <button class="btn btn-primary" type="submit">Gửi</button>
        </form>
    </div>
    
@endsection