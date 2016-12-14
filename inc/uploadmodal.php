
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload your tunes</h4>
      </div>
      <div class="modal-body">
        <form action="saveupload.php" method="post" id="uploadmodal" enctype="multipart/form-data">
     
             
         <label> Upload your song:</label> <input type="file" name="theFileSong" required>
        <label> Artist</label> <input type="text" name="Artist" required>
             
         <label>Song:</label> <input type="text" name="SongName" required>
         <label>Genre:</label><br/>
<input type="checkbox" value="acoustic" name="Genre" > Acoustic; <br/>
<input type="checkbox" value="blues"  name="Genre" > Blues;<br/>
<input type="checkbox" value="country"  name="Genre" > Country;<br/>
<input type="checkbox" value="dance"  name="Genre" > Dance;<br/>
<input type="checkbox" value="electro"  name="Genre" > Electro;<br/>
<input type="checkbox" value="funk"  name="Genre" >  Funk;<br/>
<input type="checkbox" value="jazz"  name="Genre" > Jazz;<br/>
<input type="checkbox" value="metal"  name="Genre" > Metal;<br/>
<input type="checkbox" value="pop"  name="Genre" > Pop; <br/>
<input type="checkbox" value="rock"  name="Genre" >  Rock; <br/>   
             
         <input type="submit" value="Upload">
         
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>