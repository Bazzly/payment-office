<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">PAYSTACK PAYMENT TEST DEMO</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{route('paystack')}}" method="post">

                        @csrf
                            <h3 class="text-center text-info">PAYMENT DEMO</h3>
                            <div class="form-group">
                                <label for="payment_type" class="text-info">payment type:</label><br>
                                <input type="text" name="payment_type" id="payment_type" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="key" class="text-info">key:</label><br>
                                <input type="text" name="key" id="key" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="amount" class="text-info">amount:</label><br>
                                <input type="number" name="amount" id="amount" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="currency" class="text-info">currency:</label><br>
                                <input type="text" name="currency" id="currency" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="ref" class="text-info">ref:</label><br>
                                <input type="text" name="ref"  id="ref" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">email:</label><br>
                                <input type="email" name="email" id="email" class="form-control" placeholder="">
                            </div>
 {{-- required --}}
                            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
