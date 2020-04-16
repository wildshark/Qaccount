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
                    <th>Details</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
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
                            $dr = number_format($r['qout_dr'],2);
                            $cr = number_format($r['qout_cr'],2);
                            $bal = number_format($r['balance'],2);
                            echo"
                            <tr>
                                <td>{$n}</td>
                                <td>{$r['ledger']}</td>
                                <td>{$dr}</td>
                                <td>{$cr}</td>
                                <td>{$bal}</td>
                                <td>
                                <a href='?_route=ledger-details&ledger={$r['ledger']}&id={$r['ledger_id']}' class='btn btn-outline-primary'>View</a>
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