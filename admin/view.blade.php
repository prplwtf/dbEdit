<div class="row">
  <form action="" method="POST">

    <!-- Set Database Value -->
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class='bx bx-data' style='margin-right:5px;'></i></i>Set String</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-xs-3">
              <label class="control-label">Table</label>
              <input type="text" required name="table" id="table" value="" placeholder="table" class="form-control"/>
            </div>
            <div class="col-xs-3">
              <label class="control-label">Item</label>
              <input type="text" required name="item" id="item" value="" placeholder="item" class="form-control"/>
            </div>
            <div class="col-xs-6">
              <label class="control-label">Value</label>
              <input type="text" required name="value" id="value" value="" placeholder="value" class="form-control"/>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-xs-12">
      {{ csrf_field() }}
      <button type="submit" name="_method" value="PATCH" class="btn btn-gray-alt btn-sm pull-right">Apply</button>
    </div>
  </form> 
</div>
