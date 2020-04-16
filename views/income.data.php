<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data table</h4>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Details</th>
                    <th>Category</th>
                    <th>Ref</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                    if((!isset($data))||($data == false)){
                        echo"
                        <tr>
                            <td>Null</td>
                            <td>Null</td>
                            <td>Null</td>
                            <td>Null</td>
                            <td>Null</td>
                            <td>Null</td>
                            <td>
                            <button class='btn btn-outline-primary'>View</button>
                            </td>
                        </tr>
                        ";
                    }else{
                        foreach($data as $r){
                            
                            if(isset($n)){
                                $n= $n +1;
                            }else{
                                $n = 1;
                            }
                            $amount = number_format($r['qout_dr'],2);
                            echo"
                            <tr>
                                <td>{$n}</td>
                                <td>{$r['tran_date']}</td>
                                <td>{$r['description']}</td>
                                <td>{$r['ledger']}</td>
                                <td>{$r['ref']}</td>
                                <td>{$amount}</td>
                                <td>
                                  <a href='?_submit=delete&p=ledger&id={$r['ledger_id']}' class='btn btn-outline-danger'>Delete</a>
                                </td>
                            </tr>
                            ";
                        }
                    }
                  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>