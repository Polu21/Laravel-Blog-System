<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<body>
  <form id="form1" runat="server">
    <input type='file' id="file-input" />
    <div id='img_contain'>
      <img id="image-preview" align='middle'src="http://www.clker.com/cliparts/c/W/h/n/P/W/generic-image-file-icon-hi.png" alt="your image" title=''/>
    </div>
  </form>
</body>

<script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#image-preview').attr('src', e.target.result);
      $('#image-preview').hide();
      $('#image-preview').fadeIn(650);
    }
    reader.readAsDataURL(input.files[0]);
  }
}

$("#file-input").change(function() {
  readURL(this);
});

</script>
