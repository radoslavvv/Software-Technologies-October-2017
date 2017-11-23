<form>
  <textarea rows="10" name="lines">
      <?php
          if(isset($_GET['lines'])){
              $array = explode("\n", $_GET['lines']);
              $array = array_map('trim', $array);
              sort($array, SORT_STRING);
              $sortedLines = implode("\n", $array);
              echo $sortedLines;
          }
      ?>
  </textarea> <br>
    <input type="submit" value="Sort">
</form>

