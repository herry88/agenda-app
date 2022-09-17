@extends('master')

@section('title')
    <title>Detail</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <p class="text-center" align='center'>
                    <h4>{{ $agenda->agenda }}</h4>
                    <h6>{{ $agenda->tanggal }}</h6>
                    <h6>{{ $agenda->mulai }}</h6>

                    </p>
                    <table class="table table-bordered">
                        <tr>
                            <td class="text-center">
                                <a href="#" class="btn btn-primary btn-lg-8">POINTER</a>

                            </td>
                            <td class="text-center">
                                <a href="{{ route('agenda.showsambutan') }}"
                                    class="btn btn-primary btn-lg-8">SAMBUTAN</a>

                            </td>
                        </tr>
                    </table>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Data Dukung</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datadukung as $dk)
                                <tr>
                                    <td>{{ $dk->nama_data_dukung }}</td>
                                    <td> <a href="{{ Storage::url($dk->file) }}" class="btn btn-info" title="File"><i
                                                class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection