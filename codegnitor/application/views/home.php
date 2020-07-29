<div class="container mt-4">
  <?php if($error=$this->session->flashdata('response')):?>
    <div class="alert alert-dismissible alert-success">
      <?php echo $error;?>
    </div>
  <?php endif; ?>

  <div class="row"> 
    <div class="col-12">
    <td><?php echo anchor("home/create",'Add new ',['class'=>'btn btn-primary']); ?></td>    
    <td><?php echo anchor("home/print",'Print All',['class'=>'btn btn-success']); ?></td>
    </div>
  </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Employee Name</th>
          <th scope="col">Contact no</th>
          <th scope="col">Address</th>
          <th scope="col">City</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>

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
                <td><?php echo anchor("home/edit/{$record->id}",'Update',['class'=>'btn btn-success']); ?></td>
                <td><?php echo anchor("home/delete/{$record->id}",'Delete',['class'=>'btn btn-danger']); ?></td>
              </tr>
          <?php }?>
          <?php else:?>
              <tr>No Record Found!</tr>
          <?php endif;?>
      </tbody>
    </table>

    
</div> 
