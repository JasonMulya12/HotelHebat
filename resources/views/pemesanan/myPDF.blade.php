<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Reservasi Kamar</title>
</head>
<body>
    <div class="mt-3 card">
        <div class="card-body">
            @foreach($pemesanan as $pesan)
            <h5 class="card-title">{{ $pesan->nama_tamu }}</h5>
            <p class="card-text">
                Nama Tamu : {{ $pesan->nama_tamu }} <br>
                Email : {{ $pesan->email }} <br>
                No Telp : {{ $pesan->no_hp }} <br>
                Tipe Kamar : {{ $pesan->tipe_kamar }} <br>
            </p>
            <p class="card-text">
                Informasi Reservasi <br>
                Tanggal Check In : {{ $pesan->tgl_check_in }} <br>
                Tanggal Check Out : {{ $pesan->tgl_check_out }} <hr>
            </p>
            @endforeach
        </div>
    </div>      
</body>
</html>