<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Monitoring Jaringan Timbangan</title>
    <!-- Hubungkan ke Bootstrap melalui CDN (atau gunakan file lokal kamu jika sudah terinstall) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahan Google Fonts & Icons agar terlihat premium -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f6f9;
            color: #333;
        }
        .navbar-custom {
            background-color: #1e3a8a; /* Warna biru navy gelap sesuai referensi modern */
            color: white;
        }
        .card-custom {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            background-color: white;
        }
        .table-custom th {
            background-color: #f8fafc;
            color: #64748b;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
        }
        .badge-online {
            background-color: #d1fae5;
            color: #065f46;
            padding: 6px 12px;
            border-radius: 30px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .badge-offline {
            background-color: #fee2e2;
            color: #991b1b;
            padding: 6px 12px;
            border-radius: 30px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
    </style>
</head>
<body>

    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-custom shadow-sm mb-4 py-3">
        <div class="container-fluid px-4 d-flex justify-content-between align-items-center">
            <span class="navbar-brand mb-0 h1 text-white fw-bold">
                <i class="bi bi-cpu shadow-sm me-2"></i> Network Monitoring System
            </span>
            <div class="d-flex align-items-center gap-3">
                <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill">
                    <i class="bi bi-check-circle-fill me-1"></i> System Active
                </span>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="container-fluid px-4">
        
        <!-- Header & Title -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="fw-bold mb-1 text-dark">Dashboard Monitoring Jaringan</h4>
                <p class="text-muted small mb-0">Memantau aktivitas konektivitas timbangan PKS secara real-time.</p>
            </div>
        </div>

        <!-- Table Data Card -->
        <div class="card card-custom p-0 overflow-hidden mb-4">
            <div class="card-header bg-white py-3 px-4 border-bottom d-flex align-items-center justify-content-between">
                <h6 class="m-0 fw-bold text-secondary"><i class="bi bi-list-stars me-2"></i>Status Koneksi Timbangan</h6>
            </div>
            <div class="table-responsive">
                <table class="table table-custom table-hover align-middle mb-0 py-2">
                    <thead>
                        <tr class="align-middle">
                            <th class="ps-4">Nama PKS</th>
                            <th>Jalur / Timbangan Aktif</th>
                            <th>IP Address</th>
                            <th>Status Jaringan</th>
                            <th class="pe-4">Terakhir Dicek</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logs as $log)
                        <tr>
                            <td class="ps-4 fw-semibold text-dark">
                                <i class="bi bi-factory me-2 text-muted"></i>{{ $log->serverConfig->pks->nama_pks }}
                            </td>
                            <td>
                                <span class="text-secondary fw-medium">{{ $log->jalur_aktif }}</span>
                            </td>
                            <td>
                                <code class="text-primary fw-bold" style="font-size: 0.9rem;">{{ $log->ip_aktif }}</code>
                            </td>
                            <td>
                                @if($log->status)
                                    <span class="badge-online">
                                        <span class="spinner-grow spinner-grow-sm text-success" role="status" style="--bs-spinner-width: 0.5rem; --bs-spinner-height: 0.5rem;"></span>
                                        Online
                                    </span>
                                @else
                                    <span class="badge-offline">
                                        <span class="p-1 bg-danger rounded-circle d-inline-block" style="width: 0.5rem; height: 0.5rem;"></span>
                                        Offline
                                    </span>
                                @endif
                            </td>
                            <td class="pe-4 text-muted small">
                                <i class="bi bi-clock me-1"></i>{{ $log->last_checked }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"></script>
</body>
</html>