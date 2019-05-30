@extends('layouts.admin')
@section('content')
    <div>
        <h1>Chỉnh sửa</h1>
        <form action="{{url('/admin/song/'.$data->id)}}" method="post">
            @csrf
            @method('put')
            
            <div class="form-group">
                <label>Tên bài hát</label>
                <input type="text" class="form-control" name="TenBh" value="{{ $data->TenBh }}"/>
            </div>
            <div class="form-group">
                <label>Tác giả</label>
                <input type="text" class="form-control" name="TacGia" value="{{ $data->TacGia }}"/>
            </div>
            <div class="form-group">
                <label>Ca sĩ</label>
                <input type="date" class="form-control" name="CaSy" value="{{ $data->CaSy }}"/>
            </div>
            <div class="form-group">
                <label>Lời bài hát</label>
                <input type="text" class="form-control" name="LoiBh" value="{{ $data->LoiBh }}"/>
            </div>
            <div class="form-group">
                <label>Ngày phát hành</label>
                <input type="date" class="form-control" name="NgayPh" value="{{ $data->NgayPh }}"/>
            </div>
            <div class="form-group">
                <label>Chủ đề</label>
                <input type="text" class="form-control" name="ChuDe" value="{{ $data->ChuDe }}"/>
            </div>
            <div class="form-group">
                <label>Link</label>
                <input type="text" class="form-control" name="Link" value="{{ $data->Link }}"/>
            </div>

            <button class="btn btn-primary" type="submit">Gửi</button>
        </form>
    </div>
    
@endsection