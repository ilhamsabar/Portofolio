@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>date</th>
                                <th>lacci</th>
                                <th>revenue</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data as $item)
                                <tr>
                                    <td>{{$item->date}}</td>
                                    <td>{{$item->lacci}}</td>
                                    <td>{{rand($min, $max)}}</td>
                                </tr>
                            @endforeach

                            </tbody>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
