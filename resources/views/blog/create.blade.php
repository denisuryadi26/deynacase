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
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                
                                    @csrf

                                    <div class="form-group">
                                        <label class="font-weight-bold">GAMBAR</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                    
                                        <!-- error message untuk title -->
                                        @error('image')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">JUDUL</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Blog">
                                    
                                        <!-- error message untuk title -->
                                        @error('title')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">KONTEN</label>
                                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Blog">{{ old('content') }}</textarea>
                                    
                                        <!-- error message untuk content -->
                                        @error('content')
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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