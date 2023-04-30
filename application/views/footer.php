

</body>
<script>
    function showError(id,error){
        var myDiv = document.getElementById(id);
      myDiv.style.display = 'block';
      myDiv.innerHTML='<div class="col-md-12 bg-warning" style="text-align: center;padding: 10px;">'+error+' </div>'
      setTimeout(function() {
        myDiv.style.display = 'none';
        location.reload();
      }, 5000);    
    }
    function showSuccess(id,msg){
        var myDiv = document.getElementById(id);
      myDiv.style.display = 'block';
      myDiv.innerHTML='<div class="col-md-12 bg-success" style="text-align: center;padding: 10px;">'+msg+' </div>'
      setTimeout(function() {
        myDiv.style.display = 'none';
        location.reload();
      }, 5000);    
    }
</script>
</html>