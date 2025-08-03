<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashbord My Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <form method="POST" enctype="multipart/form-data" action="{{ url('update') }}">
            @csrf
            <div class="col-md-12 mt-5 mb-5" align="right"
                style="
    position: sticky;
    top: 1%;
    background-color: grey;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    gap: 20px;">
                <a class="btn btn-warning" href="{{ url('logout') }}"
                    onclick="return confirm('You sure to logout?')">Keluar Sistem</a>
                <button class="btn btn-success" type="submit">Simpan Data</button>
            </div>
            @if($message=Session::get('success'))
                    <div style="margin-bottom: 20px;color: black;background-color: green;padding: 20px" align="center">
                        {{ucwords($message)}}
                    </div>
                @endif
            <div style="border: 1px solid black;padding: 5px">
                <h2>Data Section Sebelah kiri</h2>
                <p>Ini akan merubah data data tulisan di sebelah kiri website (tampilan dekstop)</p>
                <div class="row">
                    @foreach ($data['left'] as $key => $val)
                        <div class="col-md-6">
                            <label class="mt-3 mb-2">{{ ucwords(str_replace('_', ' ', $val['label'])) }}</label>
                            @if ($val['type'] == 'text')
                                <input type="text" class="form-control"
                                    placeholder="Enter {{ ucwords(str_replace('_', ' ', $val['label'])) }}"
                                    name="left[{{ $val['label'] }}]" value="{{ $val['text'] }}">
                            @elseif($val['type'] == 'textarea')
                                <textarea class="form-control" cols="5" rows="5" name="left[{{ $val['label'] }}]"
                                    placeholder="Enter {{ ucwords(str_replace('_', ' ', $val['label'])) }}">{{ $val['text'] }}</textarea>
                            @else
                                <input type="file" name="left[{{ $val['label'] }}]" class="form-control">
                                <br>
                                <small>Foto Saat ini</small>
                                <img src="{{ $val['text'] }}" style="width: 50%">
                            @endif
                            <input type="hidden" name="left[type]" value="{{ $val['type'] }}">
                        </div>
                    @endforeach
                </div>
            </div>
            <hr>
            <div style="border: 1px solid black;padding: 5px">
                <h2>Data Section Tengah</h2>
                <p>Ini akan merubah data data tulisan di tengah website (tampilan dekstop)</p>
                <div class="row">
                    @foreach ($data['center'] as $key => $val)
                        <div class="col-md-6">
                            <label class="mt-3 mb-2">{{ ucwords(str_replace('_', ' ', $val['label'])) }}</label>
                            @if ($val['type'] == 'text')
                                <input type="text" class="form-control"
                                    placeholder="Enter {{ ucwords(str_replace('_', ' ', $val['label'])) }}"
                                    name="center[{{ $val['label'] }}]" value="{{ $val['text'] }}">
                            @elseif($val['type'] == 'textarea')
                                <textarea class="form-control" cols="5" rows="5" name="center[{{ $val['label'] }}]"
                                    placeholder="Enter {{ ucwords(str_replace('_', ' ', $val['label'])) }}">{{ $val['text'] }}</textarea>
                            @else
                                <input type="file" name="center[{{ $val['label'] }}]" class="form-control">
                                <br>
                                <small>Foto Saat ini</small>
                                <img src="{{ $val['text'] }}" style="width: 50%">
                            @endif
                        </div>
                        <input type="hidden" name="center[type]" value="{{ $val['type'] }}">
                    @endforeach
                </div>
            </div>
            <hr>
            <div style="border: 1px solid black;padding: 5px">
                <h2>Data Section Sebelah Kanan</h2>
                <p>Ini akan merubah data data tulisan di sebelah kanan website (tampilan dekstop)</p>
                <div class="row">
                    @foreach ($data['right'] as $key => $val)
                        <div class="col-md-6">
                            <label class="mt-3 mb-2">{{ ucwords(str_replace('_', ' ', $val['label'])) }}</label>
                            @if ($val['type'] == 'text')
                                <input type="text" class="form-control"
                                    placeholder="Enter {{ ucwords(str_replace('_', ' ', $val['label'])) }}"
                                    name="right[{{ $val['label'] }}]" value="{{ $val['text'] }}">
                            @elseif($val['type'] == 'textarea')
                                <textarea class="form-control" cols="5" rows="5" name="right[{{ $val['label'] }}]"
                                    placeholder="Enter {{ ucwords(str_replace('_', ' ', $val['label'])) }}">{{ $val['text'] }}</textarea>
                            @else
                                <input type="file" name="right[{{ $val['label'] }}]" class="form-control">
                                <br>
                                <small>Foto Saat ini</small>
                                <img src="{{ $val['text'] }}" style="width: 50%">
                            @endif
                        </div>
                        <input type="hidden" name="right[type]" value="{{ $val['type'] }}">
                    @endforeach
                </div>
            </div>
    </div>
    </form>
</body>

</html>
