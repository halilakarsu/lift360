@extends('layouts.app')

@section('title', 'Asansörü Düzenle')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('lifts.index') }}">Asansörler</a></li>
    <li class="breadcrumb-item active">Düzenle</li>
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Asansör Düzenle</strong>: {{ $lift->name }}</h2>
            </div>
            <div class="body">
                <form method="POST" action="{{ route('lifts.update', $lift) }}" id="edit-lift-form">
                    @csrf
                    @method('PATCH')

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12">
                            <label for="name">Asansör Adı/Barkod</label>
                            <div class="form-group">                                
                                <input type="text" id="name" name="name" class="form-control" placeholder="Asansör Adı veya Barkod No" value="{{ old('name', $lift->name) }}" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <label for="building_name">Bina/Blok Adı</label>
                            <div class="form-group">                                
                                <input type="text" id="building_name" name="building_name" class="form-control" placeholder="Bina veya Blok Adı" value="{{ old('building_name', $lift->building_name) }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <label for="phone">İlgili Telefon</label>
                            <div class="form-group">                                
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefon" value="{{ old('phone', $lift->phone) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="address">Adres</label>
                            <div class="form-group">                                
                                <textarea id="address" name="address" rows="3" class="form-control no-resize" placeholder="Adres...">{{ old('address', $lift->address) }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 text-right">
                            <hr>
                            <a href="{{ route('lifts.index') }}" class="btn btn-default btn-round">İptal</a>
                            <button type="button" onclick="document.getElementById('edit-lift-form').submit();" class="btn btn-primary btn-round">Güncelle</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection