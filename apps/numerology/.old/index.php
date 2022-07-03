<?PHP
$pic = "boy";
if(isset($_GET["gender"]))
	{
	$pic = ($_GET["gender"] == "F") ? "girl": "boy";
	}
?>
<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>Numerology - in search of the nine</title>
	<link href="jquery/jquery-ui.css" rel="stylesheet">

	
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

	<script src="nameNumber.js"></script>

		<!-- FontAwesome - http://fortawesome.github.io/Font-Awesome/ -->
        <link rel="stylesheet" href="mobile/css/font-awesome.min.css" />

		<link href="fonts.css" rel="stylesheet">

<SCRIPT>

function encode(myV) 
	{
	var unencoded = myV;
	return encodeURIComponent(unencoded).replace(/'/g,"%27").replace(/"/g,"%22");	
	}
function decode(myV) 
	{
	var encoded = myV;
	return decodeURIComponent(encoded.replace(/\+/g,  " "));
	}


	// independent of other events
	function computeDate()
		{
		var dateText = $("#full-date").val();
		var strPlus = numberStringPlus(dateText);
		var temp = calcNumber9(dateText,"string");
		var tempA = temp.split(" = ");
		var fullN = tempA[0];
		var reduceN = tempA[1];

		$("#date-details").html(strPlus + " = " + fullN);
		$("#date-number").html(reduceN);
		$("#date-total").html(fullN);

		updateTotal();
		}
	function computeName(key)
		{
		var keyed = $("#"+key).val();
		var strPlus = numberStringPlus(keyed);
		var temp = calcNumber9(keyed,"string");
		var tempA = temp.split(" = ");
		var fullN = tempA[0];
		var reduceN = tempA[1];

		$("#"+key+"-details").html(strPlus + " = " + fullN);
		$("#"+key+"-number").html(reduceN);
		$("#"+key+"-total").html(fullN);

		updateTotal();

		}
		
	function updateTotal()
		{
		var name = parseInt( $("#full-name-total").html() );
		var date = parseInt( $("#date-total").html() );
		var total = 0 + name + date;
			$("#number-full-details").html(total);
		var reduce = reduceMe(total);
			$("#number-full").html(reduce);
		sharePage('');
		}
	function resizeShare()
		{
		var mySize = $("#share-url").val().length;
			$('#share-url').attr('size',mySize + 10);
		}
var myFacebook;
var myTwitter;
var myPinterest;
	function sharePage(which)
		{
		var mStr = "http://bio.mshaffer.com/numerology/?dob="+$("#full-date").val()+"&full="+$("#full-name").val().split(" ").join("+")+"&gender="+( (myGender=="boy") ? "M" : "F")+( (mySecret==true) ? "&monte=yes" : "");

		//console.log(mStr);

		var tStr = " ["+$("#full-date").val()+"] " + $("#full-name").val();

		var iStr = "http://bio.mshaffer.com/numerology/images/"+( (myGender=="boy") ? "boy" : "girl")+".jpg";

			switch(which)
				{
				default:
					$("#share-url").val(mStr);
					resizeShare(); 
				break;

				case "facebook":
					//if (typeof myFacebook  == "undefined")
						{
						myFacebook = window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(mStr)+"&t="+tStr, 'Facebook', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
						}
					myFacebook.focus();
				break;

				case "twitter":
					//if (typeof myTwitter  == "undefined")
						{
						myTwitter = window.open("https://twitter.com/intent/tweet?text="+tStr+"  ["+escape(mStr)+"]&original_referer=http://bio.mshaffer.com/numerology/",'Twitter', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
						}
					myTwitter.focus();
				break;

				case "pinterest":
					//if (typeof myPinterest  == "undefined")
						{
						myPinterest = window.open("//pinterest.com/pin/create/link/?url="+escape(mStr)+"&media="+escape(iStr)+"]&description="+tStr,'Pinterest', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
						}
					myPinterest.focus();
				break;

				}
		}

</SCRIPT>


<SCRIPT>

 $(function() {
	$( "#link-share" ).click(function() {
			$("#share-input").show();	
			resizeShare();

			});
	$( "#share-input-close" ).click(function() {
			$("#share-input").hide();
			});
  });
</SCRIPT>
	<style>
		

		.monospace {
					font-family:"Lucida Console","Courier New",Monaco,Courier,monospace;
					font-weight: bold;
					}

		.share-buttons { color: green;}
		.share-buttons:hover { color: lightgreen;}


		th { font-family:"Roboto Bold","Roboto",sans-serif; }

		td { font-family:"Roboto Thin","Roboto Light",sans-serif; }

		body {
			margin: 0;
			margin-left: 20px;
			background-color: #333333;
			font-family: "Roboto Thin","Roboto Light","Roboto", sans-serif;
			color: #ffffff;
			font-weight: bold;



			}



	</style>
</head>
<body>
<DIV style="margin: 0 auto;">
<TABLE width=1200 align="center">
	<TR>
		<TD width=200 valign="top" align="center">
			<div align="center" id="google-ad-2" style="">
			<!-- width: 120px; height: 600px; position: absolute; top: 0px; left: 450px; //-->
			<? if (!isset($_GET["monte"])): ?>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- 120x600, created 9/24/09 -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:120px;height:600px"
					 data-ad-client="ca-pub-2361725393402938"
					 data-ad-slot="4187959086"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			<? endif; ?>
			</div>
		</TD>
		<TD valign="top" align="center">
			<div id="google-ad-1" style="">
			<!-- width: 728px; height: 90px; margin: 0 auto; //-->
			<? if (!isset($_GET["monte"])): ?>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- New Ad Horizontal -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:728px;height:90px"
					 data-ad-client="ca-pub-2361725393402938"
					 data-ad-slot="1406127053"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			<? endif; ?>				
			</div>
<!-- main body //-->


<h1 align="center" id="header" style="position: relative; top: -20px;">

<SPAN style="margin-right: 55px; font-size: 18px; color: black;" id="number-full-wrapper">
	<span class="fa-stack fa-2x">
	  <span class="fa fa-stack-1x" id="number-full-details" style="font-size: 75%;"></span>
	  <i class="fa fa-circle-thin fa-stack-2x"></i>
	</span>
</SPAN>

<span style="margin-right: 35px;"><i class="fa fa-sort-numeric-asc"></i></span> Numerology <span style="margin-left: 35px;"><i class="fa fa-sort-numeric-desc"></i></span>

<SPAN style="margin-left: 55px; font-size: 18px; color: white;" id="number-full-wrapper">
	<span class="fa-stack fa-3x">
	  <span class="fa fa-stack-1x" id="number-full"></span>
	  <i class="fa fa-circle-o fa-stack-2x"></i>
	</span>
</SPAN>
</h1>


<!--
life path		full name			first name
birth date		vowels	consonants		growth
3/23/1973					
3/5/2					

//-->

<form name="myForm">
<DIV align="center" style="width: 800px; margin: 0 auto; position: relative; top: -35px;">
		<div id="gender-info" align="center">
			<input type="radio" id="gender-boy" name="myGender">
				<label id="label-gender-boy" for="gender-boy">Boy</label>
			<input type="radio" id="gender-girl" name="myGender">
				<label id="label-gender-girl" for="gender-girl">Girl</label>
		</div>

		<div id="share-the-stuff" align="right" style="">
			<TABLE>
				<TR>
					<TD><a class="share-buttons" href="javascript: sharePage('');" id="link-share"><i class="fa fa-share-alt-square fa-2x" title="Share the Link!"></i></a></TD>
					<TD><a class="share-buttons" href="javascript: sharePage('facebook');" id="link-facebook"><i class="fa fa-facebook-square fa-2x" title="Share on Facebook!"></i></a></TD>
					<TD><a class="share-buttons" href="javascript: sharePage('twitter');" id="link-twitter"><i class="fa fa-twitter-square fa-2x" title="Share on Twitter!"></i></a></TD>
					<TD><a class="share-buttons" href="javascript: sharePage('pinterest');" id="link-pinterest"><i class="fa fa-pinterest-square fa-2x" title="Share on Pinterest!"></i></a></TD>
				</TR>
			</TABLE>
		<DIV id="share-input" style="display: none;"><input type="text" size=55 name="shareURL" id="share-url" onfocus="this.select();" style="display: inline; text-align: center;" /> <i class="fa fa-times" style="display: inline;" id="share-input-close"></i></DIV>
		</div>
		<BR /><BR /><BR />
		
</DIV>

<DIV align="center">
 <script>
 function doGender(which)
	{
	 //console.log(which);
	 myGender = which;
	 sharePage('');

	if(which == "boy")
		{
		$("#show-boys").show();		$("#boys-list").hide();
		$("#show-girls").hide();	$("#girls-list").hide();

		myColor = "lightblue";
		$("#number-name-wrapper").css("color", myColor);
		$("#full-name-details").css("color", myColor);
		$("#full-name").css("background-color", myColor);
		$("body").css("background-color", myColor);

		$("#baby-pic").attr("src", "images/boy.jpg");

		$("#label-gender-girl").css("background-color","#333333");
		$("#label-gender-girl").css("color","lightpink");
		$("#label-gender-girl").css("background-image","none");

		$("#label-gender-boy").css("background-color","lightblue");
		$("#label-gender-boy").css("color","#333333");
		$("#label-gender-boy").css("background-image","none");


		}
		else
			{
			$("#show-boys").hide();		$("#boys-list").hide();
			$("#show-girls").show();	$("#girls-list").hide();
			myColor = "pink";
			$("#number-name-wrapper").css("color", myColor);
			$("#full-name-details").css("color", myColor);
			$("#full-name").css("background-color", myColor);
			$("body").css("background-color", myColor);

			$("#baby-pic").attr("src", "images/girl.jpg");

			$("#label-gender-boy").css("background-color","#333333");
			$("#label-gender-boy").css("color","lightblue");
			$("#label-gender-boy").css("background-image","none");

			$("#label-gender-girl").css("background-color","lightpink");
			$("#label-gender-girl").css("color","#333333");
			$("#label-gender-girl").css("background-image","none");

			}
	}


  </script>

</DIV>

<DIV align="center" style="background-color: #333333; width: 800px; margin: 0 auto; position: relative; top: -60px;">
<TABLE width=100%>
	<TR>
		<TD valign="top" align="left">
			<TABLE width=550>
				<TR>
					<TH width=100 valign="top">
						<DIV id="date-number-wrapper" style="color: green;">
							<span class="fa-stack fa-2x">
							  <span class="fa fa-stack-1x" id="date-number" style="font-size: 75%;"></span>
							  <i class="fa fa-star-o fa-stack-2x"></i>
							</span>
						</DIV>
					</TH>
					<TH width=100 valign="top"><BR />Date of Birth</TH>
					<TD valign="top">
							<BR />
						<input type="text" class="monospace" name="fulldate" id="full-date" style="color: green; width: 8.5em; height: 1.5em;" /> 
							<BR />
						<DIV id="date-details" class="monospace" style="font-family: 'Roboto Thin';width: 300px; color: green;"></DIV> <SPAN style="display:none;" id="date-total"></SPAN>
					  <script>
							//if( preg_match( "/y[aeiou]/i", $word)){
							//if( preg_match( "/([b-z]y)|([aeiou]y)/i", $word)){

						  $(function() {
							$( "#full-date" ).datepicker(
														{
														changeMonth: true,
														changeYear: true,
														yearRange: "1900:2020",
														//minDate: new Date(1900, 1 - 1, 1),
														onClose: function(dateText, inst){
															
														computeDate();
															}
														}
														);
						  });
					  </script>

					  <SCRIPT>
							$('#full-date').focus(function() {
									computeDate();
									
								});
						</SCRIPT>
					</TD>
				</TR>
				<TR>
					<TH valign="top">
						<DIV id="number-name-wrapper" style="color: lightblue;">
							<span class="fa-stack fa-2x">
							  <span class="fa fa-stack-1x" id="full-name-number"></span>
							  <i class="fa fa-square-o fa-stack-2x"></i>
							</span>
						</DIV>
					</TH>
					<TH valign="top"><BR />Full Name</TH>
					<TD valign="top">
							<BR />
						<input type="text" class="monospace" name="fullname" id="full-name" style="background-color: lightblue; width: 18em; height: 1.5em;" /> 
							<BR />
						<DIV id="full-name-details" class="monospace" style="font-family: 'Roboto Thin';width: 300px; color: green;"></DIV> <SPAN style="display:none;"  id="full-name-total"></SPAN>
						<SCRIPT>
							$('#full-name').keyup(function() {
									computeName("full-name");
									
								});
						</SCRIPT>
					</TD>
				</TR>
				<TR>
				<!-- https://pixabay.com/en/baby-boy-baby-boy-clothes-line-220316/ //-->
					<TD colspan=3 align="center" valign="top">
					<BR />
					<IMG id="baby-pic" src="images/<?PHP echo($pic); ?>.jpg" width=500 />
					</TD>
				</TR>
			</TABLE>

		</TD>
		<TD valign="top" align="center">
			<DIV align="center">
			

				<TABLE width=250 cellpadding=1 cellspacing=1>
					<TR>
						<TH align="center" width="10%">1</TH><TH align="center" width="10%">2</TH><TH align="center" width="10%">3</TH><TH align="center" width="10%">4</TH><TH align="center" width="10%">5</TH><TH align="center" width="10%">6</TH><TH align="center" width="10%">7</TH><TH align="center" width="10%">8</TH><TH align="center" width="10%">9</TH><TH></TH>
					</TR>

					<TR>
						<TD align="center">A</TD><TD align="center">B</TD><TD align="center">C</TD><TD align="center">D</TD><TD align="center">E</TD><TD align="center">F</TD><TD align="center">G</TD><TD align="center">H</TD><TD align="center">I</TD>
					</TR>
					<TR>
						<TD align="center">J</TD><TD align="center">K</TD><TD align="center">L</TD><TD align="center">M</TD><TD align="center">N</TD><TD align="center">O</TD><TD align="center">P</TD><TD align="center">Q</TD><TD align="center">R</TD>
					</TR>
					<TR>
						<TD align="center">S</TD><TD align="center">T</TD><TD align="center">U</TD><TD align="center">V</TD><TD align="center">W</TD><TD align="center">X</TD><TD align="center">Y</TD><TD align="center">Z</TD><TD align="center"></TD>
					</TR>
				</TABLE>

				<BR /><BR />

				<TABLE width=250 align="center">
					<TR>
						<TD valign="top" align="left" id="show-boys" style="display:none;">
							<TABLE width=250>
								<TR>
									<TH align="center"><i class="fa fa-mars"></i> Search Boys' Names</TH>
								</TR>
								<TR>
									<TH align="center">
										<SPAN style="display:none; font-size: 55%; color: lightblue;" id="boys-text-wrapper">
														<span class="fa-stack fa-2x">
														  <span class="fa fa-stack-1x" id="boys-text-number"></span>
														  <i class="fa fa-square-o fa-stack-2x"></i>
														</span>
										</SPAN>
										<input type="text" id="boys-text" name="boysText" /> <BR />
										<SPAN id="boys-text-details" class="monospace" style="font-family: 'Roboto Thin';width: 250px; color: lightblue; height: 25px; margin: 0 auto;"></SPAN> 
										<DIV align="center" style="display:none;" id="boys-text-total"></DIV> 
										
													<SCRIPT>
														$('#boys-text').focus(function() {
																computeName("boys-text");	
																$("#boys-text-wrapper").show();
															});

														$('#boys-text').blur(function() {
																computeName("boys-text");	
																$("#boys-text-wrapper").show();
																
															});
													</SCRIPT>
									</TH>
								</TR>
								<TR>
									<TH>
									Reduced <SELECT name="boys" id="boys" onchange="listNames('boys');">
										<option value=1>1
										<option value=2>2
										<option value=3>3
										<option value=4>4
										<option value=5>5
										<option value=6>6
										<option value=7>7
										<option value=8>8
										<option value=9>9
									</SELECT>  or Full <SELECT name="boys-long" id="boys-long" onchange="listNames('boys-long');">
										<option value=1>1
										<option value=2>2
										<option value=3>3
										<option value=4>4
										<option value=5>5
										<option value=6>6
										<option value=7>7
										<option value=8>8
										<option value=9>9
										<option value=10>10
										<option value=11>11
										<option value=12>12
										<option value=13>13
										<option value=14>14
										<option value=15>15
										<option value=16>16
										<option value=17>17
										<option value=18>18
										<option value=19>19
										<option value=20>20
										<option value=21>21
										<option value=22>22
										<option value=23>23
										<option value=24>24
										<option value=25>25
										<option value=26>26
										<option value=27>27
										<option value=28>28
										<option value=29>29
										<option value=30>30
										<option value=31>31
										<option value=32>32
										<option value=33>33
										<option value=34>34
										<option value=35>35
										<option value=36>36
										<option value=37>37
										<option value=38>38
										<option value=39>39
										<option value=40>40
										<option value=41>41
										<option value=42>42
										<option value=43>43
										<option value=44>44
										<option value=45>45
										<option value=46>46
										<option value=47>47
										<option value=48>48
										<option value=49>49
										<option value=50>50
										<option value=51>51
										<option value=52>52
										<option value=53>53
										<option value=54>54
										<option value=55>55
										<option value=56>56
										<option value=57>57
										<option value=58>58
										<option value=59>59
										<option value=60>60
										<option value=61>61
										<option value=62>62
										<option value=63>63
										<option value=64>64
										<option value=65>65
										<option value=66>66
										<option value=67>67
										<option value=68>68
										<option value=69>69
										<option value=70>70
										<option value=71>71
										<option value=72>72
										<option value=73>73
										<option value=74>74
										<option value=75>75
										<option value=76>76
										<option value=77>77
										<option value=78>78
										<option value=79>79
										<option value=80>80
										<option value=81>81
										<option value=82>82
										<option value=83>83
										<option value=84>84
										<option value=85>85
										<option value=86>86
										<option value=87>87
										<option value=88>88
										<option value=89>89
										<option value=90>90
										<option value=91>91
										<option value=92>92
										<option value=93>93
										<option value=94>94
										<option value=95>95
										<option value=96>96
										<option value=97>97
										<option value=98>98
										<option value=99>99
									</SELECT>
									  <script>
										  $(function() {
											$( "#boys-text" ).autocomplete({
											  source: boys
											});
										  });
										  </script>
										  <BR /><BR />
									<DIV id="boys-list" style="font-family:'Roboto','Roboto Bold',sans-serif; background-color: lightblue; width: 200px; height: 250px; overflow-y: auto; color: #333333; margin: 0 auto; display: none;">

									</DIV>
								</TH>
								</TR>
							</TABLE>

						</TD>

						<TD valign="top" align="left" id="show-girls" style="display:none;">
							<TABLE width=250>
								<TR>
									<TH align="center"><i class="fa fa-venus"></i>  Search Girls' Names</TH>
								</TR>
								<TR>
									<TH align="center">
										<SPAN style="display:none; font-size: 55%; color: pink;" id="girls-text-wrapper">
														<span class="fa-stack fa-2x">
														  <span class="fa fa-stack-1x" id="girls-text-number"></span>
														  <i class="fa fa-square-o fa-stack-2x"></i>
														</span>
										</SPAN>
										<input type="text" id="girls-text" name="girlsText" /> <BR />
										<SPAN id="girls-text-details" class="monospace" style="font-family: 'Roboto Thin';width: 250px; color: lightpink; height: 25px; margin: 0 auto;"></SPAN> 
										<DIV align="center" style="display:none;" id="girls-text-total"></DIV> 
										
													<SCRIPT>
														$('#girls-text').focus(function() {
																computeName("girls-text");	
																$("#girls-text-wrapper").show();
															});

														$('#girls-text').blur(function() {
																computeName("girls-text");	
																$("#girls-text-wrapper").show();
																
															});
													</SCRIPT>
									</TH>
								</TR>
								<TR>
									<TH>
									Reduced <SELECT name="girls" id="girls" onchange="listNames('girls');">
										<option value=1>1
										<option value=2>2
										<option value=3>3
										<option value=4>4
										<option value=5>5
										<option value=6>6
										<option value=7>7
										<option value=8>8
										<option value=9>9
									</SELECT>  or Full <SELECT name="girls-long" id="girls-long" onchange="listNames('girls-long');">
										<option value=1>1
										<option value=2>2
										<option value=3>3
										<option value=4>4
										<option value=5>5
										<option value=6>6
										<option value=7>7
										<option value=8>8
										<option value=9>9
										<option value=10>10
										<option value=11>11
										<option value=12>12
										<option value=13>13
										<option value=14>14
										<option value=15>15
										<option value=16>16
										<option value=17>17
										<option value=18>18
										<option value=19>19
										<option value=20>20
										<option value=21>21
										<option value=22>22
										<option value=23>23
										<option value=24>24
										<option value=25>25
										<option value=26>26
										<option value=27>27
										<option value=28>28
										<option value=29>29
										<option value=30>30
										<option value=31>31
										<option value=32>32
										<option value=33>33
										<option value=34>34
										<option value=35>35
										<option value=36>36
										<option value=37>37
										<option value=38>38
										<option value=39>39
										<option value=40>40
										<option value=41>41
										<option value=42>42
										<option value=43>43
										<option value=44>44
										<option value=45>45
										<option value=46>46
										<option value=47>47
										<option value=48>48
										<option value=49>49
										<option value=50>50
										<option value=51>51
										<option value=52>52
										<option value=53>53
										<option value=54>54
										<option value=55>55
										<option value=56>56
										<option value=57>57
										<option value=58>58
										<option value=59>59
										<option value=60>60
										<option value=61>61
										<option value=62>62
										<option value=63>63
										<option value=64>64
										<option value=65>65
										<option value=66>66
										<option value=67>67
										<option value=68>68
										<option value=69>69
										<option value=70>70
										<option value=71>71
										<option value=72>72
										<option value=73>73
										<option value=74>74
										<option value=75>75
										<option value=76>76
										<option value=77>77
										<option value=78>78
										<option value=79>79
										<option value=80>80
										<option value=81>81
										<option value=82>82
										<option value=83>83
										<option value=84>84
										<option value=85>85
										<option value=86>86
										<option value=87>87
										<option value=88>88
										<option value=89>89
										<option value=90>90
										<option value=91>91
										<option value=92>92
										<option value=93>93
										<option value=94>94
										<option value=95>95
										<option value=96>96
										<option value=97>97
										<option value=98>98
										<option value=99>99
									</SELECT>
									  <script>
										  $(function() {
											$( "#girls-text" ).autocomplete({
											  source: girls
											});
										  });
										  </script>
										  <BR /><BR />
									<DIV id="girls-list" style="font-family:'Roboto','Roboto Bold',sans-serif; background-color: lightpink; width: 200px; height: 250px; overflow-y: auto; color: #333333; margin: 0 auto; display: none;">

									</DIV>
								</TH>
								</TR>
							</TABLE>

						</TD>
					</TR>
				</TABLE>













			</DIV>
		</TD>

		
	</TR>
</TABLE>



</DIV>
</form>







</DIV>



<script>
function updateClickable()
	{
	  $( ".triggerMe" ).dblclick(function() {
			var temp = $(this).attr("data-info");
			var tempA = temp.split("|");
			var which = tempA[0];
			var name = tempA[1];

			$("#"+which+"-text").val(name);
			$("#"+which+"-text").focus();
			//alert( "Handler for .dblclick() called." );
			//alert( $(this).attr("data-info") );
			});
	}
  </script>

<SCRIPT>
function listNames(which)
	{
	console.log(which);
	var num = trim($('#'+which).find(":selected").text());
	console.log(num);

	var temp = which.split("-");
		if(temp[1] == "long") { which = temp[0]; num = "0" + num;}
		console.log(which);
	
			var obj = (which=="boys") ? boysN[num] : girlsN[num];
	//console.log(obj);
	var myStr = "";
	if (typeof obj  !== "undefined")
		{
		for(i=0;i<obj.length;i++)
			{
			myStr += "<DIV class='triggerMe' data-info='"+which+"|"+obj[i]+"'>" + obj[i] + "</DIV> \n";
			}
		}

		$("#"+which+"-list").html(myStr);
		$("#"+which+"-list").show();

		updateClickable();

	}
</SCRIPT>



<SCRIPT>
function getVARS()
{var myIndex=document.URL.indexOf('?');var myKeys="";var myValues="";if(myIndex!=-1)
{var pairs=document.URL.substring(myIndex+1,document.URL.length).split('&');for(var i=0;i<pairs.length;i++)
{nameVal=pairs[i].split('=');if(nameVal[0])
{eval(unescape(nameVal[0])+" = '"+unescape(nameVal[1])+"';");}}}}

function placeDIV(id,anchor,x,y)
{var myPos=getPositionDIV(anchor);setPositionDIV(id,myPos.x+x,myPos.y+y);}

function setPositionDIV(id,x,y){var obj=document.getElementById(id);obj.style.top=""+y+"px";obj.style.left=""+x+"px";}

function getPositionDIV(id){var obj=document.getElementById(id);var left=0;var top=0;while(obj.offsetParent){left+=obj.offsetLeft;top+=obj.offsetTop;obj=obj.offsetParent;}
left+=obj.offsetLeft;top+=obj.offsetTop;return{"x":left,"y":top};}

var myGender = "boy";
var mySecret = false;

 $(function() {
    $( "#gender-info" ).buttonset();
	//console.log("monte");
	$( "#gender-boy" ).click(function() {
			doGender("boy");
			});
	$( "#gender-girl" ).click(function() {
			doGender("girl");
			});
  });


$(function() {


	// onload
	getVARS();
	$("#boys-text").val("");  $("#boys").val("1");  $("#boys-long").val("1"); 
	$("#girls-text").val("");  $("#girls").val("1");  $("#girls-long").val("1"); 

	$("#girls-text").val("");		
		if (typeof dob != 'undefined')
			{
			$("#full-date").val(dob);
			computeDate();
			}
		if (typeof dob != 'undefined')
			{
			$("#full-name").val(full.split("+").join(" "));
			computeName("full-name");
			}
		if (typeof gender != 'undefined')
			{
			gender = gender.toLowerCase();
			myGender = "boy";
				if(gender == "girl") {myGender = "girl";}
				if(gender == "female") {myGender = "girl";}
				if(gender == "f") {myGender = "girl";}
				if(gender == "girls") {myGender = "girl";}
			if(myGender == "boy")
				{ 
				//console.log(myGender);
					$( "#gender-boy" ).click();
				}    
				else  
					{
					$( "#gender-girl" ).click();
					}

			}
		if (typeof monte != 'undefined')
			{
			mySecret = true;
			}


	//placeDIV("google-ad-2","google-ad-1",-200,0);
	//placeDIV("google-ad-3","google-ad-1",800,0);
	

			});
 



</SCRIPT>




<!-- main body //-->
		</TD>
		<TD width=200  valign="top" align="center">
			<div align="center" id="google-ad-3" style="">
			<? if (!isset($_GET["monte"])): ?>
			<!-- width: 120px; height: 600px; position: absolute; top: 0px; left: 650px; //-->
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- 120x600, created 9/24/09 -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:120px;height:600px"
					 data-ad-client="ca-pub-2361725393402938"
					 data-ad-slot="4187959086"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			<? endif; ?>
			</div>

		</TD>
	</TR>
</TABLE>
</DIV>





</body>
</html>

<!--
http://www.paulsadowski.com/Numbers.asp
http://www.paulsadowski.com/NameData.asp

http://seventhlifepath.com/hearts-desire-soul-urge-number/
http://seventhlifepath.com/hearts-desire-soul-urge-number/ [popups]

http://www.dragondance.com/numerology.html
http://seventhlifepath.com/attitude-numbers/

https://www.easycalculation.com/other/fun/numerology-number-calculator.php

http://deron.meranda.us/data/census-dist-male-first.txt
http://deron.meranda.us/data/census-dist-female-first.txt

http://www.just-think-it.com/sbn/mormon-m.htm

//-->