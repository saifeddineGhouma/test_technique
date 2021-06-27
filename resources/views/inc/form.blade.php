<form method="post" action="{{route('home.generate')}}">
@csrf

@if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<div >
<h3>Ceditor</h3>

  <div class="form-group">
    <label for="name_c">Name </label>
    <input type="text" class="form-control" name="name_c" id="name_c"  placeholder="Enter name ">
  </div>
  <div class="form-group">
    <label for="address_c">Address</label>
    <input type="text" class="form-control" id="address_c" name="address_c" placeholder="address">
  </div>
  <div class="form-group">
    <label for="zip_code_c">Zip Code </label>
    <input type="number" class="form-control" id="zip_code_c" name="zip_code_c" placeholder="zip code ">
  </div>
  <div class="form-group">
    <label for="city_c">City </label>
    <input type="text" class="form-control" id="city_c"  name="city_c" placeholder="city ">
  </div>
  <div class="form-group">
    <label for="account">Account  </label>
    <input type="text" class="form-control" id="account" name="account" placeholder="account ">
  </div>
  <div class="form-group">
    <label for="country_c">Country   </label>
    <select class="form-control"  class="form-control" id="country_c" name="country_c">
     <option>Please selecte country</option>
     <option valye="tunisia">Tunisia</option>
     <option valye="france">france </option>
     <option valye="usa">Usa</option>

    </select>
  </div>

  </div>
 <hr>
 <h3>debtor </h3>
 <div class="form-group">
    <label for="name_d">Name </label>
    <input type="text" class="form-control" id="name_d" name="name_d" placeholder="Enter name ">
  </div>
  <div class="form-group">
    <label for="address_d">Address</label>
    <input type="text" class="form-control" name="address_d" id="address_c" name="address_c" placeholder="address">
  </div>
  <div class="form-group">
    <label for="zip_code_d">Zip Code </label>
    <input type="number" class="form-control" name="zip_code_d" id="zip_code_d" name="zip_code_c" placeholder="zip code ">
  </div>
  <div class="form-group">
    <label for="city_d">City </label>
    <input type="text" class="form-control" id="city_d"  name="city_d" placeholder="city ">
  </div>

  <div class="form-group">
    <label for="country_d">Country   </label>
    <select class="form-control"  class="form-control" id="country_d" name="country_d">
     <option>Please selecte country</option>
     <option valye="tunisia">Tunisia</option>
     <option valye="france">france </option>
     <option valye="usa">Usa</option>

    </select>
  </div>

  <h3>Product</h3>
  @include('inc.product_form')

  <button type="submit" class="btn btn-primary">Submit</button>


</form>
