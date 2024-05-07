

<form action="final.php" id="form2" style="display:none; margin-top:5%" class=" col-lg-6">

<label for="" class="text-light font-weight-bold">Select Subject</label>

<select class="form-select" aria-label="Default select example" name="subject">

 <?php 

 foreach ($subject as $value) { ?>

    <option value="<?php   echo "$value"; ?>"><?php   echo "$value"; ?></option>

    <?php }?>

  </select>



  <label for="" class="text-light">Select Year</label>

<select class="form-select c" aria-label="Default select example" name="year1">



  <option value="2020">2020</option>

  <option value="2021">2021</option>

  <option value="2022">2022</option>

  <option value="2023">2023</option>

</select>





  <button type="submit"name="submit2" class="my-3 btn btn-primary">Get Papers</button>

 

  </form>
