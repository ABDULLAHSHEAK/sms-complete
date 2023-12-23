 <footer class="main-footer">
	  <div class="pull-right hidden-xs">
	    <b>Version</b> 2.0.2
	  </div>
	  <strong>Copyright &copy; 2021-2024 <a href="https://www.facebook.com/abdullahshakeabir">Md Abdullah Shake</a>.</strong> All rights reserved.
	</footer>


	<!-- Page level plugins -->
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

	<!-- ---------- sweet alert -----------  -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<?php
  if (isset($_SESSION['run']) && $_SESSION['run'] != '') {

  ?>
	  <script>
	    swal({
	      title: "<?= $_SESSION['run'] ?>",
	      text: "Thank you for Submit!",
	      icon: "success",
	      button: "Close",
	    });
	  </script>
	<?php
    // unset($_SESSION['run']);
  }
  ?>
	</body>

	</html>