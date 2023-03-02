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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="assets/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.min.js" integrity="sha512-RlGrSmkje9EE/FXpJKWf0fvOlg4UULy/blvNsviBX9LFwMj/uewXVoanRbxTIRDXy/0A3fBQppTmJ/qOboJzmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
   ClassicEditor
      .create(document.querySelector('#editor'))
      .catch(error => {
         console.error(error);
      });
</script>

<script>
   jQuery(document).ready(function() {
      jQuery("time.timeago").timeago();
   });
</script>

</body>

</html>