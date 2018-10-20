$(document).ready(function(){
   $("#casasola").submit(function(evento){
      evento.preventDefault();

      document.getElementById('fail').style.display = 'none';
      document.getElementById('success').style.display = 'none';
      var formData = new FormData();
      formData.append('_token',$('input[name="_token"]').val());//$('meta[name="csrf-token"]').attr('content'));
      formData.append('file',$('#file')[0].files[0]);
      formData.append('has', $("#hashtag").val());
      $.ajax({
            url: '/publications/store',  
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,

            beforeSend: function(){
				//$(".loader").fadeIn("slow");        
            },
            success: function(data){   
                document.getElementById('success').style.display = 'block';
                $("#success").append(data)
/*
                //document.getElementById('fail').style.display = 'block';
            	if(data.success == ""){
            		document.getElementById('success').style.display = 'block';
            		//console.log(data.medium);
            	} 
                else if (data.success != "") {
                    document.getElementById('success').style.display = 'block';
            		//console.log(data.medium);
            	}        
                else{
                    document.getElementById('fail').style.display = 'block';
                }
            	//console.log(data);
*/
            },
            //timeout: 100000,
            error: function(jqXHR, textStatus, errorThrown){
		    	console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
        });
    });
});