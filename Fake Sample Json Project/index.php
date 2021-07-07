<html>
  
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fake Sample</title>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" 
        type="text/css" href=
"https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  
    <script type="text/javascript">
        function showHideRow(row) {
            $("#" + row).toggle();
        }
    </script>
    <script>

//JSON DRUG typé
$(document).ready(function(){
    $.getJSON("FakeSample.json", function(data){
        var drugs = '';
        
        $.each(data, function(key,value){
            
            if(key==="CurrentMedications") {
               var index = 0; 
               $.each(value[index], function(key1,value1){ 
                    if(key1==="Drugs"){
                        var index1 = 0;

                      for(var x = 0;x<value1.length;x++){
                        drugs += '<div>' +value1[x].Generic+'</div>';
                        drugs += '<div>' +value1[x].Trade+'</div>';
                        index1++;
                      }  
                      index++;         
                    }                  
                });   
            }

        });
        $('#1').append(drugs);
    });


});
</script>
    <style>
        body {
            margin: 0 auto;
            padding: 0px;
            text-align: center;
            width: 100%;
            font-family: "Myriad Pro", 
                "Helvetica Neue", Helvetica, 
                Arial, Sans-Serif;
        }
  
        #wrapper {
            margin: 0 auto;
            padding: 0px;
            text-align: center;
            width: 995px;
        }
  
        #wrapper h1 {
            margin-top: 50px;
            font-size: 45px;
            color: #585858;
        }
  
        #wrapper h1 p {
            font-size: 20px;
        }
  
        #table_detail {
            width: 500px;
            text-align: center;
            border-collapse: collapse;
            color: #2E2E2E;
            border: #A4A4A4;
        }
  
        #table_detail tr:hover {
            background-color: #F2F2F2;
        }
  
        #table_detail .hidden_row {
            display: none;
        }
    </style>
</head>
  
<body>
    <div id="wrapper">
  
        <table border=1 id="table_detail" 
            align=center cellpadding=10>
  
  
            <tr onclick="showHideRow('hidden_row1');/*getJSON();*/">
                <td id='1' bgcolor='yellow'></td>

            </tr>
            <tr id="hidden_row1" class="hidden_row">
     
            	<td id='1'bgcolor='yellow'></td>
            </tr>
  
            </tr>
        </table>
    </div>
</body>



</html>

<script>

//JSON GET start
$(document).ready(function(){
    $.getJSON("FakeSample.json", function(data){
        var gene_data = '';
        
        $.each(data, function(key,value){
            
            if(key==="CurrentMedications") { //check
               var index = 0; 
               $.each(value[index], function(key1,value1){ 
                    
                    if(key1==="GeneInfo"){
                        var index1 = 0;

                      for(var x = 0;x<value1.length;x++){ //for each check
                        gene_data += '<tr>';
                        gene_data += '<td>' +value1[x].Gene+'</td>';
                        gene_data += '<td>' +value1[x].Genotype+'</td>';
                        gene_data += '<td>' +value1[x].Phenotype+'</td>';
                        gene_data += '</tr>'; 
                        index1++;
                      }  
                      index++;         
                    } 

                    if(key1==="GroupPhenotype"){ 
                    	gene_data += '<tr>';
        				gene_data += '<td bgcolor="#eed202" colspan="2">' +value1+'</td>';
        				
                    }  
             		if(key1==="Action"){ 
        					gene_data += '<td bgcolor="#eed202" colspan="2">' +value1[0]+'</td>';
        					gene_data += '</tr>';
                    	}
                    if(key1==="Recommendation"){ 
                    		gene_data += '<tr>';
        					gene_data += '<td colspan="4">' +value1+'</td>';
        					gene_data += '</tr>';
                    	}
                });   
            }

        });
        $('#hidden_row1').append(gene_data); //append data
    });


});
</script>