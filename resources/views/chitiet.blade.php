@extends('layout')
@section('tieudetrang')
{{$tin->TieuDe}}
@endsection
@section('noidung')
<h2>{{$tin->TieuDe}}</h2>
<h3>{{$tin->TomTat}}</h3>
<div id="noidung">
    {{!! $tin->Content !!}}
</div>
@endsection