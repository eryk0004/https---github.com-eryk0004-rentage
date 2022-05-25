
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Lookbook</title>
  </head>
  <body>
  <?php
get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>
    <!-- class="container" bruges som yderste kasse (/container) for vores grid -->

    <main class="container-fluid wfidth-100">

    <h2 class="display-3 p-4 border border-dark border-4"> LOOKBOOK </h2>
      
      <section id="top" class="mb-4 pt-4 row width-100">

      <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6  img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_1.jpg"
          alt="rentage_lookbook"
        />
    
        <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6  img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_13.jpg"
          alt="rentage_lookbook"
        />
        <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6  img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_3.jpg"
          alt="rentage_lookbook"
        />

        <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6  img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_4.jpg"
          alt="rentage_lookbook"
        />
        <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6 img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_5.jpg"
          alt="rentage_lookbook"
        />
        <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6 img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_6.jpg"
          alt="rentage_lookbook"
        />

        <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6 img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_7.jpg"
          alt="rentage_lookbook"
        />
        <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6  img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_8.jpg"
          alt="rentage_lookbook"
        />
        <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6  img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_9.jpg"
          alt="rentage_lookbook"
        />

        <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6  img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_10.jpg"
          alt="rentage_lookbook"
        />
        <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6 img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_11.jpg"
          alt="rentage_lookbook"
        />
        <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6 img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_12.jpg"
          alt="rentage_lookbook"
        />

        <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6 img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_2.jpg"
          alt="rentage_lookbook"
        />

        <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6 img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_14.jpg"
          alt="rentage_lookbook"
        />

        <img
          class="col-12 mb-3 col-md-4 mb-md-4 mb-md-0 col-sm-6 img-fluid"
          src="https://piotrmunk.dk/kea/rentage/wp-content/themes/Divi-child/imgs/rentage_lookbook_15.jpg"
          alt="rentage_lookbook"
        />
      </section>

    </main>

    <!-- END container -->

    <!-- Ikke mere indhold efter denne linie -->

    <!-- popper.js og bootstraps.min.js inkludes herunder - nødvendige for visse Bootstrap-funktionaliteter - slet dem ikke-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    <!-- link til egne script-filer til sidst -->
    <script src="js/scripts.js"></script>
    <?php
  get_footer();
  $is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );
 ?>
  </body>

</html>
</html>

