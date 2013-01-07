<?php $this->load->view('includes/header'); ?> 
     <center>
 <div class="hero-unit" align="center">
   
   
   <div align="center" id="Sform">
     <h1 style="color: white;">Update Employee</h1>
     <h3 style="color: green">Please enter employee details to update</h3>
<form action="<?php echo site_url('home_controller/update_main')?>" method="post">
 
 <div class="control-group"> 
 <label class="control-group"> Employee Number:  </label>
 <div class="controls"> <input type="text" id="emp_no" name="emp_no" value=""/></div>
 </div>
 
 <div class="control-group"> 
 <label class="control-group"> Salary:  </label>
 <div class="controls"> <input type="text" id="salary" name="salary" value=""/></div>
 </div> 
 
 <div class="controls"> <input type= "submit" name="submit"></div>
 
 </form>
 </div>
  </div>
  </center>
