<?php 
include 'header.php';
?>
<div class="bodyContent">
	<div class="pageCointainer">
		<section class="comonSection contactSection">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="sectionTitle">Contact Me</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="icon_box_01">
							<i class="icon icon-Mail"></i>
							<h3>Email Address</h3>
							<p><a href="mailto:mananlad2016@gmail.com" class="__cf_email__" data-cfemail="3b5015565e575248485a7b585a4954575715565e">mananlad2016@gmail.com</a></p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="icon_box_01">
							<i class="icon icon-Phone"></i>
							<h3>Phone Number</h3>
							<p>9054070812</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="icon_box_01 addrBox">
							<i class="icon icon-Pointer"></i>
							<h3>Address</h3>
							<p>
								Ram Nagar Society,<br> Chikhli,<br> Gujarat 396521
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="contact_form">
						<form method="post" id="contactForm">
							<input type="hidden" name="saveForm" />
							<div class="row">
								<div class="col-lg-6">
									<input type="text"  name="full_name" placeholder="Full Name *" required />
								</div>
								<div class="col-lg-6">
									<input type="text"  name="email" placeholder="Email *" required />
								</div>
								<div class="col-lg-6">
									<input type="text" id="mobile" name="phone" placeholder="Phone" required />
									<label class="text-danger" id="check_mob" style="display: none;">Please Enter Valid Mobile number</label>
								</div>
								<div class="col-lg-6">
									<input type="text"  name="subject" placeholder="Subject *" required />
								</div>
								<div class="col-lg-12">
									<textarea name="message"  placeholder="Message *" required></textarea>
								</div>
								<div class="col-lg-12">
									<button type="submit" name="send_smg" class="btt_btn"><span>Send Message</span></button>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>	
		</section>
	</div>
</div>

<div class="toast mt-3 align-items-center border rounded-left bg-success"  style="position: absolute; top: 5%; right: 1rem;position: fixed;">
    <div class="toast-body">
        <h5 class="text-light">Message Successfully Send.</h5>
    </div>
</div>

<?php 
include 'footer.php';
?>


<script type="text/javascript">

$('#mobile').on('change',function() {
    var mobile =$('#mobile').val();
    var pattern = /^\d{10}$/;
    if (!pattern.test(mobile)) 
    {
        document.getElementById('check_mob').style.display="block";
        $('#mobile').val('');
    }
    else
    {
        document.getElementById('check_mob').style.display="none";
    }
});


$('#contactForm').on('submit',function(e){

	e.preventDefault();
	var form=new FormData(this);

	$.ajax({
                    url:'saveForm.php',
                    type:'post',
                    data:form,
                    processData:false,
                    contentType:false,
                    
                    success:function(data)
                    {
                        var g_data=JSON.parse(data);
                        
                        if (g_data.statusCode == 200) 
                        {
                            $('.toast').toast({
                                animation: false,
                                delay: 1500,
                                fadeDelay: 1000,
                            });
                            $('.toast').toast('show');

                            setTimeout(function(){
                                window.location.href='contact.php';
                             }, 2000);
                        }
                    }
    });

});


</script>

