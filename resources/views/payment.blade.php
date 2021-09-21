@extends('layouts.general')



@section('special-header')
    <script src="{{asset('scripts/shoppingcart.js')}}"></script>
@endsection

@can('isStudent')
@section('main-body')
        
        <main style="min-height: 100vh">
            <div class="container panel panel-default mb-4 border" style=" margin-top:30vh;">

                <div class=" panel-heading ng-binding h2 p-3 mt-3 bg-light text-dark ">
                    payment
                </div>
    
    
                <div class="container">
                    <div class="row ">
                        <div class=" col-12 panel panel-default">
    
                            <table class="table  table-striped " id="payment-table">
                                <thead class="">
                                    <th>Group Name</th>
                                    <th class="text-center">Price</th>
                                    <th></th>
                                </thead>
                            </table>
                            <?php 
                                if (isset($_GET['status'])) {
                                echo "<div class='text-danger text-center my-3'>You are already a member of this course</div>";
                            }
    
                            ?>
                            
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-12 panel panel-default">
                            <div class="panel-heading ng-binding h2 p-3  bg-light text-dark">
                                Total Invoice
                            </div>
                            <div class="row ">
                                <div class=" col-12 panel panel-default">
    
                                    <table class="table  table-striped ">
                                        <thead>
    
                                            <tr>
                                                <td rowspan="2" class="h5" style="padding-top:2.5rem"> Group name</td>
                                                <td>Total Invoice </td>
                                            </tr>
                                            <tr>
                                                <!-- <td >Total Invoice</th> -->
                                                <td>220$ </th>
                                            </tr>
    
                                        </thead>
                                    </table>
    
                                </div>
                            </div>
                        </div>
    
                    </div> --}}
                </div>
    
    
            </div>
        </main>
        
       

        <!-- //=========================================================== -->
        {{-- <div class="container  " style="margin-top:5em ;margin-bottom:7em  ">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="tab-fawry" data-toggle="tab" href="#nav-home" role="tab"
                        aria-controls="nav-home" aria-selected="true">Fawry</a>
                    <a class="nav-item nav-link disabled" id="tab-visa" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile" aria-selected="false">Visa</a>
                    <a class="nav-item nav-link " id="tab-cash" data-toggle="tab" href="#nav-contact" role="tab"
                        aria-controls="nav-contact" aria-selected="false">Cash</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="tab-fawry">
                    <form action="" class="was-validated">
                        <div class="row my-3">
                            <div class="form-group col-6 ">
                                <label for="firstName">firstName:</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Enter FirstName"
                                    name="firstName" required>
                                <div class="valid-feedback">Valid.</div>

                            </div>
                            <div class="form-group col-6">
                                <label for="lastName">lastName:</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Enter lastName"
                                    name="lastName" required>
                                <div class="valid-feedback">Valid.</div>

                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="form-group col-6 ">
                                <label for="Email">Email:</label>
                                <input type="email" class="form-control" id="Email" placeholder="Enter Email" name="Email"
                                    required>
                                <div class="valid-feedback">Valid.</div>

                            </div>
                            <div class="form-group col-6">
                                <label for="Mobile">Mobile:</label>
                                <input type="text" class="form-control" id="Mobile" placeholder="Enter Mobile" name="Mobile"
                                    required>


                            </div>
                        </div>
                        <div class="row col-6">
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" required> I Agree
                                    <div class="valid-feedback">Valid.</div>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success btn-lg" disabled>continue</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade disabled" id="nav-profile" role="tabpanel" aria-labelledby="tab-visa" disabled>
                    Stay tuned
                    cash</div>
                <div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="tab-cash" disabled>
                    Stay tuned
                    cash
                </div>
            </div>
        </div> --}}
        <!-- ====================================================================== -->
        @if (isset($_GET['payment']))
        @if ($_GET['payment'] == 'SUCCESS')
        <script>
            deleteShoppingCartItem(<?php $_GET['payment']; ?>)
        </script>
        @endif
    @endif
@endsection

@elsecan('isTeacher')
<main style="min-height: 80vh;margin-top: 25vh">
<div class="mt-5">
<h1 class="text-danger text-center mt-5">Sorry but only students can enroll into courses</h1>
</div>
</main>
@endcan


