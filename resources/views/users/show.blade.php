<h1>Firma Detayı</h1>

<p>Ad: {{ $company->name }}</p>
<p>Email: {{ $company->email }}</p>
<p>Telefon: {{ $company->phone }}</p>
<p>Adres: {{ $company->address }}</p>

<a href="{{ route('companies.index') }}">Geri</a>