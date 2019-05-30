@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Thêm Video</h2>
    <form method="POST" action="{{ url('admin/video') }}">
        @csrf
        <div class="form-group">
            <label>Tên video</label>
            <input type="text" class="form-control" name="data[TenVideo]"/>
        </div>
        <div class="form-group">
            <label>Tên ca sĩ</label>
            <input type="text" class="form-control" name="data[TenCS]"/>
        </div>
        <div class="form-group">
            <label>Ngày phát hành</label>
            <input type="date" class="form-control" name="data[NgayPH]"/>
        </div>
        
       
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
@endsection