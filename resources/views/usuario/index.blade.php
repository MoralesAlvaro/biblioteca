@extends('layouts.headTable')

@section('content')
<x-table-img :slug="$slug" :panel="$panel" :encabezados="$encabezados" :result="$data" :campos="$campos"/>
@endsection