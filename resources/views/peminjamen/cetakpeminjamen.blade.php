<head>
	<title>Cetak Data Peminjaman Siswa</title>
</head>
<body>
	<div class="form-group">
		<p align="center">
			<b>Laporan Data Peminjaman Siswa</b>
		</p>
		<table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            	<thead class="thead-dark">
                	<tr>
   	                	<th scope="col">#</th>
                    	<th scope="col">Id Peminjaman</th>
                    	<th scope="col">Foto Cover</th>
                    	<th scope="col">Judul Buku</th>
                    	<th scope="col">Id User</th>
                    	<th scope="col">Tgl Peminjaman</th>
                    	<th scope="col">Tgl Pengembalian</th>
                    	<th scope="col">Status Peminjaman</th>
                	</tr>
            	</thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                            <td>{{ $row->id}}</td>
                            <td>
                                <img src="{{ asset('allfoto/' . $row->bukus->foto) }}" alt="" style="width: 40px">
                            </td>
  	                        <td>{{ $row->bukus->judul}}</td>
                          	<td>{{ $row->users->username}}</td>
                          	<td>{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('d F Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($row->tanggalpengembalian)->translatedFormat('d F Y') }}</td>

                            @if ($row->statuspeminjaman == 'Buku Dipinjam')
                           	<td>
                                <span class="badge bg-warning">Buku Dipinjam</span>
                            </td>
                            @elseif ($row->statuspeminjaman == 'Buku Dikembalikan')
                            <td>
                               	<span class="badge bg-success ">Buku Dikembalikan</span>
                            </td>
		                    @elseif ($row->statuspeminjaman == 'Buku Terlambat Dikembalikan')
                            <td>
                                <span class="badge bg-danger ">Buku Terlambat Dikembalikan</span>
                            </td>
                            @endif
            		</tr>
       			    @endforeach
            	</tbody>
        </table>
	</div>
	<script type="text/javascript">
		window.print();

	</script>
</body>