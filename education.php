<head>
<style type="text/css">
.auto-style2 {
	color: #0068FF;
}
.auto-style3 {
	text-align: left;
}
.auto-style4 {
	text-align: center;
}
</style>
</head>

<body style="background-color: #F5DEB3">

<div class="container mt-5">
<div class="row">
<div class="col-md-8">
</div>
<div class="col-md-12">
<div class="department"><div class="header"><h1 class="auto-style2"> INTERNS</h1>
	<p class="text-center"> &nbsp;</p><div class="body">
<table class="table"> <thead><tr>

<th style="width: 135px" class="auto-style3">COMPANY NAME</th>
<th style="width: 95px">DATE</th>
<th style="width: 110px" class="auto-style3">LOCATION</th>
<th style="width: 231px" class="auto-style3">APPLICATION LINK</th>
<th style="width: 147px" class="auto-style3">DEPARTMENT</th>
<th style="width: 103px" class="auto-style3">PROGRAM</th>

</tr></thead>
<tbody>
<?php
$connection=mysqli_connect("localhost", "root", "", "intern");
$filterdata="SELECT* FROM company_info WHERE DEPARTMENT='Education'";
$filterdata_run=mysqli_query($connection,$filterdata);
if(mysqli_num_rows($filterdata_run)>0){
foreach($filterdata_run as $row){
?>
<tr>

<td style="width: 135px"><?php echo $row['COMPANY_NAME']; ?></td>
<td style="width: 95px" class="auto-style4"><?php echo $row['DATE']; ?></td>
<td style="width: 110px"><?php echo $row['LOCATION']; ?></td>
<td style="width: 189px"><?php echo $row['APPLICATION_LINK']; ?></td>
<td style="width: 147px"><?php echo $row['DEPARTMENT']; ?></td>
<td style="width: 103px"><?php echo $row['PROGRAM']; ?></td>


</tr>


<?php
}
}
else{?>
<tr>
<td colspan="4">No Record Found!</td>
</tr>

<?php

}

?>
</tbody>
</table>

</div>
</div> 
</div>
</div>
</div>
</div>