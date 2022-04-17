<!DOCTYPE html>
<html lang="en">
<head>
<title>GuestBook</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- Styles -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body>
<div id="main-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-5">
                                    <h3 class="h4 font-weight-bold text-theme">Buku Tamu</h3>
                                </div>

                                <h6 class="h5 mb-0">Welcome</h6>
                                <p class="text-muted mt-2 mb-5">Silahkan Isi Identitas</p>

                                <form method="post" action="/addGuest">
                                    @csrf
                                    <div class="form-group">
                                        <label for="guestName">Nama</label>
                                        <input type="text" class="form-control" id="guestName" name="guestName">
                                    </div>
                                    <div class="form-group">
                                        <label for="guestAddress">Alamat</label>
                                        <input type="text" class="form-control" id="guestNIP" name="guestAddress">
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="guestPurpose">Keperluan</label>
                                        <input type="text" class="form-control" id="guestPurpose" name="guestPurpose">
                                    </div>
                                    <button type="submit" class="btn btn-theme">Selesai</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 d-none d-lg-inline-block">
                            <div class="account-block rounded-right">
                                <div class="overlay rounded-right"></div>
                                <div class="account-testimonial">
                                    <h4 class="text-white mb-4">Selamat Datang!</h4>
                                    <p class="lead text-white">"Template gratis download, mohon dimaafkan."</p>
                                    <p>- Kevin</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->

        </div>
        <!-- end col -->
    </div>
    <!-- Row -->
</div>

</body>
</html>