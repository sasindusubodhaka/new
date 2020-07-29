<!-- report view -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Report</title>
   <!-- table css -->
    <style> 
            table {
            border-collapse: collapse;
            width: 60%;
            }

            th, td {
            text-align: left;
            padding: 7px;
            }

            tr:nth-child() {background-color: #f2f2f2;}

    </style>
</head>

<body> 
<button class="btn btn-success" onclick="window.print();">Print</button>
<div class="container"></div>
  <table class="table table-hover"> <!--table-->
      <thead>
        <tr>
          <th scope="col">Employee Name</th>
          <th scope="col">Contact no</th>
          <th scope="col">Address</th>
          <th scope="col">City</th>
          <th scope="col">Gender</th>
        </tr>
      </thead>
      <tbody>
        <?php if(count($records)): ?>
          <?php foreach($records as $record) {?>
              <tr class="table-active">                
                <td><?php echo $record->name; ?></td>
                <td><?php echo $record->contact; ?></td>
                <td><?php echo $record->address; ?></td>
                <td><?php echo $record->city; ?></td>
                <td><?php echo $record->gender; ?></td>
              </tr>
          <?php }?>
                <tr>
                <td></td>
                </tr>
                <tr>
                <td><b>Status of the table</b></td>
                </tr>
                <tr>
                <td colspan="2"><?php echo "Number of employees :- ".$data['countemp'];?></td><!--status-->
                </tr>
                <tr>
                <td colspan="2"><?php echo "Number of male employees :- ".$data['countmale'];?></td>
                </tr>
                <tr>
                <td colspan="2"><?php echo "Number of female employees :- ".$data['countfemale'];?></td>
                </tr>
          <?php else:?>
              <tr>No Record Found!</tr>
          <?php endif;?>
       </tbody>
    </table>    
    </div>
       <?php // echo $data['countemp'];?>
       
    
</div> 
