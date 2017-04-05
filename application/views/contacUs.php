<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-6 column">
				
					<form role="form" method="post" id="form1">
                                            <div class="form-group">
							 <label for="exampleInputEmail1">Name</label><input class="form-control" id="exampleInputEmail1" type="text" name="name" />
						</div>
						<div class="form-group">
							 <label for="exampleInputEmail1">Email address</label><input class="form-control" id="exampleInputEmail1" type="email" name="email" />
						</div>
                                            <div class="form-group">
							 <label for="exampleInputEmail1">Comment</label>
                                                         <textarea class="form-control" name="comment">

                                                         </textarea>
						</div>
						 <button type="submit" id="btn" class="btn btn-default">Submit</button>
					</form>
					<div id="feed-container"></div>
				</div>
				<div class="col-md-6 column">
					<h3>
						Contact us
					</h3> <address> <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title="Phone">P:</abbr> (123) 456-7890</address>
				</div>
			</div>
		</div>
	</div>
</div>
</body>


</html>
<script>
$(document ).ready(function() {
    $('#btn').on('click', function(e) {
        e.preventDefault();
        
         var tdata= $("#form1").serializeArray();
          $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>index.php/home/insert",
        data: tdata, // <--- THIS IS THE CHANGE
        dataType: "html",
        success: function(data){
            $('#feed-container').html(data);
        },
        error: function() { alert("Error posting feed."); }
   });

        
     /* your code here */
});
   });
</script>