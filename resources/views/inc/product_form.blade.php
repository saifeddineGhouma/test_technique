
<div class="container mb-2">
    <div class="row">
        <div class="col-md-12">
            <div data-role="dynamic-fields">
                <div class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="position">position</label>
                        <input type="number" class="form-control" name="position[]" id="position" placeholder="position">
                    </div>
                    <span>-</span>
                    <div class="form-group">
                        <label class="sr-only" for="count"> count</label>
                        <input type="number" class="form-control" name="count[]" id="count" placeholder="count">
                    </div>
                    <span>-</span>
                    <div class="form-group">
                        <label class="sr-only" for="label">label</label>
                        <input type="text" class="form-control" name="label[]" id="label" placeholder="label">
                    </div>
                    <span>-</span>
                    <div class="form-group">
                        <label class="sr-only" for="total">Total</label>
                        <input type="text" class="form-control" name="total[]" id="total" placeholder="total">
                    </div>
                    <span>-</span>
                    <button class="btn btn-danger" data-role="remove">
                        Remove
                    </button>
                    <button class="btn btn-success btn-block " data-role="add">
                        Add
                    </button>
                </div>  <!-- /div.form-inline -->
            </div>  <!-- /div[data-role="dynamic-fields"] -->
        </div>  <!-- /div.col-md-12 -->
    </div>  <!-- /div.row -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
@include('inc.form_js')
