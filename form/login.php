
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<style>

	
.map-container-section {
  overflow:hidden;
  padding-bottom:56.25%;
  position:relative;
  height:0;
}
.map-container-section iframe {
  left:0;
  top:0;
  height:100%;
  width:100%;
  position:absolute;
}
	body{
		background-image: url(pa.jpg);
	}

</style>




<section class="my-5">

  
  <h2 class="h1-responsive font-weight-bold text-center text-white my-5">Let's Talk!!</h2>
 
  <p class="text-center w-responsive mx-auto text-warning pb-5 font-weight-bold">We would love to hear from you whether its a feedback or complaint.</p>

  
  <div class="row">

    
    <div class="col-lg-5 mb-lg-0 mb-2">

   
      <div class="card">
        <div class="card-body">
          <!-- Header -->
          <div class="form-header blue accent-1">
            <h3 class="mt-2"><i class="fas fa-envelope"  style="color:coral"></i> Write to us:</h3>
          </div>
           <form action="submit.php" method="post">
   
          <div class="md-form">
            <i class="fas fa-user-circle"  style="color:red"></i>
			   <label for="name" >NAME</label>
            <input type="text" name="name" class="form-control" required>
           
          </div>
			<div class="md-form">
            <i class="fas fa-tag prefix grey-text" style="color:yellow"></i>
				 <label for="age">AGE</label>
            <input type="number" name="age" class="form-control" required>
           
          </div>
          <div class="md-form">
            <i class="fas fa-envelope prefix grey-text" style="color:orange"></i>
			  <label for="email">EMAIL</label>
            <input type="text" name="email" class="form-control" required>
            
          </div>
          <div class="md-form">
           <i class="fas fa-question-circle" style="color:brown"></i>
			  <label for="subject">SUBJECT</label>
            <input type="text" name="subject" class="form-control"required>
            
          </div>
          <div class="md-form">
           <i class="far fa-comments"  style="color:blue"></i>
			  <label for="comment">COMMENTS</label>
            <textarea name="comment" class="form-control md-textarea" rows="3"required></textarea>
            
          </div>
          <div class="text-center">
            <button class="btn btn-primary">Submit</button>
          </div>
			</form>
        </div>
      </div>
      

    </div>
   
    <div class="col-lg-6">

      
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 200px">
      >
		  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110270.07458395642!2d-80.57460879400863!3d43.42554452035297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882bf48c03ee5105%3A0x9525f8e6df5f544b!2sKitchener%2C%20ON!5e0!3m2!1sen!2sca!4v1602804046939!5m2!1sen!2sca" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      
     

    </div>
    

  </div>
  

</section>





