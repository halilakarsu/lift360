@extends('layouts.app')

@section('title', 'Asansör Detayı')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('lifts.index') }}">Asansörler</a></li>
    <li class="breadcrumb-item active">Asansör Detayı</li>
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Asansör</strong> Detayı: {{ $lift->name }}</h2>
            </div>
            <div class="body">
                <p><strong>Asansör Adı/Barkod:</strong> {{ $lift->name }}</p>
                <p><strong>Bina/Blok:</strong> {{ $lift->building_name ?? '-' }}</p>
                <p><strong>Telefon:</strong> {{ $lift->phone ?? '-' }}</p>
                <p><strong>Adres:</strong> {{ $lift->address ?? '-' }}</p>
                <hr>
                <a href="{{ route('lifts.index') }}" class="btn btn-default btn-round">Geri</a>
                <a href="{{ route('lifts.edit', $lift) }}" class="btn btn-primary btn-round">Düzenle</a>
            </div>
        </div>
    </div>
</div>
@endsection