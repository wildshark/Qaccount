<div class="card">
    <div class="card-body">
      <h4 class="card-title">Data table</h4>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>Serial #</th>
                    <th>Date</th>
                    <th>Details</th>
                    <th>Category</th>
                    <th>Ref</th>
                    <th>Debit</th>
                    <th>Credit</th>
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
                            echo"
                            <tr>
                                <td>{$n}</td>
                                <td>{$r['tran_date']}</td>
                                <td>{$r['description']}</td>
                                <td>{$r['ledger']}</td>
                                <td>{$r['ref']}</td>
                                <td>{$r['bank_dr']}</td>
                                <td>{$r['bank_cr']}</td>
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