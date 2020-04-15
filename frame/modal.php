<div class="modal fade" id="m-investment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Captial & Withdraw</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
       <div class="card">
                <div class="card-body">
                  <form class="form-sample">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Ref. Number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo 'INC'.time();?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Transaction Date</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control"  placeholder="dd/mm/yyyy" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Category</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option value="1">Investment</option>
                              <option value="2">Withdraw</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Transaction Type</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked>
                                Cash at Hand
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2">
                                Bank Deposit/Chauqe
                              </label>
                            </div>
                          </div>
                        </div>
                        </div>
                    </div>
                 
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Details</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Amount</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-success">Submit</button>
         <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
       </div>
     </div>
   </div>
</div>
 
<div class="modal fade" id="m-income" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Income</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                <!--form-->
                        <div class="card">
                            <div class="card-body">
                                <form class="form-sample" method="post" action="index.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Ref. Number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="ref" value="<?php echo 'INC'.time();?>" />
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Transaction Date</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" name="date" placeholder="dd/mm/yyyy" />
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Category</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="category">
                                                <?php cmb_income()?>
                                                </select>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Transaction Type</label>
                                                <div class="col-sm-4">
                                                    <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="type" id="membershipRadios1" value="1" checked>
                                                        Cash at Hand
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="type" id="membershipRadios2" value="2">
                                                        Bank Deposit/Chauqe
                                                    </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Details</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="details" />
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Amount</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="amount" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="_submit" value="income-add" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <!--end - form-->  
                </div>     
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="m-expennses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Expennses</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                <!--form-->
                <div class="card">
                            <div class="card-body">
                                <form class="form-sample" method="post" action="index.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Ref. Number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="ref" value="<?php echo 'INC'.time();?>" />
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Transaction Date</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" name="date" placeholder="dd/mm/yyyy" />
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Category</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="category">
                                                <?php cmb_expenses()?>
                                                </select>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Transaction Type</label>
                                                <div class="col-sm-4">
                                                    <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="type" id="membershipRadios1" value="1" checked>
                                                        Cash at Hand
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="type" id="membershipRadios2" value="2">
                                                        Bank Deposit/Chauqe
                                                    </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Details</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="details" />
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Amount</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="amount" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="_submit" value="expenses-add" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <!--end - form-->  
                </div>
            </form>
        </div>
    </div>
</div>
