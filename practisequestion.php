

<html>
<head>
<link rel="stylesheet" type="text/css" href="practisequestion.css">
<title> Practise </title>
<body>
<?php  include('include/header.php');?>
<div id="data">
<form action="practise.php" name="practise" onSubmit="return validate()" method="post">
Insert Question <input id="question" type="text" name="question" required><br><br>
Insert Answer1 <input  id="answer1" type="text" name="answer1" required ><br><br>
Insert Answer2 <input  id="answer2" type="text" name="answer2" required><br><br>
Insert Answer3 <input  id="answer3" type="text" name="answer3" required><br><br>
Insert Answer4 <input  id="answer4" type="text" name="answer4" required><br><br>
Correct Answer <input  id="correct" type="text" name="correct" required><br><br>
<input  type="submit" id="add" value="Add Question">
</div>
<script language="JavaScript">
function validate(){
if (document.practise.answer1.value!=document.practise.correct.value && document.practise.answer2.value!=document.practise.correct.value &&document.practise.answer3.value!=document.practise.correct.value && document.practise.answer4.value!=document.practise.correct.value) {
alert("Oops! Correct Answer Should be a valvue from Answer1 to Answer 4!");
document.practise.correct.value='';
document.practise.correct.focus();
return false
}

return true
}
</script>
</body>
</html>