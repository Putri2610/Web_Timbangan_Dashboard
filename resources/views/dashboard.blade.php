<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Monitoring Timbangan</title>
</head>
<body>

<button class="btn btn-success">Bootstrap Berhasil 🎉</button>

<h1>Dashboard Monitoring Timbangan</h1>

<table border="1" cellpadding="10">

<tr>
    <th>PKS</th>
    <th>Timbangan Aktif</th>
    <th>IP Aktif</th>
    <th>Status</th>
    <th>Terakhir Dicek</th>
</tr>

@foreach($logs as $log)

<tr>
    <td>{{ $log->serverConfig->pks->nama_pks }}</td>
    <td>{{ $log->jalur_aktif }}</td>
    <td>{{ $log->ip_aktif }}</td>
    <td>
        @if($log->status)
            🟢 Online
        @else
            🔴 Offline
        @endif
    </td>
    <td>{{ $log->last_checked }}</td>
</tr>

@endforeach

</table>
</body>
</html>