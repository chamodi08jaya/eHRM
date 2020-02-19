/* All common functions need to be written here
 * Module sepcific functions SHOULD be written inside module js file
 * orangehrm.<module_name>.js added as part of refactoring
 *
 * @author sujith
 **/
function navigateUrl(url)
{
   location.href = url;
}

function goBack()
{
   history.go(-1);
}

//Check valid date 
function validateDate(day, month, year) {
	var days31 = new Array(1,3,5,7,8,10,12);

    if(month > 12) {
       return false;
    }

    if(day == 29 && month == 2) {
       if(year % 4 == 0) {
          return true;
       }
    }

    if(month == 2 && day < 29) {
       return true;
    }
    if(day < 32 && month != 2) {
       if(day == 31) {
          flag = false;
          for(i=0; i < days31.length; i++) {
             if(days31[i] == month) {
                flag = true;
                break;
             }
          }
          return flag;
       }
       return true;
    }
    return false;

 }	