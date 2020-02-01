<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/18', function () {
return redirect('/');
});
Route::get('/currents', function () {
return redirect('/');
});
Route::get('/', function () {
return view('20.countdown');
});
Route::get('/hospitality',function(){
	return view('20.hospitality');
});
Route::get('/sponsors',function(){
	return view('19.coming_soon');
});
Route::get('/schedule', function(){
	return view('19.schedule');
});
Route::get('/about',function(){
	return view('19.coming_soon');
});
Route::get('/lectures', function () {
	return view('19.coming_soon');
});
Route::get('/events', function () {
	return view('20.events');
});
Route::get('/workshops',function(){
	return view('20.workshops');
});

Route::get('/contact', function(){
	return view('19.coming_soon');
});
Route::get('/magazines/{file}', function($file_name) {
	$file_path = public_path('magazines/'.$file_name);
	return response()->download($file_path);
});
Route::get('/download/{file}', function($file_name) {
	$file_path = public_path('files/'.$file_name);
	return response()->file($file_path);
});
Route::get('/tronicals', function() {
	return view('19.coming_soon');
});
Route::get('/cca', function() {
	return view('20.cca');
});
Route::get('/cca/apply', function() {
	return view('20.cca_apply');
});
Route::get('/eureka', function() {
	return view('20.eureka');
});
Route::get('/volts', function() {
	return view('20.volts');
});
Route::get('/volts/bengaluru', function() {
	return view('19.bangalore');
});
Route::get('/volts/kochi', function() {
	return view('20.kochi');
});
Route::get('/volts/trichy', function() {
	$arr = ['city' => 'Trichy',
			'college' => 'National Institute of Technology',
			'area' => 'Tiruchirappalli',
			'date' => '27th January 2020',
			'venue' => 'NATIONAL INSTITUTE OF TECHNOLOGY<br>
						TANJORE MAIN ROAD, NH 67,<br>
						THUVAKKUDI,<br>
						TRICHY - 620 015, TAMIL NADU, INDIA.<br>',
			'timings' => '5 PM to 8 PM',
			'cca' => 'https://currents.nitt.edu/cca',
			'link' => 'https://forms.gle/yFCFhXNjLkE2HdQn6',
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.682713870967!2d78.81103031422612!3d10.758918092333415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baa8d47758e1ae1%3A0xb3e16389eeab05a!2sNational+Institute+of+Technology+Tiruchirappalli!5e0!3m2!1sen!2sin!4v1547021447827',
		];
	return view('20.gate', $arr);
});
Route::get('/volts/tirunelveli', function() {
	$arr = ['city' => 'Tirunelveli',
			'college' => 'Government College of Engineering',
			'area' => 'Trivandrum Road',
			'date' => '27th January 2019',
			'venue' => 'GOVERNMENT COLLEGE OF ENGINEERING<br>
						TRIVANDRUM ROAD, MARSHAL NAGAR,<br>
						TIRUNELVELI - 627 007, TAMIL NADU, INDIA.<br>',
			'timings' => '2 PM to 5 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0575711294955!2d77.72359231420609!3d8.686075493759216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04126138dab5e1%3A0xc295f682e7eeb40d!2sGovernment+College+Of+Engineering%2C+Tirunelveli!5e0!3m2!1sen!2sin!4v1547021018169',
			'cca' => ' https://bit.ly/2Fk9CBX'
		];
	return view('19.gate', $arr);
});
Route::get('/volts/salem', function() {
	$arr = ['city' => 'Salem',
			'college' => 'Mahendra Engineering College',
			'area' => '',
			'date' => '27th January 2019',
			'venue' => 'MAHENDRA ENGINEERING COLLEGE<br>
						SALEM - THIRUCHENGODE HIGHWAY, MAHENDHIRAPURI,<br>
						SALEM - 637 503, TAMIL NADU, INDIA.<br>',
			'timings' => '2 PM to 5 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3910.0475956673354!2d77.99754861423402!3d11.476490391848785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babe0bef703f36d%3A0x90831ca308e9d486!2sMahendra+Engineering+College!5e0!3m2!1sen!2sin!4v1547137576015',
			'link' => 'https://bit.ly/2VDpdlY'
		];
	return view('19.gate', $arr);
});
Route::get('/volts/sivakasi', function() {
	$arr = ['city' => 'Sivakasi',
			'college' => 'Mepco Schlenk Engineering College',
			'area' => 'Sivakasi',
			'date' => '27th January 2020',
			'venue' => 'Sivakasi, Tamil Nadu<br>',
			'timings' => '9 AM to 12 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d26469.837338862573!2d77.85877240272676!3d9.529146961943523!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9c7b889bf154fb86!2sMepco%20Schlenk%20Engineering%20College!5e0!3m2!1sen!2sin!4v1579589244376!5m2!1sen!2sin',
			'link' => 'https://forms.gle/LBpuNquFNtXQrqZv5',
			'cca' => 'https://currents.nitt.edu/cca'
		];
	return view('20.gate', $arr);
});
/*Route::get('/volts/chennai', function() {
	$arr = ['city' => 'Chennai',
			'college' => 'Central Leather Research Institute',
			'area' => 'Chennai',
			'date' => '27th January 2019',
			'venue' => 'Near Sardar Patel Road Adyar, CLRI Staff Quarters,<br>
						Indian Institute Of Technology, Chennai,<br>
						Tamil Nadu 600020',
			'timings' => '2 PM to 5 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.4294159863416!2d80.24143651425264!3d13.008303990831767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267976f80a8fd%3A0x2a683d2afe3c7c5a!2sCSIR+-+Central+Leather+Research+Institute!5e0!3m2!1sen!2sin!4v1547797989866',
			'link' => 'https://www.townscript.com/e/mock-gate-examination-chennai'
		];
	return view('19.gate', $arr);
});
*/
Route::get('/volts/coimbatore', function() {
	$arr = ['city' => 'Coimbatore',
			'college' => 'PSG College of Technology',
			'area' => 'Coimbatore',
			'date' => '25th January 2020',
			'venue' => 'Coimbatore, Tamil Nadu 641021',
			'timings' => '10 AM to 1 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15664.742864444032!2d77.0021273!3d11.0246887!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x137d95bfd8909293!2sPSG%20College%20Of%20Technology!5e0!3m2!1sen!2sin!4v1579514876294!5m2!1sen!2sin',
			'link' => 'https://forms.gle/sEZH4cvHCykFJQmz9',
			'cca' => 'https://currents.nitt.edu/cca'
		];
	return view('20.gate', $arr);
});

Route::get('/volts/calicut', function() {
	$arr = ['city' => 'Calicut',
			'college' => 'National Institute of Technology',
			'area' => 'Calicut',
			'date' => '25th January 2020',
			'venue' => 'NIT Calicut,<br>
						Calicut Mukkam Road, <br>
						Kattangal, Kerala 673601 ',
			'timings' => '2 PM to 5 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15648.718439433645!2d75.9336359!3d11.3215791!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbe8a77db953bda6c!2sNIT%20Calicut!5e0!3m2!1sen!2sin!4v1579681726250!5m2!1sen!2sin',
			'link' => 'https://forms.gle/fvxQmdYCLdx4mQ2c9',
			'cca' => 'https://currents.nitt.edu/cca'
		];
	return view('20.gate', $arr);
});

Route::get('/workshops/iot', function() {
	$arr = ['title' => 'Internet of Things',
			'bg' => 'IOT.jpg',
			'duration' => '6 HOURS',
			'cost' => '2,400/- for a Team',
			'date' => 'FEBRUARY 14th 2020',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'A Team can consist of maximum 3 members.',
			'timings' => '9:30 AM to 4:30 PM',
			'link' => 'https://www.thecollegefever.com/events/currents20',
			'overview' => '
				<p>This one day workshop will be based on IoT in Home Automation using Arduino microcontroller.

				The workshop would be conducted in stages beginning with a simple introductory session to the components used in the workshop followed by a step-wise guide to the successful building of the hardware all the way to interfacing a mobile application to controlling the peripherals with the mobile application. The workshop would give participants an insight into the Arduino microcontroller, implement it in the use of WiFi enabled projects, interfacing a mobile application to communicate with the microcontroller and implement the relays for electrical projects.</p>
				<strong>Course Content</strong>
					<ul>
						<li>Learn about the embedded system features of Arduino</li>
						<li>Data acquisition from Arduino over WiFi</li>
						<li>Communicating with Arduino from a mobile application for a GUI enabled user interface</li>
						<li>Controlling peripherals connected to Arduino from the mobile application</li>
					</ul>
			
					<strong>Participants would be able to</strong>
					<ul>
						<li>Utilize Arduino for embedded system projects</li>
						<li>Utilize Arduino launchpad for WiFi enabled projects</li>
						<li>Interface a mobile application to communicate with a microcontroller</li>
						<li>Implement relays in electrical projects</li>
					</ul>
				',
			'contact' => '
				<p>Avinash<br>+91 97903 20049<p>
				<p>Yash<br>+91 99931 67207</p>',
			'color' => 'white',
			'talign' => 'right',
			'team_spec' => 'A Team can consist of maximum 3 members.',
			'prereq' => true,
			'slots' => false
		];
	return view('20.workshop', $arr);
});


Route::get('/workshops/pcb', function() {
	$arr = ['title' => 'PCB DESIGN',
			'bg' => 'PCB.jpg',
			'duration' => '3 HOURS',
			'cost' => '350/- per head',
			'date' => '<br>FEBRUARY 13th 2020 (05:00 PM - 08:00 PM) <br> FEBRUARY 14th 2020 (05:00 PM - 08:00 PM)',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'slot_info' => 'Participants are required to attend ONLY ONE of the slots to complete the workshop. Both the sessions are identical in content.',
			'timings' => '<br>FEBRUARY 13th 2020 (05:00 PM - 08:00 PM) <br> FEBRUARY 14th 2020 (05:00 PM - 08:00 PM)',
			'link' => 'https://www.thecollegefever.com/events/currents20',
			'overview' => '
				<p>
				Great innovations always start from a simple schematic and then move ahead to
				building of a prototype on a breadboard. Once the prototype shows favourable 
				results, you would want to solidify your results and make it application ready. 
				This stage is the fabrication of the Printed Circuit Boards, or as they are 
				commonly called, PCB. Providing the necessary mechanical support and cluster 
				free electrical connections, PCBs offer ease of monitoring and reliable results 
				when compared to other wiring techniques.</p>
					
				<p>Needless to say, PCB design is an indispensable skill for an engineer working on
				any project.</p>
					
				<p>CURRENTS’20 presents the workshop on PCB design, a comprehensive workshop 
				covering topics right from designing a schematic to getting the PCB layout 
				printed from a manufacturer</p>

				<strong>Course Content</strong>
				<ul>
					<li>Overview of the Printed Circuit Board.</li>
					<li>Introduction to schematic design using a CAD software</li>
					<li>Designing a layout of Printed Circuit Boards</li>
					<li>Utilizing features of layers, traces, ratsnest lines and vias in Printed Circuit Boards</li>
					<li>Manual routing vs Autorouting in Printed Circuit Boards </li>
					<li>Gerber file synthesis </li>
				</ul>

				',
			'contact' => '
				<p>Avinash<br>+91 97903 20049</p>
				<p>Jinesh<br>+91 94864 61891</p>',
			'color' => 'white',
			'talign' => 'left',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => true,
			'slots' => true

		];
	return view('20.workshop', $arr);
});

Route::get('/workshops/verilog', function() {
	$arr = ['title' => 'Digital Design using Verilog',
			'bg' => 'Verilog.jpg',
			'duration' => '3 HOURS',
			'cost' => '350/- per head',
			'date' => '<br>FEBRUARY 13th 2020 (05:00 PM - 08:00 PM) <br> FEBRUARY 15th 2020 (05:00 PM - 08:00 PM)',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'slot_info' => 'Participants are required to attend ONLY ONE of the slots to complete the workshop. Both the sessions are identical in content.',
			'timings' => '<br>FEBRUARY 13th 2020 (05:00 PM - 08:00 PM) <br> FEBRUARY 15th 2020 (05:00 PM - 08:00 PM)',
			'link' => 'https://www.thecollegefever.com/events/currents20',
			'overview' => '
				<p>
				To all electronics enthusiasts out there with a flair for circuits and a simulation -- now is your opportunity to try your hand at some electronic modelling of your own! CURRENTS`20 presents a Verilog workshop, an interactive session where you will get to learn to program hardware components and circuits in a simple code-based format. Be sure to make the most of this exciting opportunity by signing up. </p> 
				<strong>Course Content</strong>
				<ul>
				<li>Introduction to digital electronics and circuits.</li>
				<li>Features of Hardware Description Languages and programming paradigms.</li>
				<li>Introduction to Verilog HDL programming – syntax, operators and common blocks.</li>
				<li>Implementing Verilog programs and simulations on ModelSim HDL simulator.</li>
				</ul>
				',
			'contact' => '
				<p>Deepak<br>+91 88707 11551<p>
				<p>Mohit<br>+91 88253 83700</p>',
			'color' => 'white',
			'talign' => 'right',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => true,
			'slots' => true

		];
	return view('20.workshop', $arr);
});

Route::get('/workshops/ar', function() {
	$arr = ['title' => 'Augmented Reality',
			'bg' => 'AR.jpg',
			'duration' => '6 HOURS',
			'cost' => '450/- per head',
			'date' => 'FEBRUARY 16th 2020',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'timings' => '09:30 AM - 4:30 PM',
			'link' => 'https://www.thecollegefever.com/events/currents20',
			'overview' => '
				<p>
				Augmented reality made its debut with Google glasses back in 2013.</p>
<p>
However, the real flare for the innovation began with Niantic’s launch of Pokémon GO that captivated the hearts of young and old in 2016. The interactive gameplay soared above others due to its application of augmented reality enlivening the reality we live in. For those fascinated by this technology, CURRENTS’20 presents a workshop on implementing augmented reality through OpenCV.</p>

				<strong>Course Content</strong>
				<ul>
					<li>Basics of Augmented Reality </li>
					<li>Introduction to OpenCV module on Python</li>
					<li>Transformations and Coordinate systems</li>
					<li>Introduction to ArUco markers</li>
				</ul>
',
			'contact' => '
				<p>Ruphan<br>+91 90802 28669</p>
				<p>Aditya<br>+91 94701 86194</p>',
			'color' => 'white',
			'talign' => 'left',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => true,
			'slots' => false

		];
	return view('20.workshop', $arr);
});

Route::get('/workshops/ip', function() {
	$arr = ['title' => 'IMAGE PROCESSING',
			'bg' => 'ip.jpg',
			'duration' => '3 HOURS',
			'cost' => '400/- per head',
			'date' => '<br>14th FEBRUARY 2020 (05:00 PM - 08:00 PM)<br> 16th FEBRUARY 2020 (01:30 PM - 04:30 PM)',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'slot_info' => 'Participants are required to attend ONLY ONE of the slots to complete the workshop. Both the sessions are identical in content.',
			'timings' => '<br>14th FEBRUARY 2020 (05:00 PM - 08:00 PM)<br> 16th FEBRUARY 2020 (01:30 PM - 04:30 PM)',
			'link' => 'https://www.thecollegefever.com/events/currents20',
			'overview' => '
				<p>
				In the age of creative Instagram filters and safety features using facial recognition, signal processing dealing with the manipulation of 2 dimensional digital images has become one of the current trendy technologies. CURRENTS’20 presents the startup pack to the world of Image Processing through the Python programming language. The workshop will cover all that’s needed to code and implement your very own image processing application for human interaction with your device.</p>

				<strong>Course Content</strong>
				<ul>
					<li>Basics of Image Processing </li>
					<li>Introduction to OpenCV module on Python</li>
					<li>Edge detection and image enhancement</li>
					<li>Centroids and Contours</li>
				</ul>
				',
			'contact' => '
				<p>Ruphan<br>+91 90802 28669</p>
				<p>Raj<br>+91 99730 48519</p>',
			'color' => 'white',
			'talign' => 'right',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => true,
			'slots' => true

		];
	return view('20.workshop', $arr);
});

Route::get('/workshops/ml',function(){
	$arr = ['title' => 'Machine Learning',
			'bg' => 'ML.jpg',
			'duration' => '3 HOURS',
			'cost' => 'INR 350/- per head',
			'date' => '14th FEBRUARY 2020',
			'venue' => 'Orion NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'timings' => '01:30 PM - 04:30 PM<br>',
			'link' => 'https://www.thecollegefever.com/events/currents20',
			'overview' => '
				<p>Machine learning is a specific subset of AI that trains a machine on how to learn from dataset. Since 2012, the explosive growth in machine learning has been almost entirely driven by neural network models that allowed us to perform image classification, speech recognition and even self-driving cars. In this edition of Currents, we give you the opportunity to gain an insight into Machine Learning and its intricacies. Register now and realise the potential of Machine Learning! </p>
				<strong>Course Content</strong>
				<ul>
					<li>Introduction to Machine Learning</li>
					<li>Types of machine learning - supervised and unsupervised </li>
					<li>Linear regression - single-variable and multivariate </li>
					<li>Programming and evaluating a linear regression model </li>
				</ul>
					',
			'contact' => '
				<p>Joel<br>+91 95005 90527</p>
				<p>Dharun<br>+91 85550 55334</p>',
			'color' => 'white',
			'talign' => 'left',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => true,
			'slots' => false
		];
	return view('20.workshop', $arr);
});

Route::get('/workshops/renewable', function() {
	$arr = ['title' => 'RENEWABLE ENERGY SYSTEMS',
			'bg' => 'renewable_energy_systems.jpg',
			'duration' => '6 HOURS',
			'cost' => '400/- per head',
			'date' => ' 15th FEBRUARY 2019',
			'venue' => 'Orion NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'timings' => '09:30 AM - 04:30 PM<br>',
			'link' => 'https://www.thecollegefever.com/events/currents20',
			'overview' => '
				<p>Dwindling coal reserves coupled with the rising awareness about pollution, the shift in interest towards renewable energy was inevitable. In the crude oil industry, the Indian Government has declared that initiatives have been taken to change one-third of the diesel and petrol vehicles to electric by 2030. These developments point towards a promising change for a clean and green Earth in the future. To equip you, the future citizens of the country for this shift, we at CURRENTS’20 present to you a starter pack to kickstart your adventure in the world of renewable energy</p>

				<strong>Course Content</strong>
				<ul>
					<li>Introduction to PV and Power Technologies </li>
					<li>Generation of PV characteristics using MATLAB script</li>
					<li>Introduction to power converters</li>
					<li>Design of power converters in MATLAB/Simulink</li>
					<li>Tour of the Grid connected PV array setup by the NIT Trichy Administration</li>
				</ul>
				',
			'contact' => '
				<p>Joel<br>+91 95005 90527</p>
				<p>Diya<br>+91 97915 05255</p>',
			'color' => 'black',
			'talign' => 'right',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => true,
			'slots' => false
		];
	return view('20.workshop', $arr);
});

Route::get('/workshops/embedded_game_dev', function() {
	$arr = ['title' => 'Embedded Game Development',
			'bg' => 'game.jpg',
			'duration' => '6 HOURS',
			'cost' => '2,400/- for a Team',
			'date' => '15th FEBRUARY 2020',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'A Team of maximum 3 members.',
			'timings' => '09:30 AM - 04:30 PM<br>',
			'link' => 'https://www.thecollegefever.com/events/currents20',
			'overview' => '
				<p>Embedded systems have become the bread and butter of electronics professionals. However, people tend to forget about the fun you can have with microcontrollers and the creative freedom it can give to the user. Get ready to have fun while learning about embedded systems and remaking the classic Snake game and relive the days of past.</p>

				<strong>Course Content</strong>
				<ul>
					<li>Embedded Systems concepts</li>
					<li>Introduction to the Arduino microcontroller and its programming</li>
					<li>Programming LED matrix using MAX7219 driver</li>
					<li>Creating an interactive snake game on the LED matrix</li>
				</ul>

				',
			'contact' => '
				<p>Deepak<br>+91 88707 11551<p>
				<p>Jinesh<br>+91 94864 61891</p>',
			'color' => 'white',
			'talign' => 'right',
			'team_spec' => 'A team of maximum 3 members.',
			'prereq' => true,
			'slots' => false

		];
	return view('20.workshop', $arr);
});

// Event specific routes
Route::get('/events/colloquium', function() {
	$arr = ['title' => 'Colloquium',
			'bg' => 'colloquium.jpeg',
			'duration' => 'Each team will be given maximum of 10 minutes to present the paper',
			'date' => 'FEBRUARY 15th 2020 (Deadline for Paper submission: 7th February 2020)',
			'venue' => 'EEE Department, NIT Trichy',
			'team_max' => 'A Team can consist of maximum 3 members.',
			'timings' => '9:30 AM to 12:30 PM',
			'link' => 'http://bit.ly/colloquium_reg',
			'overview' => '
				<p>
				Engineers are the roots of invention. Theorization is the first step towards invention. If you have the ability to catalyse the evolution of science with your ideas, Currents 19 brings to you, COLLOQUIUM, the annual paper presentation event of the Department of EEE, NIT Trichy. A platform where you can present your research work in Electrical and Electronics Engineering and have an opportunity to win INR 10,000 cash prize.
				</p>',
			'contact' => '
				<p>Poorvaja:+91 88259 35421</p>
				<p>Akash   :+91 95970 56201</p>
				<p>Adil    :+91 90613 04318</p>',
			'color' => 'black',
			'talign' => 'right',
			'format' => 'EVENT FORMAT:
			Top 10 papers will present during Currents
			Top 3 will be published in reputed journal
			Papers to be mailed along with details of authors to 
			eeea.colloquium20@gmail.com',
			'prereq' => true,
			'slots' => false,
			'prize' => 'Cash prize worth Rs.10,000',
			'rule_book' => 'COLLOQUIUM_RULE_BOOK.pdf'
		];
	return view('20.event', $arr);
});

Route::get('/events/code_currents', function() {
	$arr = ['title' => 'Code Currents',
			'bg' => 'code_currents.jpeg',
			'duration' => '2 HOURS',
			'date' => 'FEBRUARY 10th 2020',
			'venue' => 'Online Event',
			'team_max' => 'This is an individual event.',
			'timings' => '7:00 PM to 9:00 PM',
			'link' => '',
			'overview' => '
				<p>
				Are you passionate about coding? Are your dreams being all about algorithms? To all coding maniacs and algorithm freaks, Currents ’20 in association with Codechef presents you, CODE CURRENTS, an international online coding event. Participate and have a chance to win gigantic INR 10,000 cash prize.
				</p>',
			'contact' => '
				<p>Harsh Mahajan - +91 75388 77120</p>
				<p>Sithartha - +91 94454 60862</p>
				<p>Pasindu - +91 94775 619205</p>
				<p>Purushoth - +91 93849 29631</p>',
			'format' => 'Score based competition',
			'color' => 'white',
			'talign' => 'left',
			'prize' => 'Cash prize worth Rs.10,000',
			'prereq' => true,
			'slots' => false,
			'rule_book' => ''
		];
	return view('20.event', $arr);
});

Route::get('/events/capture_currents', function() {
	$arr = ['title' => 'Capture Currents',
			'bg' => 'capture_currents.jpg',
			'duration' => '',
			'date' => 'Round 1 (Deadline: FEBRUARY 4th 2020)<br>Round 2 (Deadline: FEBRUARY 11th 2020)',
			'venue' => 'Online Event',
			'team_max' => 'This is an individual event.',
			'timings' => '',
			'link' => 'http://bit.ly/Capture_Currents2020_Prelims',
			'overview' => '
				<p>
				Grab your camera, set your frame and focus. Currents ’20 presents you, CAPTURE CURRENTS, an online photography event. Unearth the hidden shutter bug in you and win up to INR 5,000 cash prize and gift voucher worth INR 3,000.
				</p>',
			'contact' => '
				<p>Rasal<br>+91 85474 26790<p>
				<p>Madhavan<br>+91 82817 92956</p>
				<p>Arun<br>+91 73589 19092</p>',
			'format' => 'EVENT FORMAT:
				The photography contest will comprise two rounds: preliminary and final
				rounds.
				Preliminary round
				There will be one sole eliminative preliminary round for the event. Participants can submit
				only ONE photograph pertaining to any theme of the participant’s choice.The theme
				should be mentioned along with caption.The judges will pick finalists from the preliminary
				stage.
				
				Final round
				Participants would be required to submit only ONE photograph for the final round with a
				caption for the theme. The theme will be announced after the preliminary round. These
				photographs will be published in currents social media handles and the number of likes it
				receives will have a partial weightage along with the judges’ decision.
				',
			'prize' => 'Prizes worth Rs.5000 and Gift vouchers worth Rs.3000',
			'color' => 'white',
			'talign' => 'left',
			'prereq' => true,
			'slots' => false,
			'rule_book' => 'Capture_Currents_Rulebook.pdf'
		];
	return view('20.event', $arr);
});

Route::get('/events/dhruva', function() {
	$arr = ['title' => 'Dhruva',
			'bg' => 'dhruva.jpeg',
			'duration' => '',
			'date' => 'FEBRUARY 15th 2020 (Evening) - Round 1<br>FEBRUARY 16th 2020 (Morning) - Round 2',
			'venue' => 'NIT Trichy',
			'team_max' => 'This is an individual event.',
			'timings' => '',
			'link' => '/',
			'overview' => '
				<p>
				Creativity begins with a foundation of knowledge, learning a discipline and mastering a way of thought. Dhruva, the flagship event of CURRENTS sponsored by Alumni, provides a chance to project your creative and imaginative ideas. In the initial round basic mathematical skills will be tested. Dhruva not only tests your technical knowledge and engineering expertise but also your creativity in finding solutions when posed a critical situation.
				</p>',
			'contact' => '
				<p>Thomas - +91 88487 40497</p>
				<p>Sabharinathan - +91 99403 21819</p>',
			'color' => 'white',
			'talign' => 'left',
			'prereq' => true,
			'slots' => false,
			'format' => 'Will be announced soon',
			'prize' => 'Cash prize worth Rs.5,000',
			'rule_book' => ''
		];
	return view('20.event', $arr);
});

Route::get('/events/iot_challenge', function() {
	$arr = ['title' => 'IOT Home Automation Challenge',
			'bg' => 'iot.jpeg',
			'duration' => '3 HOURS',
			'date' => 'FEBRUARY 15th 2020',
			'venue' => 'Online Event',
			'team_max' => 'A Team can consist of maximum 2 members.',
			'timings' => '1:30 PM to 04:30 PM',
			'link' => '/',
			'overview' => '
				<p>
				*IOT Challenge Overview*
				</p>',
			'contact' => '
				<p>Sithartha - +91 94454 60862</p>
				<p>Purushoth - +91 93849 29631</p>',
			'color' => 'white',
			'talign' => 'left',
			'prereq' => true,
			'slots' => false,
			'format' => 'Will be announced soon',
			'prize' => 'Cash prize worth Rs.10,000',
			'rule_book' => ''
		];
	return view('20.event', $arr);
});

Route::get('/events/line_follower', function() {
	$arr = ['title' => 'Line Follower',
			'bg' => 'iot.jpeg',
			'duration' => '3 HOURS',
			'date' => 'FEBRUARY 16th 2020',
			'venue' => 'Online Event',
			'team_max' => 'A Team can consist of maximum 3 members.',
			'timings' => '9:30 AM to 12:30 PM',
			'link' => 'https://www.google.com.sg',
			'overview' => '
				<p>
				Suppress the rebel in you and follow the line to win bragging rights! Discover the Tony Stark in you as you make the fastest robot to finish the track. CURRENTS`20 presents Line Follower, a robotics contest to prove your mettle in dextrous design of a line follower bot. The winners get the added bonus of exciting prizes too.
				</p>',
			'contact' => '
				<p>Arun - +91 73589 19092</p>
				<p>Manimozhi - +91 70920 20858</p>
				<p>Bala Sridhar - +91 83004 42783</p>',
			'color' => 'white',
			'talign' => 'left',
			'prereq' => true,
			'slots' => false,
			'format' => 'Will be announced soon',
			'prize' => 'Cash prize worth Rs.10,000',
			'rule_book' => ''
		];
	return view('20.event', $arr);
});

Route::get('/eureka/register', function() {
	return view('20.eureka_register');
});

Route::get('/feedback', function() {
	return view('19.feedback');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
