@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="block">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>

                            <th style="width: 250px;" class="text-center"><i class="fa fa-info"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($files as $file)
                         <tr>
                             <td>{{ $file->id }}</td>
                             <td>{{ $file->name }}</td>
                             <td class="text-center">
                                 <a href="{{ url('/'.$file->id) }}"
                                    class="btn btn-secondary">show</a>
                                 <a href="{{ url('/'.$file->id.'/download-xml') }}"
                                    class="btn btn-secondary">xml</a>
                                 <a href="{{ url('/files/'.$file->id.'/download-docx') }}"
                                    class="btn btn-secondary">word</a>
                             </td>
                         </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="btn btn-primary">
                    <a class="button" href="{{ route('create-file') }}" style="font-size: 20px; color: black; font-weight: bold">Create file</a>
                </div>

                @if(isset($message))
                    <div class="text-center">
                        {{ $message }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
