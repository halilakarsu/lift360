<x-aero-layout>
    @section('title', 'Dashboard')
    
    @section('breadcrumb')
        <li class="breadcrumb-item active">Genel Bakış</li>
    @endsection

    @section('content')
    <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon domains">
                <div class="body">
                    <h6>Toplam Firma</h6>
                    <h2>{{ \App\Models\Company::count() }}</h2>
                    <small>Sistemde kayıtlı toplam firma sayısı</small>
                    <div class="progress">
                        <div class="progress-bar l-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card widget_2 big_icon email">
                <div class="body">
                    <h6>Toplam Kullanıcı</h6>
                    <h2>{{ \App\Models\User::count() }}</h2>
                    <small>Sistemde kayıtlı toplam kullanıcı sayısı</small>
                    <div class="progress">
                        <div class="progress-bar l-purple" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Hoşgeldiniz</strong></h2>
                </div>
                <div class="body text-muted">
                    <p>Asansör 360 Bakım Takip ve Yönetim Paneline başarıyla giriş yaptınız. Sol menüden firma ve kullanıcı işlemlerinizi gerçekleştirebilirsiniz.</p>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-aero-layout>
