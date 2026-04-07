<x-aero-layout>
    @section('title', 'Yeni Kullanıcı Ekle')
    
    @section('breadcrumb')
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Kullanıcılar</a></li>
        <li class="breadcrumb-item active">Yeni Ekle</li>
    @endsection

    @section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Yeni Kullanıcı</strong> Bilgileri</h2>
                </div>
                <div class="body">
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12">
                                <label for="name">Ad Soyad</label>
                                <div class="form-group">                                
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Ad Soyad" value="{{ old('name') }}" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label for="email">Email Adresi</label>
                                <div class="form-group">                                
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label for="company_id">Bağlı Olduğu Firma</label>
                                <div class="form-group">                                
                                    <select name="company_id" id="company_id" class="form-control show-tick">
                                        <option value="">Firma Seçiniz (Zorunlu Değil)</option>
                                        @foreach($companies as $company)
                                            <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('company_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label for="password">Şifre</label>
                                <div class="form-group">                                
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Şifre" required autocomplete="new-password">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <label for="password_confirmation">Şifre Tekrar</label>
                                <div class="form-group">                                
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Şifre Tekrar" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary btn-round">Kaydet</button>
                                <a href="{{ route('users.index') }}" class="btn btn-default btn-round">İptal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-aero-layout>