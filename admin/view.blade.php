<div class="row">
  <div class="col-xs-3">

    <!-- Information -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><i class='bx bxs-quote-single-left' style='margin-right:5px;'></i></i>Information</h3>
      </div>
      <div class="box-body">
        <p>dbEdit is an advanced tool to quickly set any database item to a specific string. Only use this if you know what you are doing.</p>
      </div>
    </div>

    <!-- Warning -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><i class='bx bx-run' style='margin-right:5px;'></i></i>Warning</h3>
      </div>
      <div class="box-body">
        <p>Absolutely no support is provided for this tool or problems caused by use of this tool. All this is your own responsibility, but you probably already knew that, since you downloaded this anyways. Please keep in mind that there is 0 protection against SQL injections, exploits, etc. Everything is kept inside your admin panel, so on development and testing panels you should be "fine".</p>
      </div>
    </div>

  </div>
  <div class="col-xs-9">

    <!-- Set Database Value -->
    <form action="" method="POST">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class='bx bxs-folder-plus' style='margin-right:5px;'></i></i>Add Redirect</h3>
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
