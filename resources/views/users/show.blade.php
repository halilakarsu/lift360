<h1>Kullanıcı Detayı</h1>

<p>Ad: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>
<p>Firma: {{ $user->company->name ?? '-' }}</p>

<a href="{{ route('users.index') }}">Geri</a>