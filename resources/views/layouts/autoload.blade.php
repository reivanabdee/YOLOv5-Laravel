@section('auto')
    
@endsection
<script>
    function loadXMLDoc() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("link_wrapper").innerHTML =
          this.responseText;
        }
      };
      xhttp.open("GET", "data.blade.php", true);
      xhttp.send();
    }
    setInterval(function(){
        loadXMLDoc();
        // 1sec
    },1100);
    
    window.onload = loadXMLDoc;
    </script>
    @endsection