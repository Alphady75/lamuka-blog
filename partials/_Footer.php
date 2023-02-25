<footer class="pt-5">
   <div class="bg-dark py-3">
      <div class="container">
         <div class="row">
            <div class="col-sm-6">
               <p class="text-light">&copy;Copyright <?= date('Y') ?> <?= APP_NAME ?> Dévélopper par Lamuka comunication</p>
            </div>
         </div>
      </div>
   </div>
</footer>
<script src="assets/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

</body>

</html>