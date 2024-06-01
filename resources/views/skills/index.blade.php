<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Skills</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .muted {
            color: #6b7280;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4 muted">Daftar Skills</h1>
        <a href="{{ route('skills.create') }}" class="inline-block bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mb-4">Tambah Skill</a>
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <table class="w-full border muted">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border">Nama</th>
                    <th class="py-2 px-4 border">Misal</th>
                    <th class="py-2 px-4 border">Gambar</th>
                    <th class="py-2 px-4 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($skills as $skill)
                    <tr class="hover:bg-gray-200">
                        <td class="py-2 px-4 border">{{ $skill->nama }}</td>
                        <td class="py-2 px-4 border">{{ $skill->misal }}</td>
                        <td class="py-2 px-4 border"><img src="{{ Storage::url($skill->gambar) }}" alt="{{ $skill->nama }}" width="100"></td>
                        <td class="py-2 px-4 border">
                            <a href="{{ route('skills.edit', $skill->id) }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Edit</a>
                            <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-block bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Anda yakin ingin menghapus skill ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>