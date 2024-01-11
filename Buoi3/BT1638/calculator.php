<?php
$_val = 0;
include 'code_calcu.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
	  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style type="text/css">
		.card-body{
			padding: 0px;margin: 0px;
		}
		.table{
			margin-bottom:0px;
			padding: 0px;
			margin: 0px;
		}
		.btn-warning{
			color: white !important;
		}
		td{
			width: 25%;
			padding: 0px !important;
			margin: 0px;
			border-color: #343a40 !important;
		}
		button{
			width: 100%;
			font-weight: bold;
		}
		input.right{
   		 text-align: right;
}
	</style>	  


</head>
<body>
<div>
	<form method="post" id="formId">	
		<div class="container" style="margin-top: 50px"> 
		<div style="width: 40%">
			  <div class="card bg-dark">
			    <div class="card-header">
			    	<div class="row">
			    		<div style="width: 100%" >
			    			<div style="width: 20%; margin: 0px !important;">
			    				<button type="button" class="btn btn-danger" style="width: 2px; padding-right: 0px;border-radius: 100%"></button>
			    				<button style="width: 2px; padding-right: 0px;border-radius: 100%" type="button" class="btn btn-warning"></button>
			    				<button  style="width: 2px; padding-right: 0px;border-radius: 100%" type="button" class="btn btn-success"></button>
							</div>
							<input type="text" id="val_" name="oldValues" value="<?=$_POST['values']?>" readonly style="width: 80%;float: right;color: #b3b3b3;text-align: right; border: none;background-color: #343a40">
			    			
			    		</div>
			    		<input style="color: white;font-size: 30px;border: none;width: 100%;" class="bg-dark right" type="text" id="_val" value="<?=$_val?>" name="values">
			    	</div>
			    	
			    </div>
			    <div class="card-body bg-dark">
			    	  <table class="table table-bordered table-sm" style="border-color: #343a40 !important;">
					    <tbody>
					    	<tr>
					    	<td><button type="button" class="btn btn-secondary" id="AC"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 12px;padding-bottom: 15px;font-size: 30px;">AC</div></font></font></button></td>
					    	<td><button type="button" class="btn btn-secondary" id="doidau"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 12px;padding-bottom: 30px;font-size: 30px;"><img src="http://localhost/Aptech/doidau.png" width="30px"></div></font></font></button></td>
					        <td><button id="du" type="button" class="btn btn-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 12px;padding-bottom: 15px;font-size: 30px;">%</div></font></font></button></td>
					        <td><button id="chia" type="button" class="btn btn-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 1px;padding-bottom: 11px;font-size: 40px !important;;">÷</div></font></font></button></td>			
					      </tr>
					      <tr>
					      	
					        <td><button id="i7" type="button" class="btn" style="background-color: #969ca2;color: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 12px;padding-bottom: 15px;font-size: 30px;">7</div></font></font></button></td>
					        <td><button id="i8" type="button" class="btn" style="background-color: #969ca2;color: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 12px;padding-bottom: 15px;font-size: 30px;">8</div></font></font></button></td>
					        <td><button id="i9" type="button" class="btn" style="background-color: #969ca2;color: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 12px;padding-bottom: 15px;font-size: 30px;">9</div></font></font></button></td>
					        <td><button id="nhan" type="button" class="btn btn-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 1px;padding-bottom: 11px;font-size: 40px !important;;">x</div></font></font></button></td>
					      </tr>
					      <tr>
					        <td><button id="i4" type="button" class="btn" style="background-color: #969ca2;color: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 12px;padding-bottom: 15px;font-size: 30px;">4</div></font></font></button></td>
					        <td><button id="i5" type="button" class="btn" style="background-color: #969ca2;color: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 12px;padding-bottom: 15px;font-size: 30px;">5</div></font></font></button></td>
					        <td><button id="i6" type="button" class="btn" style="background-color: #969ca2;color: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 12px;padding-bottom: 15px;font-size: 30px;">6</div></font></font></button></td>
					        <td><button id="tru"  type="button" class="btn btn-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 1px;padding-bottom: 11px;font-size: 40px !important;;">-</div></font></font></button></td>
					      </tr>
					      <tr>
					        <td><button id="i1" type="button" class="btn" style="background-color: #969ca2;color: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 12px;padding-bottom: 15px;font-size: 30px;">1</div></font></font></button></td>
					        <td><button id="i2" type="button" class="btn" style="background-color: #969ca2;color: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 12px;padding-bottom: 15px;font-size: 30px;">2</div></font></font></button></td>
					        <td><button id="i3" type="button" class="btn" style="background-color: #969ca2;color: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 12px;padding-bottom: 15px;font-size: 30px;">3</div></font></font></button></td>
					        <td><button id="cong" type="button" class="btn btn-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 1px;padding-bottom: 11px;font-size: 40px !important;;">+</div></font></font></button></td>
					      </tr>
					      <tr>				
					        <td colspan="2" ><button id="i0" type="button" class="btn" style="background-color: #969ca2;color: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 12px;padding-bottom: 15px;font-size: 30px;">0</div></font></font></button></td>
							<td><button id="i_" type="button" class="btn" style="background-color: #969ca2;color: white;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 12px;padding-bottom: 15px;font-size: 30px;">.</div></font></font></button></td>
					        <td><button type="submit" class="btn btn-warning"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><div style="padding-top: 1px;padding-bottom: 11px;font-size: 40px !important;;">=</div></font></font></button></td>
					      </tr>
					    </tbody>
					  </table>
					</div>
								    </div> 
								  </div>
							</div></form>

						</div>
<script type="text/javascript">

  

  $(function () {
	

		$("#AC").click(function(){
   			 $("#_val").val(0);
   			 $("#val_").val('');
  		});
		$("#doidau").click(function(){
   			 $("#_val").val(-$("#_val").val());
  		});
		$("#i1").click(function(){
				if($("#_val").val()==0||$("#_val").val()==vals||$("#_val").val()==vals) $("#_val").val(1);
				else
	   			$("#_val").val($("#_val").val()+1);
  		});
  		$("#i2").click(function(){
				if($("#_val").val()==0||$("#_val").val()==vals) $("#_val").val(2);
				else
	   			$("#_val").val($("#_val").val()+2);
  		});
  		$("#i3").click(function(){
				if($("#_val").val()==0||$("#_val").val()==vals) $("#_val").val(3);
				else
	   			$("#_val").val($("#_val").val()+3);
  		});
  		$("#i4").click(function(){
				if($("#_val").val()==0||$("#_val").val()==vals) $("#_val").val(4);
				else
	   			$("#_val").val($("#_val").val()+4);
  		});
  		$("#i5").click(function(){
				if($("#_val").val()==0||$("#_val").val()==vals) $("#_val").val(5);
				else
	   			$("#_val").val($("#_val").val()+5);
  		});
  		$("#i6").click(function(){
				if($("#_val").val()==0||$("#_val").val()==vals) $("#_val").val(6);
				else
	   			$("#_val").val($("#_val").val()+6);
  		});
  		$("#i7").click(function(){
				if($("#_val").val()==0||$("#_val").val()==vals) $("#_val").val(7);
				else
	   			$("#_val").val($("#_val").val()+7);
  		});
  		$("#i8").click(function(){
				if($("#_val").val()==0||$("#_val").val()==vals) $("#_val").val(8);
				else
	   			$("#_val").val($("#_val").val()+8);
  		});
  		$("#i9").click(function(){
				if($("#_val").val()==0||$("#_val").val()==vals) $("#_val").val(9);
				else
	   			$("#_val").val($("#_val").val()+9);
  		});
  		$("#i0").click(function(){
				if($("#_val").val()==0||$("#_val").val()==vals) return;
				else
	   			$("#_val").val($("#_val").val()+0);
  		});
  		$("#i_").click(function(){
  			if (check($("#_val").val().charAt($("#_val").val().length-1).charCodeAt(0))) return;
  			console.log(parseInt($("#_val").val()))
  			console.log($("#_val").val())
  			if(parseInt($("#_val").val())==($("#_val").val()))
	   			$("#_val").val($("#_val").val()+".");
	   		else return;
  		});
		$("#cong").click(function(){
			if (check($("#_val").val().charAt($("#_val").val().length-1).charCodeAt(0))) return;
				if($("#_val").val()==0||$("#_val").val()==vals) return;
				else
	   			$("#_val").val($("#_val").val()+"+");
	   	document.getElementById("formId").submit();	
  		});
  		$("#tru").click(function(){
  			if (check($("#_val").val().charAt($("#_val").val().length-1).charCodeAt(0))) return;
				if($("#_val").val()==0||$("#_val").val()==vals) return;
				else
	   			$("#_val").val($("#_val").val()+"-");
	   	document.getElementById("formId").submit();	
  		});
  		$("#nhan").click(function(){
  			if (check($("#_val").val().charAt($("#_val").val().length-1).charCodeAt(0))) return;
				if($("#_val").val()==0||$("#_val").val()==vals) return;
				else
	   			$("#_val").val($("#_val").val()+"x");
	   	document.getElementById("formId").submit();	
  		});
  		$("#chia").click(function(){
  			if (check($("#_val").val().charAt($("#_val").val().length-1).charCodeAt(0))) return;
				if($("#_val").val()==0||$("#_val").val()==vals) return;
				else
	   			$("#_val").val($("#_val").val()+"÷");
	   	document.getElementById("formId").submit();	
  		});
  		$("#du").click(function(){
  			if (check($("#_val").val().charAt($("#_val").val().length-1).charCodeAt(0))) return;
  			else{
  				if($("#_val").val()==0||$("#_val").val()==vals) return;
				else
	   			$("#_val").val($("#_val").val()+"%");
	   	document.getElementById("formId").submit();

  			}
  		
				
  		});
  		$("#bang").click(function(){
  			if (check($("#_val").val().charAt($("#_val").val().length-1).charCodeAt(0))) return;
  			else{
  				if($("#_val").val()==0||$("#_val").val()==vals) return;
				else
	   			$("#_val").val($("#_val").val()+"=");
	   	document.getElementById("formId").submit();

  			}
  		
				
  		});

  		 

  		function check(x) {
  			console.log(x)
  			console.log("%".charCodeAt(0))
  			if((x>=48)&&(x<=57)) return 0; else
  				 return 1;
  		}
  		
});
</script>
</body>
</html>