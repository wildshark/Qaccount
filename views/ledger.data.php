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
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                    <th>Status</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                    if((!isset($datasheet))||($datasheet == false)){
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
                        foreach($datasheet as $r){
                            
                            if(isset($n)){
                                $n= $n +1;
                            }else{
                                $n = 1;
                            }
                            $dr = number_format($r['qout_dr'],2);
                            $cr = number_format($r['qout_cr'],2);
                            $bal = $r['qout_dr']-$r['qout_cr'];
                            $bal = number_format($bal,2);
                            if($r['pay_type_id'] == 1){
                                $type = "Cash";
                            }else{
                                $type = "Bank";
                            }
                            echo"
                            <tr>
                                <td>{$n}</td>
                                <td>{$r['tran_date']}</td>
                                <td>{$r['description']}</td>
                                <td>{$r['ref']}</td>
                                <td>{$dr}</td>
                                <td>{$cr}</td>
                                <td>{$bal}</td>
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