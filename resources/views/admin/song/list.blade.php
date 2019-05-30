@extends('layouts.admin')

@section('title','List Song')
<div class="container">
    @section('content')

    <a href={{url('/admin/song/create')}}>
        <button class="btn btn-outline-primary">
            Thêm Bài Hát
        </button>
    </a>

    @foreach ($song as $item)
    <div class="row">
        <div class="col-md-8">
            <h4>{{$item->TenBh}}</h4>
            {{-- <i>{{$item->NgaySinh}}</i><br>
            <b>{{$item->QueQuan}}</b> --}}
        </div>
        <div class="col-md-2">
            <form method="get" action={{url('/admin/song/'.$item->id.'/edit')}}>
                @csrf
                <button type="submit">Sửa</button>
            </form>
        </div>
        <div class="col-md-2">
            <form method="POST" action={{url('/admin/song/'.$item->id)}}>                
                @method('DELETE')   
                @csrf
                <button type="submit">Xóa</button>
            </form>
        </div>
    </div>
    @endforeach
    @endsection
</div>