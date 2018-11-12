<span id="college">College</span><br />
<span id="college1">College</span><br />
<span id="college2">College</span><br />
<span id="college3">College</span><br />
<span id="job">Doctor</span><br />
<span id="job1">Doctor</span><br />
<span id="ind">Medicine</span><br />

<hr />

<a id="url" href="tel:888-888-8888"><span id="num1">888-888-8888</span></a><br />
<br /><br />

<br /><br /><br />



<script>
var dateExp = new Date(new Date().getTime() + 365 * 24 * 60 * 60 * 1000);

function getUrlParameter(sParam) {
	var sPageURL = window.location.search.substring(1);
	var sURLVariables = sPageURL.split('&');
	for (var i = 0; i < sURLVariables.length; i++) {
		var sParameterName = sURLVariables[i].split('=');
		if (sParameterName[0] == sParam) {
			return sParameterName[1];
		}
	}
}

// college
var college = decodeURIComponent(getUrlParameter('college'));
if (college != "undefined") {
	college = college.replace(/\+/g, " ");
	document.getElementById('college').innerHTML = college;
	document.getElementById('college1').innerHTML = college;
	document.getElementById('college2').innerHTML = college;
	document.getElementById('college3').innerHTML = college;
	document.cookie = "college=" + college + "; path=/; expires=" + dateExp.toUTCString();
}
else {
	var collegeCookie = findCookie("college");
	if (collegeCookie) {
	document.getElementById('college').innerHTML = collegeCookie;
	document.getElementById('college1').innerHTML = collegeCookie;
	document.getElementById('college2').innerHTML = collegeCookie;
	document.getElementById('college3').innerHTML = collegeCookie;
	}
}

// job
var job = decodeURIComponent(getUrlParameter('job'));
if (job != "undefined") {
	job = job.replace(/\+/g, " ");
	document.getElementById('job').innerHTML = job;
	document.getElementById('job1').innerHTML = job;
	document.cookie = "job=" + job + "; path=/; expires=" + dateExp.toUTCString();
}
else {
	var jobCookie = findCookie("job");
	if (jobCookie) {
	document.getElementById('job').innerHTML = jobCookie;
	document.getElementById('job1').innerHTML = jobCookie;
	}
}

// ind
var ind = decodeURIComponent(getUrlParameter('ind'));
if (ind != "undefined") {
	ind = ind.replace(/\+/g, " ");
	document.getElementById('ind').innerHTML = ind;
	document.cookie = "ind=" + ind + "; path=/; expires=" + dateExp.toUTCString();
}
else {
	var indCookie = findCookie("ind");
	if (indCookie) {
	document.getElementById('ind').innerHTML = indCookie;
	}
}

// num
var num = decodeURIComponent(getUrlParameter('num'));	
if (num != "undefined") {
	num = num.replace(/\+/g, " ");
	/* document.getElementById('url').innerText = num; */
	document.getElementById('url').innerText = 'Click To Call: ' + num;
	document.getElementById('url').href = 'tel:' + num;
	/* document.getElementById('num1').innerText = num; */
	document.getElementById('num1').innerText = 'Click To Call: ' + num;
	document.cookie = "num=" + num + "; path=/; expires=" + dateExp.toUTCString();
}
else {
	var numCookie = findCookie("num");
	if (numCookie) {
	/* document.getElementById('url').innerText = numCookie; */
	document.getElementById('url').innerText = 'Click To Call: ' + numCookie;
	document.getElementById('url').href = 'tel:' + numCookie;
	/* document.getElementById('num1').innerText = numCookie; */
	document.getElementById('num1').innerText = 'Click To Call: ' + numCookie;
	}
}
 
function findCookie(name) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");
  if (parts.length == 2) return parts.pop().split(";").shift();
}
</script>