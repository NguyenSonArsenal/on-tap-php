<?php
  $basic = array(
    "1.GetVersionPhp.php", "2.DisplayString.php", "3.AddVarToTitle.php", "4.FormDisplayName.php",
    "5.GetIPClient.php", "6.GetInfoBrowser.php", "7.GetCurrentFile.php", "8.GetURL.php",
    "9.ChangeColorFirstCharacter.php", "10.CheckHttpOrHttps.php", "11.RedirectAnotherPage.php",
    "12.CheckEmail.php", "13.DisplayTable.php", "14.DisplaySourceCodePage.php",
    "15.GetLastModifiedOfFile.php", "16.CountLineNumberOfFile.php",
    "17.GetVersionPhp.php", "18.DelayProgram.php", "19.ArithmeticOperations.php",
    "20.GetLastError.php", "21.TernaryOperator.php", "22.GetUrl.php", "23.CompareVersionPhp.php",
    "24.GetNameOfTheOwnerPHP.php", "25.GetDocumentRootDirectory.php", "26.GetInfoSystem.php",
    "27.GetCredits.php", "28.GetTempDir.php", "29.GetFunctionName.php", "30.GetTimeLastModified.php",
    "31.SwapVar.php", "32.NumberAmstrong.php", "33.ConvertWordToDigit.php", "34.CheckSamePositionBits.php",
    "35.RemoveDuplicates.php", "36.CheckStr2BelongToEndOfStr1.php", "37.TongSoNguyenTo.php",
    "38.ValidateEmail.php", "39.GetFileSize.php", "40.CaculateMod.php", "41.MultiplicationTable.php",
    "42.FirstNonRepeatedCharacter.php", "43.MultipliesCorrespondingElementsTwoList.php",
    "44.SumOfPairsOfNumbers.php", "45.TotalDigitOfNumber.php", "46.BangCuuChuong.php"
  );
  
  $array = array(
    "1.Welcom.php", "2.php", "3.DisplayCapital.php", "4.DeleteElement.php", "5.GetFirstElement.php",
    "6.DecodeJsonStringToArray.php", "7.InsertNewItem.php", "8.Sort.php", "9.AverageTemperature.php",
    "10.BeadSortAlgorithm.php", "11.MergeTwoArray.php", "12.ChangeValue.php", "13.DivisibleForFour.php",
    "14.GetShortestLongestStr.php", "15.GenerateUniqueRandomNumbers.php", "16.GetKeyMax.php",
    "17.MinValuesNotZero.php", "18.FloorDecimalNumbers.php", "19.PrintElement.php",
    "20.SortByPriorityList.php", "21.SortSubnets.php", "23.SortMultiDimensional.php",
    "24.SortByCaseInsensitiveNatural.php", "25.SortEntityLetters.php", "26.ShuffleAssociative.php",
    "27.GenerateRandomPassword.php", "28.SortDecending.php", "29.GenerateArrayWithString.php",
    "30.LetterRange.php.php", "31.GetIndexOfTheHighestValue.php", "32.GetExtentionOfFile.php",
    "33.SearchSpecifiedValue.php", "34.SortAssociative.php", "35.TrimValueByArrayWalk.php",
    "36.UpperLowerCaseElements.php", "37.TotalTimesValueAppears.php",
    "38.GenerateMultidimensionalUnique.php", "39.RemoveDuplicateValue.php",
    "40.SortWithoutPreservingKeys.php", "41.ArrayNotUnique.php", "42.FindUniqueValues.php",
    "43.MergeArrayUnique.php", "44.RemoveSpecifiedDuplicateEntry.php", "45.MultidimensionalDifference.php",
    "46.ValueIsString.php", "47.GetFirseOfKeyAndValue.php", "48.UnionTwoArrays.php",
    "49.GetEntries.php", "50.GetTheLastValue.php", "54.RemoveAllWhiteSpaces.php",
    "55.StringToArray.php", "56.GenerateTwo-dimensionalArray.php", "59.ArrayCombine.php"
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
          <a href="./Basic/<?=$file?>" class="link-exercise">
            Exercise <?=getNumberExercise($file)?></a></li>
    <?php
        }
    ?>
    <h1>Array</h1>
    <?php
    foreach ($array as $key => $file) {
        ?>
      <a href="./Array/<?=$file?>" class="link-exercise">
        Exercise <?=getNumberExercise($file)?></a></li>
        <?php
    }
    ?>
    <a href="javascript:()" style="color: red;">Exercise 22</a>
  
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