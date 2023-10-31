<div class="row">
  <div class="col-xs-12">

    <!-- Set Database Value -->
    <form action="" method="POST">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class='bx bx-hash' style='margin-right:5px;'></i></i>Set String</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-xs-3">
              <label class="control-label">Table</label>
              <input type="text" required name="table" id="table" value="" class="form-control"/>
            </div>
            <div class="col-xs-3">
              <label class="control-label">Item</label>
              <input type="text" required name="item" id="item" value="" class="form-control"/>
            </div>
            <div class="col-xs-6">
              <label class="control-label">Value</label>
              <input type="text" required name="value" id="value" value="" class="form-control"/>
            </div>
          </div>
        </div>
        <div class="box-footer">
          {{ csrf_field() }}
          <button type="submit" name="_method" value="PATCH" class="btn btn-gray-alt btn-sm pull-right">Apply</button>
        </div>
      </div>
    </form> 

  </div>
</div>
