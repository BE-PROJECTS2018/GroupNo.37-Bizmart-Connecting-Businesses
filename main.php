
<?php  include'include/header.php';?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<title>Add Records Form</title>
</head>
<body>

<form action="insert.php" name="test" onSubmit="return validate()"  method="post">
<div id="data">
Insert Question <input id="question" type="text" name="question" required><br><br>
Insert Answer1 <input  id="answer1" type="text" name="answer1" required ><br><br>
Insert Answer2 <input  id="answer2" type="text" name="answer2" required><br><br>
Insert Answer3 <input  id="answer3" type="text" name="answer3" required><br><br>
Insert Answer4 <input  id="answer4" type="text" name="answer4" required><br><br>
Correct Answer <input  id="correct" type="text" name="correct" required><br><br>
 <br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input id="add" type="submit" value="Add Question">

<div><!--dt-->
<script language="JavaScript">
function validate(){
if (document.test.answer1.value!=document.test.correct.value && document.test.answer2.value!=document.test.correct.value &&document.test.answer3.value!=document.test.correct.value && document.test.answer4.value!=document.test.correct.value) {
alert("Oops! Correct Answer Should be a valvue from Answer1 to Answer 4!");
document.test.correct.value='';
document.test.correct.focus();
return false
}

return true
}
</script>

</form>
</body>
</html>