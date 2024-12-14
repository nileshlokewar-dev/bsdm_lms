
  <!-- hide section --- d-none
      current wisard --- active
      completed wisard --- completed
      disabled --- disabled -->


  <section class="explorer-wizard--main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="">
                    <div class="text-center border-bottom mt-3 pb-3 mb-4">
                        <h3>NISHNAT EXPLORER WIZARD</h3>
                    </div>
                    <!-- completed -->
                    <div class="stepper-wrapper">
                        <div class="stepper-item active">
                          <div class="step-counter"><i class="fi fi-rr-info"></i></div>
                        </div>
                        <div class="stepper-item">
                          <div class="step-counter"><i class="fi fi-rr-camera"></i></div>
                        </div>
                        <div class="stepper-item">
                          <div class="step-counter"><i class="fi fi-rr-headphones"></i></div>
                        </div>
                        <div class="stepper-item">
                          <div class="step-counter"><i class="fi fi-rr-microphone"></i></div>
                        </div>
                        <div class="stepper-item">
                          <div class="step-counter"><i class="fi fi-rr-marker"></i></div>
                        </div>
                        <div class="stepper-item">
                          <div class="step-counter"><i class="fi fi-rr-keyboard"></i></div>
                        </div>
                        <div class="stepper-item">
                          <div class="step-counter"><i class="fi fi-rr-mouse"></i></div>
                        </div>
                      </div>

                      <div class="stepper-content">
                          <div class="stepper-box step-1 active">
                              <div class="card-box ">
                                  <div class="mb-4">
                                      <h5>Nishnat Usage Terms and Conditions</h5>
                                    </div> 
                                    <div class="stepper-box-scroll">
                                      <p>Please read these Terms and Conditions (T & C) carefully upon which we allow you usage of Nishnat's NISHNAT Explorer / NISHNAT Explorer (Nishnat's eLearning Revolution for All). Nishnat's NISHNAT Explorer (the Software Product) is a software framework designed, developed and owned by Maharashtra Knowledge Corporation Ltd. (Nishnat), for Learning and Content Management.</p>
                                      <p>Please read these Terms and Conditions (T & C) carefully upon which we allow you usage of Nishnat's NISHNAT Explorer / NISHNAT Explorer (Nishnat's eLearning Revolution for All). Nishnat's NISHNAT Explorer (the Software Product) is a software framework designed, developed and owned by Maharashtra Knowledge Corporation Ltd. (Nishnat), for Learning and Content Management.</p>
                                      <p>Please read these Terms and Conditions (T & C) carefully upon which we allow you usage of Nishnat's NISHNAT Explorer / NISHNAT Explorer (Nishnat's eLearning Revolution for All). Nishnat's NISHNAT Explorer (the Software Product) is a software framework designed, developed and owned by Maharashtra Knowledge Corporation Ltd. (Nishnat), for Learning and Content Management.</p>
                                      <p>Please read these Terms and Conditions (T & C) carefully upon which we allow you usage of Nishnat's NISHNAT Explorer / NISHNAT Explorer (Nishnat's eLearning Revolution for All). Nishnat's NISHNAT Explorer (the Software Product) is a software framework designed, developed and owned by Maharashtra Knowledge Corporation Ltd. (Nishnat), for Learning and Content Management.</p>
                                      <p>Please read these Terms and Conditions (T & C) carefully upon which we allow you usage of Nishnat's NISHNAT Explorer / NISHNAT Explorer (Nishnat's eLearning Revolution for All). Nishnat's NISHNAT Explorer (the Software Product) is a software framework designed, developed and owned by Maharashtra Knowledge Corporation Ltd. (Nishnat), for Learning and Content Management.</p>
                                    </div>  
                              </div>
                              <div class="mt-3 text-center">
                                  <a type="button" class="btn btn-secondary button_accept" data-item="item1" value="">I Accept</a>
                              </div>
                          </div>

                          <div class="stepper-box step-2 d-none">
                              <div class="card-box ">
                                  <div class="mb-4">
                                      <h5>Test Your Webcam</h5>
                                   </div> 
                                   <div class="stepper-box-scroll">
                                      <div class="d-flex justify-content-center align-items-center h-100 w-100 ">
                                        <a class="btn btn-primary check_cam">Click On Start</a>
                                      </div>
                                      <div class="d-flex justify-content-center d-none">
                                        <video width="50%" height="320" controls>
                                          <source src="" type="video/mp4">
                                        </video>
                                      </div>
                                   </div>  
                              </div>
                              <div class="mt-3 text-center">
                                <a type="button" class="btn btn-secondary button_accept" data-item="item1" value="">I Accept</a>
                              </div>
                          </div>
                          
                          <div class="stepper-box step-3 d-none">
                            <div class="card-box ">
                                <div class="mb-4">
                                    <h5>Test Your Headphone</h5>
                                 </div> 
                                 <div class="stepper-box-scroll">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-12">
                                          <div class="">
                                            <div class="stepper-info-box  d-none">
                                              <h5 class="weight-500 pb-3 mb-5">You will hear sound in the <span class="color-blue">Left</span> Ear only.</h5>
                                              <a class="btn btn-white mb-5"><i class="fi fi-rr-play"></i> Play Left Test Sound</a>
                                            </div>

                                            <div class="stepper-info-box d-none">
                                              <h5 class="weight-500 pb-3 mb-3">You will hear sound in the <span class="color-blue">Left</span> Ear only.</h5>
                                              <img height="32px" class="mb-5" src="<?php echo base_url();?>assets/images/stepper/ear-sound-img.webp" />
                                              <div>
                                                <a class="btn btn-secondary mb-1 me-2">Heard in Left Ear</a>
                                                <a class="btn btn-white mb-1">Didn't Hear</a>
                                              </div>
                                            </div>

                                            <div class="stepper-info-box">
                                              <h5 class="weight-500 pb-3 mb-3">You will hear sound in the <span class="color-blue">Left</span> Ear only.</h5>
                                              <img height="80px" class="mb-3" src="<?php echo base_url();?>assets/images/stepper/check-done.webp" />
                                              <div>
                                                <h5>Done</h5>
                                              </div>
                                            </div>
                                          </div>
                                            
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                          <div class="">
                                            <div class="stepper-info-box disabled">
                                              <h5 class="weight-500 pb-3 mb-5">You will hear sound in the <span class="color-blue">Right</span> Ear only.</h5>
                                              <a class="btn btn-white mb-5"><i class="fi fi-rr-play"></i> Play Right Test Sound</a>
                                            </div>

                                            <div class="stepper-info-box d-none ">
                                              <h5 class="weight-500 pb-3 mb-3">You will hear sound in the <span class="color-blue">Right</span> Ear only.</h5>
                                              <img height="32px" class="mb-5" src="images/stepper/ear-sound-img.webp" />
                                              <div>
                                                <a class="btn btn-secondary mb-1 me-2">Heard in Left Ear</a>
                                                <a class="btn btn-white mb-1">Didn't Hear</a>
                                              </div>
                                            </div>

                                            <div class="stepper-info-box d-none">
                                              <h5 class="weight-500 pb-3 mb-3">You will hear sound in the <span class="color-blue">Left</span> Ear only.</h5>
                                              <img height="80px" class="mb-3" src="images/stepper/check-done.webp" />
                                              <div>
                                                <h5>Done</h5>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                 </div>  
                            </div>
                            <div class="mt-3 text-center">
                                <a type="button" class="btn btn-secondary me-3 button_accept" data-item="item1" value="">Next</a>
                                <a href="" type="button" class="btn btn-white stepper-skipbtn" value="">Skip</a>
                            </div>
                          </div>
  
                          <div class="stepper-box step-4 d-none">
                            <div class="card-box ">
                                <div class="mb-4">
                                  <h5>Test Your Microphone</h5>
                                </div> 
                                  <div class="stepper-box-scroll">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-6 col-12">
                                          <div class="">
                                            <div class="stepper-info-box  d-none">
                                              <h5 class="weight-500 pb-3 mb-3">Start Speaking</h5>
                                              <img height="80px" class="mb-3" src="<?php echo base_url();?>assets/images/stepper/Speaking-img.webp" />
                                              <div>
                                                <a class="btn btn-white mb-3"><i class="fi fi-rr-play"></i> Start</a>
                                              </div>
                                            </div>

                                            <div class="stepper-info-box   d-none">
                                              <h5 class="weight-500 pb-3 mb-3">Start Speaking</h5>
                                              <img height="32px" class="mb-5" src="<?php echo base_url();?>assets/images/stepper/ear-sound-img.webp" />
                                              <div>
                                                <!-- <a class="btn btn-secondary mb-1 me-2">Hear</a>
                                                <a class="btn btn-white mb-1">Didn't Hear</a> -->
                                              </div>
                                            </div>

                                            <div class="stepper-info-box ">
                                              <h5 class="weight-500 pb-3 mb-3">Microphone check</h5>
                                              <img height="80px" class="mb-3" src="<?php echo base_url();?>assets/images/stepper/check-done.webp" />
                                              <div>
                                                <h5>Done</h5>
                                              </div>
                                            </div>
                                          </div>
                                            
                                        </div>
                                    </div>
                                  </div>  
                            </div>
                            <div class="mt-3 text-center">
                                <a type="button" class="btn btn-secondary me-3 button_accept" data-item="item1" value="">Next</a>
                                <a href="" type="button" class="btn btn-white stepper-skipbtn" value="">Skip</a>
                            </div>
                          </div>

                          <div class="stepper-box step-5 d-none">
                            <div class="card-box ">
                                <div class="mb-4">
                                    <h5>Check Your Location</h5>
                                 </div> 
                                 <div class="stepper-box-scroll">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-6 col-12">
                                          <div class="">
                                            <div class="stepper-info-box p-3">
                                              <img width="90%" class="mb-3" src="<?php echo base_url();?>assets/images/stepper/map-img.webp" />
                                              <div>
                                                <a class="btn btn-secondary">Select</a>
                                              </div>
                                            </div>

                                            <div class="stepper-info-box d-none">
                                              <h5 class="weight-500 pb-3 mb-3">Location check</h5>
                                              <img height="80px" class="mb-3" src="<?php echo base_url();?>assets/images/stepper/check-done.webp" />
                                              <div>
                                                <h5>Done</h5>
                                              </div>
                                            </div>
                                          </div>
                                            
                                        </div>
                                    </div>
                                 </div>  
                            </div>
                            <div class="mt-3 text-center">
                                <a type="button" class="btn btn-secondary me-3 button_accept" data-item="item1" value="">Next</a>
                                <a href="" type="button" class="btn btn-white stepper-skipbtn" value="">Skip</a>
                            </div>
                          </div>

                          <div class="stepper-box step-6 d-none">
                            <div class="card-box ">
                                <div class="mb-4">
                                    <h5>Check Your kayboard</h5>
                                 </div> 
                                 <div class="stepper-box-scroll">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-6 col-12">
                                          <div class="">
                                            <div class="stepper-info-box p-3">
                                              <h5 class="weight-500 pb-3 mb-3">Press Highlighted key </h5>
                                              <img width="50%" class="mb-3" src="<?php echo base_url();?>assets/images/stepper/keyboard-img.webp" />
                                            </div>

                                            <div class="stepper-info-box d-none">
                                              <h5 class="weight-500 pb-3 mb-3">kayboard check</h5>
                                              <img height="80px" class="mb-3" src="<?php echo base_url();?>assets/images/stepper/check-done.webp" />
                                              <div>
                                                <h5>Done</h5>
                                              </div>
                                            </div>
                                          </div>
                                            
                                        </div>
                                    </div>
                                 </div>  
                            </div>
                            <div class="mt-3 text-center">
                                <!-- <a href="" type="button" class="btn btn-secondary me-3" value="">Next</a> -->
                                <a type="button" class="btn btn-secondary me-3 button_accept" data-item="item1" value="">Next</a>
                                <a href="" type="button" class="btn btn-white stepper-skipbtn" value="">Skip</a>
                            </div>
                          </div>

                          <div class="stepper-box step-7 d-none">
                            <div class="card-box ">
                                <div class="mb-4">
                                    <h5>Check Your Mouse</h5>
                                 </div> 
                                 <div class="stepper-box-scroll">
                                  <div class="row">
                                      <div class="col-md-6 col-sm-6 col-12">
                                        <div class="">
                                          <div class="stepper-info-box">
                                            <h5 class="weight-500 pb-3 mb-2">You will click in the <span class="color-blue">Left</span> side only.</h5>
                                            <img height="100px" class="mb-2 me-4" src="<?php echo base_url();?>assets/images/stepper/left-side-mouse.webp" />
                                            <div>
                                              <a class="btn btn-white mb-1">Click</a>
                                            </div>
                                          </div>

                                          <div class="stepper-info-box d-none">
                                            <h5 class="weight-500 pb-3 mb-3">You will click in the <span class="color-blue">Left</span> side only.</h5>
                                            <img height="80px" class="mb-3" src="<?php echo base_url();?>assets/images/stepper/check-done.webp" />
                                            <div>
                                              <h5>Done</h5>
                                            </div>
                                          </div>
                                        </div>
                                          
                                      </div>
                                      <div class="col-md-6 col-sm-6 col-12">
                                        <div class="">
                                          <div class="stepper-info-box disabled">
                                            <h5 class="weight-500 pb-3 mb-2">You will click in the <span class="color-blue">Right</span> side only.</h5>
                                            <img height="100px" class="mb-2 ms-4" src="<?php echo base_url();?>assets/images/stepper/right-side-mouse.webp" />
                                            <div>
                                              <a class="btn btn-white mb-1">Click</a>
                                            </div>
                                          </div>

                                          <div class="stepper-info-box d-none">
                                            <h5 class="weight-500 pb-3 mb-3">You will click in the <span class="color-blue">Right</span> side only.</h5>
                                            <img height="80px" class="mb-3" src="<?php echo base_url();?>assets/images/stepper/check-done.webp" />
                                            <div>
                                              <h5>Done</h5>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                               </div> 
                            </div>
                            <div class="mt-3 text-center">
                                <a href="login" type="button" class="btn btn-secondary" value="">Done</a>
                            </div>
                        </div>

                      </div>

                </div>
            </div>
        </div>
    </div>
  </section>


<script>
 
        $(document).ready(function () {
            const videoElement = $('#webcam')[0];
            let mediaStream;

            $('.check_cam').on('click',function () {
                // Request webcam access
                $(this).parent('div').addClass('d-none');
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then(function (stream) {
                        mediaStream = stream;
                        videoElement.srcObject = stream;
                    })
                    .catch(function (error) {
                        console.error('Error accessing webcam:', error);
                    });
            });

            $('#stopBtn').click(function () {
                // Stop the webcam
                if (mediaStream) {
                    const tracks = mediaStream.getTracks();
                    tracks.forEach(track => track.stop());
                    videoElement.srcObject = null;
                }
            });
        }); 

</script>