@extends('layouts.app')

@section('title', 'Firmalar')

@section('breadcrumb')
    <li class="breadcrumb-item active">Firma Listesi</li>
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Firma</strong> Listesi</h2>
                <ul class="header-dropdown">
                    <li>
                        <a href="{{ route('companies.create') }}" class="btn btn-primary btn-sm text-white">
                            <i class="zmdi zmdi-plus"></i> Yeni Firma Ekle
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
                                <th>Firma Adı</th>
                                <th>Email</th>
                                <th>Telefon</th>
                                <th>Adres</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($companies as $company)
                                <tr>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>{{ $company->phone }}</td>
                                    <td>{{ Str::limit($company->address, 30) }}</td>
                                    <td>
                                        <a href="{{ route('companies.edit', $company) }}" class="btn btn-default btn-icon btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                        <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bu firmayı silmek istediğinizden emin misiniz?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-default btn-icon btn-sm"><i class="zmdi zmdi-delete text-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Henüz firma bulunmamaktadır.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    {{ $companies->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
