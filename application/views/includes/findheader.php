<html> 
<head>

<title>Find Employee</title>

<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>css/table.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url('js/jquery-1.8.3.min.js') ?>"></script>

<!--
<script>
$(document).ready(function(){
//all code goes here
$('#search_submit').submit(function(e){
$.get($('#search_submit').prop('action'),$('#search_submit').serialize, function(result){
alert(result);
}, "json");
e.preventDefault();
});
});
    
</script>
  -->
 <script>
 
 $(document).ready(function(){
    $('#search_submit').click(function(e) {
        e.preventDefault();
        var querystring = "find/findemp?";
        if ($('#first_name').val() != ''){
            querystring += "first_name=" + $('#first_name').val();
        }
        if ($('#last_name').val() != ''){
            querystring += "&last_name=" + $('#last_name').val();
        }
        if ($('#dept_no').val() != ''){
            querystring += "&dept_no=" + $('#dept_no').val();
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
                    '<td>' + item.firs_tname + '</td>' +
                    '<td>' + item.last_name + '</td>' +
                    '<td>' + item.dept_no + '</td>' +
                    '<td>' + item.title + '</td>' +
                    '</tr>'
                    );
                });
            });
        });
    });
});
 
 </script>




</head>
<body style="background-color: #48D1CC;">
 <div id="header">
 <div id="navbar">  
  <ul> 
        <li><a href="<?php echo site_url('login')?>"><b> Go Back </b></a></li> 
  </ul> 
</div> 
 
 </div>