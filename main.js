loadData();
$("#Addnew").click(function(){
    $("#studentmodal").modal("show")
})
$("#studentform").submit(function(even){
    even.preventDefault();
    //get & fetch the form data
    let form_data=new FormData($("#studentform")[0]);
    //add the action  to the form value 
    form_data.append("action" ,"registration");
    //method 
    // data type
    // url
   $.ajax({
            method:"POST",
            dataType:"JSON" ,
            url:"API.php",
            data :form_data ,
            processData: false,
            contentType: false ,
            success:function(data){
              //create alert
              let status = data.status;
              let response = data.data;
              //clear form  fields
              $("#studentform")['0'].reset()
              alert(response);
            },
            error:function(data){
                console.log(data)
            }

   })

})
function loadData(){
    let sendData={
        "action" : "readall"
    }
 $.ajax({
    method : "POST" ,
    dataType : "JSON" ,
    url :  "API.php" ,
    data :sendData ,
    success: function(data){
        let status = data.status ;
        let response = data.data;
        let html ='';
        let tr   ='';
        if(status){
            tr+= "<tr>";
            response.forEach(item => {
                for(let i in item){
                    // console.log("this is i" ,i)
                    // console.log("this is item " ,item);

                    tr +=`<td>${item [i]} </td>`;

                }
                tr += "</tr>";
                
            });
           $("#studenttable tbody").append(tr);
        }

    } ,
    error:function(data){


    }

 })
}