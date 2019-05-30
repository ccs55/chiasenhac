@extends('layouts.admin')
@section('content')
<div class="container">
    <h2>Thêm bài hát</h2>
    <form method="POST" action={{url('admin/song')}}>
        @csrf
        <div class="form-group">
            <label>Tên bài hát</label>
            <input type="text" class="form-control" name="data[TenBh]"/>
        </div>
        <div class="form-group">
            <label>Tác giả</label>
            <input type="text" class="form-control" name="data[TacGia]"/>
        </div>
        <div class="form-group">
            <label>Ca sĩ</label>
            <input type="text" class="form-control" name="data[CaSy]"/>
        </div>
        <div class="form-group">
            <label>Lời bài hát</label>
            <input type="text" class="form-control" name="data[LoiBh]"/>
        </div>
        <div class="form-group">
            <label>Ngày phát hành</label>
            <input type="date" class="form-control" name="data[NgayPh]"/>
        </div>
        <div class="form-group">
            <label>Chủ đề</label>
            <input type="text" class="form-control" name="data[ChuDe]"/>
        </div>
        <div class="form-group">
            <label>Link</label>
            <input type="text" class="form-control" name="data[Link]"/>
        </div>

        
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
@endsection