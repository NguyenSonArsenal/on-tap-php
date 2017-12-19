<?php
  $fileName = array(
    "1.GetVersionPhp.php",
    "2.DisplayString.php",
    "3.AddVarToTitle.php",
    "4.FormDisplayName.php",
    "5.GetIPClient.php",
    "6.GetInfoBrowser.php",
    "7.GetCurrentFile.php",
    "8.GetURL.php",
    "9.ChangeColorFirstCharacter.php",
    "10.CheckHttpOrHttps.php",
    "11.RedirectAnotherPage.php",
    "12.CheckEmail.php",
    "13.DisplayTable.php",
    "14.DisplaySourceCodePage.php",
    "15.GetLastModifiedOfFile.php",
    "16.CountLineNumberOfFile.php",
    "17.GetVersionPhp.php",
    "18.DelayProgram.php",
    "19.ArithmeticOperations.php",
    "20.GetLastError.php",
    "21.TernaryOperator.php",
    "22.GetUrl.php",
    "23.CompareVersionPhp.php",
    "24.GetNameOfTheOwnerPHP.php",
    "25.GetDocumentRootDirectory.php",
    "26.GetInfoSystem.php",
    "27.GetCredits.php",
    "28.GetTempDir.php",
    "29.GetFunctionName.php",
    "30.GetTimeLastModified.php",
    "31.SwapVar.php",
    "32.NumberAmstrong.php",
    "33.ConvertWordToDigit.php",
    "37.TongSoNguyenTo.php",
    "38.ValidateEmail.php",
    "39.GetFileSize.php",
    "45.TotalDigitOfNumber.php"
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
    <?php
        foreach ($fileName as $key => $file) {
    ?>
          <a href="./Basic/<?=$file?>" class="link-exercise">
            Exercise <?=getNumberExercise($file)?></a></li>
    <?php
        }
    ?>
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