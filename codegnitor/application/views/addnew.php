
<div class="container mt-4">
    <?php echo form_open('home/save',['class'=>'form-horizontal']); ?>
        <legend>Add a new employee</legend>
        <div class="row mt-4">
            <div class="col-lg-6">  
                <div class="form-group">
                    <label for="exampleInputEmail1" class="col-lg-4 control-lablel">Name</label>
                    <div class="col-lg-8">
                        <?php echo form_input(['name'=>'name', 'class'=>'form-control','placeholder'=>'Enter the name','value'=>set_value('name')]);?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <?php  echo form_error('name'); ?>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-6">
                <label for="contact" class="col-4 control-lablel">Contact Number</label>
                <div class="col-8">
                    <?php echo form_input(['name'=>'contact', 'class'=>'form-control','placeholder'=>'Enter the contact number','value'=>set_value('contact')]);?>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <?php  echo form_error('contact'); ?>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-6">
                <label for="address" class="col-4 control-lablel">Address</label>
                <div class="col-8">
                     <?php echo form_input(['name'=>'address', 'class'=>'form-control','placeholder'=>'Enter the address','value'=>set_value('address')]);?>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <?php  echo form_error('address'); ?>
            </div>
        </div>

        <div class="row mt-4">
             <div class="col-lg-6">
                <label for="city" class="col-4 control-lablel">City</label>
                <div class="col-8">
                    <?php echo form_input(['name'=>'city', 'class'=>'form-control','placeholder'=>'Enter the city','value'=>set_value('city')]);?>
                </div>
             </div>
             <div class="col-lg-6 mt-4">
                 <?php  echo form_error('city'); ?>
             </div>
        </div>

         <div class="row mt-4 ml-0">
            <div class="col-lg-2">
                    <label for="exampleSelect1" class="col-2 control-label">Gender</label>
                    <div class="col-10"></div>
                    <select class="form-control" id="exampleSelect1" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    </div>
             </div>
             <div class="col-lg-6">
                
             </div>
         </div>
    
    
   
    
            <div class="row mt-4">
            <div class="col-lg-3"></div>
            <?php echo form_submit(['value'=>'Submit','class'=>'btn btn-primary mr-2']); ?>
            <?php echo form_reset(['value'=>'Reset','class'=>'btn btn-default']); ?>
            </div>
            </div>
 
    <?php echo form_close() ?>

</div>  
