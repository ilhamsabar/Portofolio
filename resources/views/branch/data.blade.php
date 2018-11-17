@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <form id="simpan" action="{{url('revenue/data/cari')}}" method="GET">
                            <select name="date">
                                @forelse($date as $item)
                                    <option value="{{$item->date}}">{{$item->date}}</option>
                                    @endforeach
                            </select>
                            <select name="site_id">
                                @forelse($site_id as $item)
                                    <option value="{{$item->site_id}}">{{$item->site_id}}</option>
                                    @endforeach
                            </select>
                            <select name="site_name">
                                @forelse($site_name as $item)
                                    <option value="{{$item->site_name}}">{{$item->site_name}}</option>
                                    @endforeach
                            </select>
                            <select name="branch">
                                @forelse($branch as $item)
                                    <option value="{{$item->branch}}">{{$item->branch}}</option>
                                    @endforeach
                            </select>
                            <select name="regional">
                                @forelse($regional as $item)
                                    <option value="{{$item->regional}}">{{$item->regional}}</option>
                                    @endforeach
                            </select>
                            <select name="network">
                                @forelse($network as $item)
                                    <option value="{{$item->network}}">{{$item->network}}</option>
                                    @endforeach
                            </select>
                            <select name="revenue">
                                @forelse($revenue as $item)
                                    <option value="{{$item->revenue}}">{{$item->revenue}}</option>
                                    @endforeach
                            </select>
                            <button type="submit" value="cari">cari</button>
                        </form>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>date</th>
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
                                    <td>{{$item->date}}</td>
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
