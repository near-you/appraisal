@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="container md:mx-auto px-6 py-4">

        @foreach($profile as $file)

{{--        <table class=" border table-auto">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th class="border border-slate-300 ...">Name</th>--}}
{{--                <th class="border border-slate-300 ...">City</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <td class="border border-slate-300 ...">{{ $file->name }}</td>--}}
{{--                <td class="border border-slate-300 ...">{{ $file->city }}</td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">City</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $file->name }}</td>
                    <td>{{ $file->city }}</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>{{ $file->city }}</td>
                    <td>{{ $file->city }}</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>

            @endforeach

    </div>




@endsection
