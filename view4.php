<!DOCTYPE html>
<html>
 <head>
 <meta charset="windows-1252">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 
 <style>
 
 .container{overflow: hidden}
 .tab{float: left;}
 .tab-2{margin-left: 50px}
 .tab-2 input{display: block;margin-bottom: 20px}
 tr{transition:all .25s ease-in-out}
 tr:hover{background-color:#EEE;cursor:pointer}
 
 </style>
 </head>
 <body>
 
  <div class="container">
   <div class="tab tab-1">
   <table id="table" border="1">
   <tr>
    <th>ownid</th>
	<th>ownname</th>
	<th>ownadd</th>
	<th>ownphno</th>
	<th>sex</th>
	<th>vehno</th>
	</tr>
	<tr>
	<td>1234</td>
	<td>muni</td>
	<td>bang</td>
	<td>1234567898</td>
	<td>m</td>
	<td>ka 1232</td>
	</tr>
	</table>
	</div>
	<div class="tab tab-2">
	ownid:<input type="text" name="ownid" id="ownid">
	ownname:<input type="text" name="ownname" id="ownname">
	ownadd:<input type="text" name="ownadd" id="ownadd">
	ownphno:<input type="text" name="ownphno" id="ownphno">
	sex:<input type="text" name="sex" id="sex">
	vehno:<input type="text" name="vehno" id="vehno">
	
	<button onclick="addhtmltablerow();">INSERT</button>
	<button onclick="edithtmltableselectedrow();">EDIT</button>
	<button onclick="removeselectedrow();">DELETE</button>
	</div>
	</div>
	
	<script>
	
	var rindex,
	table=document.getElementbyid("table");
	
	//check the empty input
	function checkEmptyinput()
	{
	var isempty=false,
	document.getElementbyid("ownid").value,
		ownname=document.getElementbyid("ownname").value,
		ownadd=document.getElementbyid("ownadd").value,
		ownphno=document.getElementbyid("ownphno").value,
		sex=document.getElementbyid("sex").value
		vehno=document.getElementbyid("vehno");
		
		if(ownid==""){
		alert("ownid cannot be empty");
		isempty=true;
		if(ownname==""){
		alert("ownname cannot be empty");
		isempty=true;
		if(ownadd==""){
		alert("ownadd cannot be empty");
		isempty=true;
		if(ownphno==""){
		alert("ownphno cannot be empty");
		isempty=true;
		if(sex==""){
		alert("sex cannot be empty");
		isempty=true;
		if(vehno==""){
		alert("vehno cannot be empty");
		isempty=true;
		}
		}
	
	
	    // add rows
		function addhtmltablerow()
		{
		//get the table by id
		//create a new row and cells
		//get value from input text
		//set the values into row cell's
		if(!checkemptyinput()) {
		var table = document.getElementbyid("table"),
		newrow=table.insertrow(table.length),
		cell1=newrow.insertcell(0),
		cell2=newrow.insertcell(1),
		cell3=newrow.insertcell(2),
		cell4=newrow.insertcell(3),
		cell5=newrow.insertcell(4),
		cell6=newrow.insertcell(5);
		ownid=document.getElementbyteid("ownid").value,
		ownname=document.getElementbyteid("ownname").value,
		ownadd=document.getElementbyteid("ownadd").value,
		ownphno=document.getElementbyteid("ownphno").value,
		sex=document.getElementbyteid("sex").value,
		vehno=document.getElementbyteid("vehno").value;
		
		cell1.innerhtml=ownid;
		cell2.innerhtml=ownname;
		cell3.innerhtml=ownadd;
		cell4.innerhtml=ownphno;
		cell5.innerhtml=sex;
		cell6.innerhtml=vehno;
		// call the function to set the event to the new row
		selectedrowtoinput();
		}
		}
		
		//display selected row data into input text
		function selectedrowtoinput()
		{
		var rowindex,table=document.getElementbyid("table");
		for(var i=1;i<table.rows.length;i++)
		{
		table.rows[i].onclick=function()
		{
		//get the selected row index
		rindex=this.rowindex;
		document.getElementbyid("ownid").value=this.cells[1].innerhtml;
		document.getElementbyid("ownname").value=this.cells[2].innerhtml;
		document.getElementbyid("ownadd").value=this.cells[3].innerhtml;
		document.getElementbyid("ownphno").value=this.cells[4].innerhtml;
		document.getElementbyid("sex").value=this.cells[5].innerhtml;
		document.getElementbyid("vehno").value=this.cells[6].innerhtml;
		};
		}
		}
		selectedrowtoinput();
		
		function edithtmltableselectedrow()
		{
		var ownid=document .getElementbyid("ownid").value,
		    ownname=document .getElementbyid("ownname").value,
			ownadd=document .getElementbyid("ownadd").value,
			ownphno=document .getElementbyid("ownphno").value,
			sex=document .getElementbyid("sex").value,
			vehno=document .getElementbyid("vehno").value,
			if(!checkemptyinput()){
		table.rows[rindex].cells[1].innerhtml="ownid";
			table.rows[rindex].cells[2].innerhtml="ownname";
				table.rows[rindex].cells[3].innerhtml="ownadd";
					table.rows[rindex].cells[4].innerhtml="ownphno";
						table.rows[rindex].cells[5].innerhtml="sex";
							table.rows[rindex].cells[6].innerhtml="vehno";
		}
		}
		function removeselectedrow()
		{
		table.deleterow(rindex);
		//clear input text
		document.getElementbyid("ownid").value,
		ownname=document.getElementbyid("ownname").value="";
		ownadd=document.getElementbyid("ownadd").value="";
		ownphno=document.getElementbyid("ownphno").value="";
		sex=document.getElementbyid("sex").value=="";
		vehno=document.getElementbyid("vehno").value=="";
		}
		</script>
		
	
	</body>
	</html>