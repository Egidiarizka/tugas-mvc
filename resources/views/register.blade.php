<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SanberBook Form</title>
</head>
<body>
	<h2>Buat Account Baru!</h2>
	<h3>Sign Up Form</h3>

    <form action="{{ route('welcome') }}" method="post">

    	{{ csrf_field() }}
    	<div>
    		<p>First name</p>
	        <input type="text" name="first_name" id="fname">
    	</div>

    	<div>
    		<p>Last name:</p>
	        <input type="text" name="last_name" id="lname">
    	</div>

        <div>
    		<p>Gender:</p>
	        <div>
	        	<input type="radio" name="gender" value="male" id="male"> <label for="male">Male</label>
	        </div>
	        <div>
	        	<input type="radio" name="gender" value="female" id="female"> <label for="female">Female</label>
	        </div>
	        <div>
	        	<input type="radio" name="gender" value="other" id="other"> <label for="other">Other</label>
	        </div>
    	</div>


    	<div>
    		<p>Nationality:</p>
	    	<select>
	    		<option>Indonesia</option>
	    		<option>australia</option>
	    		<option>Japan</option>
	    		<option>korea selatan</option>
	    	</select>
    	</div>

    	<div>
    		<p>Language Spoken:</p>
    		<div>
	           <input type="checkbox" id="indonesia"> <label for="indonesia">Bahasa Indonesia</label>
	        </div>
	        <div>
	        	<input type="checkbox" id="english"> <label for="english">Bahasa English</label>
	        </div>
	        <div>
	        	<input type="checkbox" id="enOther"> <label for="enOther">Other</label>
	        </div
    	</div>
 
      <div>
      	<p>Bio:</p>
      	<textarea rows="8" cols="35"></textarea>
      </div>

      <button type="submit">Signup</button>

    </form>

</body>
</html>