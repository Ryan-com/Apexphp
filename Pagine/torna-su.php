<button id="torna-su" onclick="scrollToTop()"> <img src="../Foto/Icons/" alt=""> <img src="../Foto/Icons/down-arrow.png" alt=""></button>
<script>
  window.onscroll = function() {scrollFunction()};
  
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("torna-su").style.display = "block";
    } else {
    document.getElementById("torna-su").style.display = "none";
    }
  }
  
  // Animazione a scorrimento
  function scrollToTop() {
    const scrollToTop = () => {
      const c = document.documentElement.scrollTop || document.body.scrollTop;
      if (c > 0) {
      window.requestAnimationFrame(scrollToTop);
      window.scrollTo(0, c - c / 8);
      }
  };
  scrollToTop();
  }

</script>