<h1 class="display-4">Data Kategori</h1>
{{-- <img src="data:image/png;base64, {!! base64_encode($qrcode) !!} "> --}}
<table class="table" border="1">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataKategori as $item)
            <tr>
                <th scope="row">{{ $item->name }}</th>
                <td>{{ $item->description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
