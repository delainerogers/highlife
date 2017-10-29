<?php include "header.php" ?>
      



<h1>Profile</h1>
	 <p>
          <label>Name:</label>
          <input type = "Your Name"
                 id = "myName"
                 value = "Your Name Here" />
   </p>

    <p>
             <label>Gender</label>
             <select id = "myList">
                <option value = "1">Male</option>
               <option value = "2">Female</option>
               <option value = "3">Other</option>
             </select>
          </p>
   <p>
          <label>Age:</label>
          <input type = "Age"
                 id = "myAge"
                 value = "Your Age Here" />
   </p>
  
  <p>
          <label>Height:</label>
          <input type = "Your Height"
                 id = "myHeight"
                 value = "Your Height Here" />
   </p>
  <p>
          <label>Weight(lbs):</label>
          <input type = "Your Weight"
                 id = "myWight"
                 value = "Your Weight Here" />
   </p>
  <p>
             <label>Amount of exercise/week</label>
             <select id = "myList">
               <option value = "0-1">0-1</option>
               <option value = "2-3">2-3</option>
               <option value = "4">4</option>
               <option value = "5">5</option>
               <option value = "6">6</option>
               <option value = "7">7</option>
             </select>
          </p>
  
  <button>Submit</button> 



<?php include('footer.php'); ?>