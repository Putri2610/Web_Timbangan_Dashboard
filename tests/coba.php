<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Monitoring Timbangan</title>
    
    <!-- Google Fonts & Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

<style>
    body{
    font-family:'Plus Jakarta Sans',sans-serif;
    background:#eef3f8;
    overflow-x:hidden;}
    
    /* =====================
            SIDEBAR
    ====================== */
    .sidebar{
        position:fixed;
        left:0;
        top:0;
        width:220px;
        height:100vh;
        background:#234275;
        color:#fff;
        padding:20px;
    }

    .brand{
        font-size:24px;
        font-weight:700;
        margin-bottom:35px;
        line-height:32px;
    }

    .sidebar-menu{
        list-style:none;
        padding:0;
    }

    .sidebar-item{
        margin-bottom:8px;
    }

    .sidebar-item a{
        display:block;
        padding:12px 18px;
        color:#cfd9ea;
        text-decoration:none;
        border-radius:10px;
        transition:.3s;
        font-size:15px;
    }

    .sidebar-item.active a,
    .sidebar-item a:hover{
        background:#335994;
        color:#fff;
    }


    /* ======================
            CONTENT
    ====================== */

    .main-content{
        margin-left:220px;
        padding:15px 20px;
    }

    /* ======================
            TOPBAR
    ====================== */

    .top-bar{
        background:#fff;
        border-radius:14px;
        padding:12px 20px;
        margin-bottom:18px;
        box-shadow:0 3px 10px rgba(0,0,0,.05);
    }

    /* ======================
            SUMMARY CARD
    ====================== */

    .summary-card{
        background:#fff;
        border-radius:15px;
        padding:18px;
        box-shadow:0 5px 18px rgba(0,0,0,.05);
    }

    .summary-card h3{
        font-size:30px;
        font-weight:700;
        margin:0;
    }

    .summary-card small{
        color:#7b8794;
    }

    /* ======================
            MAIN CARD
    ====================== */

.card-modern{
    background:#fff;
    border:none;
    border-radius:16px;
    padding:20px;
    box-shadow:0 5px 18px rgba(0,0,0,.06);
}


/* ======================
        BUTTON
====================== */

.btn-xml{
    background:#234275;
    color:white;
    border:none;
    padding:9px 20px;
    border-radius:10px;
    font-weight:600;
}

.btn-xml:hover{
    background:#1c3560;
}


/* ======================
        TABLE
====================== */

.table-modern{
    width:100%;
    margin-top:10px;
}

.table-modern thead th{
    background:#f7f9fc;
    color:#6b7280;
    font-size:13px;
    text-transform:uppercase;
    letter-spacing:.5px;
    padding:14px;
    border:none;
}

.table-modern tbody td{
    padding:16px 14px;
    vertical-align:middle;
    border-bottom:1px solid #eef2f7;
    font-size:14px;
}

.table-modern tbody tr:hover{
    background:#f8fbff;
}


/* ======================
        BADGE
====================== */

.badge-local{
    background:#dbeafe;
    color:#2563eb;
    border-radius:8px;
    padding:6px 12px;
    font-size:13px;
}

.badge-internet{
    background:#fef3c7;
    color:#b45309;
    border-radius:8px;
    padding:6px 12px;
    font-size:13px;
}


/* ======================
        STATUS
====================== */

.flag-online{
    color:#22c55e;
    font-size:20px;
}

.flag-offline{
    color:#ef4444;
    font-size:20px;
}


/* ======================
        IP
====================== */

.ip-code{
    background:#f4f6fb;
    padding:6px 12px;
    border-radius:8px;
    font-family:monospace;
    font-size:13px;
}


/* ======================
        TITLE
====================== */

.title-page{
    font-size:26px;
    font-weight:700;
}

.sub-title{
    color:#6b7280;
    margin-bottom:0;
}


/* ======================
        RESPONSIVE
====================== */

@media(max-width:992px){

.sidebar{
    width:180px;
}

.main-content{
    margin-left:180px;
    padding:10px;
}

.summary-card h3{
    font-size:24px;
}

.table-modern td{
    font-size:13px;
}

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
                    <span class="fw-bold text-dark small">Monitoring Sistem</span>
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
                        <h4 class="fw-bold m-0 text-dark">{{ count($aktifServers) }} PKS</h4>
                    </div>
                    <div class="p-3 bg-primary-subtle rounded-4 text-primary fs-4"><i class="bi bi-hdd-network"></i></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-modern py-3 px-4 d-flex flex-row align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-medium d-block mb-1">Wi-Fi / Network</span>
                        <h4 class="fw-bold m-0 text-success">{{ count($aktifServers) }} Aktif</h4>
                    </div>
                    <div class="p-3 bg-success-subtle rounded-4 text-success fs-4"><i class="bi bi-wifi"></i></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-modern py-3 px-4 d-flex flex-row align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small fw-medium d-block mb-1">System Status</span>
                        <h4 class="fw-bold m-0 text-info">Server Monitoring</h4>
                    </div>
                    <div class="p-3 bg-info-subtle rounded-4 text-info fs-4"><i class="bi bi-activity"></i></div>
                </div>
            </div>
        </div>

        <!-- TABEL UTAMA (MONITORING JARINGAN) -->
        <div class="card card-modern">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h5 class="fw-bold text-dark m-0">Monitoring Server Timbangan</h5>
                    <p class="text-muted small m-0">Monitoring Server Aktif pada Setiap PKS.</p>
                </div>
                <button class="btn btn-light btn-sm fw-semibold text-secondary px-3 py-2 rounded-3">
                    <i class="bi bi-arrow-clockwise me-1"></i> Generate XML
                </button>
            </div>

            <div class="table-responsive">
                <table class="table table-modern align-middle mb-0">
                    <thead>
                        <tr>
                            <th style="width: 25%">PKS</th>
                            <th style="width: 20%">Timbangan Aktif</th>
                            <th style="width: 20%">Jalur</th>
                            <th style="width: 15%">IP</th>
                            <th style="width: 20%">Status</th>
                            <th style="width: 20%">Terakhir Dicek</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($aktifServers as $server)
                        <tr>
                            <td class="fw-bold text-dark">
                                <i class="bi bi-building-gear text-muted me-2"></i>{{ $server['kode_pks'] }}
                            </td>
                            <td>
                                <span class="badge bg-light text-dark border px-3 py-2">
                                    <i class="bi bi-hdd-rack me-1"></i>{{ $server['nama_server'] }}
                                </span>
                            </td>
                            <td>
                                @if($server['jalur']=="Local")
                                <span class="badge bg-success">Local</span>
                                @else
                                <span class="badge bg-warning text-dark">Internet</span>
                                @endif
                            </td>
                            <td>
                                <span class="ip-code">{{ $server['ip'] }}</span>
                            </td>
                            <td>
                                @if($server['status']=="Online")
                                <span class="status-online">
                                    <i class="bi bi-check-circle-fill"></i>Online
                                </span>
                                @else
                                <span class="status-offline">
                                    <i class="bi bi-x-circle-fill"></i>Offline
                                </span>
                                @endif
                            </td>
                            <td class="text-muted small">
                                <i class="bi bi-clock-history me-1"></i> {{ \Carbon\Carbon::parse($server['updated_at'])->format('d-m-Y H:i:s') }}
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
</body>
</html>
