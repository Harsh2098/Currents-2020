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
			'bg' => 'IOT.jpg',
			'duration' => '3 HOURS',
			'date' => 'FEBRUARY 14th 2020',
			'venue' => 'Online Event',
			'team_max' => 'A Team can consist of maximum 3 members.',
			'timings' => '9:30 AM to 12:30 PM',
			'link' => 'https://www.google.com.sg',
			'overview' => '
				<p>
				Does your mind spark with ideas in the field of Electrical and Electronics? Do you have an idea to present to the world? Colloquium is the platform just for you! The event allows you to present a paper based on your innovative idea. The best idea bags the prize.
				The paper should be submitted in PDF format (with an A4 page size) which should necessarily have an abstract and its first title should necessarily be "Introduction"; the last two titles of the paper should necessarily be "Conclusion" and "References", and the abstract should be brief containing at most 300 words. The limit on the number of pages of full length paper is at most 10 sides (including tables, figures, references etc.). Do not deviate from this format. which should contain a general summary of the paper stating the problem statement, recent works, the proposed methodology and major contribution of the paper.
				</p>',
			'contact' => '
				<p>Harinaathgobi<br>+91 97903 20049<p>
				<p>Vivek DC<br>+91 99931 67207</p>',
			'color' => 'white',
			'talign' => 'right',
			'prereq' => true,
			'slots' => false
		];
	return view('20.event', $arr);
});

Route::get('/events/code_currents', function() {
	$arr = ['title' => 'Code Currents',
			'bg' => 'IOT.jpg',
			'duration' => '3 HOURS',
			'date' => 'FEBRUARY 14th 2020',
			'venue' => 'Online Event',
			'team_max' => 'A Team can consist of maximum 3 members.',
			'timings' => '9:30 AM to 12:30 PM',
			'link' => 'https://www.google.com.sg',
			'overview' => '
				<p>
				Ever been intrigued to solve complex programs? Felt the thrill while unravelling the solutions for a problem statement? CURRENTS’19 in association with HackerEarth brings its event Code Currents just for you! Dive into the world of coding for 3 hours in the language of your choice to bring light to the solution of the problem statement given through an amalgamation of concepts, mathematical and logical skills.
				Register through the link one week prior to the event to dive into the coding world! Contestants would receive a link to participate in their email after registration.
				</p>',
			'contact' => '
				<p>Harinaathgobi<br>+91 97903 20049<p>
				<p>Vivek DC<br>+91 99931 67207</p>',
			'color' => 'white',
			'talign' => 'left',
			'prereq' => true,
			'slots' => false
		];
	return view('20.event', $arr);
});

Route::get('/events/capture_currents', function() {
	$arr = ['title' => 'Capture Currents',
			'bg' => 'IOT.jpg',
			'duration' => '3 HOURS',
			'date' => 'FEBRUARY 13th 2020',
			'venue' => 'Online Event',
			'team_max' => 'A Team can consist of maximum 3 members.',
			'timings' => '9:30 AM to 12:30 PM',
			'link' => 'https://www.google.com.sg',
			'overview' => '
				<p>
				Do you have an interest in photography? Do you have the keen eye that captures the beautiful and dazzling moments of this world? CURRENTS’19 has an event just for those eyes behind the lens. Capture Currents, an online photography event open to participants from any institute pursuing any degree in undergraduate to participate in. The event is evaluated in two rounds.
				</p>',
			'contact' => '
				<p>Harinaathgobi<br>+91 97903 20049<p>
				<p>Vivek DC<br>+91 99931 67207</p>',
			'color' => 'white',
			'talign' => 'left',
			'prereq' => true,
			'slots' => false
		];
	return view('20.event', $arr);
});

Route::get('/events/dhruva', function() {
	$arr = ['title' => 'Dhruva',
			'bg' => 'IOT.jpg',
			'duration' => '2 HOURS',
			'date' => 'FEBRUARY 16th 2020',
			'venue' => 'Online Event',
			'team_max' => 'A Team can consist of maximum 2 members.',
			'timings' => '9:30 AM to 12:30 PM',
			'link' => 'https://www.google.com.sg',
			'overview' => '
				<p>
				Creativity begins with a foundation of knowledge, learning a discipline and mastering a way of thought. Dhruva, the flagship event of CURRENTS sponsored by Alumni, provides a chance to project your creative and imaginative ideas. In the initial round basic mathematical skills will be tested. Dhruva not only tests your technical knowledge and engineering expertise but also your creativity in finding solutions when posed a critical situation.
				</p>',
			'contact' => '
				<p>Harinaathgobi<br>+91 97903 20049<p>
				<p>Vivek DC<br>+91 99931 67207</p>',
			'color' => 'white',
			'talign' => 'left',
			'prereq' => true,
			'slots' => false
		];
	return view('20.event', $arr);
});

Route::get('/events/simulacrum', function() {
	$arr = ['title' => 'Simulacrum',
			'bg' => 'IOT.jpg',
			'duration' => '3 HOURS',
			'date' => 'FEBRUARY 15th 2020',
			'venue' => 'Online Event',
			'team_max' => 'A Team can consist of maximum 2 members.',
			'timings' => '1:30 PM to 04:30 PM',
			'link' => 'https://www.google.com.sg',
			'overview' => '
				<p>
				If simulating in MATLAB interests you, CURRENTS’19 has the perfect opportunity for you. You do not have to excel, being interested is all what matters. Participate in Simulacrum and show your skills using Simulink to grab prizes worth Prizes worth 6,000
						Conducted in two rounds. First round will primarily be conducted during the outreach. We will also conduct round 1 separately during CURRENTS’19 for other participants. Participants must come with their own laptop.
						Participants can form teams of 2.
				</p>',
			'contact' => '
				<p>Harinaathgobi<br>+91 97903 20049<p>
				<p>Vivek DC<br>+91 99931 67207</p>',
			'color' => 'white',
			'talign' => 'right',
			'prereq' => true,
			'slots' => false
		];
	return view('20.event', $arr);
});

Route::get('/events/line_follower', function() {
	$arr = ['title' => 'Line Follower',
			'bg' => 'IOT.jpg',
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
				<p>Harinaathgobi<br>+91 97903 20049<p>
				<p>Vivek DC<br>+91 99931 67207</p>',
			'color' => 'white',
			'talign' => 'left',
			'prereq' => true,
			'slots' => false
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
