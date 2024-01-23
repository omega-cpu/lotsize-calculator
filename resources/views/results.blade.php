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
                                <h4 class="card-title">Result</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('home.post')}}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <span>One standard lot currency</span>
                                            <input type="text" class="form-control input-rounded"  value="{{$riskPerOneStandartLot}}" placeholder="One standard lot currency">
                                        </div>
                                        <div class="mb-3">
                                            <span>Maximum risk per trade</span>
                                            <input type="text" class="form-control input-rounded" value="{{$maxRiskPerTrade}}" placeholder="Maximum risk per tade">
                                        </div>
                                        <div class="mb-3">
                                            <span>Lot size</span>
                                            <input type="text" class="form-control input-rounded" value="{{$lotSize}}" placeholder="Lot size">
                                        </div>
                                        
                                         <button type="submit" class="btn btn-primary"> Re-calculate</button>
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