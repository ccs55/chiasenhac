@extends('layouts.admin')
@section('content')
    <div>
        <h1>Chỉnh sửa</h1>
        <form action="{{url('/admin/singer/'.$data->id)}}" method="post">
            @csrf
            @method('put')
            
            <div class="form-group">
                <label>Mã ca sĩ</label>
                <input type="text" class="form-control" name="MaCS" value="{{ $data->MaCS }}"/>
            </div>
            <div class="form-group">
                <label>Tên ca sĩ</label>
                <input type="text" class="form-control" name="TenCS" value="{{ $data->TenCS }}"/>
            </div>
            <div class="form-group">
                <label>Ngày sinh</label>
                <input type="date" class="form-control" name="NgaySinh" value="{{ $data->NgaySinh }}"/>
            </div>
            <div class="form-group">
                <label>Quê quán</label>
                <input type="text" class="form-control" name="QueQuan" value="{{ $data->QueQuan }}"/>
            </div>
            <div class="form-group">
                <label>Tiểu sử</label>
                <input type="text" class="form-control" name="TieuSu" value="{{ $data->TieuSu }}"/>
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="text" class="form-control" name="HinhAnh" value="{{ $data->HinhAnh }}"/>
            </div>

            <button class="btn btn-primary" type="submit">Gửi</button>
        </form>
    </div>
    
@endsection