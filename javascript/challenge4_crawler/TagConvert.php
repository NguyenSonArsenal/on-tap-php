<?php

class TagConvert
{
    /**
     * Tự phát hiện & convert từ vni, tcvn3 -> unicode
     */
    function convert($str)
    {
        $arrStr = explode(' ', $str);
        $len = count($arrStr);
        $strRet = '';
        $temp = '';
        for ($i = 1; $i <= $len; $i++) {
            $temp .= $arrStr[$i - 1] . ' ';
            if ($i % 10 == 0) {
                $fontId = $this->detectFont($temp);
                if ($fontId == 0)
                    $strRet .= $temp;
                else if ($fontId == 1) {
                    $strRet .= t2u($temp);
                } else if ($fontId == 2) {
                    $strRet .= v2u($temp);
                }
                $temp = '';
            }
        }
//Đối với temp cuối
        $fontId = $this->detectFont($temp);
        if ($fontId == 0)
            $strRet .= $temp;
        else if ($fontId == 1) {
            $strRet .= t2u($temp);
        } else if ($fontId == 2) {
            $strRet .= v2u($temp);
        }
        $temp = '';

        return $strRet;
    }

    function convert2($str)
    {
        $fontId = $this->detectFont($str);
        if ($fontId == 1) {
            $str = v2u($str);
        } else if ($fontId == 2) {
            $str = t2u($str);
        }

        $fontId = $this->detectFont($str);
        if ($fontId == 1) {
            $str = v2u($str);
        } else if ($fontId == 2) {
            $str = t2u($str);
        }
        return $str;
    }

//0: Unicode, 2: TCVN(.vntime). 1: VNI(vni-times)
    function detectFont($str)
    {
        $markTCVN = "¸|•|µ|¶|¨|Æ|ç|Ç|Þ|ç|¬|þ|®|¢|¤|¥|¦|¾|¨|«|÷||¹|¤|þ|§|î|ª|Î|ß|¼|½|×";
        $markVNI = "aù|aø|aû|aõ|aï|aê|aé|aè|aú|aü|aë|aâ|aá|aà|aå|aã|aä|eù|eø|eû|eõ|eï|eâ|eá|eà|eå|eã|eä|où|oø|oû|oõ|oï|ôù|ôø|ôû|ôõ|ôï|oâ|oá|oà|oå|oã|oä|uù|uø|uû|uõ|uï|öù|öø|öû|öõ|öï|yù|yø|yû|yõ|AÙ|AØ|AÛ|AÕ|AÏ|AÊ|AÉ|AÈ|AÚ|AÜ|AË|AÂ|AÁ|AÀ|AÅ|AÃ|AÄ|EÙ|EØ|EÛ|EÕ|EÏ|EÂ|EÁ|EÀ|EÅ|EÃ|EÄ|OÙ|OØ|OÛ|OÕ|OÏ|ÔÙ|ÔØ|ÔÛ|ôõ|ÔÕ|OÂ|OÁ|OÀ|OÅ|OÃ|OÄ|UÙ|UØ|UÛ|UÕ|UÏ|ÖÙ|ÖØ|ÖÛ|ÖÕ|ÖÏ|YÙ|YØ|YÛ|YÕ";
        $markVNI = 'aù|aø|aû|aõ|aï|aê|aé|aè|aú|aü|aë|aâ|aá|aà|aå|aã|aä|eù|eø|eû|eõ|eï|eâ|eá|eà|eå|eã|eä|où|oø|oû|oõ|oï|ô|ôù|ôø|ôû|ôõ|ôï|oâ|oá|oà|oå|oã|oä|uù|uø|uû|uõ|uï|ö|öù|öø|öû|öõ|öï|í|ì|æ|ó|ò|yù|yø|yû|yõ|î|ñ|AÙ|AØ|AÛ|AÕ|AÏ|AÊ|AÉ|AÈ|AÚ|AÜ|AË|AÂ|AÁ|AÀ|AÅ|AÃ|AÄ|EÙ|EØ|EÛ|EÕ|EÏ|EÂ|EÁ|EÀ|EÅ|EÃ|EÄ|OÙ|OØ|OÛ|OÕ|OÏ|Ô|ÔÙ|ÔØ|ÔÛ|ôõ|ÔÕ|OÂ|OÁ|OÀ|OÅ|OÃ|OÄ|UÙ|UØ|UÛ|UÕ|UÏ|Ö|ÖÙ|ÖØ|ÖÛ|ÖÕ|ÖÏ|Í|Ì|Æ|Ó|Ò|YÙ|YØ|YÛ|YÕ|Î|Ñ';
//Kiem tra trong str.
        $aVNI = explode('|', $markVNI);
        $aTCVN = explode('|', $markTCVN);

        unset($markTCVN);
        unset($markVNI);

//So luong can co.
        $maxVNI = 2;
        $maxTCVN3 = 2;
        $current = 0;
        $rt = 0;
        $isCheck = false;

        if ($isCheck == false) {
            for ($i = 0; $i < count($aTCVN); $i++) {
                if (strpos($str, $aTCVN[$i]) > 0)
                    $current++;
                if ($current == $maxTCVN3) {
                    $isCheck = true;
                    $rt = 1;
                    break;
                }
            }
        }

        if ($isCheck == false) {
            for ($i = 0; $i < count($aVNI); $i++) {
                if (strpos($str, $aVNI[$i]) > 0)
                    $current++;
                if ($current == $maxVNI) {
                    $isCheck = true;
                    $rt = 2;
                    break;
                }
            }
        }

        unset($aVNI);
        unset($aTCVN);

        return $rt;
    }

}

?>