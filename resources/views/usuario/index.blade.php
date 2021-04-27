@extends('layouts.headTable')

@section('content')
<x-table :slug="$slug" :panel="$panel" :encabezados="$encabezados" :result="$data" :campos="$campos"/>
@endsection