@extends('layouts.app')

@section('title', 'Asansörler')

@section('breadcrumb')
    <li class="breadcrumb-item active">Asansör Listesi</li>
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Asansör</strong> Listesi</h2>
                <ul class="header-dropdown">
                    <li>
                        <a href="{{ route('lifts.create') }}" class="btn btn-primary btn-sm text-white">
                            <i class="zmdi zmdi-plus"></i> Yeni Asansör Ekle
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
                                <th>Asansör Adı/Barkod</th>
                                <th>Bina/Blok</th>
                                <th>Telefon</th>
                                <th>Adres</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($lifts as $lift)
                                <tr>
                                    <td>{{ $lift->name }}</td>
                                    <td>{{ $lift->building_name }}</td>
                                    <td>{{ $lift->phone }}</td>
                                    <td>{{ Str::limit($lift->address, 30) }}</td>
                                    <td>
                                        <a href="{{ route('lifts.show', $lift) }}" class="btn btn-default btn-icon btn-sm"><i class="zmdi zmdi-eye text-primary"></i></a>
                                        <a href="{{ route('lifts.edit', $lift) }}" class="btn btn-default btn-icon btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                        <form action="{{ route('lifts.destroy', $lift) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bu asansörü silmek istediğinizden emin misiniz?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-default btn-icon btn-sm"><i class="zmdi zmdi-delete text-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Henüz asansör kaydı bulunmamaktadır.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    {{ $lifts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
