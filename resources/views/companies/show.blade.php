@extends('layouts.app')

@section('title', 'Firma Detayı')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('companies.index') }}">Firmalar</a></li>
    <li class="breadcrumb-item active">Firma Detayı</li>
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Firma</strong> Detayı: {{ $company->name }}</h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Firma Adı:</strong> {{ $company->name }}</p>
                        <p><strong>Email:</strong> {{ $company->email ?? '-' }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Telefon:</strong> {{ $company->phone ?? '-' }}</p>
                        <p><strong>Adres:</strong> {{ $company->address ?? '-' }}</p>
                    </div>
                </div>
                <hr>
                <a href="{{ route('companies.index') }}" class="btn btn-default btn-round">Geri</a>
                <a href="{{ route('companies.edit', $company) }}" class="btn btn-primary btn-round">Düzenle</a>
            </div>
        </div>
    </div>
</div>
@endsection