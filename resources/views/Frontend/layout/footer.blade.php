{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

<script src="{{asset('frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('frontend/js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap-4 js -->
<script src="{{asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('frontend/js/others/plugins.js')}}"></script>
<!-- Active JS -->
<script src="{{asset('frontend/js/active.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>

<script>
    $.validator.addMethod('ge', function(value, element, param) {
        return this.optional(element) || value >= $(param).val();
    }, 'To value must be greater than or equal to From');
    $.validator.addMethod('lessThanSalary', function(value, element, param) {
        let grocery_from=parseInt($('#grocery_from').val()) || 0;
        let grocery_to=parseInt($('#grocery_to').val()) || 0;
        let utility_from=parseInt($('#utility_from').val()) || 0;
        let utility_to=parseInt($('#grocery_to').val()) || 0;
        let home_rent=parseInt($('#home_rent').val()) || 0;
        let others=parseInt($('#others').val()) || 0;
        let total=grocery_from+grocery_to+utility_from+utility_to+home_rent+others;
        console.log(total)
        console.log(value)
        return this.optional(element) || value >=total ;
    }, 'Expense value must be less than salary.');
</script>