<!DOCTYPE html>
<html>
    <head>
        <title>Laporan Pembayaran</title>
    </head>
    <body>
        <style type="text/css">
            table tr td,
            table tr th{
                font-size: 9pt;
            }
        </style>
        <center>
            <h5>Laporan Pembayaran</h4>
        </center>
        <table class='table table-bordered' style="width:95%;margin:0 auto;">
            <thead>
                <tr>
                    <th class="border-top-0">ID</th>
                    <th class="border-top-0">ID Penjualan</th>
                    <th class="border-top-0">Tanggal</th>
                    <th class="border-top-0">Bayar</th>
                    <th class="border-top-0">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pembayaran as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->id_penjualan }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->bayar }}</td>
                        <td>{{ $item->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>