
       
  <div id="id01" class="modal" style="color: black">


    <div class="modal-content animated slideInDown">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal" style="margin-top: 3%;">&times;</span>
        <h4>Give details about your product</h4>
        <img id="moha" src="#" style="width: 30%; top: 15%; left: 7%;">
              
       

     <img id="moha1" src="#" style=" width: 20%;" >
   
 
     <img id="moha2" src="#" style=" width: 20%;" >

 <img id="moha3" src="#" style=" width: 20%;" >
   



      <form style="margin-left: 45%; margin-top: 2%;" method="POST" action="addproductdb.php?adding" enctype="multipart/form-data"> 

                <label>Chose main pic</label><br>
                <input type="file" onchange="readURL(this);" name="mybooks" ><br>


                <label>Add more pic : 1 </label><input type="file" onchange="readURL1(this);" name="mybooks1" >
                 <label>Add more pic : 2</label><input type="file" onchange="readURL2(this);" name="mybooks2" >
                <label>Add more pic : 3</label><input type="file" onchange="readURL3(this);" name="mybooks3" >

              <input class="form-control form-control" type="text" name="name" placeholder="Name" style="width: 100%; border-radius: 10px; color: black;" required>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
       
        <select id="type" style="margin-top: 5%;" class="form-control form-control" name="category">
           <option value="Laptops">Laptops</option>
           <option value="Smartphones">Smartphones</option>
           <option value="Accessories">Accessories</option>
       </select>

       <select id="category" class="form-control form-control" style="margin-top: 0.5%" name="sub_category">
          <option value="">Sub category</option>
       </select>

    
        <input class="form-control form-control" type="text" name="color" placeholder="Color" style="width: 100%; border-radius: 10px; color: black;">


             <input class="form-control form-control" type="number" name="pprice" placeholder="Previous Price" style="width: 100%; margin-top: 2%;  border-radius: 10px; color: black;" required>

              <input class="form-control form-control" type="number" name="price" placeholder="Price" style="width: 100%; margin-top: 2%;  border-radius: 10px; color: black;" required>
             
            <textarea style="margin-top: 1%; padding: 3% 5%; width: 100%; border-radius: 10px; height: 20%; color: black;" placeholder="Main features  ( use <br> as enter for break line )"
             name="bdescription" required></textarea>

            


              <textarea style="margin-top: 1%; padding: 5% 5%; width: 100%; border-radius: 10px; height: 50%; color: black;" placeholder="Advertise the product here eg quality ( use <br> as enter for break line )" name="summary" required></textarea>

              

             

              <input type="submit" style="margin-top: 3%;" class="btn btn-danger py-3 px-5" >  
 
       </form>


        
      </div>    
    </div>

<script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#moha').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

              function readURL1(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#moha1').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
                  
           function readURL2(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#moha2').attr('src', e.target.result);

                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }


           function readURL3(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#moha3').attr('src', e.target.result);

                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
</script>


<script type="text/javascript">
$(document).ready(function () {

    $("#type").change(function () {
        var val = $(this).val();

        if (val == "Smartphones") {
            $("#category").html("<option value='samsung'>samsung</option> <option value='infinix'>Infinix </option><option value='huawei'>Huawei</option> <option value='Nokia'>Nokia</option> <option value='itel'>Itel</option> <option value='Tecno'>Techno</option> <option value='vonex'>vonex</option> <option value='xtigi'>Xtigi</option> <option value='others0'>Others</option>");
        } 
          else if (val == "Accessories") {
            $("#category").html(" <option value='Chargers'>Chargers</option>  <option value='earphones'>earphones</option> <option value='popsocket'>popsocket</option> <option value='covers'>covers</option> <option value='protector'>protector</option> <option value='battery'>battery</option> <option value='cables'>cables</option>  <option value='others1'>Others</option>");
        }else if (val == "Laptops") {
            $("#category").html("<option value='hp'>hp</option> <option value='acer'>acer</option> <option value='mac'>mac</option> <option value='asus'>asus</option> <option value='dell'>dell</option> <option value='toshiba'>toshiba</option> <option value='others2'>others</option>");
        }
    });
});

</script>















<style type="text/css">
  
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0%;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.1); /* Black w/ opacity */
  padding-top: 70px;
 
  padding-left: 20%;
  padding-right:  20%;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 2% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #2ed5a8;
  width: 90%; /* Could be more or less, depending on screen category */
  padding:2%;
height:auto; 

}
/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-category: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

.modal-content input[type=text]{
  font-category: 15px;
  width: 70%;
  position: center;
  text-align: left;
  margin-top: 4%;
  display:inline-block;
}



@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
@media(max-width:768px){
  .modal {
    width: 100%;
    margin-left: 0%;
    padding-right: 5%;
    padding-left: 5%;
  }
  }

</style>