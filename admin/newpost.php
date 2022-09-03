<?php include('header.php');?> 
<div class="container">
        <div class="form-group">
            <label>Naslov</label>
            <input type="text" name="naslov" id="naslov" class="form-control">
</div>
<div class="form-group">
            <label>Sadrzaj</label>
            <textarea name="tekst" id="tekst" class="form-control"></textarea>
</div>

<div class="form-group">
            
            <input type="submit"  name="submit" id="submit" class="btn btn-primary">
</div>
</div>

<?php include('footer.php');?> 

<script type= "text/javascript">
    $("#submit").click(function(){
        var naslov =$("#naslov").val();
        var tekst=$("#tekst").val();
        
        $.ajax({
            url:"home_ajax1.php",
            type:"POST",
            data:{naslov:naslov,tekst:tekst},
            success:function(data){
                
                alert("Ubaceno u bazu");
            }
        });
    });
</script>
