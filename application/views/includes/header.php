<html>
<head>

<title>HR</title>

<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>css/table.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url('js/jquery-1.8.3.min.js') ?>"></script>
 <!--   
<script>
$(document).ready(function(){
//all code goes here
$('#searchform').submit(function(e){
$.get($('#searchform').prop('action'),$('#searchform').serialize, function(result){
alert(result);
}, "json");
e.preventDefault();
});
});
    
</script>
 -->
<!--
 <script> 
$(document).ready(function(){
    $('#searchform').click(function(e) {
        e.preventDefault();
        var querystring = "find/findemp?";
        if ($('#firstname').val() != ''){
            querystring += "firstname=" + $('#firstname').val();
        }
        if ($('#lastname').val() != ''){
            querystring += "&lastname=" + $('#lastname').val();
        }
        if ($('#department').val() != ''){
            querystring += "&department=" + $('#department').val();
        }
        if ($('#title').val() != ''){
            querystring += "&title=" + $('#title').val();
        }
        $.getJSON(querystring,
            null,
            function(data){
            $.each(data, function() {
                $.each(this, function(i, item) {
                    $('.search_results tbody').append(
                    '<tr>' +
                    '<td>' + item.firstname + '</td>' +
                    '<td>' + item.lastname + '</td>' +
                    '<td>' + item.dept + '</td>' +
                    '<td>' + item.jobtitle + '</td>' +
                    '</tr>'
                    );
                });
            });
        });
    });
});

</script>
  -->

</head>
<body style="background-color: #E6E6E6;">
 <div id="header">
 <div id="navbar">
 
       
  <ul> 
        <li><a href="<?php echo site_url('home_controller/HRsearch')?>"><b>Home</b></a></li> 
        <li><a href="<?php echo site_url('home_controller/add_post')?>"><b>Add Employee</b></a></li> 
        <li><a href="<?php echo site_url('home_controller/delete_post')?>"><b>Delete</b></a></li> 
        <li><a href="<?php echo site_url('home_controller/update_post')?>"><b>Update</b></a></li> 
        <li><a href="<?php echo site_url('home_controller/title_post')?>"><b>Change Job Title</b></a></li> 
        <li><a href="<?php echo site_url('home_controller/promote_post')?>"><b>Promote</b></a></li> 
        <li><a href="<?php echo site_url('home_controller/demote_post')?>"><b>Demote</b></a></li> 
        <li><a href="<?php echo site_url('home_controller/do_logout')?>"><font color="blue">Logout</font></a></li> 
  </ul> 
</div> 
 
 </div>