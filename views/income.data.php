<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data table</h4>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>Order #</th>
                    <th>Date</th>
                    <th>Details</th>
                    <th>Ref</th>
                    <th>Category</th>
                    <th>Amount</th>
                    <th>Status</th>
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
                            <label class='badge badge-info'>On hold</label>
                            </td>
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
                            echo"
                            <tr>
                                <td>{$n}</td>
                                <td>{$r['tran_date']}</td>
                                <td>{$r['description']}</td>
                                <td>{$r['ledger']}</td>
                                <td>{$r['ref']}</td>
                                <td>{$r['qout_dr']}</td>
                                <td>
                                <button class='btn btn-outline-primary'>View</button>
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