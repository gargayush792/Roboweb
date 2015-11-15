<html>
<head><title>New Registration</title>
 <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
  <script type="text/javascript">

    $(document).ready(function() {
 $("#form1").validate({
        rules: {
          team_name: "required",// simple rule, converted to {required:true}
          participant_1: "required",
          college_1: "required",
          number_1: {required:true, digits:true},
number_2: {digits:true},
number_3: {digits:true},
number_4: {digits:true},
          mail: "required",
          mail_post: "required",          
          email_1: {required: true, email: true},
          email_2: {email: true},
 email_3: {email: true},
 email_4: {email: true},
        }
      });
 $('#form1').submit(function(e){ // <<< This selector needs to point to your form.
        if ($('#id_event').val() == "") {
            alert("Please select the event in which you are participating");
            e.preventDefault();
            return false;
        }
    });
    });
  </script>
 <style type="text/css">
    * { font-family: Verdana; font-size: 11px; line-height: 14px; }
    .submit { margin-left: 125px; margin-top: 10px;}
    .label { display: block; float: left; width: 120px; text-align: right; margin-right: 5px; }
    .form-row { padding: 5px 0; clear: both; width: 700px; }
    label.error { width: 250px; display: block; float: left; color: red; padding-left: 10px; }
    input[type=text], textarea { width: 250px; float: left; }
    textarea { height: 50px; }
  </style>
</head>
<body>
<p><ul><li>Please fill all the required fields.</li><li> If you are participating in multiple events, please fill the form the required number of times.</li><li> Remember to collect the reference number received on form submission and take it to the Robotix Helpdesk with your robot.</li><li> If you forget the number find it from <a target="_blank" href="http://robotix.in/registration/list.php">here</a></li></ul></p>
<form id="form1" action="regthis.php" method="post">
<p>* = Required field</p>
<table>
<tbody>
<tr><th><label for="id_team_name">Team Name*:</label></th>
<td><input id="id_team_name" type="text" name="team_name" maxlength="255" /></td>
</tr>
<tr><th><label for="id_event">Event*:</label></th>
<td><select name="event" id="id_event"> <option value="" selected="selected">Choose one</option> <option value="AC">ACROSS</option> <option value="SE">Seeker</option> <option value="LU">Lumos</option> <option value="OV">Overhaul</option> <option value="AB">Abyss</option><option value="RZ">Robozest</option> </select></td>
</tr>
<tr><th>&nbsp;</th>
<td>&nbsp;</td>
</tr>
<tr><th><label for="id_participant_1">First Participant*:</label></th>
<td><input id="id_participant_1" type="text" name="participant_1" maxlength="255" /></td>
</tr>
<tr><th><label for="id_college">College*:</label></th>
<td><input id="id_college" type="text" name="college_1" maxlength="255" /></td>
</tr>
<tr><th><label for="id_number_a">Primary Contact Number*:</label></th>
<td><input id="id_number_a" type="text" name="number_1" maxlength="15" /></td>
</tr>
<tr><th><label for="id_email">Contact Email*:</label></th>
<td><input id="id_email" type="text" name="email_1" maxlength="75" /></td>
</tr>
<tr><th>&nbsp;</th>
<td>&nbsp;</td>
</tr>
<tr><th><label for="id_participant_2">Second Participant:</label></th>
<td><input id="id_participant_2" type="text" name="participant_2" maxlength="255" /></td>
</tr>
<tr><th><label for="id_college">College:</label></th>
<td><input id="id_college" type="text" name="college_2" maxlength="255" /></td>
</tr>
<tr><th><label for="id_number_a">Primary Contact Number:</label></th>
<td><input id="id_number_a" type="text" name="number_2" maxlength="15" /></td>
</tr>
<tr><th><label for="id_email">Contact Email:</label></th>
<td><input id="id_email" type="text" name="email_2" maxlength="75" /></td>
</tr>
<tr><th>&nbsp;</th>
<td>&nbsp;</td>
</tr>
<tr><th><label for="id_participant_3">Third Participant:</label></th>
<td><input id="id_participant_3" type="text" name="participant_3" maxlength="255" /></td>
</tr>
<tr><th><label for="id_college">College:</label></th>
<td><input id="id_college" type="text" name="college_3" maxlength="255" /></td>
</tr>
<tr><th><label for="id_number_a">Primary Contact Number:</label></th>
<td><input id="id_number_a" type="text" name="number_3" maxlength="15" /></td>
</tr>
<tr><th><label for="id_email">Contact Email:</label></th>
<td><input id="id_email" type="text" name="email_3" maxlength="75" /></td>
</tr>
<tr><th>&nbsp;</th>
<td>&nbsp;</td>
</tr>
<tr><th><label for="id_participant_4">Fourth Participant:</label></th>
<td><input id="id_participant_4" type="text" name="participant_4" maxlength="255" /></td>
</tr>
<tr><th><label for="id_college">College:</label></th>
<td><input id="id_college" type="text" name="college_4" maxlength="255" /></td>
</tr>
<tr><th><label for="id_number_a">Primary Contact Number:</label></th>
<td><input id="id_number_a" type="text" name="number_4" maxlength="15" /></td>
</tr>
<tr><th><label for="id_email">Contact Email:</label></th>
<td><input id="id_email" type="text" name="email_4" maxlength="75" /></td>
</tr>
<tr><th><label for="id_comments">Mailing Address*:</label></th>
<td><textarea required="required" id="id_comments" rows="10" cols="40" name="mail"></textarea></td>
</tr>
<tr><th><label for="id_comments">Mailing Address(for posting certificates)*:</label></th>
<td><textarea required="required" id="id_comments" rows="10" cols="40" name="mail_post"></textarea></td>
</tr>
<tr><th><label for="id_comments">Comments:</label></th>
<td><textarea id="id_comments" rows="10" cols="40" name="comments"></textarea></td>
</tr>
</tbody>
</table>
<input type="submit" value="REGISTER" /></form>
</body>
</html>