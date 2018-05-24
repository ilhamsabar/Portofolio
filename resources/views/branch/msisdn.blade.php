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
                                <th>Site Id</th>
                                <th>Site Name</th>
                                <th>Branch</th>
                                <th>total msisdn</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data as $item)
                                <tr>
                                    <td>{{$item->site_id}}</td>
                                    <td>{{$item->site_name}}</td>
                                    <td>{{$item->branch}}</td>
                                    <td><button type="button" class="btn btn-info btn-lg" onclick="getid('{{$item->branch}}')" id="get" data-toggle="modal" data-target="#myModal">{{$item->total}}</button></td>
                                </tr>
                            @endforeach

                            </tbody>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).on('click', '[data-toggle="modal"]', function(event) {
                event.preventDefault();
                $.ajax({
                    url: '{{url('revenue/msisdn/')}}' + "/" + e,
                    type: "get",
                });
            });

            function getid(e) {
                event.preventDefault();
                $.ajax({
                    url: '{{url('revenue/msisdn/')}}' + "/" + e,
                    type: "get",
                    beforeSend: function(){
                        swal({ title:"Mohon Tunggu", text:"Proses sedang berlangsung", showConfirmButton: false});
                    },
                    success: function (d) {
                        console.log(d)
                        if(d.status == 200){
//                            swal("Alhamdulillah", d.msg, "success");
                            swal({title: 'data',
                                html: true,
                                text: d.html,
                                })
//                            document.location.href = '/admin/kasirpusat/bank'
                        }else if(d.status == 400){
                            sweetAlert("Mohon Maaf...", d.msg, "error");
                        }
                    },
                    error: function(d){
                        sweetAlert("Mohon Maaf...", "Terjadi kesalahan pada sistem!", "error");
                    }
                });
            }
        </script>
        <!-- Modal -->
    </div>
@endsection
