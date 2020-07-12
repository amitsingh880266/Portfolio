
    <footer>
      <span>Copyright 2019 Simple Profile</span>
      <span>designed by TemplateMo</span>
    </footer>
  </div>
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function () {
      // Magnific Pop up
      // https://dimsemenov.com/plugins/magnific-popup/
      $('.tm-gallery').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery: {
          enabled: true
        },
      });
    });
  </script>

</body>

</html>