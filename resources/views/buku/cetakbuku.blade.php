<head>
	<title>Cetak Data Seluruh Buku</title>
</head>
<body>
	<div class="form-group">
		<p align="center">
			<b>Laporan Data Seluruh Buku</b>
		</p>
		<table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id Buku</th>
                    <th scope="col">Foto Cover</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun Terbit</th>
                  	<th scope="col">Stok Buku</th>
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
                     	<img src="{{ asset('allfoto/' . $row->foto) }}" alt="" style="width: 40px">
                    </td>
                    <td>{{ $row->judul}}</td>
                    <td>{{ $row->penulis}}</td>
                    <td>{{ $row->penerbit}}</td>
                    <td>{{ $row->tahunterbit}}</td>
                    <td>{{ $row->stok}}</td>
                </tr>
            @endforeach
            </tbody>
       	</table>
	</div>
	<script type="text/javascript">
		window.print();

	</script>
</body>