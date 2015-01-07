/* 
 * 2014.10.30 this is for 1-1meeting
 * 1 show the time 2 update the time sechdule 3 change the schedule
 * and open the template in the editor.
 */
//format transfer
$(document).ready(function(){

var MonthSet = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//var monthSet = new Array( "Jan","Feb", "Mar", "Apr", "May","Jun", "Jul", "Aug", "Sep","Oct","Nov", "Dec");
var weekSet =new Array( "Sun","Mon","Tue","Wed","Thu","Fri", "Sat");
var myDate = new Date();
var specialMon = new Array(1,3,5,7,9,10,12);
//0~11
var monthIdx = myDate.getMonth();
//1~31
var dayIdx = myDate.getDate();
//0~6
var weekIdx = myDate.getDay();
$("#monthShow").text("1-1 meeting in " +MonthSet[monthIdx]);

 var table = document.getElementById("weekDay");//获取第一个表格 
 cols2 = table.rows[0].cells;
 for (var i=0;i<cols2.length;i++)
  { 
         var str = "";
        monthT = monthIdx + 1;
        if (i > weekIdx){
                if(specialMon.contains(monthT)){
                    if(i-weekIdx + dayIdx >31){
                        dayT = i-weekIdx + dayIdx - 31;
                        monthTT =monthT + 1;
                        str = weekSet[i] + " "+ monthTT +"/"+dayT;  
                    }else{
                        dayT = i-weekIdx + dayIdx;
                        str = weekSet[i] + " "+ monthT +"/"+dayT;
                    }
                }else{
                     if(i-weekIdx + dayIdx >30){
                        dayT = i-weekIdx + dayIdx - 30;
                        monthTT =monthT + 1;
                        str = weekSet[i] + " "+ monthTT +"/"+dayT;  
                    }else{
                        dayT = i-weekIdx + dayIdx;
                        str = weekSet[i] + " "+ monthT +"/"+dayT;
                    }  
                }
         }else{
                 if(dayIdx - weekIdx + i > 0){
                        dayT = dayIdx - weekIdx + i;
                        str = weekSet[i] + " "+ monthT +"/"+dayT;        
                    }else{
                           if(specialMon.contains(monthT)){
                                dayT = dayIdx - weekIdx + i +31;
                                str = weekSet[i] + " "+ monthIdx +"/"+dayT;
                            }else{
                                dayT = dayIdx - weekIdx + i+30;
                                str = weekSet[i] + " "+ monthIdx +"/"+dayT;
                            }
                        }               
                }
        cols2[i].innerHTML = str;
        }
        
        // update the time schedule from sql
        var usedTime = new array();
        var avalTime = new array();
  });
  
   Array.prototype.contains = function(obj) { 
  var i = this.length; 
  while (i--) { 
    if (this[i] === obj) { 
      return true; 
    } 
  } 
  return false; 
}; 

