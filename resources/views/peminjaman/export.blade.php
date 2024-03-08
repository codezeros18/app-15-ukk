<table>
    <thead>
        <tr>
            <th>No</th>
            <th>User</th>
            <th>Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Pengembalian</th>
            <th>Jumlah Pinjam</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($peminjaman as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->buku->judul }}</td>
                <td>{{ $item->tgl_peminjaman }}</td>
                <td>{{ $item->tgl_pengembalian }}</td>
                <td>{{ $item->actual_tgl_pengembalian }}</td>
                <td>{{ $item->jumlah_pinjam }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
