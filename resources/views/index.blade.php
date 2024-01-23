@extends('layouts/master')
@section('content')
@section('Title', 'Lot size calculator')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Calculate lot size</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('result')}}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="text" name="points" class="form-control input-rounded" placeholder="Points">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="tickValue" class="form-control input-rounded" placeholder="Tick value">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="totalEquity" class="form-control input-rounded" placeholder="Total Equity">
                                        </div>
                                        <div class="mb-3">
                                            <select name="riskPercentage" class="default-select  form-control wide" >
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        
                                         <button class="btn btn-primary">Calculate</button>
                                        </form>
                                </div>
                            </div>
                        </div>
					</div>
					
					
	         </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection