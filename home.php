
 <?php
include('dbcon.php');
?>
<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">
function showState(Country_Id)
{
document.frm.submit();
}

function showCity(State_Id)
{
document.frm.submit();
}
</script>
</head>
<body>
<form action="" method="post" name="frm" id="frm">
<table width="500" border="0">
<tr>
<td width="119">Division</td>
<td width="371">
<select name="division_Id" id="division_Id" onChange="showDistric(this.value);">
<option value="">--Select--</option>
<?php
$sql1="select * from division";
$sql_row1=mysql_query($sql1);
while($sql_res1=mysql_fetch_assoc($sql_row1))
{
?>
<option value="<?php echo $sql_res1["division_Id"]; ?>" <?php if($sql_res1["division_Id"]==$_REQUEST["division_Id"])
 { echo "Selected"; } ?>><?php echo $sql_res1["divisionName"]; ?></option>
<?php
}
?>
</select>
</td>
</tr>
<tr>
<td>Distric</td>
<td id="td_distric">
<select name="distric_id" id="distric_id" onChange="showThana(this.value);">
<option value="">--Select--</option>
<?php
$sql="select * from state where division_Id='$_REQUEST[division_Id]'";
$sql_row=mysql_query($sql);
while($sql_res=mysql_fetch_assoc($sql_row))
{
?>
<option value="<?php echo $sql_res["districId"]; ?>" <?php if($sql_res["distric_Id"]==$_REQUEST["distric_id"])
 { echo "Selected"; } ?>><?php echo $sql_res["districName"]; ?></option>
<?php
}
?>
</select>
</td>
</tr>
<tr>
<td>City</td>
<td id="td_thana">
<select name="thana_id" id="thana_id">
<option value="">--Select--</option>
<?php
$sql="select * from thana where distric_Id='$_REQUEST[distric_id]'";
$sql_row=mysql_query($sql);
while($sql_res=mysql_fetch_assoc($sql_row))
{
?>
<option value="<?php echo $sql_res["distric_Id"]; ?>"><?php echo $sql_res["thanaName"]; ?></option>
<?php
}
?>
</select>
</td>
</tr>
</table>
</form>
</body>
</html>