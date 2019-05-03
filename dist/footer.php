			<!-- footer -->
			
<footer>
    <div class="container-fluid h-100">
        <div class="row h-100 align-items-center justify-content-around text-left">
           <!--  <div class="col contact">
                <h4 class="text-muted">Contact</h4>


            </div> -->
            <!-- //.col -->
            <div class="col-6 order-1 links text-muted">
                <!-- <h class="text-muted">Connect with us</h> -->
                <a href="/about">About Us</a> |
                <a href="/terms-of-use">Terms of Use</a> |
                <a href="/privacy-policy">Privacy Policy</a>
            </div>
            <!-- //.col -->
            <div class="col-3 order-2 social d-flex justify-content-end">
                <h6 class="text-muted d-none d-md-inline-flex mb-0 align-self-center">Follow Us:</h6>
                <a class="m-1" href="https://medium.com/kompitech"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/method-draw-image.svg" alt="Medium"></a>
                <a class="m-1" href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQG9MtjmEzq_cwAAAWnspdXIhfbjbu4torPEu8NR521T-L4FPr9mgJLpVzSdYomOUMHt8WnrxJfz20DU0W2xHhaNfhEFyN0e8riVeBg5HfeysPHI3Iyfei7lkE05bZOFUymipVk=&originalReferer=https://www.kompitech.com/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fkompitech%2F"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/method-draw-in1.svg" alt="Linked In"></a>
                <a class="m-1" href="https://twitter.com/kompitech?lang=en"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/method-draw-twitter.svg"  alt="Twitter"></a>
            </div>
            <!-- //.social -->
        </div>
        <!-- //.row -->
        
    </div>
    <!-- //.container-fluid -->
</footer>
<div class="container-fluid" style="background: #29282d; position: relative; z-index: 1">
    <div class="row justify-content-center align-items-center text-muted">
            <p class="m-0 p-2"><small>&copy; KompiTech 2019</small></p>
        </div>
        <!-- //.row -->
</div>
			<!-- /footer -->
		</footer>

		</div>
		<!-- /wrapper -->
    <?php if (is_home()): ?>
      
    <!-- KT Modal -->
<div class="kt-modal fade show" id="formModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="container">
          <div class="row h-100 text-center">
            <div class="col-12 mt-3">
              <h3>Select Your Requirement</h3>
            </div>
          </div>
          <!-- //.text-center -->
        </div>
        <!-- /.container -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <svg width="11px" height="11px" viewBox="0 0 11 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs/>
              <g id="web-design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Bystander-mobile" transform="translate(-289.000000, -21.000000)" fill="#0B2B61">
                      <g id="MENU" transform="translate(90.000000, 0.000000)">
                          <polygon id="close---material" points="209.476 22.062 205.3 26.238 209.476 30.414 208.414 31.476 204.238 27.3 200.062 31.476 199 30.414 203.176 26.238 199 22.062 200.062 21 204.238 25.176 208.414 21"/>
                      </g>
                  </g>
              </g>
          </svg>
        </button>
      </div>
      <!-- /.modal-header -->
      <div class="modal-body container">
        <div class="row justify-content-center">
          <form action="https://kompitech.us18.list-manage.com/subscribe/post"
          method="POST"
          class="col-12 col-lg-12"
          ><div class="container">
            <div class="row justify-content-center">
              <input type="hidden" name="u" value="0c809f2d34c39d5585ec6d2e7" />
              <input type="hidden" name="id" value="14e532150c" />
              <input type="text" value="" name="MMERGE5" class="form-control col-12 mx-2 my-2" id="mce-MMERGE5" placeholder="Requirement*" disabled="true" readonly="true">

              <input type="email" value="" name="EMAIL" class="required email form-control col-12 mx-2 my-2" id="mce-EMAIL" placeholder="Email*">

              <input type="text" value="" name="S_NAME" class="form-control col-12 mx-2 my-2" id="mce-S_NAME" placeholder="Name*" required="true">

              <input type="text" name="S_PHONE" class="form-control col-12 mx-2 my-2" value="" id="mce-S_PHONE" placeholder="Phone*" required="true">

              <textarea name="S_DETAILS" class="form-control col-12" id="mce-S_DETAILS" rows="4" cols="50" placeholder="Additional Details"></textarea>
              <div class="col-12 my-3">
                <button class="btn btn-cta mx-auto d-block" type="submit" value="subscribe">Submit</button>
              </div>
              <!-- /col-12 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- //.container -->
        </form>
      </div>
      <!-- //.row -->
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <?php endif ?>
		<?php wp_footer(); ?>


	</body>
</html>
