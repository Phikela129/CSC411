
<head>
<style type="text/css">
.auto-style1 {
	text-align: left;
}
.auto-style2 {
	border-style: none;
	border-width: medium;
	text-align: center;
}
.auto-style3 {
	color: #0068FF;
}

      svg {
        color: #fff;
        fill: currentColor;
        width: 24px;
        height: 24px;
        padding: 10px;
      }

      .auto-style4 {
	margin-left: 28px;
	margin-top: 10px;
}
.auto-style5 {
	margin-left: 28px;
	margin-top: 3px;
}
.auto-style6 {
	margin-left: 0px;
}
.auto-style7 {
	border-style: none;
	border-width: medium;
	text-align: left;
}
.auto-style9 {
	border-width: 0px;
}
.auto-style16 {
	border-style: none;
	border-width: medium;
}
</style>
</head>

<body style="background-color: #F5DEB3">

<div class="container mt-5">
<div class="row">
<div class="col-md-8">
<form action="" method="get">
<div class="auto-style1">
<input type="text" class="auto-style5"  name="search" placeholder="Search..." style="height: 49px; width: 200px"><br>
<button type="submit" class="auto-style4" style="height: 41px"><a target='blank'>
        <svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg></a></button>
</div>
</form>
</div>
<div class="col-md-12">
<div class="search"><div class="header">
	<h1 class="auto-style3" style="height: 30px"> &nbsp;&nbsp; INTERNS</h1>
	<div class="body">
<table class="auto-style9"> <thead><tr>

<th style="width: 135px" class="auto-style7">COMPANY NAME</th>
<th style="width: 95px" class="auto-style16">DATE</th>
<th style="width: 110px" class="auto-style7">LOCATION</th>
<th style="width: 231px" class="auto-style7">APPLICATION LINK</th>
<th style="width: 147px" class="auto-style7">DEPARTMENT</th>
<th style="width: 103px" class="auto-style7">PROGRAM</th>

</tr></thead>
<tbody>
<?php
if(isset($_GET['search'])){
$connection=mysqli_connect("localhost", "root", "", "intern");
$filtervalue=$_GET['search'];
$filterdata="SELECT* FROM company_info WHERE CONCAT(ID,COMPANY_NAME,DATE,LOCATION,APPLICATION_LINK,DEPARTMENT, PROGRAM) LIKE '%$filtervalue%'";
$filterdata_run=mysqli_query($connection,$filterdata);
if(mysqli_num_rows($filterdata_run)>0){
foreach($filterdata_run as $row){
?>
<tr>

<td style="width: 135px" class="auto-style16"><?php echo $row['COMPANY_NAME']; ?></td>
<td style="width: 95px" class="auto-style2"><?php echo $row['DATE']; ?></td>
<td style="width: 110px" class="auto-style16"><?php echo $row['LOCATION']; ?></td>
<td style="width: 189px" class="auto-style16"><?php echo $row['APPLICATION_LINK']; ?></td>
<td style="width: 147px" class="auto-style16"><?php echo $row['DEPARTMENT']; ?></td>
<td style="width: 103px" class="auto-style16"><?php echo $row['PROGRAM']; ?></td>


</tr>


<?php
}
}
else{?>
<tr>
<td colspan="4" class="auto-style16">No Record!</td>
</tr>

<?php

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
</div>
<p>&nbsp;</p>
