<x-aero-layout>
    @section('title', 'Firmayı Düzenle')
    
    @section('breadcrumb')
        <li class="breadcrumb-item"><a href="{{ route('companies.index') }}">Firmalar</a></li>
        <li class="breadcrumb-item active">Düzenle</li>
    @endsection

    @section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Firma Düzenle</strong>: {{ $company->name }}</h2>
                </div>
                <div class="body">
                    <form method="POST" action="{{ route('companies.update', $company) }}">
                        @csrf
                        @method('PATCH')
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12">
                                <label for="name">Firma Adı</label>
                                <div class="form-group">                                
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Firma Adı" value="{{ old('name', $company->name) }}" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label for="email">Email Adresi</label>
                                <div class="form-group">                                
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', $company->email) }}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label for="phone">Telefon</label>
                                <div class="form-group">                                
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefon" value="{{ old('phone', $company->phone) }}">
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="address">Adres</label>
                                <div class="form-group">                                
                                    <textarea id="address" name="address" rows="3" class="form-control no-resize" placeholder="Adres...">{{ old('address', $company->address) }}</textarea>
                                    @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary btn-round">Güncelle</button>
                                <a href="{{ route('companies.index') }}" class="btn btn-default btn-round">İptal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-aero-layout>