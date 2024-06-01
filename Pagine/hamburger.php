<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
  $( document ).ready(function() {

  $(".box").addClass("box--hide")
  /*Open Panel*/
  $(".hamburger").on('click', function(){
      $(".menu-panel").toggleClass("menu-panel--open");
  });

});
</script>