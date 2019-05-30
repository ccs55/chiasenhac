@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Thêm ca sĩ</h2>
    <form method="POST" action="{{ url('admin/singer') }}">
        @csrf
        <div class="form-group">
            <label>Mã ca sĩ</label>
            <input type="text" class="form-control" name="data[MaCS]"/>
        </div>
        <div class="form-group">
            <label>Tên ca sĩ</label>
            <input type="text" class="form-control" name="data[TenCS]"/>
        </div>
        <div class="form-group">
            <label>Ngày sinh</label>
            <input type="date" class="form-control" name="data[NgaySinh]"/>
        </div>
        <div class="form-group">
            <label>Quê quán</label>
            <input type="text" class="form-control" name="data[QueQuan]"/>
        </div>
        <div class="form-group">
            <label>Tiểu sử</label>
            <input type="text" class="form-control" name="data[TieuSu]"/>
        </div>
        <div class="form-group">
            <label>Hình ảnh</label>
            <input type="text" class="form-control" name="data[HinhAnh]"/>
        </div>
       
        <button class="btn btn-primary" type="submit">Gửi</button>
    </form>
</div>
@endsection