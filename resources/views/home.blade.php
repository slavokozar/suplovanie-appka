@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <form method="post" action="{{ action('UploadController@store') }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="file">Obrazek: </label>
                        <input type="file" name="file" class="form-control-file" id="file">
                    </div>
                    <button type="submit" class="btn btn-primary">Nahrat</button>
                </form>
            </div>

            <div class="card-body">
                <section>
                    <h2>Aktualni soubor</h2>
                    <a href="{{ action('FileController@show') }}" target="_blank">{{ $activeFile->filename }}</a>
                </section>


                <h2>Stare soubory</h2>

                <table>
                    <tbody>
                    @foreach($files as $file)
                        <tr>
                            <td>
                                <a href="{{ action('FileController@show') }}" target="_blank">{{ $file->filename }}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
