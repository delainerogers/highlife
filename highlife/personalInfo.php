<?php include "header.php" ?>


<form action="sqlsend.php" method="post">

<h1>Profile</h1>
	 <p>
          <label>Name:</label>
          <input type = "Your Name"
                 id = "myName"
                 value = "Your Name Here" name="YourName"/>
   </p>

    <p>
             <label>Gender:</label>
             <select name = "gender">
               <option value = "0">Male</option>
               <option value = "1">Female</option>
               <option value = "0">Other</option>
             </select>
          </p>
   <p>
          <label>Age:</label>
          <input type = "Age"
                 id = "myAge"
                 value = "Your Age Here" name="age" />
   </p>
  
  <p>
          <label>Height:</label>
          <input type = "Your Height"
                 id = "myHeight"
                 value = "Your Height Here" name="height" />
   </p>
  <p>
          <label>Weight(lbs):</label>
          <input type = "Your Weight"
                 id = "myWeight"
                 value = "Your Weight Here" name="weight"/>
   </p>
  <p>
             <label>Amount of exercise/week</label>
             <select name = "exercise">
               <option value = "0">Little or None</option>
               <option value = "2">1-2</option>
               <option value = "4">3-4</option>
               <option value = "6">5+</option>
             </select>
          </p>
  
  <input type="submit" value="save">

</form>



<?php include('footer.php'); ?>