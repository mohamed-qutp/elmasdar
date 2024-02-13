let endDate =  new Date("2023-1-1");
let startDate  = new Date();


function getMonthDifference(startDate, endDate) {
    return (
      endDate.getMonth() -
      startDate.getMonth() +
      12 * (endDate.getFullYear() - startDate.getFullYear())
    );
  }
function getDayDifference(startDay,endDay)
{
    let Difference_In_Time =  startDay.getDay() - endDay.getDay() ;
    return Difference_In_Time;
}

let day = document.getElementById('day');
let month = document.getElementById('month');
month.innerHTML = getMonthDifference(startDate,endDate) - 1 + "<br> شهر";
day.innerHTML = getDayDifference(startDate,endDate) + "<br> يوم";

