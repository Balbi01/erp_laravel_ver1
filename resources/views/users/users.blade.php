@extends('layouts.app-layout')

@section('title')
    CRM - Usuarios
@endsection

@section('main-content')
    <x-users-table-view
        :users="$users">
    </x-users-table-view>

@endsection
