<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mini jquery project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <div class=" container jusctiy-content-center">
        <div class="row">
            <div class="col-sm-8">

                <table class="table table-bordered" id="studenttable">
                     <button class="btn btn-success btn-sm fs-right mt-5" id="Addnew">Add new </button>
                    <h1 class="display-5 text-center">Student Details </h1>
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Class </th>
                        <th> Action </t h>


                    </thead>
                    <tbody>
        

                    </tbody>
                </table>

            </div> <!---end col-sm-8--->
            <div class="modal" id="studentmodal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">User info </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 
      
      <div class="modal-body">
          <form id="studentform">
        <label for="studentlabel">StudentId</label>
        <div class="form-group mt-2">
        <input type="text" class="form-control" name="id"id="" placeholder="enter studentId">
        </div>

         <div class="form-group mt-2">
         <label for="studentlabel">studentName</label>
         <input type="text" class="form-control" name="name" id="" placeholder="enter studentName">

         </div>
         <div class="form-group mt-2 ">
         <label for="studentlabel">studentClass</label>
            <input type="text"  name="class" class="form-control" id="" placeholder="stuedentClass">
         </div>
            
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"name='action' >Save changes</button>
     
        </div>
        </form>
      </div>
   
    </div>
  </div>
</div>


 <!---end modal-->
 <script src="main.js"></script>
        </div>
    </div>

</body>

</html>