@extends('controlpanel/mainlayout')

@section('content')
<div class="directions">
    <section class="content-header">
        <h1>
            Data Table
        </h1>
    </section>
</div>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Table</h3>
                </div>
                <span class="tools pull-right" style="padding:0px 10px 5px 0px">
                    <a class="btn btn-success" href="{{URL::to('form')}}">Add Branch<i class="fa fa-plus"></i></a>
                </span>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sl. </th>
                                <th>Branch Name</th>
                                <th>Branch Code</th>
                                <th>Branch Type</th>
                                <th>Phone No.</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>                            
                            <tr>
                                <td>1.</td>
                                <td>Dhaka</td>
                                <td>1207</td>
                                <td>It bRANCH</td>
                                <td>Dhaka</td>
                                <td>01700000000</td>
                                <td>
                                    <a class="btn btn-success btn-xs" href="#">View</a>
                                    <a class="btn btn-primary btn-xs" href="#">Edit</a>
                                    <a class="btn btn-danger btn-xs" href="#" onclick="return confirm('Are you sure want to delete !!!')">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ URL::asset('js/jquery-2.1.4.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#example1').dataTable();
});
</script>
@stop
