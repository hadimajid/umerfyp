@extends('Frontend.layout.app')

@section('title','Budget')

@section('content')


    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('frontend/img/bg-img/hero-1.webp')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>Budget</h2>
                        <h4 class="text-white">Here you can can calculate your budget</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="fancy-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Single Service -->
                <div class="col-md-12 text-center">
                    <h4 class="mb-5">Budget Calculator</h4>
                    <form action="" id="budget_calculator">

                               <div class="form-group row">
                                   <label for="" class="col-md-2 col-form-label">Salary: <span style="color: red">*</span></label>
                                   <div class="col-md-2">
                                       <input type="number" name="salary" id="salary" class="form-control" placeholder="Salary">

                                   </div>
                               </div>


                               <div class="form-group row">

                                   <label for="" class="col-md-2 col-form-label">Groceries: <span style="color: red">*</span></label>
{{--                                   <div id="grocery"></div>--}}
                                   <div class="col-md-2">
                                    <input type="number" name="grocery_from" id="grocery_from" class="form-control" placeholder="From">
                                   </div>
                                   <div class="col-md-2">
                                    <input type="number" name="grocery_to" id="grocery_to" class="form-control" placeholder="To">
                                   </div>
                               </div>
                                <div class="form-group row">

                                   <label for="" class="col-md-2 col-form-label">Utility Bills: <span style="color: red">*</span></label>
{{--                                   <div id="grocery"></div>--}}
                                   <div class="col-md-2">
                                    <input type="number" name="utility_from" id="utility_from" class="form-control" placeholder="From">
                                   </div>
                                   <div class="col-md-2">
                                    <input type="number" name="utility_to" id="utility_to" class="form-control" placeholder="To">
                                   </div>
                               </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-2 col-form-label">Home Rent:</label>
                                    <div class="col-md-2">
                                        <input type="number" name="home_rent" id="home_rent" class="form-control" placeholder="Rent">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-2 col-form-label">Other Expenses: </label>
                                    <div class="col-md-2">
                                        <input type="number" name="others" id="others" class="form-control" placeholder="Others">

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" id="calculate-budget">Calculate</button>
                    </form>
                </div>
                <div class="col-md-12">
                    <div id="result"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->


@endsection
@section('scripts')
    <script>
        $( function() {
            $( "#grocery" ).slider();
        } );

        $('#budget_calculator').validate({
            rules: {
                salary: {
                    required: true,
                    lessThanSalary: true
                },
                grocery_from: {
                    required: true,

                },
                grocery_to: {
                    required: true,
                    ge: "#grocery_from",
                },
                utility_from: {
                    required: true,

                },
                utility_to: {
                    required: true,
                    ge: "#utility_from",


                }

            },
            messages:{
                salary: {
                    required: "Salary is required.",
                },
                grocery_from: {
                    required: "Grocery from is required.",
                },
                grocery_to: {
                    required: "Grocery to is required.",
                },
                utility_from: {
                    required: "Utility Bills from is required.",
                },
                utility_to: {
                    required: "Utility Bills to is required.",
                }
            }
        });

        $('#calculate-budget').on('click',function (e) {
            e.preventDefault();
            if($('#budget_calculator').valid()){
                let salary=parseInt($('#salary').val()) || 0;
                let grocery_from=parseInt($('#grocery_from').val()) || 0;
                let grocery_to=parseInt($('#grocery_to').val()) || 0;
                let utility_from=parseInt($('#utility_from').val()) || 0;
                let utility_to=parseInt($('#grocery_to').val()) || 0;
                let home_rent=parseInt($('#home_rent').val()) || 0;
                let others=parseInt($('#others').val()) || 0;

                let groceriesTotal=(grocery_from+grocery_to)/2;
                let utilitiesTotal=(utility_from+utility_to)/2;
                let total=groceriesTotal+utilitiesTotal+home_rent+others;

                let result=salary-total;
                $('#result').html(
                    "<p> Rs "+result+" is the amount you will be saving every month.</p>"
                )
            }
        })
    </script>

@endsection