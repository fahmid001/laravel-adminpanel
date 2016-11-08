@extends('controlpanel/mainlayout')

@section('content')
<div class="directions">
    <section class="content-header">
        <h1>
            Form Example
        </h1>
    </section>
</div>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Form</h3>
                </div>
                <form class="form-horizontal" action="#" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="branch_name" class="col-sm-3 control-label">Branch Name<span style="color:red">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" autocomplete="off" id="branch_name" name="branch_name" placeholder="Branch Name" required="required" autocomplete="off" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="branch_code" class="col-sm-3 control-label">Branch Code<span style="color:red">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="branch_code" name="branch_code" required="required" autocomplete="off" value="" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="branch_type" class="col-sm-3 control-label">Branch Type<span style="color:red">*</span></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="branch_type" id="branch_type" required="required" autocomplete="off">
                                    <option value=''>Select Branch Type</option>
                                    <option value='Agent'>Agent</option>
                                    <option value='Branch'>Branch</option>
                                    <option value='ATM'>ATM</option>
                                </select>
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label for="phone" class="col-sm-3 control-label">Phone Number<span style="color:red">*</span></label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="phone" name="phone" placeholder="017........" required="required" autocomplete="off" value="">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label for="latlon" class="col-sm-3 control-label">Location<span style="color:red">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="locations" name="locations" placeholder="Location" required="required" autocomplete="off" value="">
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <a href="{{URL::to('form')}}" class="btn btn-danger" type="button">Cancel</a>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</section>
@stop
