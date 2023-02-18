<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tugas Presentasi</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" type="text/css">
    <!--<link rel="stylesheet" href="css/paginationnumber.css">-->
    <link rel="stylesheet" href="css/forminput.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style.css.map" />
</head>
<body>
  <!-- Edit Student Modal -->
<div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="updateStudent">
            <div class="modal-body">

                <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                <input type="hidden" name="student_id" id="student_id" >

                <div class="mb-3">
                    <label for="">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="">Komentar</label>
                    <input type="text" name="komen" id="komen" class="form-control" />
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Student</button>
            </div>
        </form>
        </div>
    </div>
</div>
<main>
    <section class="slides">
      <section class="slides-nav">
        <nav class="slides-nav__nav">
          <button class="slides-nav__prev js-prev">Prev</button>
          <button class="slides-nav__next js-next">Next</button>
        </nav>
      </section>
      <!-- FORM INPUT -->
      <section class="slide is-active">
        <div class="slide__content">
          <figure class="slide__figure">
            <div
              class="slide__img"
              style="
                background-image: url(https://images.pling.com/img/00/00/66/29/43/1872879/169486-apple-macbook-pro-imac-operating-system-apples-atmosphere-1920x1080-2.jpg);
              "
            >
              <!--background: linear-gradient(to right,#F7971E 0%, #FFD200 100%); -->
              <div class="background">
                <div class="container">
                  <div class="screen">
                    <div class="screen-header">
                      <div class="screen-header-left">
                        <div class="screen-header-button close"></div>
                        <div class="screen-header-button maximize"></div>
                        <div class="screen-header-button minimize"></div>
                      </div>
                      <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                      </div>
                    </div>
                    <div class="screen-body">
                      <div class="screen-body-item left">
                        <div class="app-title">
                          <span>FORM KOMEN</span>
                          <span></span>
                        </div>
                        <div class="app-contact">
                          CONTACT INFO : +62 83 132 831 348
                        </div>
                      </div>
                      <div class="screen-body-item">
                        <form
                          class="app-form"
                          action="input.php"
                          method="POST"
                        >
                          <div class="app-form-group">
                            <input
                              class="app-form-control"
                              id="nama"
                              name="nama"
                              placeholder="Nama"
                              value=""
                              required
                            />
                          </div>
                          <div class="app-form-group">
                            <input
                              id="nim"
                              name="nim"
                             
                              class="app-form-control"
                              placeholder="NIM"
                              required
                            />
                          </div>

                          <div class="app-form-group message">
                            <input
                              id="komen"
                              name="komen"
                              class="app-form-control"
                              placeholder="Komentar"
                              required
                            />
                          </div>
                          <div class="app-form-group buttons">
                            <button type="submit" class="app-form-button">
                              SUBMIT
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </figure>
          <header class="slide__header">
            <h2 class="slide__title">
              <span class="title-line"><span>Tugas 1</span></span>
              <span class="title-line"><span>Form Input</span></span>
            </h2>
          </header>
        </div>
      </section>

      <section class="slide">
        <div class="slide__content">
          <figure class="slide__figure">
            <div
              class="slide__img"
              style="
                background-image: url(https://cdn.wallpaperhub.app/cloudcache/d/f/b/9/7/3/dfb973eaff26dc001c23432d7f875a00e724e35c.jpg);
              "
            >
            <div class="background">
                <div class="container">
                  <div class="screen">
                    <div class="screen-header">
                      <div class="screen-header-left">
                        <div class="screen-header-button close"></div>
                        <div class="screen-header-button maximize"></div>
                        <div class="screen-header-button minimize"></div>
                      </div>
                      <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                      </div>
                    </div>
                    <div class="screen-body">
                    <div class="screen-body-item">
                    <div class="form-group">
                      <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Type your search query here" />
                    </div>
                    <br>
                    <div id="dynamic_content">

                  
                    </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </figure>
          <header class="slide__header">
            <h2 class="slide__title">
              <span class="title-line"><span>Project</span></span>
              <span class="title-line"><span>Kombinasi</span></span>
            </h2>
          </header>
        </div>
      </section>


  </main>


    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
      $(document).ready(function(){

      load_data(1);

      function load_data(page, query = '')
      {
        $.ajax({
          url:"fetch.php",
          method:"POST",
          data:{page:page, query:query},
          success:function(data)
          {
            $('#dynamic_content').html(data);
          }
        });
      }

      $(document).on('click', '.page-link', function(){
        var page = $(this).data('page_number');
        var query = $('#search_box').val();
        load_data(page, query);
      });

      $('#search_box').keyup(function(){
        var query = $('#search_box').val();
        load_data(1, query);
      });

      });
    </script>
    <script>
        $(document).on('submit', '#saveStudent', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_student", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');
                        $('#studentAddModal').modal('hide');
                        $('#saveStudent')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.editStudentBtn', function () {

            var student_id = $(this).val();
            
            $.ajax({
                type: "GET",
                url: "code.php?student_id=" + student_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#student_id').val(res.data.id);
                        $('#nama').val(res.data.nama);
                        $('#nim').val(res.data.nim);
                        $('#komen').val(res.data.komen);
              

                        $('#studentEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updateStudent', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_student", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#studentEditModal').modal('hide');
                        $('#updateStudent')[0].reset();

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.deleteStudentBtn', function (e) {
            e.preventDefault();

            if(confirm('Are you sure you want to delete this data?'))
            {
                var student_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_student': true,
                        'student_id': student_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });

    </script>

</body>
</html>