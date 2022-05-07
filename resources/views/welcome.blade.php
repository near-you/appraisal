@extends('layout.app')

@section('title', 'Головна сторінка')

@section('content')

    @include('partials.header')

    <div class="container md:mx-auto px-6 py-4">

        @foreach($profile as $file)

        <table class=" border table-auto">
            <thead>
            <tr>
                <th class="border border-slate-300 ...">Name</th>
                <th class="border border-slate-300 ...">City</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border border-slate-300 ...">{{ $file->name }}</td>
                <td class="border border-slate-300 ...">{{ $file->city }}</td>
            </tr>
            </tbody>
        </table>

            @endforeach

    </div>




@endsection
