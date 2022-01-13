<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>SYREFA</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner " id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/rsud.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text ">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h3 class="text-center text-white" >Welcome to SYAREFA
                  <br> "SYamrabu Antrian REsep FArmasi"
                  </h3>
                </div>
              </div>
              <div class="col-lg-12">
                    <div class="count-area-content" id="ambil_resep">
                      <div class="count-title">No Antrian</div>
                      <div class="count-digit">94</div>
                      <div class="count-title">Segera mengambil Resep</div>
                    </div>
              </div>
              <div class="col-lg-3">
                    <div class="count-area-content">
                      <div class="count-digit">100</div>
                      <div class="count-title">Total Antrian</div>
                    </div>
              </div>
              <div class="col-lg-6">
                    <div class="count-area-content">
                      <div class="count-digit">1</div>
                      <div class="count-title">No Resep Yg dikerjakan</div>
                    </div>
              </div>
              <div class="col-lg-3">
                    <div class="count-area-content">
                      <div class="count-digit">6</div>
                      <div class="count-title">Sisa Antrian</div>
                    </div>
              </div>
              <!-- <div class="col-lg-3">
                <div class="row">
                  <div class="col-6">
                    <div class="count-area-content">
                      <div class="count-digit">126</div>
                      <div class="count-title">Current Teachers</div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="count-area-content percentage">
                      <div class="count-digit">94</div>
                      <div class="count-title">Succesed Students</div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="count-area-content">
                      <div class="count-digit">126</div>
                      <div class="count-title">Current Teachers</div>
                    </div>
                  </div>
                  
                </div>
              </div> -->
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="down-content">
                <p>Suspendisse tempor</p>
                <h4>Best Education</h4>
              </div>
            </div>
            <div class="item">
              <div class="down-content">
                <p>Suspendisse tempor</p>
                <h4>Best Education</h4>
              </div>
            </div>
            <div class="item">
              <div class="down-content">
                <p>Suspendisse tempor</p>
                <h4>Best Education</h4>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>010-020-0340</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>info@meeting.edu</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.meeting.edu</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
          <br>
          Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
          <br>
          Distibuted By: <a href="https://themewagon.com" target="_blank" title="Build Better UI, Faster">ThemeWagon</a>
        </p>
        
        <a class="btn btn-dark" href="<?= base_url('operator')?>" role="button">Operator</a>
    </div>
  </section>

  <!-- Scripts -->

  <script>
  tampilkan();

  function tampilkan(){
    $("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
    var baris = '<table class="table table-flush" id="tabelUser"><thead class="thead-light"><tr><th>NO</th><th>No Antrian</th><th>No RM</th><th>Nama</th><th>Poli</th><th>Jenis Pasien</th><th>Status</th><th>Action</th></tr></thead><tbody>'
      $.ajax({
        type:'POST',
        url: '<?= base_url() ?>operator/tampil',
        dataType :'json',
        success: function(data){
          // console.log(data);
          for (let i = 0; i < data.length; i++) {
            baris += '<tr>'
            baris += '<td>' + (i + 1) + '</td>'
            baris += '<td>' + data[i].no_antrian + '</td>'
            baris += '<td>' + data[i].no_rm + '</td>'
            baris += '<td>' + data[i].nama + '</td>'
            baris += '<td>' + data[i].poli + '</td>'
            baris += '<td>' + data[i].jenis_pasien + '</td>'
            baris += '<td>' + data[i].status + '</td>'
            baris += '<td><div style="cursor:pointer;" title="hapus?" class="badge badge-danger" id="hapus' + data[i].id + '" onClick="tryHapus(' + data[i].id+ ')"><i class="fa fa-times"></i></div>'
            baris += ' <div style="cursor:pointer;" title="edit?" class="badge badge-info" id="edit' + data[i].id + '" onClick="tryEdit(' + data[i].id+ ')"><i class="fa fa-edit"></i></div>'
            baris += '</td></tr>'
          }
          baris += '</tbody></table>'
          $("#tempatTabel").html(baris);
          $('#tabelUser').DataTable({
            "pageLength": 10,
          });
        }
      });
  }

</script>
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</body>
</html>