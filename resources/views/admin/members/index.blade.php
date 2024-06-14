<x-layout>
    <x-slot name="page_name">Halaman Members</x-slot>
    <x-slot name="page_content">
    <table class="table table-bordered">
        <tr class="table-succes">
            
            <th>Nama</th>
            <th>Email</th>
            <th>Status</th>
            <th>Alamat</th>
            <th>Gender</th>

        </tr>
        @foreach ($list_members as $members)

        <tr>
            <td>{{ $members->nama }}</td>
            <td>{{ $members->email }}</td>
            <td>{{ $members->status }}</td>
            <td>{{ $members->alamat }}</td>
            <td>{{ $members->gender }}</td>
        </tr>
        @endforeach
    </table>
    </x-slot>
</x-layout>