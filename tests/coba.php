<!DOCTYPE html>
<html>

<head>

    <title>Dashboard Monitoring Timbangan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body class="bg-light">

<div class="container mt-4">

    <h2 class="mb-4">
        Dashboard Monitoring Timbangan
    </h2>

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            Monitoring Server Aktif

        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead class="table-dark">

                <tr>

                    <th>No</th>

                    <th>PKS</th>

                    <th>Server Aktif</th>

                    <th>Jalur</th>

                    <th>IP Aktif</th>

                    <th>Status</th>

                    <th>Terakhir Dicek</th>

                    <th>Generate XML</th>

                </tr>

                </thead>

                <tbody>

                @foreach($aktifServers as $server)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $server['kode_pks'] }}</td>

                        <td>{{ $server['nama_server'] }}</td>

                        <td>

                            @if($server['jalur']=="local")

                                <span class="badge bg-success">

                                    LOCAL

                                </span>

                            @elseif($server['jalur']=="internet")

                                <span class="badge bg-warning text-dark">

                                    INTERNET

                                </span>

                            @else

                                -

                            @endif

                        </td>

                        <td>

                            {{ $server['ip'] }}

                        </td>

                        <td class="text-center">

                            @if($server['status']=="Online")

                                <i class="bi bi-circle-fill text-success"></i>

                            @else

                                <i class="bi bi-circle-fill text-danger"></i>

                            @endif

                        </td>

                        <td>

                            {{ optional($server['updated_at'])->format('d-m-Y H:i:s') }}

                        </td>

                        <td>

                            <button class="btn btn-success btn-sm">

                                <i class="bi bi-file-earmark-code"></i>

                                Generate

                            </button>

                        </td>

                    </tr>

                @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>

</html>
