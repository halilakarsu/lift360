<x-aero-layout>
    @section('title', 'Kullanıcılar')
    
    @section('breadcrumb')
        <li class="breadcrumb-item active">Kullanıcı Listesi</li>
    @endsection

    @section('content')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Kullanıcı</strong> Listesi</h2>
                    <ul class="header-dropdown">
                        <li>
                            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm text-white">
                                <i class="zmdi zmdi-plus"></i> Yeni Kullanıcı Ekle
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Ad Soyad</th>
                                    <th>Email</th>
                                    <th>Firma</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if($user->company)
                                                <span class="badge badge-info">{{ $user->company->name }}</span>
                                            @else
                                                <span class="badge badge-default">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('users.edit', $user) }}" class="btn btn-default btn-icon btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                            <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bu kullanıcıyı silmek istediğinizden emin misiniz?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-default btn-icon btn-sm"><i class="zmdi zmdi-delete text-danger"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Henüz kullanıcı bulunmamaktadır.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-aero-layout>