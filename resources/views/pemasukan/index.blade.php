<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
    <title>Data Pemasukan - deynacase.com</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layout.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layout.sidebar')

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Pemasukan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pemasukan</li>
                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $pemasukans->total() }}</h3>
                                <p>Total Order</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-cart-arrow-down"></i>
                            </div>
                            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                            <div class="inner">
                                <h3>
                                    <?php 
                                    foreach ($profitthismonth as $total) {
                                    echo 'Rp.'.number_format($total->profit);
                                    }
                                    ?>
                                </h3>
                                <p>Jumlah Pemasukan Bulan Ini</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-money-bill-alt"></i>
                            </div>
                            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>
                                    <?php 
                                    foreach ($profitthisyears as $total) {
                                    echo 'Rp.'.number_format($total->profit);
                                    }
                                    ?>
                                </h3>
                                <p>Jumlah Pemasukan Tahun ini</p>
                            </div>
                            <div class="icon">
                            <i class="far fa-money-bill-alt"></i>
                            </div>
                            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>
                                    <?php 
                                    foreach ($totalprofit as $total) {
                                    echo 'Rp.'.number_format($total->profit);
                                    }
                                    ?>
                                </h3>
                                <p>Jumlah Semua Pemasukan</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-money-bill-alt"></i>
                            </div>
                            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-0 shadow rounded">
                                <div class="card-body">
                                    <a href="{{ route('pemasukan.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PEMASUKAN</a>
                                    <a href="#" class="btn btn-md btn-success mb-3" target="_blank">EXPORT EXCEL</a>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">TANGGAL</th>
                                                <th scope="col">SUMBER</th>
                                                <th scope="col">PRODUK</th>
                                                <th scope="col">OMSET</th>
                                                <th scope="col">MODAL</th>
                                                <th scope="col">PROFIT</th>
                                                <th scope="col">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($pemasukans as $pemasukan)
                                            <tr>
                                                <td style="width: 50px" class="text-center">{{ $loop->iteration + $pemasukans->firstItem() - 1 }}</td>
                                                <td>{{ $pemasukan->tanggal }}</td>
                                                <td>{{ $pemasukan->sumber }}</td>
                                                <td>{{ $pemasukan->produk }}</td>
                                                <td>Rp. {{number_format($pemasukan->omset ) }}</td>
                                                <td>Rp. {{number_format($pemasukan->modal) }}</td>
                                                <td>Rp. {{number_format($pemasukan->profit) }}</td>
                                                <td class="text-center">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pemasukan.destroy', $pemasukan->id) }}" method="POST">
                                                        <a href="{{ route('pemasukan.edit', $pemasukan->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    Data Pemasukan belum Tersedia.
                                                </div>
                                            @endforelse
                                        </tbody>
                                    </table>  
                                    <br>
                                    <!-- {{ $pemasukans->links() }} -->
                                    {{ $pemasukans->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            @include('layout.rightsidebar')
        </aside>
        <!-- /.control-sidebar -->

        <footer class="main-footer">
            @include('layout.footer')
        </footer>
    </div>
    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> -->
    <!-- jQuery -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>

    <script>
        //message with toastr
        @if(session()-> has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()-> has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>