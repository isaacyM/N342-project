<!--Font Awesome--->
<script src="https://kit.fontawesome.com/d81b469398.js" crossorigin="anonymous"></script>

<!--jQuery, Popper.js, Bootstrap js--->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!--Template's scripts-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<!--Script for Tab-->
<script>
    function openPage(pageName, elmnt, color) 
    {
        // Hide all elements with class="tabcontent" by default */
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        }
    
        // Remove the background color of all tablinks/buttons
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
        }
    
        // Show the specific tab content
        document.getElementById(pageName).style.display = "block";
    
        // Add the specific color to the button used to open the tab content
        elmnt.style.backgroundColor = color;
    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<!--Script for Datatable-->
<script type="text/javascript" language="javascript" src="../../media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="../../media/js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="../resources/syntax/shCore.js"></script>
<script type="text/javascript" language="javascript" src="../resources/demo.js"></script>
<script type="text/javascript" language="javascript" class="init">

    $(document).ready(function() {
        $('#example').DataTable();
    } );

</script>