<style>
    /* Basic video container styling */
    /* .video-container {
      position: relative;
      max-width: 600px;
      margin: 20px auto;
    } */

    /* video {
      width: 100%;
      display: block;
    } */

    .progress-container {
      position: absolute;
      bottom: 10px; 
      left: 0;
      width: 100%;
      height: 5px;
    }

    /* Native video controls styling (optional, browsers apply default controls) */
    video::-webkit-media-controls-progress-bar {
      height: 5px;
    }

    /* Overlayed custom progress bar */
    .progress-bar {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none; /* Allow clicks through this layer */
    }

    .progress-bar .played {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      background: #4caf50; /* Played timeline color */
      width: 0;
    }

    .progress-bar .last-played {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      background: #ff9800; /* Last played timeline color */
      width: 0;
    }
  </style>

<!-- main body Start -->
  <section class="main-content">

    <div class="container-fluid">

      <div class="row">
          <div class="col-md-12 col-sm-12 mb-4 d-flex align-items-stretch">
            <div class="card-box video-box-main">

            <video id="videoPlayer1" width="100%" height="600" poster="<?php echo base_url();?>assets/images/video-cover-img.webp" controls>
                <source src="<?php echo base_url();?>assets/images/video/dumy-video2.mp4" type="video/mp4">
                </object>
              </video>

              <!-- Custom progress bar overlay -->
              <div class="progress-container">
                <div class="progress-bar">
                  <div class="last-played"></div>
                  <div class="played"></div>
                </div>
              </div>

              <!-- <a class="play-btn" href="successfully-completed-chapter.html"><img height="60px" class="" src="images/icons/play-icon.webp" /></a> -->
              <div class="text-end">
                <a id="move_next" class="btn" href="chapter_two_completed" style="display:none;">Next</a>
              </div>
            </div>
          </div>
      </div>

    </div>


  </section>
  <!-- main body End -->


  <script>
    $(document).ready(function () {
      const video = $('#videoPlayer1')[0];
      const progressBar = $('.progress-bar');
      const playedBar = $('.progress-bar .played');
      const lastPlayedBar = $('.progress-bar .last-played');
      const videoId = 'videoPlayer1'; // Unique ID for the video
 
      // Add a small threshold to handle rounding issues
      const threshold = 0.1;

      // Function to update the progress bar's width based on current time
      function updateProgressBar() {
          const playedPercentage = (video.currentTime / video.duration) * 100;
          playedBar.css('width', `${playedPercentage}%`);

      }

      $(video).on('timeupdate', function () {
        const threshold = 0.1;
        updateProgressBar();
      
        if (Math.abs(video.duration - video.currentTime) <= threshold) {
          console.log(0);
            $('#move_next').css({ 'display': 'inline-block'});
        } else {
          console.log(1);
            $('#move_next').css({ 'display': 'none' });
        }
      });



      // Fetch last played time from the server
      $.ajax({
          url: '<?php echo base_url();?>get-last-played-time',
          type: 'GET',
          data: { videoId },
          dataType: 'json',
          success: function (response) {
              const lastPlayedTime = response.lastPlayedTime || 0;

              // Set the last played time in the custom progress bar
              const lastPlayedPercentage = (lastPlayedTime / video.duration) * 100;
              lastPlayedBar.css('width', `${lastPlayedPercentage}%`);

              // Set video to start from the last played time
              video.currentTime = lastPlayedTime;
          },
          error: function (error) {
              console.error('Error fetching last played time:', error);
          }
      });

        // Save the last played time when the video is paused or ends
        $(video).on('pause ended', function () {
            const lastPlayedTime = video.currentTime;

            $.ajax({
                url: '<?php echo base_url();?>save-last-played-time',
                type: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({
                    videoId,
                    lastPlayedTime
                }),
                success: function (response) {
                    console.log(response.message);
                },
                error: function (error) {
                    console.error('Error saving last played time:', error);
                }
            });
        });
   

      // Allow users to seek by clicking on the progress bar
      progressBar.on('click', function (e) {
          const offsetX = e.pageX - $(this).offset().left;
          const percentage = offsetX / $(this).width();
          video.currentTime = percentage * video.duration;
      });

  });

  </script>
