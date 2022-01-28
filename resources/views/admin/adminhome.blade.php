@extends('admin.index')

@section('judul')
    BK HomePanel
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content">

            <router-view></router-view>
        </div>
    </div> {{-- end-contentwrapp-id --}}
@endsection
