@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <form id="simpan" action="{{url('revenue/date')}}" method="GET">
                            <input type="date" name="tanggal">
                            <button type="submit" value="cari">cari</button>
                        </form>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Site Id</th>
                                <th>Site Name</th>
                                <th>Branch</th>
                                <th>regional</th>
                                <th>network</th>
                                <th>total revenue</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data as $item)
                                <tr>
                                    <td>{{$item->site_id}}</td>
                                    <td>{{$item->site_name}}</td>
                                    <td>{{$item->branch}}</td>
                                    <td>{{$item->regional}}</td>
                                    <td>{{$item->network}}</td>
                                    <td>{{$item->revenue}}</td>
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
