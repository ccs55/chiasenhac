@extends('layouts.admin')

@section('title','List Singer')
<div class="container">
    @section('content')

    <a href={{url('/admin/singer/create')}}>
        <button class="btn btn-outline-primary">
            Thêm Ca Sĩ
        </button>
    </a>

    @foreach ($singer as $item)
    <div class="row">
        <div class="col-md-8">
            <h4>{{$item->TenCS}}</h4>
            {{-- <i>{{$item->NgaySinh}}</i><br>
            <b>{{$item->QueQuan}}</b> --}}
        </div>
        <div class="col-md-2">
            <form method="GET" action={{url('/admin/singer/'.$item->id.'/edit')}}>
                @csrf
                <button type="submit">Sửa</button>
            </form>
        </div>
        <div class="col-md-2">
            <form method="POST" action={{url('/admin/singer/'.$item->MaCS)}}>                
                @method('DELETE')   
                @csrf
                <button type="submit">Xóa</button>
            </form>
        </div>
    </div>
    @endforeach
    @endsection
</div>