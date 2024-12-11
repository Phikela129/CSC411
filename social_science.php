<head>
<style type="text/css">
.auto-style2 {
	color: #0068FF;
}
.auto-style3 {
	text-align: left;
	border-top-style: none;
	border-top-width: medium;
}
.auto-style4 {
	text-align: center;
	border-top-style: none;
	border-top-width: medium;
}
.auto-style5 {
	border-left-style: none;
	border-left-width: medium;
}
.auto-style6 {
	border-width: 0px;
}
.auto-style7 {
	text-align: left;
	border-right-style: none;
	border-right-width: medium;
	border-top-style: none;
	border-top-width: medium;
}
.auto-style8 {
	border-right-style: none;
	border-right-width: medium;
	border-bottom-style: none;
	border-bottom-width: medium;
}
.auto-style9 {
	border-left-style: none;
	border-left-width: medium;
	border-right-style: none;
	border-right-width: medium;
	border-bottom-style: none;
	border-bottom-width: medium;
}
.auto-style10 {
	text-align: center;
	border-bottom-style: none;
	border-bottom-width: medium;
}
.auto-style11 {
	border-bottom-style: none;
	border-bottom-width: medium;
}
.auto-style12 {
	border-left-style: none;
	border-left-width: medium;
	border-top-style: none;
	border-top-width: medium;
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
<table class="auto-style6"> <thead><tr>

<th style="width: 135px" class="auto-style12">COMPANY NAME</th>
<th style="width: 112px" class="auto-style4">DATE</th>
<th style="width: 115px" class="auto-style3">LOCATION</th>
<th style="width: 245px" class="auto-style3">APPLICATION LINK</th>
<th style="width: 147px" class="auto-style3">DEPARTMENT</th>
<th style="width: 103px" class="auto-style7">PROGRAM</th>

</tr></thead>
<tbody>
<?php
$connection=mysqli_connect("localhost", "root", "", "intern");
$filterdata="SELECT* FROM company_info WHERE DEPARTMENT='Social Science'";
$filterdata_run=mysqli_query($connection,$filterdata);
if(mysqli_num_rows($filterdata_run)>0){
foreach($filterdata_run as $row){
?>
<tr>
<td style="width: 135px" class="auto-style5"><?php echo $row['COMPANY_NAME']; ?></td>
<td style="width: 112px" class="auto-style10"><?php echo $row['DATE']; ?></td>
<td style="width: 115px" class="auto-style11"><?php echo $row['LOCATION']; ?></td>
<td style="width: 245px" class="auto-style11"><?php echo $row['APPLICATION_LINK']; ?></td>
<td style="width: 147px" class="auto-style11"><?php echo $row['DEPARTMENT']; ?></td>
<td style="width: 103px" class="auto-style8"><?php echo $row['PROGRAM']; ?></td>


</tr>


<?php
}
}
else{?>
<tr>
<td colspan="4" class="auto-style9">No Record Found!</td>
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