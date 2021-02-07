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
                <h1 class="m-0 text-dark">Starter Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
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
                            <h3>150</h3>
                            <p>Total Pemasukan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                            <p>Jumlah Pemasukan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>Jumlah Pengeluaran</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Jumlah Pendapatan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <form action="{{ route('pemasukan.store') }}" method="POST" enctype="multipart/form-data">
                                
                                    @csrf

                                    <div class="form-group">
                                        <label class="font-weight-bold">TANGGAL</label>
                                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal">
                                        
                                        <!-- error message untuk tanggal -->
                                        @error('tanggal')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">SUMBER</label>
                                        <input type="text" class="form-control @error('sumber') is-invalid @enderror" name="sumber" value="{{ old('sumber') }}" placeholder="Masukkan Sumber">
                                    
                                        <!-- error message untuk sumber -->
                                        @error('sumber')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">PRODUK</label>
                                        <input type="text" class="form-control @error('produk') is-invalid @enderror" name="produk" value="{{ old('produk') }}" placeholder="Masukkan Produk">
                                    
                                        <!-- error message untuk produk -->
                                        @error('produk')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">OMSET</label>
                                        <input type="text" class="form-control @error('omset') is-invalid @enderror" name="omset" value="{{ old('omset') }}" placeholder="Masukkan Omset">
                                    
                                        <!-- error message untuk omset -->
                                        @error('omset')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">MODAL</label>
                                        <input type="text" class="form-control @error('modal') is-invalid @enderror" name="modal" value="{{ old('modal') }}" placeholder="Masukkan Modal">
                                    
                                        <!-- error message untuk modal -->
                                        @error('modal')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">PROFIT</label>
                                        <input type="text" class="form-control @error('profit') is-invalid @enderror" name="profit" value="{{ old('profit') }}" placeholder="Masukkan Profit">
                                    
                                        <!-- error message untuk profit -->
                                        @error('profit')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <button type="reset" class="btn btn-md btn-warning">RESET</button>

                                </form> 
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

    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>

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