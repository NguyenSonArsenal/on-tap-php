<?php
$basic = array(
    "1.GetDayAndTime.html", "2.ContentWindown.html", "3.GetCurrentDate.html", "4.co.html",
    "5.AnimateString.html", "6.IsLeapYear.html", "7.Find1stJanuary.html", "8.GuessNumber.html",
    "9.UntilChristmas.html", "10.MultiplicationAndDivision.html", "11.ConvertTemperatures.html", "12.GetURL.html",
    "13.CreateVariable.html", "14.GetExtensionFilename.html", "15.CompareWithANumber.html", "16.SumTriple.html",
    "17.html", "18.Test50.html", "19.AbsoluteValue.html", "20.PositiveNegative.html",
    "21.CheckHasPy.html", "22.RemoveCharacter.html", "23.CreateString.html", "24.FrontBack.html",
    "25.Multiple7And3.html", "26.FrontBack3.html", "27.StartSpecStr.html", "28.CheckNumbers.html",
    "29.CheckNumbers.html", "30.CheckScript.html", "31.MaxInt3Char.html", "32.Near100.html",
    "33.CheckNumbers.html", "34.CheckNumbers.html", "35.CheckChar.html", "36.LastDigit.html",
    "37.UpperLower.html", "38.ExamStatus.html", "39.CheckNumbers.html", "40.CheckNumbers.html",
    "41.ThreeNumbers.html","42.NumberOrder.html","43.SameLastDigit.html","44.LessBy20Others.html",
    "45.Number15.html", "46.CheckNumbers7And11.html","47.CheckNumber.html","48.ReverseString.html",
    "49.ReplaceCharacter.html","51.ConvertToHour.html",
    "52.AlphabetSoup.html","53.abCheck.html","54.VowelChar.html", "55.Equal_pt.html",
    "56.DivisionString.html", "57.StringCopy.html", "58.NewString3LastChar.html",
    "59.FirstHalf.html", "60.WithoutFirstEnd.html"
);

$recursion = array(
    "1.Fibo.html", "2.UocChungLonNhat.html", "3.Range.html", "4.SumInt.html", "5.TinhSoMu.html",
    "6.Fibo.html", "7.IsSoChan.html"
);

$condition_loop = array(
    "1.NumberLarger.html", "2.SignNumber.html", "3.Sort3Number.html", "4.Max5Number.html",
    "5.OldAndEven.html", "6.AvgMarks.html", "7.FizzBuzz.html",
    "9. ArmstrongNumbers.html","10.TamGiacVuong.html", "12.BoiCua3Va5.html"
);
  
  function getNumberExercise($txt)
  {
    $arr = explode(".",$txt);
    return $arr[0];
  }

?>

<!doctype html>
<html lang="en">
<head>
  <title>PHP Training</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="./css/home.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1>Basic</h1>
    <?php
        foreach ($basic as $key => $file) {
    ?>
          <a href="./basic/<?=$file?>" class="link-exercise">
            Exercise <?=getNumberExercise($file)?></a></li>
    <?php
        }
    ?>
    <br>
    <a href="javascript:()" style="color: red;">Exercise 4</a>
    <a href="javascript:()" style="color: red;">Exercise 50</a>


    <h1>Recursion</h1>
    <?php
    foreach ($recursion as $key => $file) {
        ?>
        <a href="./basic/<?=$file?>" class="link-exercise">
            Exercise <?=getNumberExercise($file)?></a></li>
        <?php
    }
    ?>
    <br>
    <a href="javascript:()" style="color: red;">Exercise 8</a>
    <a href="javascript:()" style="color: red;">Exercise 9</a>

    <h1>Condition anh loop</h1>
    <?php
    foreach ($condition_loop as $key => $file) {
        ?>
        <a href="./basic/<?=$file?>" class="link-exercise">
            Exercise <?=getNumberExercise($file)?></a></li>
        <?php
    }
    ?>
    <br>
    <a href="javascript:()" style="color: red;">Exercise 8</a>
    <a href="javascript:()" style="color: red;">Exercise 11</a>


</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous">
</script>
</body>
</html>