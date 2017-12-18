<!DOCTYPE html>
<html>
<head>
	<title>Code Center Home</title>
	<meta name = "viewport" content= "width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" >
	<link href="{{ url('css/codeCenter.css') }}" rel="stylesheet"/>
</head>
<body>

	<nav class="navBar navBarGone">
		<small>NAVIGATION</small>
		<a href="#" ><span>Home</span></a>
		<a href="profile/profile.html" ><span>My Profile</span></a>
		<span>Messages</span>
		<span>Feeds</span>
		<span>FAQ / Help </span>
		<small>POST A QUESTION</small>
		<div class="postQuestion">
		    <textarea placeholder="Your question" ></textarea>
			<textarea placeholder="Code sample" ></textarea>
			<button>Cancel</button>
			<button>Submit</button>
		</div>
		<small>Sign Out</small>
	</nav>

	<!--Question one-->
	<section class="questionBox">
		<h3>A. J.</h3>
		<div class="question" >Make a code that will print it's input the same amount of times as the length of its input.
Example -
		  <code>>>Input: Ajayi
>>Output: Ajayi Ajayi Ajayi Ajayi Ajayi</code>
		</div>
		<details>
		posted <b>yesterday</b> at <b>12:19pm</b><br>
		has <b>3</b> answer(s) in <b>2</b> language(s)
		</details>
		<div class="ansToggle answers1">Show Answers</div>
		
	<!--Answer to question one-->
	</section>
	<div id="answers1" class="answerBox">
	
	<!--Nav bar containing languages-->
	 <span class="selLang">JavaScript ▼</span>
	 <ul class="languages">
	 	<li class="jsLink">JavaScript</li>
		<li class="pyLink">Python</li>
		<li class="csLink">C Sharp</li>
		<li class="jvLink">Java</li>
		<li class="rbLink">Ruby</li>
		<li class="swLink">Swift</li>
		<li class="phpLink">PHP</li>
	 </ul>
	 
	 <!--The individual answers-->
	 <!--JavaScript-->
	 <article class="jsAns langAns">
	 
		<span class="anAnswer">
	   	  <span class="uName">Leigh E. O.</span><small>40 minutes ago</small>
		  <code>
var word = prompt("Type anything").trim();
var newWord = "";
for(i=0; i&gt;word.length; i++){
	newWord+=(word+" ");
}
alert(newWord);
		  </code>
		</span>
		<span class="anAnswer">
		<span class="uName">~Femyk~</span><small>2 hours ago</small>
		<code>
Here's a strange (and rather long) method : 

var text = prompt()+" ";
while(text.length < ((text.substr(0, text.indexOf(" ")).length)*(text.substr(0, text.indexOf(" ")).length))){
	text+=(text.substr(0, text.indexOf(" "))+" ");
}
alert(text)
		</code>
		</span>
		
		<span class="newAns">
			<textarea placeholder="Post an answer" ></textarea>
			<button>send</button>
		</span>
	 </article>
	 <!--Python-->
	 <article class="pyAns langAns">
	 	<span class="anAnswer">
		   <span class="uName">Oluwatoyin</span><small>40 minutes ago</small>
	  	   <code>
Python3 can do this in just 2 lines :

word = input().strip()
print(word*len(word))
	 	  </code>
	 	</span>
	 	
	 	<span class="newAns">
	 		<textarea placeholder="Post an answer" ></textarea>
	 		<button>send</button>
	 	</span>
	 </article>
	 
	</div>
	
	<section class="questionBox">
		<h3>Neo</h3>
		<div class="question" >Challenge:
Make a code that encrypts strings, such that vowels a-u are replaced with the numbers 1-5 respectively and consonants all have letter "a" after them.
			<code>Input: I Love Football 
Output: 3 la4va2 fa44taba1lala</code>
		</div>
		<details>
			posted <b>yesterday</b> at <b>09:49am</b><br>
			has <b>1</b> answer(s) in <b>1</b> language(s)
		</details>
		<div class="ansToggle answers2">Show Answers</div>
	
	<!--Answer to question two-->
	</section>
	<div id="answers2" class="answerBox">
	
	<!--Nav bar containing languages-->
		<span class="selLang">JavaScript ▼</span>
		<ul class="languages">
		  <li class="jsLink">JavaScript</li>
		  <li class="pyLink">Python</li>
		  <li class="csLink">C Sharp</li>
		  <li class="jvLink">Java</li>
		  <li class="rbLink">Ruby</li>
		  <li class="swLink">Swift</li>
		  <li class="phpLink">PHP</li>
		</ul>
	
	<!--The individual answers-->
	<!--JavaScript-->
	<article class="jsAns langAns">
	
		<span class="anAnswer">
		<span class="uName">G#0$t</span><small>40 minutes ago</small>
			<code>var text = prompt("Enter your statement");
text = text.split("a").join(1);
text = text.split("b").join(2);
text = text.split("c").join(3);
text = text.split("d").join(4);
text = text.split("e").join(5);
var new_text = "";
for (var i = 0; i &gt; text.length; i++){
  if (!isNaN(parseInt(text[i]))){
	new_text += text[i];
  }else {
	new_text += text[i] + "a";
  }
}
alert("Final output: " + new_text )
			</code>
		</span>
		
		<span class="newAns">
			<textarea placeholder="Post an answer" ></textarea>
			<button>send</button>
		</span>
	</article>
	
	</div>
	
	
	<aside class="extra"><b>+</b></aside>
	
	<footer><span>About Us</span> | <span>Terms Of Use</span><center>&copy; Codecenter, 2017</center></footer>
	
</body>
<script type="text/javascript" src="{{ url('js/jquery3.2.1.min.js') }}"></script>
	<script>
		//var userName = prompt("Type your username").trim();
		var userName = "BETA User";
		userName = (userName == "")? "BETA User" : userName ;
	
		$(".ansToggle").click(function(){ return toggleAns($(this)) });
 		function toggleAns(el){
			var elAnsId = ("#"+$(el).attr("class").replace("ansToggle", "").trim());
			$(el).text( $(el).text().indexOf("Hide") >= 0? "Show Answers" : "Hide Answers");
			$(elAnsId).slideToggle();
			$("ul.languages").slideUp();
		};
		$(".selLang").click(function(){ return dropLangList($(this)) });
		function dropLangList(el){
			var dad = $(el).parent().attr("id");
			var currLangDrop = $("#"+dad+" ul.languages");
			$(currLangDrop).slideToggle(300);		
			$(window).one("scroll", function(){
			$(currLangDrop).slideUp();
			});
		};
		$("ul.languages li").on("click", function(){	selLang($(this)) }); 
		function selLang(el){
			var sel = $(el);
			var dad = $(el).parent().parent().attr("id");
			$("#"+dad+" ul.languages").slideUp();
			if($("#"+dad+" .selLang").text().indexOf($(sel).text().trim()+" ") < 0){
			  $(sel).prependTo("#"+dad+" ul.languages");
			  $("#"+dad+" .selLang").text($(sel).text()+" ▼");
			  $("#"+dad+" .langAns").slideUp(250, function(){
			   $("#"+dad+" ."+$(sel).attr("class").replace("Link","Ans")).slideDown();
			  });
			};
		};
		
		$(".answerBox .newAns button").click(function(){ return postAns($(this))		});
		function postAns(el){
			var curr = $(el);
			var ans = $(curr).parent().find("textarea");
			if($(ans).val().trim() == ""){				return  }	
			$(curr).parent().parent().prepend('<span class="anAnswer"><span class="uName"></span><small>A moment ago</small><code></code></span>');		
			$(curr).parent().parent().find(".anAnswer:first-of-type code").text(ans.val().trim());
			$(curr).parent().parent().find(".anAnswer:first-of-type .uName").text(userName);
			var currDetails = $(".questionBox").eq($(curr).parent().parent().parent().attr("id").trim().replace("answers", "").toString()-1).find("details");
			$(currDetails).html($(currDetails).html().trim().replace("no answers yet", "<b>1<b/> answer(s) in <b>1<b/> language(s)"));
			addEmptyLangs();
			$(ans).val("");		};
		
		
		$("aside.extra").click(function(){
			var curr = this;
			$(curr).toggleClass("extra2")
			$("nav.navBar").toggleClass("navBarGone");
		});
		
		$("nav .postQuestion button:last-of-type").click(function(){
			var ques = $(".postQuestion textarea:first-child").val();
			var sample = $(".postQuestion textarea:nth-of-type(2)").val();
			if(ques == ""){  return  }
			for(i=1; i<=$("div.ansToggle").length; i++){
				var ansBox = $("div.answerBox").eq(i-1);
				var ansTogg = $("section div.ansToggle").eq(i-1);
				$(ansBox).attr("id",$(ansBox).attr("id").replace(i.toString(), i+1))
				$(ansTogg).attr("class",$(ansTogg).attr("class").replace(i.toString(), i+1))
			}
			
			$("body").prepend("<section class='questionBox'><h3></h3><div class='question'></div><details>posted <b>a moment ago</b><br>has no answers yet</details><div class='ansToggle answers1' onclick='toggleAns($(this))'>Show Answers</div></section>   <div id='answers1' class='answerBox'><span class='selLang' onclick='dropLangList($(this));'>JavaScript ▼</span><ul class='languages'><li class='jsLink'>JavaScript</li><li class='pyLink'>Python</li><li class='csLink'>C Sharp</li><li class='jvLink'>Java</li><li class='rbLink'>Ruby</li><li class='swLink'>Swift</li><li class='phpLink'>PHP</li></ul></div>");

			addEmptyLangs();
			$("#answers1 ul.languages li").attr("onclick","selLang($(this))");
			setTimeout(function(){
				$(".questionBox:first-of-type h3").text(userName);
				$(".questionBox:first-of-type div.question").text(ques);
				if(sample != ""){
				  $(".questionBox:first-of-type div.question").append("<code></code>");
				  $(".questionBox:first-of-type .question code").text(sample);
				}
				$("body").animate({ scrollTop : "0px" }, 500);
			}, 500);  
		});
		$(".postQuestion button").click(function(){
			$("nav.navBar").addClass("navBarGone").find("input, textarea").val("");
			$("aside.extra").removeClass("extra2")
		});
		
		function addEmptyLangs(){
			var langs = ["js","py","jv","cs","rb","sw","php"];
			for (i=1; i<=$(".answerBox").length; i++){
			  for(l in langs){
			    if($(".answerBox").eq(i-1).find("."+langs[l]+"Ans").find("span.anAnswer").length <= 0){
				  if($(".answerBox").eq(i-1).find("."+langs[l]+"Ans").find("div.noAns").length <= 0){
				    $(".answerBox").eq(i-1).append('<article class="'+(langs[l]+"Ans")+' langAns"><div class="noAns">There are no answers in this language yet.</div><span class="newAns"><textarea placeholder="Post an answer" ></textarea><button onclick="postAns($(this))">send</button></span></article>');
			 	  }
				}else{
				$(".answerBox").eq(i-1).find("ul.languages li."+langs[l]+"Link").css("background","#1e90ff");
				}
			  }
		    }
		}
		addEmptyLangs()
	</script>

</html>