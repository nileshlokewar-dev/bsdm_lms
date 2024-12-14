<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nishant - Learning Managment System</title>

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet" id="style">
    <link href="<?php echo base_url();?>assets/css/common.css" rel="stylesheet" id="style">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body id="body">

  <?php if($header != NULL){ ?>
    <?php $this->load->view('/common/'. $header); ?>
  <?php } ?>
    <?php
        if(isset($sidepanel)){
            $this->load->view('/common/'. $sidepanel); 
        }
    ?>
    <?php $this->load->view('/'. $file_name); ?>
  <?php if($footer != NULL){ ?>
    <?php $this->load->view('/common/footer'); ?>
  <?php } ?>


  <script src="<?php echo base_url();?>assets/js/script.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>

  <script>
    function myFunction() {
      var element = document.getElementById("body");
      element.classList.toggle("show");
    }



    $(document).ready(function(){

      $('.button_accept').on('click',function(){
          // Select the active item
          const activeItem = document.querySelector('.stepper-item.active');

          // Find the next sibling item
          const nextItem = activeItem?.nextElementSibling;

          // If there's a next item, add the 'active' class to it
          if (nextItem && nextItem.classList.contains('stepper-item')) {
              activeItem.classList.remove('active'); // Optionally remove 'active' from the current
              activeItem.classList.add('completed'); // Optionally remove 'active' from the current
              nextItem.classList.add('active');
          }

          ///

          // Select the active item
          const activeContent = document.querySelector('.stepper-box.active');

          // Find the next sibling item
          const nextContent = activeContent?.nextElementSibling;

          // If there's a next item, add the 'active' class to it
          if (nextContent && nextContent.classList.contains('stepper-box')) {
              activeContent.classList.remove('active'); // Optionally remove 'active' from the current
              activeContent.classList.add('d-none'); // Optionally remove 'active' from the current
              
              nextContent.classList.remove('d-none');
              nextContent.classList.add('active');
          }


      });

    });

  </script>

<script>

$(document).ready(function () {
    // Show the loader initially (just in case it's hidden)
    $(".Loading-section").css({'display': 'flex'});

    // Set a timeout to hide the loader after 5 seconds
    setTimeout(function () {
        $(".Loading-section").fadeOut("slow", function () {
            // Show the main content after the loader fades out
            $(".system-check-main").css({'display': 'block'});
                    
            $(".Loading-section").removeClass('Loading-section');
        });
    }, 5000); // 5 seconds (5000 milliseconds)

});



$(document).ready(function() {
    var systemChecks = $('.system-check-box'); // Select all system check boxes
    var currentIndex = 0; // Start from the first system-check-box
    
    function showCheckIcon() {
        if (currentIndex < systemChecks.length) {
            var currentCheckBox = $(systemChecks[currentIndex]); // Get the current system-check-box

            // After 2 seconds, hide the spinner and show the check icon
            setTimeout(function() {
                currentCheckBox.find('.spinner-border').addClass('d-none'); // Hide spinner
                currentCheckBox.find('.img').append('<img width="25px" class="" src="<?php echo base_url();?>assets/images/icons/check-icon.webp" />');
                

                switch (currentIndex){
                    case 0: getIp(currentCheckBox);
                            break;
                    case 1: checkOs(currentCheckBox);
                            break;
                    case 2: check_ram(currentCheckBox);
                            break;
                    case 3: check_storage(currentCheckBox);
                            break;
                    case 4: checksum(currentCheckBox);
                            break;   
                    case 5: checkInternetAvailability(currentCheckBox);
                            break;
                    case 6: checksum(currentCheckBox);
                            break;
                    case 7: checksum(currentCheckBox);
                            break;
                    case 8: checksum(currentCheckBox);
                            break;
                }
                
                // Move to the next system-check-box after 2 seconds
                currentIndex++;
                showCheckIcon(); // Call the function again for the next system check
            }, 2000); // 2000 milliseconds = 2 seconds
        }
    }

    // Start the process
    showCheckIcon();
});

    function getIp(currentCheckBox){
        $.getJSON('https://api.ipify.org?format=json', function(data) {
            $(currentCheckBox).find('.text-end p').text(data.ip);
        }).fail(function() {
            var errorMessage = '<p>Error.</p>';
            $(currentCheckBox).find('.text-end p').text(errorMessage);
        });
    }

    
    function checkOs(currentCheckBox){
        var userAgent = navigator.userAgent;
        var os = "Unknown OS";

        // Check if the user is on Windows, macOS, or Linux
        if (userAgent.indexOf("Windows NT 10.0") !== -1) {
            os = "Windows 10";
        } else if (userAgent.indexOf("Windows NT 6.3") !== -1) {
            os = "Windows 8.1";
        } else if (userAgent.indexOf("Windows NT 6.2") !== -1) {
            os = "Windows 8";
        } else if (userAgent.indexOf("Windows NT 6.1") !== -1) {
            os = "Windows 7";
        } else if (userAgent.indexOf("Mac OS X") !== -1) {
            os = "macOS";
        } else if (userAgent.indexOf("X11") !== -1) {
            os = "Linux";
        } else if (userAgent.indexOf("Android") !== -1) {
            os = "Android";
        } else if (userAgent.indexOf("iPhone") !== -1 || userAgent.indexOf("iPad") !== -1) {
            os = "iOS";
        }

        // Display OS in your system check section
        $(currentCheckBox).find('.text-end p').text(os);

    }

    function check_ram(currentCheckBox){
        if (navigator.deviceMemory) {
            var availableRAM = navigator.deviceMemory;
            $(currentCheckBox).find('.text-end p').text(availableRAM  + " GB RAM Available");
        } else {
            $(currentCheckBox).find('.text-end p').text(Error);
        }

    }

    function check_storage(currentCheckBox){
    
        if (navigator.storage && navigator.storage.estimate) {
            navigator.storage.estimate().then(function(estimate) {

                var totalSpace = estimate.quota / (1024 * 1024 * 1024);
                var usedSpace = estimate.usage / (1024 * 1024 * 1024);
                var freeSpace = totalSpace - usedSpace;
                // console.log("Total Storage: " + totalSpace.toFixed(2) + " GB");
                // console.log("Used Storage: " + usedSpace.toFixed(2) + " GB");

                $(currentCheckBox).find('.text-end p').text(freeSpace.toFixed(2) + " GB Free Storage");
            });
        } else {
            $(currentCheckBox).find('.text-end p').text('Storage estimate is not available');
        }
    }
    
    function checksum(currentCheckBox) {
        $(currentCheckBox).find('.text-end p').text('Available');
    }

    function checkInternetAvailability(currentCheckBox) {
        if (navigator.onLine) {
            $(currentCheckBox).find('.text-end p').text('Available');
        } else {
            $(currentCheckBox).find('.text-end p').text('Available');

        }
    }


</script>




<style>

    .Loading-section {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.9); /* Light overlay */
        z-index: 1050; /* Higher than other content */
    }

    .system-check-main {
        margin-top: 20px; /* Optional spacing */
    }

</style>



</html>