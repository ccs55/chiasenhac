@extends('layouts.admin')

@section('title','List Video')
<div class="container">
    @section('content')

    <a href={{url('/admin/video/create')}}>
        <button class="btn btn-outline-primary">
            Thêm Video
        </button>
    </a>

    @foreach ($video as $item)
    <div class="row">
        <div class="col-md-8">
            <h4>{{$item->TenVideo}}</h4>
            
        </div>
        <div class="col-md-2">
            <form method="get" action={{url('/admin/video/'.$item->id.'/edit')}}>
                @csrf
                <button type="submit">Sửa</button>
            </form>
        </div>
        <div class="col-md-2">
            <form method="POST" action={{url('/admin/video/'.$item->id)}}>                
                @method('DELETE')   
                @csrf
                <button type="submit">Xóa</button>
            </form>
        </div>
    </div>
    @endforeach
    @endsection
</div>