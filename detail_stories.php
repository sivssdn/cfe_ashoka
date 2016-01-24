<!DOCTYPE HTML>
<html>
 <head>
	<title>
		Center of Entrepreneurship
	</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="http://entrepreneurship.ashoka.edu.in/wp-content/themes/Ashoka-Cfe/images/AshokaFavicon.png">
	<!-- used before
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	-->
	<link href="entr.css" type="text/css" rel="stylesheet">
	
	<style>
	#detail_img{
	height:50%;
	width:40%;
	display:inline-block;
	margin-top:-20%;
	margin-left:0%;
	box-shadow:1px 1px 5px;
	}
	
	#detail_content{
	display:inline-block;
	border:1px solid blue;
	text-align:center;
	padding:2%;
	width:80%;
	margin-left:10%;
	margin-top:20%;
	z-index:0;
	}
	#content_holder{
	margin-bottom:10%;
	}
	#head{
		margin-top:-0.5%;
	}
	</style>
 </head>
<!--EXTENSION TO PRESENT DETAILED VERSION OF ENGAGEMENTS/EVENTS FROM INDEX.PHP ::Paras Bhattrai, paras.bhattrai@ashoka.edu.in-->
 <body>
    
	<div id="head">
		<a href="index.html"><img src="cfe_logo.png" id="logo" ></a>
		<div id="menu">
			
			
			
			
			
			<span id="b"><a href="#initiative" id="m1" onclick="change(4);">ENGAGEMENTS</a></span> &nbsp;&nbsp;&nbsp;
			
			<span id="e"><a href="#team" id="m1" onclick="change(3);">TEAM</a></span> &nbsp;&nbsp;&nbsp;
			<span id="d">GALLERY</span> &nbsp;&nbsp;&nbsp;
			<span id="c"><a href="#mentors" id="m1" onclick="change(2);">MENTORS</a></span> &nbsp;&nbsp;&nbsp;
			<span id="a"><a href="#About_us" id="m1" onclick="change(1);">ABOUT US</a></span> &nbsp;&nbsp;&nbsp;
			<span id="f" style='display:none;'><a href="#reach" id="m1" onclick="change(5);">REACH US</a></span> &nbsp;&nbsp;&nbsp;
			
		</div>
	</div>
	
	 
	<!--	
	<div id="content_holder">
		
		
	</div>
	-->	<!--For background image-->
	
	<div id="detail_content">
		<div id="detail_img">
			<img src='./events/dt.jpg' style='height:100%;width:100%;'>
		</div>
	
		
		<?php
			switch($_GET['story'])
			{
			case 1:
					echo "<br><br><span id='short_h' style='color:rgba(255,51,51,1);'>My Story 1- Sept 2015- Vineet Gupta</span>";
					echo "<p>
						This was the inaugural talk of the 'My Story' series lecture. Vineet Gupta is one amongst the original group of Ashoka University's founders, and thus it made all the more sense in having him as the inaugural speaker. He is a first generation successful entrepreneur, currently spearheading Jamboree which is a successful entrepreneurial venture in the education space. He is a serial entrepreneur, which was truly reflected through his life story. He cited examples from his own life – he started 10 ventures of which 7 failed. However, each failed venture was a learning experience. He had in fact passed over a Yale offer to further his entrepreneurial ambitions. He also emphasized the importance of endless determination and commitment. Despite having tasted success, he came across as someone grounded and humble. His talk and brief presentation on entrepreneurial traits were followed by a Q&A session. It indeed was an enriching experience for the large gathering that assembled at the CfE to hear him share his experiences.

						</p><br>";
					break;
			case 2:
					echo "<br><br><span id='short_h' style='color:rgba(255,51,51,1);'>My Story 2- Sept 2015- Hemant Kanakia</span>";
					echo "<p>
						As soon as Mr. Kanakia started to speak, the audience somehow knew that this man was a serious intellectual. His calm demeanor and heavy voice reflected the wisdom and the experience he brought with him to Ashoka. Over the next one hour Dr. Hemant Kanakia managed to keep a hundred strong audience of Undergraduates, Fellows, Professors and Entrepreneurs enthralled as he doled out the secrets of an angel investor's world. He started out by describing his journey through the field of technology and how he got to the position where he is right now. But probably the things that all of the members of the audience took back were '4 things to take care of' while building a startup and approaching an angel investor. He talked about things that were pertinent in building a startup environment, such as 'Momentum Play and Transplanting Across Geographies', and gave insights which were immensely helpful. His talk was followed by a 20 minute Q&A session, where he patiently answered questions from the audience, often surprising us with his incisive answers.

						</p><br>";
					break;
			case 3:
					echo "-<br><br><span id='short_h' style='color:rgba(255,51,51,1);'>My Story 3- Sept 2015- Megha Sharma Bhagat</span>";
					echo "<p>
						CFE hosted the third 'My Story' Series event on 15th September  2015 with Megha Sharma Bhagat as the speaker. Megha Bhagat is a strategy and operations consultant in the CSR, gender inclusion, education and impact sourcing sector. With a human rights law background, she is currently leading country-wide programmes for the Institute of International Education (IIE) – WeTech, India CSR for Avaya International and holds an advisory position for Education 4 Development. She started with a small story about  how a determined army kid began to contribute in his small way to the society. Her bitter experiences in the college and the skills acquired via internships and vibrant career made her the  'Youngest Rockefeller Foundation Fellow'. The Rockefeller Foundation fellowship influenced her to quit the job at NASSCOM and since then she has been the consultant to many corporate companies. She  explained the various strategies that should be adopted in CSR sector and the importance of  young people investing their time on social issues. She spoke about the We Tech project that aimed in training the young girls to create Mobile Apps. The story of a 9-year-old NewYork girl was very inspiring for the audience. The fault in the business model of NGO's, Corporate perspectives, Statistics in the CSR and Tier level execution were also covered in the talk. Moreover, the QA session witnessed some interesting questions about the opportunities they in CSR field, Corporate Ethics and Relevance of experience. The one-hour formal session came to an end by presenting Megha, a token of appreciation by Ashoka. The students continued with the informal discussion for half more hour and it was quite interesting to notice that most of the Ashokans wanted a career in CSR field. 

						</p><br>";
					break;
			case 4:
					echo "-<br><br><span id='short_h' style='color:rgba(255,51,51,1);'>My Story 4 - Sanjeev Agarwala - Oct 2015</span>";
					echo "<p>		
						Sanjeev Agarwala, a leading startup investor, who is also a founder of Ashoka University delivered an informative talk to budding entrepreneurs into the world of VC investments. Coming with deep insights and learning from his entrepreneurial experiences during the Daksh days, Sanjeev fielded many questions both as an entrepreneur and at the same time as an investor. He expressed his bullish perspective about the startup landscape in India and believes that the valuation are still real and likely to sustain. 


						</p><br>";
					break;	
			case 5:
					echo "-<br><br><span id='short_h' style='color:rgba(255,51,51,1);'>Global Impact Competetion-2015- March 2015</span>";
					echo "<p>		
						Global Impact Competition India 2015, called the Dalmia Bharat Smart City Contest, is a nationwide contest organized and conducted by Ashoka Centre for Entrepreneurship. It is our endeavour to bring forth and promote exceptional, innovative ideas in the field of technology that can build a better, cleaner, safer India. GIC also marks the beginning of our partnership with Singularity University, California (SU). SU is headquartered at NASA Research Park in Silicon Valley. It provides educational programs and a startup accelerator to help creative minds to apply exponential technologies to address humanity's grand challenges.The winner of this competition shall be awarded the Ashoka Dalmia-Bharat Fellowship worth $30,000 to represent India at the global classroom of the Graduate Studies Program at SU in June 2015. This program will be an opportunity to bring alive an idea, create a path-breaking technology, and impact millions of lives in collaboration with some of the world's brightest minds.
						<p>GIC India 2015 recieved a heartening response from students, academia and researchers. The Grandfinale was held on the 18th of March at the Latlit Hotel in Delhi. The event was covered by CNBC tv-18 as part of the Young Turks Program. </p>


						</p><br>";
					break;
			case 6:
					echo "-<br><br><span id='short_h' style='color:rgba(255,51,51,1);'>Social Impact and Policy Advocacy Workshop - Feb 2015</span>";
					echo "<p>		
						What is the purpose of social movements? Should NGOs last forever? Don't we have enough laws and policies already in place and it is the implementation that is the problem? How does one advocate for better policies if that is indeed the purpose? Who are the key players and how do you engage with them? What are the pros and cons of the approach? These and a number of other questions were answered in the guest lecture by Piyush Tewari on 5th February 2015 as the inaugural guest lecture at the Centre for Entrepreneurship. He left us all inspired when he took us on his spectacular journey towards making the Indian roads safer for its citizens. Taking a case-based approach, including his own, direct experiences with Policy Advocacy, Piyush led the class towards his 6-pronged approach to creating a deep impact.

					</p><br>";
					break;	
			case 7:
					echo "-<br><br><span id='short_h' style='color:rgba(255,51,51,1);'>Design Thinking Workshop- Jan 2015</span>";
					echo "<p>		
							Every entrepreneur is looking for the next big idea, but do you know where to look for it? These ideas are all around us, in the way we shop, the way we eat or even the way we navigate from place to place. It is all a matter of identifying the inefficiencies in these day-to-day human interactions, looking at them from a fresh perspective and finding creative solutions to them. This is precisely what is called Design Thinking. Kunal Gupta led us into the fascinating world of design thinking using real life examples and showed us his five step approach to innovative problem solving – Empathize, Define, Ideate, Prototype and Test.

					</p><br>";
					break;	
			case 8:
					echo "-<br><br><span id='short_h' style='color:rgba(255,51,51,1);'>Startup Weekend Ashoka- 14th Nov</span>";
					echo "<p>		
							The Centre for Entrepreneurship was started with the vision of creating a culture where dreaming big and dreaming crazy would become a norm rather than an exception. We initiated this tradition, with a 3 day non-stop rollercoaster ride, where young wannabe entrepreneurs were given a platform to come up with a big idea and turn it into a viable business model. The first day witnessed the presence of over 70 participants, all eager to pitch their business plan as the ultimate idea and the voting ground looked a lot like a stock exchange of the olden times. After a lot of negotiation, selling and cajoling, the top 15 ideas were voted up. Over the course of the next two days, the participants with the best ideas met their co-founders, brewed their ideas over midnight bonfire, were mentored by seasoned entrepreneurs and worked on the last minute changes to create a convincing pitch in front of a jury. For some, SW Ashoka was a reality check, it exposed their ideas to criticism and taught them how to or how not to function as a team. For others, it was a reaffirmation of the potential in their idea and has been a catalyst in getting them closer to achieving their dream. With the freedom to push their creativity to the limit, this weekend has been one of making mistakes, thinking big and forging long-lasting friendships.

					</p><br>";
					break;
			case 9:
					echo "-<br><br><span id='short_h' style='color:rgba(255,51,51,1);'>EiR</span>";
					echo "<p>		
							This is an exciting program that allows Fellows to stay back on Campus for a period of 6 months after graduation, to work on their entrepreneurial idea and take it to a fundable business plan stage. Through this process the entrepreneur is supported by the Centre and then has a faculty and a founder assigned as mentors. And that is not it. As part of the being an Entrepreneur in Residence at Ashoka, you not only stay on campus free of cost but you also get paid to work on your own venture. 
							</p>
							<p>The prime objective of this program is to provide a support platform for aspiring entrepreneurs in YIF to nurture their business ideas while being in a university environment and having access to the mentors, other fellow entrepreneurs and the wider university network.



					</p><br>";
					break;		
			}
		?>
	</div>
	
	
	
	<form method='get' action='index.php' id='page_form'>
	<input name='page' id='page' hidden>
	</form>
 </body>
 <script>
	var v;
	var page=document.getElementById('page');
	function change(v){
		switch(v){
		case 1: 
				page.value=1;
				page_form.submit();
				break;
		case 2: 
				page.value=2;
				page_form.submit();
				break;
		case 3:
				page.value=3;
				page_form.submit();
				break;
		case 4:
				page.value=4;
				page_form.submit();
				break;
		case 5:
				page.value=5;
				page_form.submit();
				break;
		}
	}
 </script>
    
</body>
</html>