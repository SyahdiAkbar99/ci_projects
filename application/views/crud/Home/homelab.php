<div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Our Service</h2>
          <hr class="botm-line">
          <ul class="dropdown-content">
                <li><a href="#service" class="tablinks" onclick="openCity(event, 'Profil')" id="defaultOpen" data-ref="profil" style="color: #0cb8b6; padding-top:10px;">Profil</a></li>
                <li><a href="#service" class="tablinks" onclick="openCity(event, 'VM')" style="color: #0cb8b6; padding-top:10px;">Visi & Misi</a></li>
                <li><a href="#service" class="tablinks" onclick="openCity(event, 'Sejarah')" style="color: #0cb8b6; padding-top:10px;">Sejarah</a></li>
                <li><a href="#service" class="tablinks" onclick="openCity(event, 'Salam')" style="color: #0cb8b6; padding-top:10px;">Salam Pimpinan</a></li>
                <li><a href="#service" class="tablinks" onclick="openCity(event, 'Akreditasi')" style="color: #0cb8b6; padding-top:10px;">Akreditasi</a></li>
          </ul>
          <!-- <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
          </div> -->
        </div>
        <div class="col-md-8 col-sm-4">

          <div id="Profil" class="tabcontent">

            <div class="slideshow-container">

                <div class="service-info">
                  <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="icon-info">
                  <h4>Profil</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

              </div>

            </div>
          </div>
          <div id="Sejarah" class="tabcontent">
            
            <div class="slideshow-container">

              <div class="service-info">
                <div class="icon">
                  <i class="fa fa-user-md"></i>
                </div>
              <div class="icon-info">
                <h4>Sejarah</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              </div>

            </div>

          </div>

          <div id="Salam" class="tabcontent">
            
            <div class="slideshow-container">

              <div class="service-info">
                <div class="icon">
                 <i class="fa fa-book"></i>
                </div>
                <div class="icon-info">
                  <h4>Salam Pimpinan</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
          </div>

          <div id="Akreditasi" class="tabcontent">
            
            <div class="slideshow-container">

              <div class="service-info">
                <div class="icon">
                  <i class="fa fa-medkit"></i>
                </div>
              <div class="icon-info">
                <h4>Akreditasi</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              </div>
            </div>
          </div>

          <div id="VM" class="tabcontent">
            <div class="slideshow-container">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <?php $no=1;
                  foreach ($user as $row) :
                ?>
                <tr>
                <div><?php $no++ ?>
                <div class="mySlides1">
                  <img src="<?= base_url('upload/img/'.$row->photo_v_m)?>" width="725px" height="250px">
                  <div class="text">Visi dan Misi<br><?php echo $row->deskripsi_v_m;?></div>
                </div>
                </div>
                </tr>
              <?php endforeach;?>

                <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
            </table>
            </div>
          </div>

          
          
        </div>

        <script>
          function openCity(evt, cityName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
          }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
          }

          // Get the element with id="defaultOpen" and click on it
          document.getElementById("defaultOpen").click();
        </script>

        <script>
          var slideIndex = [1,1];
          var slideId = ["mySlides1", "mySlides2"]
          showSlides(1, 0);
          showSlides(1, 1);

          function plusSlides(n, no) {
              showSlides(slideIndex[no] += n, no);
          }

          function showSlides(n, no) {
            var i;
            var x = document.getElementsByClassName(slideId[no]);
          if (n > x.length) {slideIndex[no] = 1}    
          if (n < 1) {slideIndex[no] = x.length}
            for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
          x[slideIndex[no]-1].style.display = "block";  
        }
</script> 