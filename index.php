#!/usr/bin/php
<?php
$VERSION="2.8";
date_default_timezone_set("Europe/London");
require("../visitorlog.php");
$logger=new VisitorLogger("elsa.log");
$logger->log();
?>
<html>
  <head>
    <title>Elsa - your exam timetable assistant.</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="./jquery.cookie.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./index.css">
    <link href="http://pbs.twimg.com/profile_images/1208487557/favicon_E_2.jpg" rel="icon" type="image/x-icon" />
    <meta name="description" content="Elsa is an exam timetable assistant, created in 2015, which allow user to filter their class' exam timetable and provide a countdown for each exam.">
    <meta name="keywords" content="elsa imperial doc computing timetable exam filter assistant">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  </head>
  <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <header class="jumbotron">
      <div class="container">
          <div class="row">
              <div class="col-xs-8">
                <h2>
                  <a target="_blank" href="https://github.com/ycmjason/ic-elsa"><img src="http://image005.flaticon.com/25/svg/25/25231.svg" style="height:1em;margin-top:-8px;"></img></a>
                  Elsa <?=$VERSION?> - your exam timetable assistant.
                </h2>
                <h4>As usual, use it at your own risk.</h4>
              </div>
              <div class="col-xs-8">
                What is Elsa?
                <ul>
                  <li>
                    Elsa was created on 30 March 2015. 
                  </li>
                  <li>
                    Elsa shows the exam timetable starting from 27 Apri 2015. 
                  </li>
                  <li>
                    Elsa filters the timetable according to your selection.
                  </li>
                  <li>
                    Elsa also saves your class preference. 
                  </li>
                  <li>
                  <a href="http://vignette3.wikia.nocookie.net/disneyprincess/images/f/f2/ElsaPromo.png/revision/latest?cb=20141127210433">Image Reference</a>
                </li>
                </ul>
                Changelog:
                <ul class="hidden">
                  <li>
                    v2.0: Elsa will countdown the exam dates for you! Go revise! (31 March 2015)
                  </li>
                  <li>
                    v2.0: Elsa has its lovely background now. (31 March 2015)
                  </li>
                  <li>
                    v2.0: Elsa is using a favicon copied from <a target="_blank" href="http://pbs.twimg.com/profile_images/1208487557/favicon_E_2.jpg">here</a>, and a background picture from <a target="_blank" href="http://fc07.deviantart.net/fs70/i/2013/343/1/c/queen_elsa_png_frozen__by_ninetailsfoxchan-d6xayrt.png">here</a>. (31 March)
                  </li>
                  <li>
                    v2.1: You can go to the corresponding note now easily. (1 Apr 2015)
                  </li>
                  <li>
                    v2.1: You can access to pastpaper in Elsa too. (1 Apr) </li>
                  <li>
                    v2.2: Clicking on notes will link you to <a target="_blank" href="http://www.doc.ic.ac.uk/~cmy14/georgia">Georgia</a> (1 Apr 2015)
                  </li>
                  <li>
                    v2.3: Hopefully now the notes link will bring you to the right session of Georgia without further clicking. (2 Apr 2015)
                  </li>
                  <li>
                    v2.4: Go ahead and like Elsa's Facebook Page now! (7 Apr 2015)
                  </li>
                </ul>
                <ul>
                  <li>
                    v2.41: Added some padding at the bottom of the timetable as requested by Paul Balaji. (18 Apr 2015)
                  </li>
                  <li>
                    v2.5: In case you don't want to see the past exam, you can hide them now. Credits to Amey.(28 Apr 2015)
                  </li>
                  <li>
                    v2.6: Refresh table without refreshing the page. [need to refresh your page for update of Elsa] (30 Apr 2015)
                  </li>
                  <li>
                    v2.7: Auto-refreshing countdown (1 May 2015)
                  </li>
                  <li>
                    v2.7: Scary countdown is on the table! Credits to Derek Law! :D (1 May 2015)
                  </li>
                  <li>
                    v2.7: Hit [space-bar] toggle hidePast. (1 May 2015)
                  </li>
                  <li>
                    v2.71: Fixed countdown alert(red text) (5 May 2015)
                  </li>
                  <li>
                    v2.8: Hide Elsa is possible if she ever embarrassed you. (28 March 2016)
                  </li>
                </ul>
              </div>
          </div>
      </div>
      <div class="copyright">
        <h5>
          <a target="_blank" href="http://www.doc.ic.ac.uk/~cmy14">Jason Yu</a> &copy; 2016</h5>
      </div>
    </header>
    <div class="container" style="margin-bottom:30px">
      <div class="row">
        <div class="col-md-6">
          <p>
Room numbers are for the Huxley Building unless otherwise stated. Any details given for examinations not organised by the Department of Computing are for advisory purposes only - please consult the information issued by the department concerned for the authoritative date, time, room and duration.
          </p>
          <p>
Candidates permitted extra time (and not using a computer) will sit in Room 219b for all examinations, unless otherwise advised. Candidates permitted the use of a computer will sit in Room 210 for the examinations concerned, unless otherwise advised.
          </p>
        </div>
        <div class="col-md-3">
          Pastpapers:
          <ul>
            <li><a target="_blank" href="https://exams.doc.ic.ac.uk/archive.html">Archive</a>
            </li><li><a target="_blank" href="https://exams.doc.ic.ac.uk/pastpapers/papers.10-11">2010-2011</a>
            </li><li><a target="_blank" href="https://exams.doc.ic.ac.uk/pastpapers/papers.11-12">2011-2012</a>
            </li><li><a target="_blank" href="https://exams.doc.ic.ac.uk/pastpapers/papers.12-13">2012-2013</a>
            </li><li><a target="_blank" href="https://exams.doc.ic.ac.uk/pastpapers/papers.13-14">2013-2014</a>
            </li><li><a target="_blank" href="https://exams.doc.ic.ac.uk/pastpapers/papers.14-15/">2014-2015</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
<div class="fb-page" data-href="https://www.facebook.com/pages/Project-Elsa/368156860037103" data-width="280" data-height="130" data-hide-cover="true" data-show-facepile="true" data-show-posts="false"></div>
        </div>
      </div>
      <div class="text-center">
        <h4>Timetable changes to year 2 students has been reflected in this table! Please report if you identify wrong information.</h4>
      </div>
      <div class="selector">
        Select your favorite class:
        <select>
          <option></option>
        </select>
        <label>
          <input name="savePref" type="checkbox" checked="checked">save preference?
        </label>
        <label>
          <input name="hidePast" type="checkbox">hide past exam! (hit [space-bar])
        </label>
        <label>
          <input name="hideElsa" type="checkbox">hide elsa! she embarrassed me!
        </label>
      </div>
      <div style="position:relative">
        <div class="refreshIconContainer">
          <span class="glyphicon glyphicon-refresh refresh-button" aria-hidden="true"></span>
        </div>
      </div>
      <div class="scroll">
        <div class="timetable">
          <?php include("./timetable.htm");?>
        </div>
      </div>
      <div class="hidden-lg">
        Scroll right -&gt;
      </div>
    </div>
<script>
//TimeDiff Class
function TimeDiff(t1, t2){
  var diff = t2-t1;
  var toDays = function(){
    return Math.floor(toHours()/24);
  }
  var toHours = function(){
    return Math.floor(toMinutes()/60);
  }
  var toMinutes = function(){
    return Math.floor(toSeconds()/60);
  }
  var toSeconds = function(){
    return Math.floor(diff/1000);
  }
  var fillZero = function(n){
    if(n<10){
      return '0'+n;
    }
    return n;
  }

  this.getDays = toDays;
  this.getHours = toHours;
  this.getMinutes = toMinutes;
  this.getSeconds = toSeconds;

  this.getHours24 = function(){
    return fillZero(toHours()%24);
  }
  this.getMinutes60 = function(){
    return fillZero(toMinutes()%60);
  }
  this.getSeconds60 = function(){
    return fillZero(toSeconds()%60);
  }
  this.getMilliseconds = function(){
    return diff;
  }

  this.toString = function(){
    return this.getDays()+" days "+this.getHours24()+":"+this.getMinutes60()+":"+this.getSeconds60();
  }
}
/* test cases
//console.log((new TimeDiff(new Date(2013,5,4,14,23,42),new Date(2013,5,5,10,0,0)))).toString()=="0 days 00 hours 00:00");
console.log((new TimeDiff(0,0)).toString()=="0 days 00 hours 00:00");
console.log((new TimeDiff(new Date(2013,5,4,10,0,1),new Date(2013,5,5,10,0,0))).getHours24());
console.log((new TimeDiff(new Date(1995,5,5), new Date(1995,5,13))).getDays()==8);
console.log((new TimeDiff(new Date(2014,8,5,0,0,1), new Date(2014,8,5,1,2,4))).toString()== "0 days 01 hours 02:03");
console.log((new TimeDiff(new Date(1995,5,5,0,0,1), new Date(1995,5,5,1,2,4))).toString() == "0 days 01 hours 02:03");
console.log((new TimeDiff(new Date(1995,5,5,5,40,0), new Date(1995,5,10,8,10,7))).toString() == "5 days 02 hours 30:07");
*/
//Set class
function Set(){
  var set = [];
  this.toArray = function() {return set;}
  this.add    = function(elem){
    for(k in set){
      if(set[k]==elem) return set;
    };
    return set.push(elem);
  }
  this.remove = function(elem){
    for(k in set){
      if(set[k]==elem) return set.splice(k,1).sort;
    };
  }
  this.sort   = function(){
    set.sort();
  }
}

//function for splitting the exam code
function getClass(code){
  var codes=code.trim().split("=");
  for(i in codes){
    var j=1;
    while(isNaN(parseInt(codes[i].charAt(j++))) && j<10);
    codes[i]=codes[i].slice(0,j);
  }
  return codes;
}

//function for matching exam code
function equalCode(a,b){
  var codesA=getClass(a);
  var codesB=getClass(b);
  for(var i in codesA){
    for(var j in codesB){
      if(codesA[i].trim().toLowerCase()==codesB[j].trim().toLowerCase()){
        return true;
      }
    }
  }
  return false;
}
/* testing for equalCode
console.log(equalCode("a1","a1")==true);
console.log(equalCode("A1","a1")==true);
console.log(equalCode("b1","a1")==false);
console.log(equalCode("B1","a1")==false);
console.log(equalCode("a1=M1","m1")==true);
console.log(equalCode("a1=s1","m1")==false);
console.log(equalCode("bel","bEl")==true);
console.log(equalCode("a1=C123=c3","c1")==false);
*/

//function for table coloring
function colorTheTable(){
  $(".timetable .row:visible:odd").css("background-color","#C6F2FC"); 
  $(".timetable .row:visible:even").css("background-color","#FFF"); 
}
//function to filter the table
function filterTable(cls){
  $(".timetable .row:not(.th) .col-xs-1:first-child").each(function(i){
    var hidePast = $("input[name='hidePast']").prop("checked");
    if(cls.trim()!=""){
      if(!equalCode($(this).text(), cls) || (hidePast&&$(this).parent().data("past"))){
        $(this).parent().slideUp("slow",colorTheTable);
      }else{
        $(this).parent().slideDown("slow",colorTheTable);
      } 
    }else{
      if(hidePast&&$(this).parent().data("past")){
        $(this).parent().slideUp("slow",colorTheTable);
      }else{
        $(this).parent().slideDown("slow",colorTheTable);
      }
    }
  });
}
</script>
<script>
//color the table
colorTheTable();
//get all the codes
var values=new Set();
$(".timetable .row:not(.th) .col-xs-1:first-child").each(function(i){
  var codes = getClass($(this).text());
  $.each(codes, function(i, value){
    values.add(value);
  });
});
//"sort" the set
values.sort();
//get pref
var pref;
$.get("./getPref.php",function(pref){
  //populate the selector
  $.each(values.toArray(), function(i, value){
    if(equalCode(value,pref)){
      $("select").append($("<option></option>").attr("value",value).attr("selected","selected").text(value));
      filterTable(value);
    }else{
      $("select").append($("<option></option>").attr("value",value).text(value));
    }
  });
  if(pref=="Hidden" || pref=="startHidden"){
      $("input[name='savePref']").prop("checked",false);
  } 
});
$("input[name='savePref']").change(function(){
  var cls=$("select").val();
  $.cookie("pref", cls);
  if($(this).prop("checked")){
    $.post("./addPref.php", {pref:cls});
  }else{
    $.post("./addPref.php", {pref:"startHidden"});
  }
});
//show only the selected code
$("select").change(function(){
  var cls=$("select").val();
  if($("input[name='savePref']").prop("checked")){
    $.post("./addPref.php", {pref:cls});
  }else{
    $.post("./addPref.php", {pref:"Hidden"});
  }
  filterTable(cls);
});
//alter table structure
$(".timetable").children(".row").not(".th").children(".col-xs-3").after(function(){
  var dateDiv = $(this).next();
  var timeDiv = $(this).next().next();
  var date = new Date(dateDiv.html()+" 2016 "+timeDiv.html());
//day column
  dateDiv.before("<div class=\"col-xs-1\">"+dateToWeekday(date)+"</div>");
  return "<div class=\"col-xs-2 countDownCell\"></div>";
});

function dateToWeekday(date){
  var weekday = new Array(7);
  weekday[0]=  "Sunday";
  weekday[1] = "Monday";
  weekday[2] = "Tuesday";
  weekday[3] = "Wednesday";
  weekday[4] = "Thursday";
  weekday[5] = "Friday";
  weekday[6] = "Saturday";
  return weekday[date.getDay()];
}
//v2.5 hidePast
$("input[name='hidePast']").change(function(){
  var cls=$("select").val();
  filterTable(cls);
});
//v2.8 hideElsa
$("input[name='hideElsa']").change(function(){
  var bg_url = $(this).prop("checked")? "url()": "url('elsa.png')";
  $(".jumbotron").css("background-image", bg_url);
});

//2.6 refresh table
$(".refresh-button").click(updateCountDown);
//2.7 auto refresh
function updateCountDown(){
  $(".countDownCell").each(function(i, cell){
    var oriText = $(this).text();
    var dateDiv = $(this).next().next();
    var timeDiv = dateDiv.next();
    var date = new Date(dateDiv.html()+" 2016 "+timeDiv.html());
    var timeLeft = new TimeDiff(new Date(), date);
    if(timeLeft.getMilliseconds()<0){
      $(this).parent(".row").data("past", true);
    }
    if(oriText != "" && getCountDownString(timeLeft)!=oriText){
      $(this).fadeOut(100, function(){
        $(this).html(getCountDownString(timeLeft));
        $(this).fadeIn(100);
      });
    }else{
      $(this).text(getCountDownString(timeLeft));
    }
    if(isCountdownAlert(timeLeft)){
      $(this).css("color","red");
    }else{
      $(this).css("color","");
    }
  });
  var cls=$("select").val();
  filterTable(cls);
  function getCountDownString(timeLeft){
    if((new Date()).getDate()==5 && new Date().getMonth()+1==5){
      if(new Date().getSeconds()%7-2==0){
        return "Happy birthday to <a href=\"https://www.doc.ic.ac.uk/~cmy14\">Jason</a>!";
      }
    }
    if(timeLeft.getMilliseconds()<0){
      return "Let it go!";
    }
    if(timeLeft.getDays() >= 1){
      ts = timeLeft.getDays()+" days "+timeLeft.getHours24()+" hrs";
    }else{
      ts = timeLeft.getHours24()+":"+timeLeft.getMinutes60()+":"+timeLeft.getSeconds60();
    }
    return ts;
  }
  function isCountdownAlert(timeLeft){
    return timeLeft.getHours()>=0 && timeLeft.getHours()<24;
  }
}
updateCountDown();
setInterval(updateCountDown, 1000);

$("body").keydown(function(e){
  if(e.keyCode==32){
    e.preventDefault();
    $("input[name='hidePast']").prop("checked", !$("input[name='hidePast']").prop("checked"));
    var cls=$("select").val();
    filterTable(cls);
  }
});
</script>
  </body>
</html>
