<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Billplz Form Tutorial</title>
  </head>
  <body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('New Billplz Form') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/submit') }}">
                            @csrf
                            <!-- <div class="form-group row">
                                <label for="product_name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                                <div class="col-md-6">
                                    <input id="product_name" type="text" class="form-control{{ $errors->has('product_name') ? ' is-invalid' : '' }}" name="product_name" value="" autofocus>

                                    @if ($errors->has('product_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div> -->

                            <div class="form-group row">
                                <label for="product_price" class="col-md-4 col-form-label text-md-right">{{ __('Product Price (RM)') }}</label>

                                <div class="col-md-6">
                                    <input id="product_price" type="number" class="form-control{{ $errors->has('product_price') ? ' is-invalid' : '' }}" name="product_price" value="">

                                    @if ($errors->has('product_price'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product_price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Customer Name') }}</label>

                                <div class="col-md-6">
                                    <input id="customer_name" type="text" class="form-control{{ $errors->has('customer_name') ? ' is-invalid' : '' }}" name="customer_name">

                                    @if ($errors->has('customer_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('customer_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="customer_email" class="col-md-4 col-form-label text-md-right">{{ __('Customer Email') }}</label>

                                <div class="col-md-6">
                                    <input id="customer_email" type="email" class="form-control{{ $errors->has('customer_email') ? ' is-invalid' : '' }}" name="customer_email" value="">

                                    @if ($errors->has('customer_email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('customer_email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <label for="customer_telephone_number" class="col-md-4 col-form-label text-md-right">{{ __('Customer Telephone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="customer_telephone_number" type="number" class="form-control{{ $errors->has('customer_telephone_number') ? ' is-invalid' : '' }}" name="customer_telephone_number" value="">

                                    @if ($errors->has('customer_telephone_number'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('customer_telephone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div> -->


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Pay Now !!') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>