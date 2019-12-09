/*
Prend la valeur de chaque input et compare avec nameM
*/
function unitaryM_check(inputData, nameBase)
{
  var checkResult = [];
  for (var a = 0; a < nameBase.length; a++)
  {
    checkResult[a] = 0;
  }
  for (var i = 0; i < inputData.length; i++)
  {
    for (var j = 0; j < nameBase.length; j++)
    {
      if (inputData[i] == nameBase[j])
      {
        checkResult[j] = checkResult[j]+1;
      }
    }
  }
  return checkResult;
}
