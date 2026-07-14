<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Angka 180 artinya halaman akan refresh otomatis setiap 180 detik (3 menit) -->
 <meta http-equiv="refresh" content="180">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Monitoring Timbangan - MetaHome Style</title>
    
    <!-- Google Fonts & Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #ebf0f5; /* Warna background soft blue-grey sesuai contoh */
            overflow-x: hidden;
        }
        
        /* Layout Sidebar */
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #234275; /* Biru gelap khas contoh dashboard */
            padding: 24px;
            color: #b9cbe3;
            z-index: 100;
        }
        .sidebar .brand {
            font-size: 1.25rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar-item a {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 16px;
            color: #b9cbe3;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 500;
            margin-bottom: 8px;
            transition: all 0.3s ease;
        }
        .sidebar-item.active a, .sidebar-item a:hover {
            background-color: #335994; /* Warna highlight menu aktif */
            color: #ffffff;
        }

        /* Main Content Wrapper */
        .main-content {
            margin-left: 260px;
            padding: 20px 40px;
            min-height: 100vh;
        }

        /* Top Bar Header */
        .top-bar {
            background: #ffffff;
            border-radius: 16px;
            padding: 14px 28px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.02);
            margin-bottom: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Cards Style ala Dashboard Referensi */
        .card-modern {
            background: #ffffff;
            border: none;
            border-radius: 20px; /* Lengkungan sudut halus */
            box-shadow: 0 10px 25px rgba(163, 178, 199, 0.25); /* Shadow lembut kebiruan */
            padding: 24px;
            margin-bottom: 24px;
        }

        /* Status Badge */
        .status-online {
            background-color: #e6f9f0;
            color: #10b981;
            font-weight: 600;
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .status-offline {
            background-color: #fee2e2;
            color: #ef4444;
            font-weight: 600;
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        /* Table Styling */
        .table-modern th {
            background-color: transparent;
            color: #8fa0b5;
            font-weight: 600;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 2px solid #edf2f7;
            padding-bottom: 16px;
        }
        .table-modern td {
            padding: 20px 0;
            border-bottom: 1px solid #f1f5f9;
            color: #4a5568;
            font-weight: 500;
        }
        
        .ip-code {
            background-color: #f0f4f9;
            padding: 4px 10px;
            border-radius: 8px;
            color: #2563eb;
            font-family: monospace;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <!-- SIDEBAR KIRI -->
    <div class="sidebar shadow-sm">
        <div class="brand">
            <i class="bi bi-cpu-fill text-info"></i>
            <span>MetaHome Monitoring</span>
        </div>
        <ul class="sidebar-menu">
            <li class="sidebar-item active">
                <a href="#"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a>
            </li>
            <li class="sidebar-item">
                <a href="#"><i class="bi bi-router"></i> Devices / PKS</a>
            </li>
            <li class="sidebar-item">
                <a href="#"><i class="bi bi-wifi"></i> Wi-Fi & Networks</a>
            </li>
            <li class="sidebar-item">
                <a href="#"><i class="bi bi-shield-check"></i> Security</a>
            </li>
            <li class="sidebar-item" style="margin-top: auto;">
                <a href="#"><i class="bi bi-gear"></i> Settings</a>
            </li>
        </ul>
    </div>

    <!-- MAIN CONTENT AREA -->
    <div class="main-content">
        
        <!-- HEADER ATAS (TOP BAR) -->
        <div class="top-bar">
            <div class="d-flex align-items-center gap-4">
                <span class="text-secondary fw-semibold"><i class="bi bi-calendar3 me-2"></i> {{ date('l, d F Y') }}</span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span class="text-muted small fw-medium">Customize Dashboard</span>
                <div class="d-flex align-items-center gap-2 border-start ps-3">
                    <span class="fw-bold text-dark small">Hello, Akin</span>
                    <i class="bi bi-person-circle fs-5 text-secondary"></i>
                </div>
            </div>
        </div>

        <!-- SUMMARY CARDS UTK NETWORK STATUS -->
        <div class="row mb-2">
            <div class="col-md-4">
                <div class="card card-modern py-3 px-4 d-flex flex-row align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-medium d-block mb-1">Total Koneksi</span>
                        <h4 class="fw-bold m-0 text-dark">{{ count($logs) }} PKS</h4>
                    </div>
                    <div class="p-3 bg-primary-subtle rounded-4 text-primary fs-4"><i class="bi bi-hdd-network"></i></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-modern py-3 px-4 d-flex flex-row align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-medium d-block mb-1">Wi-Fi / Network</span>
                        <h4 class="fw-bold m-0 text-success">Connected</h4>
                    </div>
                    <div class="p-3 bg-success-subtle rounded-4 text-success fs-4"><i class="bi bi-wifi"></i></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-modern py-3 px-4 d-flex flex-row align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-medium d-block mb-1">System Status</span>
                        <h4 class="fw-bold m-0 text-info">Monitoring Active</h4>
                    </div>
                    <div class="p-3 bg-info-subtle rounded-4 text-info fs-4"><i class="bi bi-activity"></i></div>
                </div>
            </div>
        </div>

        <!-- TABEL UTAMA (MONITORING JARINGAN) -->
        <div class="card card-modern">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h5 class="fw-bold text-dark m-0">Timbangan Active Connectivity Logs</h5>
                    <p class="text-muted small m-0">Log keaktifan IP Address dan jalur data jembatan timbang secara real-time.</p>
                </div>
                <button class="btn btn-light btn-sm fw-semibold text-secondary px-3 py-2 rounded-3">
                    <i class="bi bi-arrow-clockwise me-1"></i> Refresh Data
                </button>
            </div>

            <div class="table-responsive">
                <table class="table table-modern align-middle mb-0">
                    <thead>
                        <tr>
                            <th style="width: 25%">PKS Pabrik</th>
                            <th style="width: 20%">Timbangan Aktif</th>
                            <th style="width: 20%">IP Address</th>
                            <th style="width: 15%">Status Jaringan</th>
                            <th style="width: 20%">Terakhir Dicek</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logs as $log)
                        <tr>
                            <td class="fw-bold text-dark">
                                <i class="bi bi-building-gear text-muted me-2"></i>{{ $log->serverConfig->pks->nama_pks }}
                            </td>
                            <td>
                                <span class="badge bg-light text-dark border p-2 px-3 rounded-3" style="font-size: 0.85rem;">
                                    <i class="bi bi-hdd-rack text-secondary me-1"></i> {{ $log->jalur_aktif }}
                                </span>
                            </td>
                            <td>
                                <span class="ip-code">{{ $log->ip_aktif }}</span>
                            </td>
                            <td>
                                @if($log->status)
                                    <span class="status-online">
                                        <span class="spinner-grow spinner-grow-sm" role="status" style="width: 0.45rem; height: 0.45rem;"></span>
                                        Online
                                    </span>
                                @else
                                    <span class="status-offline">
                                        <i class="bi bi-exclamation-circle-fill" style="font-size: 0.75rem;"></i>
                                        Offline
                                    </span>
                                @endif
                            </td>
                            <td class="text-muted small">
                                <i class="bi bi-clock-history me-1"></i> {{ $log->last_checked }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Atur waktu tunggu di sini (dalam milidetik)
    // 3 menit = 3 * 60 * 1000 = 180000 milidetik
    const intervalWaktu = 180000; 

    setInterval(function() {
        // Cara A: Muat ulang halaman secara halus lewat browser
        window.location.reload();
        
        // Cara B: Jika kamu punya fungsi AJAX khusus untuk memuat data log timbangan,
        // kamu bisa panggil fungsi tersebut di sini agar dashboard tidak perlu berkedip reload.
        // contoh: fungsiAmbilDataTimbangan();
    }, intervalWaktu);
</script>
</body>
</html>