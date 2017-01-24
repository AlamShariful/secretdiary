function search(event){
        event.preventDefault();
        if($("#cityName").val()!=""){

            $.get("scraper.php?city="+$("#cityName").val(), function (data) {


                if(data==""){
                    //alert("dfs");
                    $("#resultDiv").fadein();
                    $("#errorDiv").html("Something went Wrong,Couldn't Find the city, Try Again Please");



                }else{


                    $("#errorDiv").hide();


                    $("#tabDiv").show();
                    $("#today").html(data);


                }

                //$("#resultDiv").html(data);



            });
        }else {

            $("#tabDiv").hide();
            $("#errorDiv").show();
            $("#errorDiv").html("Please Enter City Name!!");
        }
    }


    $("#searchButtonClicked").click(function (event) {
       // alert("clsdf");

        search(event);



    });

    
    
    $('#cityName').keypress(function(e){
        if(e.which == 13){
        //Enter key pressed
        //Trigger search button click event
            search(event);
            //alert('cliekdf');
        }
    });







    



